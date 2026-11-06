# Contexte et Besoin : Conception des Skills IA

## 1. Contexte : Dualité Fil Rouge vs Prototype
- **Projet Fil Rouge (100 % IA) :** Développé intégralement par l'agent **`AgentDev`**. L'apprenant ne code pas à la main : l'IA génère 100 % du code en suivant notre architecture logicielle et la description de nos skills.
- **Projet Technique (Prototype en Live Coding) :** Compris et maîtrisé par l'apprenant. Réalisé en direct devant le formateur **sans IA et sans prompt** pour certifier la compréhension du code.

## 2. Problématique & 4 Choix d'Architecture
Une IA générique produit du code désorganisé sans respecter notre stack ni notre architecture. Pour guider l'agent `AgentDev` vers un code conforme, nous avons **4 choix d'organisation** :
1. **Par Technologie :** un skill par outil (`alpine-components`, `laravel-crud`, `preline-ui`).
2. **Par Layer :** un skill par couche logicielle (`ui-views`, `controllers`, `services`, `data-repositories`).
3. **Par Phase de Flux (Workflow) :** un skill par étape de travail (`flow-analyse`, `flow-conception`, `flow-dev`, `flow-test`).
4. **Un Seul Skill :** un développeur polyvalent unique (`fullstack-developer`).

## 3. Besoin Concret du Lab
1. **Concevoir les skills de l'agent :** Décrire notre architecture logicielle et nos règles pour que l'agent `AgentDev` génère 100 % du fil rouge sans dévier.
2. **Distinguer formellement les concepts :** Savoir différencier un **Skill** (procédure unitaire à la demande), un **Subagent** (agent spécialisé autonome en contexte isolé), un **Workflow** (enchaînement ordonné d'étapes) et un **Plugin** (paquet complet distribuable).
3. **Comparer les 4 choix :** Tester chaque organisation sur un cas pratique (Landing Page Lauréats) pour choisir la plus efficace.
