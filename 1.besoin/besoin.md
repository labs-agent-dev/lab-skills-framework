# Expression du Besoin : Conception des Skills IA

## 1. Problématique Technique
Sans encadrement explicite ni règles d'architecture rigoureuses, un modèle d'IA générique produit du code désorganisé qui s'écarte de notre stack (PHP 8.2+ / Laravel 12, Alpine.js réactif, Tailwind CSS, Preline UI) et ne respecte pas la séparation des responsabilités. 

Pour guider l'agent **`AgentDev`** vers un code maintenable et strictement conforme, nous devons structurer son outillage de compétences.

## 2. Pistes d'Architecture Exploratoires
Pour organiser les compétences IA, quatre pistes initiales sont soumises à l'expérimentation :
1. **Par Technologie :** un skill par outil (`alpine-components`, `laravel-crud`, `preline-ui`).
2. **Par Layer :** un skill par couche logicielle (`ui-views`, `controllers`, `services`, `data-repositories`).
3. **Par Phase de Flux (Workflow) :** un skill par étape de travail (`flow-analyse`, `flow-conception`, `flow-dev`, `flow-test`).
4. **Un Seul Skill :** un agent-développeur polyvalent unique (`fullstack-developer`).

> **Ouverture sur d'autres démarches :** Le résultat du lab n'est pas restreint à ces 4 choix stricts. L'expérimentation peut aboutir à **une autre démarche** ou à une architecture hybride (par exemple combinant méta-gouvernance méthodologique et compétences modulaires par domaine technique ou métier) plus adaptée aux contraintes réelles du projet fil rouge.

## 3. Besoin Concret du Lab
1. **Concevoir les compétences de l'agent :** Structurer le modèle de compétences permettant à `AgentDev` de produire du code maintenable et fidèle à nos règles architecturales.
2. **Distinguer formellement les concepts :** Savoir différencier avec précision un **Skill** (procédure technique unitaire à la demande), un **Subagent** (agent spécialisé autonome en contexte isolé), un **Workflow** (enchaînement ordonné d'étapes) et un **Plugin** (paquet complet distribuable).
3. **Expérimenter et arbitrer la démarche retenue :** Tester et évaluer les pistes d'organisation sur un cas pratique étalon (Landing Page Lauréats), afin de choisir et justifier (via un ADR) la démarche optimale — qu'il s'agisse de l'une des 4 pistes initiales ou d'une démarche alternative plus efficiente.
