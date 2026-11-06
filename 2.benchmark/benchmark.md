---
marp: flase
theme: tech
paginate: true
header: "Lab Skills Framework — État de l'Art & Benchmark"
footer: "Solicode / AgentDev"
---

<!-- _class: lead -->
# État de l'Art & Étude Comparative
## Benchmark des Solutions d'Architecture de Skills IA
**Lab :** `lab-skills-framework` | **Étape 2 du Workflow**  
**Agent Final :** `AgentDev` (Projet Fil Rouge 100 % IA)  
**Prototype :** Live coding direct sans IA devant le formateur  
*Promotion Solicode 2026*

---

## 1. Problématique & Objectifs du Benchmark

- **Constat Initial :** Un modèle d'IA généraliste produit du code désorganisé qui s'éloigne de notre stack (PHP 8.2+ / Laravel 12, Alpine.js réactif, Tailwind CSS, Preline UI) et mélange la logique métier aux templates.
- **Mission du Benchmark :** 
  - Cartographier comment la communauté open-source structure les compétences d'agents de code.
  - Évaluer les approches candidates avant d'écrire la moindre ligne de code.
- **Cas d'Usage Étalon Commun :** 
  - CRUD des Catégories avec notre stack (PHP 8.2+ / Laravel 12, Alpine.js réactif, Tailwind CSS, Preline UI).

---

## 2. Sourcing & Références Open-Source (Recherche Active & Topics)

| Catégorie & GitHub Topics | Références Majeures Identifiées | Apport Technique pour le CRUD Catégories |
| :--- | :--- | :--- |
| **Topics GitHub Clés** | [`coding-standards`](https://github.com/topics/coding-standards) • [`coding-agent`](https://github.com/topics/coding-agent) • [`agent-skills`](https://github.com/topics/agent-skills) | Panorama des normes de code, registres et spécifications de prompts pour agents. |
| **Standard Industriel Laravel** | [HoangNguyen0403/agent-skills-standard](https://github.com/HoangNguyen0403/agent-skills-standard)<br>*(dossier `skills/laravel`)* | Découpage P0 (`laravel-architecture`, `laravel-eloquent`, `laravel-security`) et P1 (`laravel-testing`). |
| **Patterns TALL & Alpine.js** | [tott/laravel-tall-claude-ai-configs](https://github.com/tott/laravel-tall-claude-ai-configs)<br>[pekral/cursor-rules](https://github.com/pekral/cursor-rules) | Gestion d'état réactive Alpine.js (`x-data`, modals, validation) et composants Blade accessibles. |
| **Gouvernance & SDLC** | [VoltAgent/awesome-agent-skills](https://github.com/VoltAgent/awesome-agent-skills)<br>[addyosmani/agent-skills](https://github.com/addyosmani/agent-skills) | Standards d'ingénierie, gating qualité, réduction du bruit et prévention des hallucinations. |

---

## 3. Grille d'Analyse Comparative des 4 Pistes Initiales

| Piste Candidate | Exemples Concrets (CRUD Catégories) | Adéquation Stack | Impact Tokens | Maintenabilité & Coordination |
| :--- | :--- | :---: | :---: | :--- |
| **1. Par Technologie** | `alpine-crud`, `laravel-controller`, `tailwind-forms` | ⚠️ Partielle *(silos)* | 🟢 Faible | ⚠️ Éparpillée *(3 skills pour 1 CRUD)* |
| **2. Par Layer / Domaine** | P0 `laravel-architecture` + `laravel-eloquent` | 🟢 Excellente *(backend)* | 🟡 Moyen | 🟢 Structurée *(mais omet le frontend)* |
| **3. Par Workflow** | `w-spec`, `w-crud-scaffold`, `w-code-review` | ⚠️ Dépend des règles | 🟢 Faible | 🟢 Robuste *(cadre clair mais générique)* |
| **4. Mono-Skill Polyvalent** | `fullstack-tall-dev`, `category-crud-agent` | 🟢 Bonne *(vision globale)* | 🔴 Élevé | 🔴 Risquée *(méga-prompt, prompt drift)* |

- **Constat Analytique Clé :** Le découpage par domaine (P0) éprouvé dans `HoangNguyen0403` excelle sur le backend Laravel mais omet l'interaction réactive. Le mono-skill sature le contexte. Une articulation modulaire hybride s'impose.

---

## 4. Démarche & Arbitrage Pédagogique : Voie A vs Voie B

En concertation avec le formateur, l'analyse comparative débouche sur un arbitrage stratégique :

- **Voie A (Réponse Directe — Prêt-à-l'emploi) :**
  - *Apport :* Réutilisation immédiate des patterns backend industriels de `HoangNguyen0403` (P0 contrôleurs fins, Form Requests, scopes Eloquent).
  - *Limite :* Aucun standard public ne fournit la brique d'interaction frontend (Alpine.js + Preline UI) adaptée à notre école.
- **Voie B (Assimilation des Fondamentaux — Sur-Mesure) :**
  - *Apport :* Maîtrise des directives Alpine.js (`x-data`, `x-on`, transitions modals) et des conventions d'ingénierie Anthropic.
- **Décision Retenue : Démarche Hybride Modulaire**
  - Coupler les standards P0 Laravel (sécurité, architecture) avec un skill frontend dédié (`alpine-reactive-crud`) pour un résultat zéro-défaut.

---

## 5. Synthèse & Orientation de Réalisation (Banc d'Essai)

Le banc d'essai étalon (**CRUD des Catégories**) est réalisé selon l'approche retenue :

- **Orientation Validée : Test 2 — Hybride Modulaire (P0 Laravel + Alpine.js)** :
  - **Socle Backend P0 :** Contrôleur léger (`CategoryController`), validation dédiée (`StoreCategoryRequest`), requêtes Eloquent optimisées sans N+1 (`withCount('posts')`).
  - **Module Frontend Alpine.js :** Composant réactif autonome (`x-data`, `x-model`, modals Preline UI / Tailwind CSS), filtrage et feedback dynamique.
- **Bénéfices Clés :**
  - Sobriété en tokens et élimination du prompt drift.
  - Conformité stricte à notre stack et clarté maximale pour le live coding sans IA devant le formateur.