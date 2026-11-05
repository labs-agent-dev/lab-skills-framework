# Rapport Officiel : Lab Conception des Skills IA

Ce document résume nos travaux sur l'ingénierie des compétences IA pour le projet fil rouge.

---

## 1. Pourquoi ce Lab & Cas Pratique Test

### 1.1 Objectif
> **Objectif Principal :** Concevoir les compétences IA (Skills) pour développer le **Projet Fil Rouge à 100 % par l'IA** selon notre architecture logicielle, tout en permettant à l'apprenant de comprendre le code pour réussir son évaluation du **Projet Technique en live coding devant le formateur SANS IA et SANS PROMPT**.

**Les 4 Objectifs Précis :**
1. **Comprendre les concepts :** Différencier Plugin, Workflow et Skill.
2. **Trouver la meilleure organisation :** Comparer les 4 approches (Technologie, Layer, Workflow, Développeur unique).
3. **Tester sur un cas pratique :** Réaliser la Landing Page du Blog des Lauréats avec Tailwind et Alpine.js.
4. **Outiller la classe :** Fournir les compétences IA prêtes à l'emploi pour tous les futurs labs.

### 1.2 Le Cas Pratique Commun
Tous les apprenants ont testé leurs compétences sur le même cas réel : la **Landing Page du Blog des Lauréats** (Navbar responsive, Hero section, profils de lauréats, articles avec filtres réactifs Alpine.js et Footer).

---

## 2. Théorie & Choix d'Architecture (ADR)

### 2.1 La Différence : Plugin, Workflow et Skill
- **Skill :** L'outil unitaire spécialisé (`tech-tailwind`, `tech-alpine`).
- **Workflow :** La suite d'étapes ordonnées (`flow-developpement`).
- **Plugin :** La boîte complète prête à l'emploi (skills + règles + workflows).

### 2.2 Comparatif des 4 Approches d'Architecture

| Approche | Avantages | Limites | Décision d'Équipe |
| :--- | :--- | :--- | :---: |
| **1. Par Technologie** | Précis techniquement par langage. | Risque de conflits lors de l'assemblage. | Utile pour des briques isolées. |
| **2. Par Layer (Couche)** | Respecte l'architecture logicielle. | Lourd pour des pages simples. | Idéal pour de gros projets back. |
| **3. Par Workflow** | Guide bien le débutant pas-à-pas. | Moins fort pour coder vite. | Idéal en phase d'apprentissage. |
| **4. Un Seul Skill Global** | Très rapide pour prototyper. | Fichier prompt lourd (beaucoup de tokens). | **Choisi pour le prototypage rapide.** |

**Décision d'Architecture Retenue (ADR) :**
Nous adoptons une **architecture hybride** :
- Deux méta-skills de pilotage (`lab-dev` pour la méthode, `plugin-dev` pour les normes).
- Un skill technique dédié par sujet de Lab pour coder la brique avec ses règles propres.

---

## 3. Réalisation Pratique (Les Deux Tests)

### Test 1 : Avec les skills bruts de skills.sh (Sans modification)
- Les skills communautaires génèrent une base, mais ignorent nos composants Preline UI et notre palette de couleurs.

### Test 2 : Avec les skills adaptés à notre stack
- Nous avons injecté nos règles d'accessibilité et d'interactivité Alpine.js.
- Résultat : la Landing Page dans `4.realisation/landing-page-blog-laureats/index.html` est 100% fonctionnelle, responsive et dynamique.

---

## 4. Défi Sprint devant le Formateur

### Démonstration en Direct (5 minutes) :
1. Montrer l'arborescence propre en 5 sous-dossiers.
2. Ouvrir la Landing Page dans le navigateur et montrer le filtrage réactif des articles au clic.
3. Expliquer la différence entre Plugin, Workflow et Skill.
4. Réaliser le mini-défi en direct (ex: ajouter une nouvelle catégorie d'article ou modifier un style).
