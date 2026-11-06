# Règles de Gouvernance d'un Lab

## 1. Organisation en 5 Sous-Dossiers
Tout lab technique est strictement structuré selon 5 sous-dossiers :
1. `1.besoin/` : Problématique métier/technique et rôle dans le prototype (`contexte-et-besoin.md`).
2. `2.veille/` : Benchmark de l'existant, analyse critique (`veille-technologique.md`).
3. `3.skill-technique/` : Résultat final du lab — Spécification du skill (`spec-skill.md`).
4. `4.realisation/` : Code d'expérimentation, testbench étalon et tests comparatifs.
5. `5.rapport-et-presentation/` : `Lab-[Sujet].md` et `Presentation-[Sujet].md` (Slides A1).

## 2. Invariants de la Soutenance (Sprint)
- Page de garde obligatoire avec tableau récapitulatif.
- Exactement **3 phrases simples de notes orales en français A1** par slide.
- Audit préalable obligatoire avec `lab-dev` avant passage devant le formateur.
- Évaluation en live coding direct **sans IA et sans prompt**.

## 3. Règle Inviolable de Nomenclature
- Le préfixe `lab-*` est **exclusivement réservé aux répertoires et identifiants de labs** (ex: `lab-skills-framework`, `lab-skill-creator`, `lab-alpinejs`).
- **Interdiction formelle** de nommer un skill technique avec le préfixe `lab-*`. Les skills techniques adoptent la convention `[domaine]-[brique]` (ex: `architecture-skills`, `alpine-components`, `laravel-crud`).

## 4. Démarche Individuelle & Collaboration
- Chaque apprenant produit ses propres livrables de manière individuelle.
- La collaboration (en cas de lab à pistes multiples) s'organise via `Todo.md` pour répartir les axes de recherche, mais chaque apprenant maintient son propre espace et ses livrables.
