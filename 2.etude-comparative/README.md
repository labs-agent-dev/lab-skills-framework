# Travail à Réaliser : 2. État de l'Art & Étude Comparative des Solutions

Ce dossier accueille le travail d'investigation, d'état de l'art et d'étude comparative des solutions existantes pour le Lab.

---

## 🎯 Objectif de l'Étape 2
Explorer l'écosystème open-source et les catalogues existants pour identifier les solutions candidates, évaluer leur adéquation avec notre stack (PHP 8.2+ / Laravel 12, Alpine.js réactif, Tailwind CSS, Preline UI), et poser les hypothèses à départager dans `4.realisation/`.

---

## 💡 Choix Terminologique : L'« Étude Comparative » (Benchmark)

Pour désigner cette étape d'investigation (souvent appelée techniquement *Benchmark*), nous retenons officiellement le terme français **Étude Comparative** (ou Comparatif), qui exprime le plus fidèlement l'action de confronter plusieurs approches sur une grille multicritères.

Pour mémoire et selon l'angle pédagogique, 5 expressions équivalentes peuvent être employées :

1. **Étude Comparative** *(Terme retenu)* — *L'expression la plus claire* : confrontation méthodique de plusieurs solutions sur une grille multicritères.
2. **État des Lieux** *(ou Existant)* — *L'expression de bon sens* : recenser ce qui existe déjà avant de démarrer un développement.
3. **Exploration des Solutions** — *L'expression active* : fouiller les dépôts open-source et les catalogues avec curiosité technique.
4. **Tour d'Horizon Technique** — *L'expression visuelle* : dresser un panorama complet de l'écosystème sur le sujet du lab.
5. **Diagnostic de l'Existant** — *L'expression d'ingénierie* : analyser de façon critique les forces et faiblesses des briques disponibles face à nos contraintes.

---

## 📋 Travail Concret à Réaliser par l'Apprenant (Assisté par `w-etude-comparative` et `marp-slide`)

### 1. Explorer les Gisements de Référence
- **GitHub Topics :** Explorer les dépôts open-source majeurs via [`https://github.com/topics/coding-agent`](https://github.com/topics/coding-agent) (pour les compétences et agents) ou les topics thématiques de votre brique technique.
- **Catalogues communautaires :** Consulter [`skills.sh`](https://skills.sh) et [`agentskills.io`](https://agentskills.io) pour tester et comparer des compétences existantes.
- **Dépôts éditeurs officiels :** Étudier les patterns officiels d'Anthropic (`claude-plugins-official`).
- **Documentation officielle :** Consulter la documentation officielle de notre stack technique (Laravel 12, Alpine.js, Tailwind CSS, Preline UI).
- **Guide de méthode :** Se référer au guide transversal [`docs/04-guide-etude-comparative.md`](../docs/04-guide-etude-comparative.md) (*Guide méthodologique de l'étude comparative*).

### 2. Filtrer et Choisir les Références à Étudier
En concertation avec le formateur, décider des références à retenir selon deux démarches complémentaires :
- **Démarche A (Réponse Directe) :** Trouver une brique ou un pattern déjà prêt à l'emploi pouvant être transposé ou adapté.
- **Démarche B (Montée en Compétences) :** Assimiler les bases techniques et méthodologiques nécessaires pour concevoir soi-même la solution adaptée à notre problématique.

### 3. Produire le Livrable sous Format Marp
- Le livrable officiel de cette étape est l'**étude comparative** consignée dans **`etude-comparative.md`**, structurée sous forme de **présentation Marp** (`marp: true`, directives Marpit, thème `tech` ou `business`).
- Utiliser le skill **`marp-slide`** pour mettre en page des diapositives lisibles, professionnelles et synthétiques.
- Formuler en conclusion de l'étude comparative au moins deux hypothèses claires à tester sur le banc d'essai dans `4.realisation/`.
