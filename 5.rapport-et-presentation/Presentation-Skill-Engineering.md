# Présentation du Lab : Framework & Architecture des Skills IA

> **Support de Soutenance Oral (Marp / Markdown) :** Conforme aux règles d'évaluation du sprint. Chaque diapositive comporte exactement 3 phrases orales simples en français de niveau A1.

---

## Page de Garde
| Information | Détail |
| :--- | :--- |
| **Titre du Lab** | Framework & Architecture des Skills IA |
| **Apprenant** | Équipe Solicode 2026 |
| **Agent Final** | **AgentDev** (Développe 100 % du Projet Fil Rouge selon notre architecture) |
| **Prototype Sprint** | Live coding direct devant le formateur SANS IA et SANS PROMPT |
| **Stack Technique** | PHP 8.2+ / Laravel 12, Alpine.js 3.x, Tailwind CSS, Preline UI |

---

## Slide 1 : Présentation & Objectifs du Lab
- **AgentDev (100 % IA) :** Code généré par l'agent selon notre architecture modulaire.
- **Prototype Sprint :** Réalisé et maîtrisé en direct sans IA ni prompt devant le formateur.
- **Cas Test Commun :** CRUD des Catégories avec notre stack complète.

> **🎙️ Notes de l'orateur (3 phrases simples A1) :**
> 1. « Bonjour, je vous présente notre lab sur l'architecture des compétences IA. »
> 2. « Notre agent AgentDev développera tout le projet fil rouge avec des règles strictes. »
> 3. « Pour l'examen, je maîtrise le code et je peux coder en direct sans IA. »

---

## Slide 2 : Les Concepts : Plugin, Subagent, Workflow et Skill
- **Skill :** Procédure technique unitaire chargée à la demande dans le contexte.
- **Subagent :** Agent spécialisé autonome travaillant dans son propre contexte isolé.
- **Workflow :** Chaîne ordonnée d'étapes de travail guidées par des points de contrôle.
- **Plugin :** Paquet complet distribuable regroupant commandes, agents et skills.

> **🎙️ Notes de l'orateur (3 phrases simples A1) :**
> 1. « Nous distinguons clairement ces quatre concepts fondamentaux. »
> 2. « Le skill est un outil précis et le subagent travaille de façon autonome. »
> 3. « Le workflow organise les étapes et le plugin regroupe tous les outils. »

---

## Slide 3 : Comparatif des Approches & Démarche Retenue (ADR)
- **4 Pistes Évaluées :** Par Technologie, Par Layer MVC, Par Workflow, Mono-Skill.
- **Approche Validée :** **Architecture Hybride Modulaire**.
- **Justification :** Socle backend P0 (standards `HoangNguyen0403`) + module réactif Alpine.js frontend.

> **🎙️ Notes de l'orateur (3 phrases simples A1) :**
> 1. « Nous avons comparé quatre manières d'organiser les compétences IA. »
> 2. « Le mono-skill sature la mémoire et les micro-skills sont trop dispersés. »
> 3. « Nous choisissons une architecture hybride qui sépare le backend et le frontend. »

---

## Slide 4 : Démonstration en Direct (CRUD des Catégories)
- **Banc d'Essai Réel :** Interface interactive dans `4.realisation/index.html`.
- **Interactions Clés :** Recherche en direct, filtrage par statut actif/inactif.
- **Réactivité Alpine.js :** Modal d'ajout avec génération automatique du slug et toasts.

> **🎙️ Notes de l'orateur (3 phrases simples A1) :**
> 1. « Je vous montre maintenant la démonstration du CRUD dans le navigateur. »
> 2. « Le formulaire modal s'ouvre instantanément sans recharger la page. »
> 3. « La recherche et le calcul des articles fonctionnent en direct avec Alpine.js. »

---

## Slide 5 : Bilan & Mini-Défi du Formateur
- **Résultats Obtenus :** Skill `architecture-skills` validé et 5 étapes du workflow franchies.
- **Compétences Prêtes :** Standards 100 % conformes aux 10 rubriques Anthropic.
- **Prêt pour le Sprint :** Disponible pour le mini-défi de code en direct sans IA.

> **🎙️ Notes de l'orateur (3 phrases simples A1) :**
> 1. « Notre cadre de compétences est prêt et validé à 100 % par le script. »
> 2. « Je comprends toute la structure du code et ses principes techniques. »
> 3. « Je suis prêt à réussir le mini-défi de programmation en direct sans IA. »
