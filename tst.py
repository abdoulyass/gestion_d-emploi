import spacy

# Charger le modèle de langue de SpaCy
nlp = spacy.load("fr_core_news_sm")

def process_text_and_question(text, question):
    # Analyser le texte et la question avec SpaCy
    text_doc = nlp(text)
    question_doc = nlp(question)

    # Trouver les entités pertinentes dans la question
    question_entities = [ent.text for ent in question_doc.ents]

    # Rechercher les entités pertinentes dans le texte et les stocker dans une liste
    relevant_entities = []
    for ent in text_doc.ents:
        if ent.text in question_entities:
            relevant_entities.append(ent.text)

    # Parcourir le texte pour trouver des informations pertinentes basées sur les entités trouvées
    relevant_info = []
    for sentence in text_doc.sents:
        for ent in relevant_entities:
            if ent in sentence.text:
                relevant_info.append(sentence.text)

    # Générer une réponse basée sur les informations pertinentes trouvées
    if relevant_info:
        response = "Voici les informations pertinentes dans le texte :\n"
        for info in relevant_info:
            response += "- " + info + "\n"
    else:
        response = "Je ne trouve pas d'informations pertinentes dans le texte."

    return response

# Demander à l'utilisateur de saisir le texte et la question
text = input("Entrez le texte : ")
question = input("Entrez la question : ")

# Traiter le texte et la question et afficher la réponse
print("Question :", question)
print("Texte :", text)
print("Réponse :", process_text_and_question(text, question))
