import fitz
import spacy
import sys
import re
from collections import Counter
from spacy.lang.fr.stop_words import STOP_WORDS
import argparse
import tldextract

nlp = spacy.load("fr_core_news_sm")

def extract_text_from_pdf(pdf_path, encoding='utf-8'):
    with fitz.open(pdf_path) as doc:
        text = ""
        for page in doc:
            text += page.get_text(encoding)
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

def extract_website_from_link(link):
    domain = tldextract.extract(link).domain
    return domain.capitalize() if domain else "Inconnu"

if __name__ == "__main__":
    parser = argparse.ArgumentParser(description="Résumé automatique d'un fichier PDF")
    parser.add_argument("pdf_path", type=str, help="Chemin du fichier PDF à analyser")
    args = parser.parse_args()
    
    pdf_text = extract_text_from_pdf(args.pdf_path)
    
    links = re.findall(r'https?://\S+', pdf_text)
    
    for link in links:
        website = extract_website_from_link(link)
        print(f"Le lien {link} provient du site {website}.")
    
    summary = summarize_text(pdf_text, num_sentences=8)

    sys.stdout.buffer.write((summary + "\n").encode('utf-8'))
