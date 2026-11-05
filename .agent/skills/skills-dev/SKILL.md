---
name: skills-dev
description: Gouverne, conçoit, crée et valide les skills IA selon le standard d'Anthropic (10 rubriques normées), garantit le respect strict de SSOT et DRY, et assure la validation déterministe.
version: 1.4.0
inspiration:
  source: "anthropic/claude-plugins-official"
  plugin: "plugin-dev"
  pattern: "skill scaffolding, trigger tuning & continuous refinement"
---

# 1. Mission
Ce méta-skill assure la gouvernance technique de nos compétences IA : concevoir, créer et valider les **Skills IA** (`.agent/skills/`) selon les motifs d'Anthropic, les principes SSOT/DRY et la conformité SemVer.

# 2. Déclenchement & Limites
- **Activer :** Création d'un skill technique, normalisation des 10 rubriques, audit de conformité.
- **Ne PAS activer :** Suivi méthodologique de lab (`lab-dev`) ou cartographie d'architecture (`lab-skill-engineering`).

# 3. Entrées & Ressources à Charger
- `.agent/rules/` (Directives d'ingénierie transversales).

# 4. Contraintes & Règles Inviolables
1. **10 Rubriques Normées :** Tout `SKILL.md` doit obligatoirement comporter les 10 rubriques standard.
2. **Bloc Inspiration Obligatoire :** Frontmatter YAML avec `source`, `plugin` et `pattern`.
3. **SSOT / DRY :** Règles transversales dans `.agent/rules/`, consignes locales encapsulées dans le skill.
4. **Validation Déterministe :** Exécution réussie de `node .agent/skills/skills-dev/scripts/validate-skills.cjs`.

# 5. Procédure Pas-à-Pas
1. **Motif :** Sélectionner le pattern adapté (`feature-dev`, `setup`, `review`).
2. **Rédaction :** Remplir le gabarit en 10 rubriques et formuler la description à la 3e personne.
3. **Contrôle Qualité :** Exécuter le script `validate-skills.cjs` (0 erreur bloquante).
4. **SemVer :** Définir et incrémenter la version du skill.

# 6. Gestion des Ambiguïtés & Décisions
- **Skill vs Règle :** Contrainte passive ➔ Règle (`.agent/rules/`). Séquence outillée pas-à-pas ➔ Skill (`SKILL.md`).
- **Granularité :** Un skill technique dédié par sujet de lab.

# 7. Format de Sortie & Livrables
- Fichier `.agent/skills/[nom]/SKILL.md` conforme aux 10 rubriques.
- Rapport de validation `validate-skills.cjs` sans erreur.

# 8. Contrôle Qualité (Checklist Binaire)
- [ ] Le frontmatter YAML contient `name`, `description`, `version` et `inspiration` ?
- [ ] Les 10 rubriques normées sont présentes et renseignées ?
- [ ] Le principe SSOT/DRY est respecté ?
- [ ] Le script `validate-skills.cjs` confirme 0 erreur bloquante ?

# 9. Gestion des Erreurs Fréquentes
| Erreur | Cause | Action Immédiate |
| :--- | :--- | :--- |
| Oubli d'une rubrique | Inattention | Compléter la rubrique manquante parmi les 10 |
| Bloc inspiration omis | Omission YAML | Ajouter source, plugin et pattern |
| Règle dupliquée | Violation DRY | Déplacer vers `.agent/rules/` |

# 10. Exemples Concrets (Few-Shot)
*Demande : « Crée le skill flow-developpement pour notre projet fil rouge. »*
➔ `skills-dev` génère `.agent/skills/flow-developpement/SKILL.md` avec les 10 rubriques normées et valide avec `validate-skills.cjs`.
