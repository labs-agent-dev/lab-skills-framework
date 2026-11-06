---
marp: true
theme: tech
paginate: true
header: "Lab Skills Framework — État de l'Art & Benchmark"
footer: "Solicode / AgentDev"
---

<!-- _class: lead -->
# État de l'Art & Benchmark
## Architecture & Organisation des Skills IA
**Lab :** `lab-skills-framework`  
**Étape 2 du Workflow** | Présentation Marp

---

## 1. Contexte & Problématique du Benchmark
- **Objectif :** Trouver et analyser les architectures de compétences IA existantes pour outiller **`AgentDev`**.
- **Double Enjeu d'Apprentissage :**
  - *Réponse directe :* Identifier des skills immédiatement transposables.
  - *Montée en compétences :* Comprendre les patterns d'ingénierie agentique pour concevoir nos propres briques conformes à notre stack (PHP 8.2+ / Laravel 12, Alpine.js, Tailwind CSS).

---

## 2. Gisements de Référence Identifiés
| Référence | Type de Source | Apport Technique Principal |
| :--- | :--- | :--- |
| **[GitHub Topics: coding-agent](https://github.com/topics/coding-agent)** | Carrefour Open-Source | Dépôts communautaires majeurs, architectures multi-agents et patterns d'agents développeurs. |
| **[skills.sh](https://skills.sh)** | Registre Communautaire | Large catalogue ouvert pour observer les granularités et tester des compétences brutes. |
| **`claude-plugins-official`** | Dépôt Officiel Anthropic | Patterns de gouvernance (`feature-dev`, `plugin-dev`) et standard des 10 rubriques normées. |
| **Docs Écosystème Officiel** | Laravel 12, Alpine.js | Règles d'architecture strictes et APIs de référence à respecter sans dérive. |

---

## 3. Exploration Comparative sur skills.sh
| Approche | Recherche | Compétences Candidates | Constat Critique |
| :--- | :--- | :--- | :--- |
| **1. Technologie** | `tailwind`, `alpinejs` | `tailwind-helper`, `html-boilerplate` | Syntaxe CSS correcte mais ignore nos composants et templates d'école. |
| **2. Layer** | `mvc`, `controller`, `ui-view` | `mvc-scaffolder`, `api-controller` | Découpage net mais dispersion de contexte pour de simples vues interactives. |
| **3. Workflow** | `wireframe`, `testing`, `dev` | `code-reviewer`, `spec-generator` | Structure bien les phases, mais incapable de produire le code complet. |
| **4. Un Seul Skill** | `fullstack`, `feature-dev` | `feature-dev` (Anthropic) | Très complet et autonome, mais consommation excessive de tokens. |

---

## 4. Synthèse & Hypothèses pour l'Étape 3 (`4.realisation/`)
- **Constat :** Aucun skill public brut ne répond parfaitement à notre stack combinée (Laravel 12 + Alpine.js + Preline UI).
- **Hypothèse 1 (Test Brut) :** Tester une brique issue de `skills.sh` sans adaptation pour mesurer les écarts sur le cas étalon.
- **Hypothèse 2 (Test Adapté / Hybride) :** Initialiser notre skill technique dédié avec un socle minimal de règles et l'enrichir de façon itérative.
- **Suite du flux :** Expérimenter ces deux hypothèses sur le banc d'essai de la Landing Page Lauréats.
