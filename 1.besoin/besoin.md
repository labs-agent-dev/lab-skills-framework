# Expression du Besoin : Conception des Skills IA

## 1. Problématique Technique
Sans encadrement méthodologique ni règles d'architecture rigoureuses, un modèle d'IA générique produit du code désorganisé : il mélange la logique métier aux contrôleurs HTTP, oublie les tests unitaires et s'écarte de notre stack (PHP 8.2+ / Laravel 12 avec Service Layer, DTOs, Alpine.js réactif, Tailwind CSS, Preline UI). 

Pour guider l'agent **`AgentDev`** vers un code maintenable et strictement conforme, nous devons dépasser le simple prompt naïf pour concevoir une architecture de compétences professionnelles basée sur un **Playbook de développement logiciel (SDLC)**.

## 2. Pistes d'Architecture Exploratoires & Paradigmes d'Agents
Pour structurer l'agent `AgentDev`, l'état de l'art met en concurrence quatre grands paradigmes d'agents (Playbook, Pipeline, Toolkit, Système d'exploitation) et quatre organisations de compétences :
1. **Par Technologie :** un skill par outil (`alpine-components`, `laravel-crud`, `preline-ui`).
2. **Par Layer Logiciel :** un skill par couche (`ui-views`, `controllers`, `services`, `data-repositories`).
3. **Par Phase de Flux (Workflow) :** un skill par étape de travail (`flow-analyse`, `flow-conception`, `flow-dev`, `flow-test`).
4. **Playbook SDLC Intégré :** un modèle complet inspiré d'Addy Osmani (`skills.addy.ie`), articulé en 6 phases (Define, Plan, Build, Verify, Review, Ship) et adapté à notre architecture **Laravel Service Layer**.

## 3. Besoin Concret du Lab
1. **Concevoir les compétences de l'agent :** Structurer le modèle de compétences permettant à `AgentDev` de produire du code maintenable et fidèle à nos règles architecturales.
2. **Distinguer formellement les concepts :** Savoir différencier avec précision un **Skill** (procédure technique unitaire à la demande), un **Subagent** (agent spécialisé autonome en contexte isolé), un **Workflow** (enchaînement ordonné d'étapes) et un **Plugin** (paquet complet distribuable).
3. **Expérimenter et arbitrer la démarche retenue :** Tester et évaluer les pistes d'organisation sur un cas pratique étalon (CRUD des catégories avec notre stack : PHP 8.2+ / Laravel 12, Alpine.js réactif, Tailwind CSS, Preline UI), afin de choisir et justifier (via un ADR) la démarche optimale — qu'il s'agisse de l'une des 4 pistes initiales ou d'une démarche alternative plus efficiente.
