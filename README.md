
# 🏓 Mallah Padel – Plateforme intelligente pour le padel

**Mallah Padel** est une plateforme web tout-en-un dédiée à la gestion et à la promotion d’événements de padel. Elle intègre des outils avancés d’IA, de réservation, de communication, d’e-commerce, et de gestion communautaire.

## 🚀 Fonctionnalités principales

### 🎯 Gestion d'événements & réservations
- Création, modification, annulation d’événements
- Prédiction du succès d’un événement avec un modèle ML (Flask + Random Forest)
- Calendrier interactif (FullCalendar)
- Réservation en ligne avec paiement sécurisé via **Stripe**
- Génération de PDF pour les réservations
- Système de réclamations avec suivi et statistiques
- Détection de conflits et suggestions intelligentes

### 🧠 Intelligence Artificielle
- Prédiction du succès des événements
- Suggestion automatique d’événements et de terrains
- Intégration CrewAI + Ollama pour tests automatisés Selenium
- Détecteur de bad words dans les annonces/messages
- Matchup automatique : trouver des adversaires ou partenaires compatibles

### 👤 Utilisateurs & Communauté
- Authentification sécurisée (email, reCAPTCHA, mot de passe oublié)
- Gestion de profil avec image (Cloudinary)
- Gestion d’équipes (joueurs, formations)
- MatchUp : publication d'annonces pour chercher des joueurs ou des matchs
- Invitations, demandes, acceptation/refus, ping automatique

### 🛒 E-commerce
- Gestion de produits (ajout, modification, suppression)
- Panier d’achat
- Avis utilisateurs sur les produits
- Téléchargement des ventes en format Excel

### 📢 Gestion des sponsors
- Création de campagnes sponsorisées
- Envoi automatique de SMS à la création via une API SMS
- Suivi des campagnes et affichage dynamique

### 🌐 APIs externes & intégrations
- API Météo : afficher la météo des terrains
- API de traduction : traduction des contenus utilisateurs
- Génération et lecture de **QR codes** et **codes-barres**
- Analyse des réclamations avec export PDF et statistiques graphiques

## 🛠️ Stack technique

| Domaine       | Technologie utilisée               |
|---------------|-------------------------------------|
| Backend       | Symfony 6 (PHP), Flask (Python)     |
| Frontend      | Twig, Bootstrap, FullCalendar, Leaflet.js |
| ML & IA       | Python (scikit-learn, Pandas), CrewAI, Ollama |
| Base de données | PostgreSQL / MySQL                 |
| Paiement      | Stripe API                          |
| Authentification | reCAPTCHA, vérification email     |
| Cloud         | Cloudinary (images), Docker         |
| Communication | API SMS, QRCode, Barcode            |

## 📂 Arborescence du projet

```
malah-padel/
├── backend/           # Symfony (src/, templates/, config/)
├── frontend/          # Assets JS/CSS/images
├── ml-api/            # Flask API (prediction ML, suggestions)
├── docker/            # docker-compose + Dockerfiles
├── scripts/           # CrewAI, Selenium, tests automatisés
├── public/            # Images, assets publics
├── README.md          # Ce fichier
```

## 📈 Exemple d'API de prédiction

- **POST** `/api/predict`
```json
{
  "nom": "Tournoi Express",
  "date": "2025-06-15",
  "type": "Tournoi",
  "terrain": "Padel Club Tunis",
  "prix_par_personne": 25,
  "heure_ouverture": "08:00",
  "heure_fermeture": "23:00"
}
```

Réponse :
```json
{
  "success_probability": 0.91,
  "prediction": "Succès",
  "metrics": {
    "R2": 0.82,
    "RMSE": 0.45,
    "MAE": 0.32
  }
}
```




```bash
git clone https://github.com/span16/malahpadel_s2.git
cd malah-padel
docker-compose up --build
```

Lancer l’API Flask :
```bash
cd ml-api
python app.py
```

## 👨‍💻 Auteur

Wael Mokaddem  
yassmine megbli
oussema chakroun 
chaima khiari
rana zakraoui
## 📜 Licence

Projet sous licence MIT.
