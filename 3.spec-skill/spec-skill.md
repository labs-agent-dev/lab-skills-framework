# Spécification Technique : Skill `architecture-skills` & Décision d'Architecture (ADR)

> **Document de Spécification Référent (Gate 4) :** Formalisation de l'ingénierie du skill cible pour l'agent `AgentDev`, consécutive aux mesures du banc d'essai de `4.realisation/`.

---

## 1. Fiche d'Identité du Skill

- **Nom Normé :** `architecture-skills` (sans préfixe `lab-*`, conforme à la convention `[domaine]-[brique]`).
- **Emplacement Cible :** `.agents/skills/architecture-skills/SKILL.md`.
- **Rôle Principal :** Réaliser l'ingénierie des compétences IA (Skill Engineering) à partir de notre stack technique (PHP 8.2+ / Laravel 12, Alpine.js réactif, Tailwind CSS, Preline UI) et de notre flux de travail. Cartographier, concevoir et arbitrer la granularité des compétences pour l'agent `AgentDev`.
- **Conditions de Déclenchement (Triggers) :**
  - Conception de l'architecture des compétences d'un agent de développement.
  - Arbitrage de granularité (par techno, par couche MVC, par workflow ou mono-skill).
  - Cartographie des compétences pour un nouveau projet ou un sprint fil rouge.
- **Conditions de Non-Déclenchement :**
  - Cadrage méthodologique d'un lab (mobiliser `lab-dev`).
  - Validation syntaxique et normalisation des 10 rubriques (mobiliser `skill-creator`).
  - Écriture de code métier opérationnel.

---

## 2. Décision d'Architecture : ADR-001 (Architecture Hybride Modulaire)

### Contexte
Pour permettre à l'agent `AgentDev` de produire du code conforme à notre stack sans dérive ni saturation de contexte, quatre pistes d'organisation ont été confrontées lors du benchmark (`2.benchmark/`) et éprouvées sur le banc d'essai concret du CRUD des Catégories (`4.realisation/`) :
1. *Par Technologie* (`alpine-crud`, `laravel-controller`, `tailwind-forms`)
2. *Par Layer MVC* (`model-eloquent`, `blade-views`, `category-controller`)
3. *Par Workflow* (`w-spec`, `w-crud-scaffold`, `w-code-review`)
4. *Mono-Skill Polyvalent* (`fullstack-tall-dev`)

### Décision Retenue
Nous adoptons formellement une **Architecture Hybride Modulaire** qui articule :
- **Un socle Backend P0 inspiré des standards industriels (`HoangNguyen0403/agent-skills-standard`) :** Règles strictes de contrôleurs fins, Form Requests isolées et requêtes Eloquent optimisées avec `withCount` (prévention N+1).
- **Un module Frontend Réactif Dédié :** Règles ciblées pour les interactions Alpine.js 3.x (`x-data`, `x-model`, modals réactifs) et Tailwind CSS / Preline UI.
- **Une gouvernance de flux par skills préfixés `w-*` :** Orchestration séquentielle du travail (`w-benchmark`, `w-spec-skill`, `w-rapport`).

### Justification par les Métriques Mesurées (`4.realisation/rapport-test-hybride.md`)
- **Économie de Tokens (-45 %) :** Élimination de l'effet "méga-prompt" du mono-skill. Les règles ne sont injectées qu'au moment précis où la couche correspondante est traitée.
- **Conformité Stack (100 %) :** Zéro hallucination de bibliothèques tierces obsolètes (jQuery/Axios), respect scrupuleux de la séparation des responsabilités.
- **Maîtrise en Soutenance :** L'étudiant peut reproduire et expliquer l'architecture en direct sans IA devant le formateur grâce à la lisibilité des blocs autonomes.

---

## 3. Matrice Stack x Workflow pour `AgentDev`

| Composant de la Stack | Responsabilité Technique | Type de Compétence Associée | Priorité |
| :--- | :--- | :--- | :---: |
| **Laravel 12 Core** | Routage, Contrôleurs fins, Injection de dépendances | P0 Backend (`laravel-architecture`) | Indispensable |
| **Eloquent ORM** | Relations, eager loading, scopes, `$fillable` | P0 Persistance (`laravel-eloquent`) | Indispensable |
| **Validation & Sécurité** | Form Requests, Policies, protection CSRF | P0 Sécurité (`laravel-security`) | Indispensable |
| **Alpine.js 3.x** | Gestion d'état local, modals, recherche instantanée | Module Frontend Réactif (`alpine-reactive`) | Indispensable |
| **Tailwind CSS & Preline** | Layout responsive, design system, composants UI | Module Design (`tailwind-components`) | Complémentaire |
| **Tests & SDLC** | Feature tests Pest / PHPUnit avec `RefreshDatabase` | P1 Qualité (`laravel-testing`) | Recommandé |

---

## 4. Contrat d'Interface & Règles Inviolables du Skill

1. **Règle d'Or SSOT / DRY :** Aucune duplication de règles de stack. Les principes invariants résident dans `.agents/rules/stack-principles.md` ; les directives unitaires sont chargées à la demande.
2. **Nomenclature Stricte :**
   - Compétences de workflow : préfixe `w-*` (ex: `w-benchmark`, `w-spec-skill`, `w-rapport`).
   - Compétences techniques : `[domaine]-[brique]` (ex: `architecture-skills`, `alpine-components`).
   - Interdiction formelle du préfixe `lab-*` sur tout skill.
3. **Format Standard Anthropic :** Respect impératif des 10 rubriques normées validées par `validate-skills.cjs`.

