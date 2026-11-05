# Rapport Officiel : Lab Conception des Skills IA

## 1. Objectif & Règle Cardinale
- **Projet Fil Rouge (100 % IA) :** Développé intégralement par l'IA selon notre architecture logicielle et la description des compétences inscrites dans nos skills.
- **Projet Technique (Prototype en Live Coding) :** Maîtrisé par l'apprenant, évalué en direct devant le formateur **sans IA et sans prompt**.
- **Cas Test Commun :** Landing Page du Blog des Lauréats (Preline UI, Alpine.js réactif).

## 2. Théorie & Choix d'Architecture (ADR)
- **Concepts :** **Skill** = outil unitaire (`tech-tailwind`) | **Workflow** = suite d'étapes (`flow-dev`) | **Plugin** = paquet complet.
- **Décision d'Architecture (ADR) :** Organisation **hybride** :
  - 2 méta-skills de gouvernance (`lab-dev` pour la méthode, `plugin-dev` pour les normes Anthropic).
  - 1 skill technique dédié par sujet de Lab pour générer le code selon ses règles propres.

## 3. Réalisation Pratique (Les Deux Tests)
- **Test 1 (Brut `skills.sh`) :** Code généré sans nos composants ni Alpine.js.
- **Test 2 (Adapté) :** Intégration de nos règles Tailwind et de la réactivité Alpine.js. Résultat : page 100 % fonctionnelle dans `4.realisation/landing-page-blog-laureats/index.html`.

## 4. Démonstration du Sprint (5 min sans IA)
1. Présenter l'arborescence des 5 sous-dossiers.
2. Démo du filtrage instantané des articles dans le navigateur.
3. Réaliser le mini-défi de code en live coding direct devant le formateur.
