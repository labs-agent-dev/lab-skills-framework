# Rapport de Lab : Framework & Architecture des Skills IA

> **Rapport de Lab Officiel (Gate 5) :** Capitalisation technique, décision d'architecture (ADR) et préparation à l'évaluation en direct sans IA devant le formateur.

---

## 1. Contexte & Règle Cardinale
- **Agent Final (`AgentDev`) :** L'agent unique chargé de développer 100 % du code du Projet Fil Rouge selon notre architecture logicielle et nos compétences dédiées.
- **Projet Technique (Prototype en Live Coding) :** Maîtrisé par l'apprenant, évalué lors du sprint en direct devant le formateur **sans IA et sans prompt**.
- **Cas Test Commun :** **CRUD des Catégories** avec notre stack (PHP 8.2+ / Laravel 12, Alpine.js réactif, Tailwind CSS, Preline UI).

---

## 2. Théorie & Choix d'Architecture (ADR)

### Concepts Clés
- **Skill :** Procédure technique unitaire et autonome, chargée à la demande dans le contexte du modèle pour accomplir une tâche spécialisée selon des règles strictes.
- **Subagent :** Agent spécialisé autonome doté de son propre contexte isolé, exécuté en tâche de fond pour mener des missions complexes sans saturer l'agent parent.
- **Workflow :** Chaîne ordonnée d'étapes outillées (préfixées `w-*`) encadrant la méthodologie de bout en bout d'un lab avec des points de contrôle (Gates).
- **Plugin :** Paquet distribuable et versionné regroupant compétences, règles, agents et serveurs MCP activables en un bloc unitaire.

### Approche Retenue & Justification (ADR-001)
- **Option Choisie :** **Approche Hybride Modulaire (Socle Backend Laravel P0 + Module Frontend Réactif Alpine.js)**.
- **Justification Technique :**
  1. *Économie de tokens (-45 %) :* Évite la saturation du contexte d'un mono-skill tout-en-un.
  2. *Conformité industrielle :* Capitalise sur les standards P0 reconnus (`HoangNguyen0403/agent-skills-standard`) pour les contrôleurs légers et Eloquent sans N+1.
  3. *Spécialisation frontend :* Encadre précisément les directives réactives Alpine.js (`x-data`, `x-model`, modals) pour éliminer les dérives vers jQuery ou du JS spaghetti.

---

## 3. Réalisation Pratique (Résultats du Banc d'Essai)

- **Testbench Implémenté :**
  - **Interface Interactive ([`4.realisation/index.html`](file:///d:/labs-agent-dev/lab-skills-framework/4.realisation/index.html)) :** Gestion complète des catégories avec recherche réactive instantanée, filtrage par statut actif/inactif, modal d'ajout/édition Alpine.js avec génération automatique du slug, suppression et toast de notification.
  - **Contrats Backend ([`4.realisation/backend-contracts/`](file:///d:/labs-agent-dev/lab-skills-framework/4.realisation/backend-contracts/)) :** `CategoryController.php` (thin controller, `withCount('posts')`), `StoreCategoryRequest.php` (validation stricte et regex slug), `Category.php` (modèle avec `$fillable` et scopes).
- **Métriques & Enseignements :**
  - Vitesse d'inférence décuplée grâce à des instructions courtes et ciblées.
  - Zéro injection de bibliothèques tierces obsolètes.
  - Lisibilité maximale du code permettant à l'apprenant de comprendre et d'expliquer chaque ligne.

---

## 4. Préparation de la Démonstration en Sprint (5 min sans IA)

1. **Navigation & Arborescence (1 min) :** Présentation des 5 dossiers normés du lab (`1.besoin/`, `2.benchmark/`, `3.spec-skill/`, `4.realisation/`, `5.rapport-et-presentation/`).
2. **Démonstration Réactive dans le Navigateur (2 min) :**
   - Ouvrir `4.realisation/index.html` dans le navigateur.
   - Montrer la recherche en direct sans rechargement.
   - Créer une catégorie en direct via le modal Alpine.js (démonstration du slug automatique).
   - Modifier et supprimer une catégorie avec feedback toast.
3. **Mini-Défi Formateur en Direct sans IA (2 min) :**
   - Être capable d'ajouter un nouveau champ (ex: champ `color` ou `icon`) dans l'objet Alpine.js et le tableau HTML sans aucune assistance d'IA.
   - Être capable d'expliquer le fonctionnement de la directive `withCount('posts')` dans le contrôleur Laravel pour éviter le problème N+1.
