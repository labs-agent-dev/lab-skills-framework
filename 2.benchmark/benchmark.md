---
marp: true
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

## 2. Gisements de Référence Clés

| Référence | Nature de la Source | Apport Technique pour le Lab |
| :--- | :--- | :--- |
| **[GitHub Topics: coding-agent](https://github.com/topics/coding-agent)** | Carrefour Open-Source | Dépôts communautaires majeurs, architectures multi-agents et patterns d'agents de code. |
| **[skills.sh](https://skills.sh) / agentskills.io** | Registres Ouverts | Catalogue de compétences unitaires : observation des granularités et tests de prompts. |
| **`claude-plugins-official` (Anthropic)** | Dépôt Officiel | Patterns de référence (`feature-dev`, `plugin-dev`), gating et 10 rubriques normées. |
| **Documentation Officielle de Stack** | Laravel 12, Alpine.js | Source unique de vérité pour garantir la conformité des APIs et de la syntaxe. |

---

## 3. Grille d'Analyse Comparative des 4 Pistes Initiales

| Piste Candidate | Exemples Testés | Adéquation Stack | Impact Tokens | Maintenabilité & Limites |
| :--- | :--- | :---: | :---: | :--- |
| **1. Par Technologie** | `tailwind-helper`, `alpine-components` | ⚠️ Moyenne | 🟢 Faible | ⚠️ Fragmentée *(trop de micro-skills à coordonner)* |
| **2. Par Layer** | `mvc-scaffolder`, `api-controller` | 🟢 Bonne | 🟡 Moyen | ⚠️ Lourde *(dispersion pour une simple vue)* |
| **3. Par Workflow** | `code-reviewer`, `spec-generator` | ⚠️ Partielle | 🟢 Faible | 🟢 Excellente *(mais ne garantit pas la stack)* |
| **4. Mono-Skill** | `feature-dev`, `fullstack-agent` | 🟢 Bonne | 🔴 Élevé | 🔴 Risquée *(méga-prompt, hallucinations fréquentes)* |

- **Constat clé :** Aucune piste prise isolément n'est parfaite. Un compromis architectural s'impose entre structure de workflow et compétences techniques spécialisées.

---

## 4. Double Démarche Pédagogique : Voie A vs Voie B

En concertation avec le formateur, l'analyse des références arbitre entre deux voies :

- **Voie A (Réponse Directe — Prêt-à-l'emploi) :**
  - *Observation :* Aucun skill public brut sur `skills.sh` ne couvre exactement notre stack hybride (Laravel 12 + Alpine.js + Preline UI) sans dérive.
  - *Conclusion :* La réutilisation brute à 100 % est insuffisante.
- **Voie B (Assimilation des Fondamentaux — Sur-Mesure) :**
  - *Observation :* En comprenant les patterns d'Anthropic et le découpage modulaire, nous pouvons forger une compétence adaptée.
  - *Conclusion :* **Orientation vers une démarche hybride** (méta-gouvernance + skill technique dédié par brique).

---

## 5. Synthèse & Hypothèses pour l'Étape 3 (`4.realisation/`)

Le banc d'essai étalon (CRUD des catégories) va départager deux hypothèses concrètes :

1. **Test 1 (Approche Brute `skills.sh`) :**
   - Générer le code avec les compétences brutes non modifiées.
   - Mesurer les écarts de conformité et le volume de code spaghetti généré.
2. **Test 2 (Skill Dédié avec Socle Minimal de Règles) :**
   - Initialiser notre compétence technique avec les règles d'or (Alpine.js réactif, Tailwind propre).
   - Enrichir le skill itérativement au cours des tests.
- **Métriques ciblées :** Vitesse d'inférence (s), tokens consommés, conformité stack et aisance lors du sprint en live coding sans IA.
