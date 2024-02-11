import docx
import re
import sys
from collections import Counter
from spacy.lang.fr.stop_words import STOP_WORDS
import argparse
import tldextract
import spacy

nlp = spacy.load("fr_core_news_sm")

def extract_text_from_docx(docx_path):
    doc = docx.Document(docx_path)
    text = ""
    for paragraph in doc.paragraphs:
        text += paragraph.text + "\n"
    return text

def summarize_text(text, num_sentences=5):
    doc = nlp(text)
    
    word_frequencies = Counter()
    for word in doc:
        if word.text.lower() not in STOP_WORDS:
            word_frequencies[word.text] += 1
    max_frequency = max(word_frequencies.values())
    for word in word_frequencies.keys():
        word_frequencies[word] = word_frequencies[word] / max_frequency
    
    sentence_scores = {}
    for sentence in doc.sents:
        for word in sentence:
            if word.text.lower() in word_frequencies.keys():
                if sentence not in sentence_scores.keys():
                    sentence_scores[sentence] = word_frequencies[word.text.lower()]
                else:
                    sentence_scores[sentence] += word_frequencies[word.text.lower()]
    
    summarized_sentences = sorted(sentence_scores, key=sentence_scores.get, reverse=True)[:num_sentences]
    
    summary = ""
    for sentence in summarized_sentences:
        summary += sentence.text + " "
    return summary.strip()

def extract_website_from_text(text):
    links = re.findall(r'https?://\S+', text)
    for link in links:
        domain = tldextract.extract(link).domain
        website = domain.capitalize() if domain else "Inconnu"
        print(f"Le lien {link} provient du site {website}.")

if __name__ == "__main__":
    parser = argparse.ArgumentParser(description="Résumé automatique d'un fichier DOCX")
    parser.add_argument("docx_path", type=str, help="Chemin du fichier DOCX à analyser")
    args = parser.parse_args()
    
    docx_text = extract_text_from_docx(args.docx_path)
    
    extract_website_from_text(docx_text)
    
    summary = summarize_text(docx_text, num_sentences=8)
    
    sys.stdout.buffer.write((summary + "\n").encode('utf-8'))
