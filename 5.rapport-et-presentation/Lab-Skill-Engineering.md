# Rapport de Lab : Framework & Architecture des Skills IA

> **Rapport de Lab Officiel (Gate 5) :** Capitalisation technique, décision d'architecture (ADR) et préparation à l'évaluation en direct sans IA devant le formateur.

---

## 1. Contexte & Règle Cardinale
- **Agent Final (`AgentDev`) :** L'agent unique chargé de développer 100 % du code du Projet Fil Rouge selon notre architecture logicielle et nos compétences dédiées.
- **Projet Technique (Prototype en Live Coding) :** Maîtrisé par l'apprenant, évalué lors du sprint en direct devant le formateur **sans IA et sans prompt**.
- **Cas Test Commun :** **CRUD des Catégories avec Service Layer** (PHP 8.2+ / Laravel 12, DTOs, Alpine.js réactif, Tailwind CSS, Preline UI).

---

## 2. Théorie & Choix d'Architecture (ADRs)

### Concepts Clés & 4 Philosophies d'Agents (Martin Jordanovski)
1. **Le Playbook (Addy Osmani / `skills.addy.ie`) :** Cycle complet SDLC (Define, Plan, Build, Verify, Review, Ship), garde-fous anti-bâclage et revues par personas.
2. **Le Pipeline (Jesse Vincent / `obra/superpowers`) :** Boucle interne TDD stricte, sous-agents isolés en git-worktrees.
3. **La Boîte à Outils (Matt Pocock / `mattpocock/skills`) :** Outils légers d'artisanat direct (`/grill-me`, `/diagnose`).
4. **Le Système d'Exploitation (ECC) :** Couche environnementale globale (mémoire persistante, hooks, scanners de sécurité).

### Décisions d'Architecture Retenues
- **ADR-001 (Architecture Hybride Modulaire) :** Séparer le socle backend P0 (contrôleurs fins, Eloquent sans $N+1$) du module frontend réactif Alpine.js.
- **ADR-002 (Adoption du Playbook SDLC d'Addy Osmani) :** Structurer `AgentDev` selon le modèle en 6 phases d'Addy Osmani pour garantir qu'aucune étape d'ingénierie (spécification, DTO, tests, revue de code) ne soit bâclée par l'IA.

---

## 3. Réalisation Pratique : Le Playbook en 6 Phases (`4.realisation/`)

| Phase Playbook | Composant Produit | Apport Technique |
| :--- | :--- | :--- |
| **1. DEFINE** | [`1-define/specification-crud-categories.md`](file:///d:/labs-agent-dev/lab-skills-framework/4.realisation/1-define/specification-crud-categories.md) | Contrat fonctionnel, critères d'acceptation et interface `CategoryServiceInterface`. |
| **2. PLAN** | [`2-plan/architecture-service-layer.md`](file:///d:/labs-agent-dev/lab-skills-framework/4.realisation/2-plan/architecture-service-layer.md) | Flux de données strict : Contrôleur fin ➔ DTO ➔ Service Layer ➔ Eloquent. |
| **3. BUILD** | [`3-build/app/Services/CategoryService.php`](file:///d:/labs-agent-dev/lab-skills-framework/4.realisation/3-build/app/Services/CategoryService.php)<br>[`3-build/app/DTO/CategoryData.php`](file:///d:/labs-agent-dev/lab-skills-framework/4.realisation/3-build/app/DTO/CategoryData.php)<br>[`3-build/index.html`](file:///d:/labs-agent-dev/lab-skills-framework/4.realisation/3-build/index.html) | Service métier avec `DB::transaction()`, DTO typé immutable (PHP 8.2+) et interface réactive Alpine.js. |
| **4. VERIFY** | [`4-verify/CategoryServiceTest.php`](file:///d:/labs-agent-dev/lab-skills-framework/4.realisation/4-verify/CategoryServiceTest.php) | Tests unitaires et d'intégration validant le CRUD et l'absence de requêtes $N+1$. |
| **5. REVIEW** | [`5-review/audit-code-review.md`](file:///d:/labs-agent-dev/lab-skills-framework/4.realisation/5-review/audit-code-review.md) | Garde-fous anti-rationalisation et audit de simplification de code. |
| **6. SHIP** | [`6-ship/fiche-livraison-livecoding.md`](file:///d:/labs-agent-dev/lab-skills-framework/4.realisation/6-ship/fiche-livraison-livecoding.md) | Livrable validé prêt pour la soutenance sans IA. |

---

## 4. Préparation de la Démonstration en Sprint (5 min sans IA)

1. **Navigation & Présentation du Playbook (1 min) :** Présenter les 6 étapes SDLC inspirées d'Addy Osmani et la structure des dossiers.
2. **Démonstration Réactive dans le Navigateur (2 min) :**
   - Ouvrir `4.realisation/3-build/index.html`.
   - Montrer la recherche en direct, la génération automatique du slug et les notifications toasts.
3. **Explication du Service Layer & Mini-Défi sans IA (2 min) :**
   - Expliquer pourquoi la logique métier réside dans `CategoryService.php` et non dans le contrôleur.
   - Justifier l'usage de `withCount('posts')` pour éliminer le problème $N+1$.
   - Coder en direct sans assistance d'IA une modification mineure (ex: ajout d'un champ ou d'une règle de filtre).
