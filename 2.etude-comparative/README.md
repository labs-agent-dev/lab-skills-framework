# Travail à Réaliser : 2. État de l'Art & Étude Comparative des Solutions

Ce sous-dossier accueille l'investigation, l'état de l'art et l'étude comparative des solutions existantes pour le Lab.

---

## 🎯 Rôle de ce Fichier `README.md`
Ce document sert de **feuille de route et de cadrage** pour l'apprenant dans cette Étape 2 :
- **Guide des consignes :** Il explicite les objectifs de recherche, les sources à explorer et les critères de qualité attendus.
- **Distinction clé consigne / livrable :** Ce `README.md` contient les consignes de travail. Le **livrable officiel** à produire et évaluer est la présentation Marp **`etude-comparative.md`**.
- **Quality Gate 2 :** Il rappelle les conditions requises pour valider l'étape 2 et passer à la phase d'expérimentation (`4.realisation/`).

---

## 🎯 Objectif de l'Étape 2
Explorer l'écosystème open-source et les catalogues existants pour identifier les solutions candidates, évaluer leur adéquation avec notre stack (PHP 8.2+ / Laravel 12, Alpine.js réactif, Tailwind CSS, Preline UI), et poser les hypothèses comparatives à départager sur le banc d'essai dans `4.realisation/`.

---

## 📋 Travail Concret à Réaliser par l'Apprenant (Assisté par `w-etude-comparative` et `marp-slide`)

### 1. Explorer les Gisements de Référence
- **GitHub Topics :** Explorer les dépôts open-source majeurs via [`https://github.com/topics/coding-agent`](https://github.com/topics/coding-agent) (pour les compétences et agents) ou les topics thématiques de votre brique technique (ex: `coding-standards`, `laravel`, `alpinejs`).
- **Catalogues communautaires :** Consulter [`skills.sh`](https://skills.sh) et [`agentskills.io`](https://agentskills.io) pour tester et comparer des compétences existantes.
- **Dépôts éditeurs officiels :** Étudier les patterns officiels d'Anthropic (`claude-plugins-official`).
- **Documentation officielle :** Consulter la documentation officielle de notre stack technique (Laravel 12, Alpine.js, Tailwind CSS, Preline UI).
- **Guide méthodologique :** Se référer au guide transversal [`docs/04-guide-etude-comparative.md`](../docs/04-guide-etude-comparative.md) (*Qu'est-ce qu'une Étude Comparative et comment la réaliser*).

### 2. Filtrer et Arbitrer les Références à Étudier
En concertation avec le formateur, orienter l'étude selon deux voies complémentaires :
- **Voie A (Réponse Directe) :** Trouver une brique ou un pattern déjà prêt à l'emploi pouvant être transposé ou adapté immédiatement.
- **Voie B (Montée en Compétences) :** Assimiler les bases techniques et méthodologiques nécessaires pour concevoir soi-même la solution adaptée à notre problématique.

### 3. Produire le Livrable Officiel (`etude-comparative.md`)
- Rédiger la synthèse sous forme de **diaporama Marp** dans **`etude-comparative.md`** (`marp: true`, directives Marpit, thème `tech` ou `business`).
- Structurer le support en 5 diapositives normées :
  1. *Page de garde* (titre du lab, sujet technique, apprenant, date).
  2. *Problématique & objectifs* de l'étude comparative.
  3. *Panorama des références* et gisements explorés (liens vérifiables).
  4. *Grille d'analyse multicritères* (adéquation fonctionnelle, stack, tokens, maintenabilité).
  5. *Synthèse d'arbitrage & hypothèses* à tester dans `4.realisation/`.
- Mobiliser le skill **`marp-slide`** pour garantir une mise en page soignée, professionnelle et lisible.

### 4. Valider la Porte de Passage (Gate 2)
- Formuler en conclusion au minimum **deux hypothèses techniques concrètes** à départager sur le banc d'essai dans `4.realisation/`.
- Obtenir la validation du formateur avant d'engager les travaux pratiques d'expérimentation.
