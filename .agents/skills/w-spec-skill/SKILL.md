---
name: w-spec-skill
description: Guide l'apprenant dans la spécification technique du skill (étape 4 du workflow d'un lab dans 3.spec-skill/), formalise la décision d'architecture (ADR) consécutive aux tests de 4.realisation/, assiste la rédaction de spec-skill.md et pilote la finalisation du skill dans .agent/skills/ selon le standard Anthropic en collaboration avec skill-creator.
---

# 1. Mission
Le skill **`w-spec-skill`** encadre l'Étape 4 du flux de travail d'un lab technique : la **Spécification Technique du Skill** au sein de `3.spec-skill/`.
- **Rôle :** Guider la formalisation de la Décision d'Architecture (ADR), la rédaction de `spec-skill.md`, et assister la transition vers le skill opérationnel finalisé sous `.agent/skills/[domaine-brique]/SKILL.md` (via le standard Anthropic en 10 rubriques).
- **Principe de Non-Substitution :** L'apprenant choisit et justifie lui-même son architecture à partir des métriques observées lors de l'étape 3. `w-spec-skill` apporte la rigueur de structure, les contrôles de conformité et l'audit technique.

# 2. Déclenchement & Limites
- **Quand l'activer :**
  - Rédaction et validation de `3.spec-skill/spec-skill.md`.
  - Formalisation de l'ADR (Architecture Decision Record) suite aux tests dans `4.realisation/`.
  - Contrôle de la nomenclature du skill technique (interdiction du préfixe `lab-*`, respect du format `[domaine]-[brique]`).
  - Transition vers la création/stabilisation du skill avec `skill-creator`.
- **Quand NE PAS l'activer :**
  - Cadrage du besoin initial ➔ Mobiliser `lab-dev`.
  - Veille technologique ➔ Mobiliser `w-veille`.
  - Rédaction des slides de soutenance ➔ Mobiliser `w-rapport`.

# 3. Entrées & Ressources à Charger
- Résultats d'expérimentation : `4.realisation/` (banc d'essai, métriques mesurées).
- Gabarit technique : `.agent/skills/lab-dev/resources/template-technical-lab-skill.md`.
- Guide des 10 rubriques : `.agent/skills/skill-creator/docs/guide-10-rubriques-anthropic.md`.
- Règles de nomenclature : `.agent/rules/lab-rules.md`.

# 4. Contraintes & Règles Inviolables
1. **Nomenclature Obligatoire :** Interdiction stricte de nommer le skill technique avec le préfixe `lab-*`. Format obligatoire : `[domaine]-[brique]` (ex: `architecture-skills`, `alpine-components`, `laravel-crud`).
2. **Justification Factuelle (ADR) :** Toute décision d'architecture doit s'appuyer sur les résultats métriques réels obtenus dans `4.realisation/` (vitesse, tokens, lisibilité).
3. **Respect des 10 Rubriques Anthropic :** Le skill technique finalisé doit comporter l'intégralité des 10 rubriques normées et le frontmatter YAML complet.
4. **Validation Déterministe à 100 % :** Exécution obligatoire du script `validate-skills.cjs` avec résultat sans avertissement ni erreur bloquante.

# 5. Procédure Pas-à-Pas
1. **Étape 1 (Bilan des Tests de Réalisation) :**
   - Analyser les observations consignées dans `4.realisation/`.
   - Comparer les résultats obtenus entre l'approche brute et l'approche adaptée à notre stack.
2. **Étape 2 (Formalisation de l'ADR) :**
   - Structurer la décision d'architecture dans `3.spec-skill/spec-skill.md` :
     - Contexte et problème technique.
     - Options évaluées (y compris alternatives hybrides).
     - Décision retenue et justification chiffrée/argumentée.
     - Conséquences positives et négatives assumées.
3. **Étape 3 (Rédaction de la Spécification Technique) :**
   - Compléter `spec-skill.md` avec : nom normé, mission, périmètre de déclenchement, ressources de `resources/`, règles inviolables.
4. **Étape 4 (Finalisation sous `.agent/skills/`) :**
   - Transposer la spécification sous `.agent/skills/[domaine-brique]/SKILL.md`.
   - Organiser les dossiers annexes éventuels (`resources/`, `docs/`, `scripts/`).
5. **Étape 5 (Validation de la Porte 4 - Gate 4) :**
   - Lancer la validation déterministe :
     ```powershell
     node .agent/skills/skill-creator/scripts/validate-skills.cjs
     ```
   - Vérifier l'obtention de 0 erreur bloquante avant de valider la porte.

# 6. Gestion des Ambiguïtés & Décisions
- **L'apprenant propose un nom avec `lab-*` (ex: `lab-alpine`) :**
  - Bloquer immédiatement et rappeler la règle inviolable : *« Le préfixe lab-* est réservé aux dossiers de labs. Le skill technique doit adopter le format domaine-brique, par exemple alpine-components. »*
- **L'approche retenue est une démarche hybride non prévue initialement :**
  - Valider l'approche dès lors qu'elle est justifiée par les mesures dans l'ADR et qu'elle respecte nos principes de découplage.

# 7. Format de Sortie & Livrables
- Document de spécification : `3.spec-skill/spec-skill.md` (ADR + Contrat de spécification).
- Compétence opérationnelle : `.agent/skills/[domaine-brique]/SKILL.md` (10 rubriques normées).
- Rapport de validation console confirmant 0 erreur.

# 8. Contrôle Qualité (Checklist Binaire)
- [ ] Le document `3.spec-skill/spec-skill.md` est-il rédigé avec un ADR explicite ?
- [ ] Le nom du skill respecte-t-il la convention `[domaine]-[brique]` sans préfixe `lab-*` ?
- [ ] Le fichier `SKILL.md` finalisé contient-il les 10 rubriques normées d'Anthropic ?
- [ ] Le frontmatter YAML contient-il les 4 clés obligatoires (`name`, `description`, `version`, `inspiration`) ?
- [ ] La commande `node .agent/skills/skill-creator/scripts/validate-skills.cjs` confirme-t-elle 0 erreur ?

# 9. Gestion des Erreurs Fréquentes
| Erreur Fréquente | Cause | Action de Correction |
| :--- | :--- | :--- |
| Nom de skill en `lab-*` | Non-respect des règles de nomenclature | Renommer le dossier et la clé `name` au format `[domaine]-[brique]` |
| ADR sans justification par les tests | Décision arbitraire sans banc d'essai | Exiger l'intégration des métriques mesurées dans `4.realisation/` |
| Rubriques manquantes dans `SKILL.md` | Omission lors de la rédaction | Compléter les rubriques manquantes via `guide-10-rubriques-anthropic.md` |

# 10. Exemples Concrets (Few-Shot)
**Prompt Apprenant :** *"J'ai terminé les tests sur Alpine.js dans 4.realisation/. Comment spécifier mon skill final ?"*
**Réponse Attendue :** L'agent initialise `3.spec-skill/spec-skill.md`, cadre l'ADR pour retenir l'approche modulaire (`alpine-components`), structure le contrat d'interface, et rappelle la commande de validation finale avec `skill-creator`.

