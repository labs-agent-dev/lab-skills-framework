---
name: plugin-dev
description: Gouverne, conçoit, crée et raffine les skills, les règles (.agent/rules/) et les standards normatifs selon les patterns officiels d'Anthropic, et maintient la conformité SemVer.
version: 1.3.1
inspiration:
  source: "anthropic/claude-plugins-official"
  plugin: "plugin-dev"
  pattern: "skill scaffolding, trigger tuning, resource encapsulation & continuous refinement"
---

# 1. Mission
Ce méta-skill assure la gouvernance technique de l'écosystème IA : conception, création, normalisation et validation des **Skills IA** (`.agent/skills/`) et des **Règles permanentes** (`.agent/rules/`). Il applique les patterns officiels d'Anthropic, garantit le respect strict de SSOT et DRY, et maintient la conformité SemVer.

# 2. Déclenchement & Limites
- **Activer :** Création d'un nouveau skill, raffinement de prompt/règles, audit de conformité avec les 10 rubriques normées.
- **Ne PAS activer :** Méthodologie et suivi des labs (`lab-dev`) ou conception d'architecture globale (`lab-skill-engineering`).

# 3. Entrées & Ressources à Charger
- `.agent/skills/plugin-dev/resources/anthropic-skill-patterns.md` (Motifs d'Anthropic).
- `.agent/rules/` (Directives d'ingénierie transversales).

# 4. Contraintes & Règles Inviolables
1. **10 Rubriques Normées :** Tout `SKILL.md` doit obligatoirement comporter les 10 rubriques standard.
2. **Bloc Inspiration Obligatoire :** Frontmatter YAML avec `source`, `plugin` et `pattern`.
3. **SSOT / DRY :** Aucune duplication de consigne. Les règles transversales vont dans `.agent/rules/`, les gabarits spécifiques dans `<skill>/resources/`.
4. **Validation Automatique :** Exécution réussie de `node .agent/skills/plugin-dev/scripts/validate-skills.cjs`.

# 5. Procédure Pas-à-Pas
1. **Analyse du Motif :** Sélectionner le pattern Anthropic adapté (`feature-dev`, `setup`, `review`).
2. **Rédaction du SKILL.md :** Remplir le gabarit en 10 rubriques et formuler la description à la 3e personne.
3. **Encapsulation :** Déposer les templates et guides dédiés dans `<skill>/resources/`.
4. **Contrôle Qualité :** Exécuter `validate-skills.cjs` (0 erreur bloquante).
5. **Enregistrement :** Mettre à jour la version SemVer.

# 6. Gestion des Ambiguïtés & Décisions
- **Skill vs Règle :** Si c'est une contrainte passive permanente ➔ Règle (`.agent/rules/`). Si c'est une séquence outillée pas-à-pas ➔ Skill (`SKILL.md`).
- **Emplacement des ressources :** Mono-skill ➔ `<skill>/resources/`. Transversal (2+ skills) ➔ `.agent/rules/` ou docs de projet.

# 7. Format de Sortie & Livrables
- Fichier `SKILL.md` complet et conforme aux 10 rubriques.
- Ressources encapsulées sous `<skill>/resources/`.
- Rapport de validation déterministe avec 0 erreur.

# 8. Contrôle Qualité (Checklist Binaire)
- [ ] Le frontmatter YAML contient `name`, `description`, `version` et `inspiration` ?
- [ ] Les 10 rubriques normées sont présentes et renseignées ?
- [ ] L'encapsulation mono-skill est respectée dans `resources/` ?
- [ ] Le principe SSOT/DRY est garanti sans duplication de règles ?
- [ ] Le script `validate-skills.cjs` confirme 0 erreur bloquante ?

# 9. Gestion des Erreurs Fréquentes
| Erreur | Cause | Action Immédiate |
| :--- | :--- | :--- |
| Oubli d'une rubrique | Inattention | Ajouter la rubrique manquante parmi les 10 |
| Bloc inspiration manquant | Omission YAML | Ajouter source, plugin et pattern dans le frontmatter |
| Règle dupliquée dans le skill | Violation DRY | Extraire vers `.agent/rules/` et référencer |

# 10. Exemples Concrets (Few-Shot)
*Demande : « Crée le skill technique lab-crud-laravel pour nos formulaires. »*
➔ `plugin-dev` génère `.agent/skills/lab-crud-laravel/SKILL.md` avec les 10 rubriques, le motif `feature-dev`, les règles Eloquent et valide avec `validate-skills.cjs`.
