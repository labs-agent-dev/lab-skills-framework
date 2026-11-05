# Rapport Officiel : Lab Conception des Skills IA

## 1. Objectif & Règle Cardinale
- **Projet Fil Rouge (100 % IA) :** Développé intégralement par l'IA selon notre architecture logicielle et les skills.
- **Projet Technique (Live Coding sans IA) :** Maîtrisé par l'apprenant, évalué devant le formateur sans IA ni prompt.
- **Cas Test Commun :** Landing Page du Blog des Lauréats (Tailwind, Preline UI, Alpine.js réactif).

## 2. Théorie & Choix d'Architecture (ADR)
- **Concepts :** **Skill** = outil unitaire | **Workflow** = suite d'étapes | **Plugin** = paquet complet.
- **Décision d'Architecture (ADR) :** L'équipe retient l'**Approche par Phase de Flux de Travail (Workflow)** :
  - `flow-analyse`, `flow-conception`, `flow-developpement`, `flow-test-qualite`.
  - Formalisée dans `3.skill-technique/spec-skill.md` comme résultat final du lab.

## 3. Réalisation Pratique (Les Deux Tests)
- **Test 1 (Brut `skills.sh`) :** Code généré sans nos composants ni Alpine.js.
- **Test 2 (Adapté) :** Intégration de notre stack. Résultat : page fonctionnelle dans `4.realisation/landing-page-blog-laureats/index.html`.

## 4. Démonstration du Sprint (5 min sans IA)
1. Présenter l'arborescence des 5 sous-dossiers.
2. Démo du filtrage instantané des articles dans le navigateur.
3. Réaliser le mini-défi de code en live coding direct devant le formateur.
