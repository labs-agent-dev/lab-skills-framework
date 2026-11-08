---
marp: false
theme: tech
paginate: true
header: "Lab Skills Framework — État de l'Art & Étude Comparative"
footer: "Solicode / AgentDev"
---

<!-- _class: lead -->
# État de l'Art & Étude Comparative
## Étude Comparative des Solutions & Philosophies d'Agents IA
**Lab :** `lab-skills-framework` | **Étape 2 du Workflow**  
**Agent Final :** `AgentDev` (Projet Fil Rouge 100 % IA)  
**Paradigme de Référence :** Playbook SDLC (inspiré d'Addy Osmani) adapté à Laravel Service Layer  
*Promotion Solicode 2026*

---

## 1. Problématique & Objectifs de l'Étude Comparative

- **Constat Initial :** Un modèle d'IA généraliste produit du code désorganisé qui s'éloigne de notre stack (PHP 8.2+ / Laravel 12 avec Service Layer, Alpine.js, Tailwind CSS) et mélange la logique métier aux contrôleurs.
- **Mission de l'Étude Comparative :** 
  - Comparer les grands paradigmes d'organisation d'agents de code dans l'écosystème open-source.
  - Sélectionner la philosophie architecturale optimale pour guider l'agent `AgentDev`.
- **Cas d'Usage Étalon Commun :** 
  - CRUD des Catégories avec Laravel 12 (Service Layer, DTOs, Form Requests) et Alpine.js réactif.

---

## 2. Les 4 Philosophies d'Agents IA (Martin Jordanovski)

| Philosophie | Dépôt de Référence | Approche & Fonctionnement | Cas d'Usage Idéal |
| :--- | :--- | :--- | :--- |
| **1. Le Playbook** | **[Addy Osmani](https://skills.addy.ie/)** (`agent-skills`) | Cycle SDLC complet en 6 phases (Define ➔ Plan ➔ Build ➔ Verify ➔ Review ➔ Ship). Garde-fous anti-bâclage. | 🎯 **Projets d'ingénierie complets avec validation humaine.** |
| **2. Le Pipeline** | **[Jesse Vincent](https://github.com/obra/superpowers)** (`superpowers`) | Boucle interne rigide (TDD first), sous-agents avec isolation git-worktree. Exécution autonome sans saut d'étape. | ⚙️ Tâches complexes et autonomes de longue durée. |
| **3. La Boîte à Outils** | **Matt Pocock** (`skills`) | Outils chirurgicaux légers au service direct du dev (`/grill-me`, `/tdd`, `/diagnose`). Le dev reste au volant. | 🛠️ Itérations rapides et debugging quotidien. |
| **4. Le Système d'Exploitation** | **ECC** (`everything-claude-code`) | Couche environnementale globale : hooks de session, mémoire persistante de projet et scans de sécurité. | 🖥️ Socle d'infrastructure multi-agents. |

---

## 3. Sourcing & Références Open-Source (Recherche Active & Topics)

| Catégorie & GitHub Topics | Références Majeures Identifiées | Apport Technique pour le CRUD Catégories |
| :--- | :--- | :--- |
| **Topics GitHub Clés** | [`coding-standards`](https://github.com/topics/coding-standards) • [`coding-agent`](https://github.com/topics/coding-agent) • [`agent-skills`](https://github.com/topics/agent-skills) | Panorama des normes de code, registres et spécifications de prompts pour agents. |
| **Modèle Playbook SDLC** | [Addy Osmani](https://skills.addy.ie/) (`addyosmani/agent-skills`) | Méthodologie en 6 phases, anti-rationalisation, revues par personas et ADRs. |
| **Standard Industriel Laravel** | [HoangNguyen0403/agent-skills-standard](https://github.com/HoangNguyen0403/agent-skills-standard)<br>*(dossier `skills/laravel`)* | Découpage P0 (`laravel-architecture`, `laravel-eloquent`, `laravel-security`) et P1 (`laravel-testing`). |
| **Patterns TALL & Alpine.js** | [tott/laravel-tall-claude-ai-configs](https://github.com/tott/laravel-tall-claude-ai-configs)<br>[pekral/cursor-rules](https://github.com/pekral/cursor-rules) | Gestion d'état réactive Alpine.js (`x-data`, modals, validation) et composants Blade accessibles. |

---

## 4. Grille d'Analyse Comparative des Approches

| Approche Candidate | Exemples Testés | Adéquation Stack Laravel | Impact Tokens | Maintenabilité & Gouvernance |
| :--- | :--- | :---: | :---: | :--- |
| **1. Par Technologie** | `alpine-crud`, `laravel-service`, `tailwind-forms` | ⚠️ Partielle *(silos)* | 🟢 Faible | ⚠️ Éparpillée *(trop de skills à coordonner)* |
| **2. Par Layer MVC** | `model-eloquent`, `blade-views`, `category-controller` | 🟢 Bonne *(MVC strict)* | 🟡 Moyen | ⚠️ Lourde *(sans vision de flux)* |
| **3. Mono-Skill** | `fullstack-tall-dev`, `category-crud-agent` | 🟢 Bonne *(vision globale)* | 🔴 Élevé | 🔴 Risquée *(méga-prompt, prompt drift)* |
| **4. Playbook SDLC (Retenu)** | **Addy Osmani adapté Service Layer** | 🟢 Excellente *(flux + stack)* | 🟢 Optimisé | 🟢 Maximale *(6 phases, anti-bâclage, checkpoints)* |

- **Constat Analytique Clé :** Le modèle Playbook d'Addy Osmani comble le vide entre les règles techniques isolées et la rigueur du flux de livraison logiciel.

---

## 5. Démarche & Arbitrage Pédagogique : Voie A vs Voie B

En concertation avec le formateur, l'analyse comparative débouche sur un arbitrage stratégique :

- **Voie A (Réponse Directe — Prêt-à-l'emploi) :**
  - *Apport :* Réutilisation de la matrice SDLC d'Addy Osmani et des patterns P0 de `HoangNguyen0403`.
  - *Limite :* Nécessite une traduction en français et une adaptation à notre **Service Layer**.
- **Voie B (Assimilation des Fondamentaux — Sur-Mesure) :**
  - *Apport :* Compréhension des mécanismes de gating, des DTOs et des interactions réactives Alpine.js.
- **Décision Retenue : Playbook Adapté à Laravel Service Layer**
  - Adopter le Playbook en 6 phases (Define ➔ Plan ➔ Build ➔ Verify ➔ Review ➔ Ship) adapté à notre stack : **Contrôleur fin ➔ DTO ➔ Service Métier ➔ Eloquent sans N+1 ➔ Alpine.js réactif**.

---

## 6. Synthèse & Feuille de Route Pratique (`4.realisation/`)

Le banc d'essai étalon (**CRUD des Catégories avec Service Layer**) exécute les 6 phases réelles du Playbook :

1. **DÉFINIR (`Define`) :** Fiche de spécification fonctionnelle et contrat `CategoryServiceInterface`.
2. **PLANIFIER (`Plan`) :** Architecture Service Layer, modélisation DTO (`CategoryData`) et routes.
3. **CONSTRUIRE (`Build`) :** `CategoryService.php`, `CategoryController.php`, validation et vue Alpine.js.
4. **VÉRIFIER (`Verify`) :** Tests unitaires Pest / PHPUnit du Service Layer et vérification anti-N+1.
5. **RÉVISER (`Review`) :** Audit de simplification de code et contrôle de conformité de stack.
6. **LIVRER (`Ship`) :** Préparation de la démonstration et maîtrise du code pour le live coding sans IA.
