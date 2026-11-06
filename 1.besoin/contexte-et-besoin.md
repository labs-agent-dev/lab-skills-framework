# Contexte et Besoin : Conception des Skills IA

## 1. Contexte du Lab & Outillage Agentique
Conformément au cadre pédagogique et méthodologique défini dans nos règles (voir [.agent/rules/persona.md](../.agent/rules/persona.md)), l'agent **`AgentDev`** a pour mission de produire le code du projet fil rouge selon notre architecture logicielle de référence. Ce lab vise à concevoir et éprouver le framework de compétences (skills) qui encadrera cet agent.

## 2. Problématique & Pistes d'Architecture Exploratoires
Sans encadrement explicite, un modèle d'IA produit du code hétérogène qui dévie de notre stack (Laravel 12, Alpine.js, Tailwind CSS) et de nos principes de découplage. Pour outiller l'agent `AgentDev`, quatre pistes initiales d'organisation sont explorées :
1. **Par Technologie :** un skill par brique (`alpine-components`, `laravel-crud`, `preline-ui`).
2. **Par Layer :** un skill par couche logicielle (`ui-views`, `controllers`, `services`, `data-repositories`).
3. **Par Phase de Flux (Workflow) :** un skill par étape de travail (`flow-analyse`, `flow-conception`, `flow-dev`, `flow-test`).
4. **Un Seul Skill :** un agent-développeur polyvalent unique (`fullstack-developer`).

> **Ouverture sur d'autres démarches :** Le résultat du lab n'est pas restreint à ces 4 choix stricts. Les expérimentations peuvent déboucher sur **une autre démarche** ou une architecture hybride (par exemple combinant méta-gouvernance méthodologique et compétences modulaires par domaine technique ou métier) plus adaptée aux contraintes du projet.

## 3. Besoin Concret du Lab
1. **Concevoir les compétences de l'agent :** Structurer le modèle de compétences permettant à `AgentDev` de produire du code maintenable et fidèle à nos règles architecturales.
2. **Distinguer formellement les concepts :** Savoir différencier avec précision un **Skill** (procédure technique unitaire à la demande), un **Subagent** (agent spécialisé autonome en contexte isolé), un **Workflow** (enchaînement ordonné d'étapes) et un **Plugin** (paquet complet distribuable).
3. **Expérimenter et arbitrer la démarche retenue :** Tester et évaluer les pistes d'organisation sur un cas pratique étalon (Landing Page Lauréats), afin de choisir et justifier (via un ADR) la démarche optimale — qu'il s'agisse de l'une des 4 pistes initiales ou d'une démarche alternative plus efficiente.
