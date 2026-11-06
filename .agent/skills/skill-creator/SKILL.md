---
name: skill-creator
description: Gouverne, conçoit, crée et valide les skills IA selon le standard d'Anthropic (10 rubriques normées), garantit le respect strict de SSOT et DRY, et assure la validation déterministe pour l'agent AgentDev.
version: 1.5.0
inspiration:
  source: "anthropic/claude-plugins-official"
  plugin: "plugin-dev"
  pattern: "skill scaffolding, trigger tuning & continuous refinement"
---

# 1. Mission
Ce méta-skill assure la gouvernance technique et l'outillage de nos compétences IA : concevoir, générer, normaliser et valider les **Skills IA** (`.agent/skills/`) destinés à équiper l'agent **`AgentDev`** selon le standard en 10 rubriques d'Anthropic, les principes SSOT/DRY et la conformité SemVer.

# 2. Déclenchement & Limites
- **Activer :** Création d'un skill technique, normalisation des 10 rubriques, audit de conformité d'un `SKILL.md`, génération de ressources.
- **Ne PAS activer :** Suivi méthodologique de lab (`lab-dev`) ou cartographie d'architecture globale (`architecture-skills`).

# 3. Entrées & Ressources à Charger
- `.agent/rules/` (Directives d'ingénierie transversales et de nomenclature).
- `.agent/skills/skill-creator/docs/guide-10-rubriques-anthropic.md` (Guide de référence des 10 rubriques normées).

# 4. Contraintes & Règles Inviolables
1. **10 Rubriques Normées :** Tout `SKILL.md` doit obligatoirement comporter les 10 rubriques standard Anthropic.
2. **Nomenclature Sans Préfixe Lab :** Interdiction d'utiliser le préfixe `lab-*` pour les skills techniques (réservé aux répertoires de labs).
3. **Bloc Inspiration Obligatoire :** Frontmatter YAML avec `source`, `plugin` et `pattern`.
4. **SSOT / DRY :** Règles transversales dans `.agent/rules/`, consignes locales encapsulées dans le skill.
5. **Validation Déterministe :** Exécution réussie de `node .agent/skills/skill-creator/scripts/validate-skills.cjs`.

# 5. Procédure Pas-à-Pas
1. **Sélection du Motif :** Définir le pattern adapté (`feature-dev`, `setup`, `review`, `domain-guidance`).
2. **Rédaction Normée :** Remplir le gabarit en 10 rubriques selon `guide-10-rubriques-anthropic.md` et formuler la description à la 3e personne.
3. **Contrôle Qualité :** Exécuter le script `validate-skills.cjs` (0 erreur bloquante).
4. **SemVer & Traçabilité :** Définir et incrémenter la version du skill.

# 6. Gestion des Ambiguïtés & Décisions
- **Skill vs Règle :** Contrainte passive ➔ Règle (`.agent/rules/`). Séquence outillée pas-à-pas ➔ Skill (`SKILL.md`).
- **Nomenclature :** Si l'utilisateur demande `lab-quelquechose`, corriger immédiatement en supprimant `lab-` et en adoptant `[domaine]-[brique]`.

# 7. Format de Sortie & Livrables
- Fichier `.agent/skills/[nom]/SKILL.md` conforme aux 10 rubriques.
- Sous-dossiers optionnels `resources/` et `docs/`.
- Rapport de validation `validate-skills.cjs` sans erreur.

# 8. Contrôle Qualité (Checklist Binaire)
- [ ] Le frontmatter YAML contient `name`, `description`, `version` et `inspiration` ?
- [ ] Les 10 rubriques normées sont présentes et correctement libellées ?
- [ ] Le nom exclut-il tout préfixe `lab-*` ?
- [ ] Le principe SSOT/DRY est-il respecté ?
- [ ] Le script `validate-skills.cjs` confirme 0 erreur bloquante ?

# 9. Gestion des Erreurs Fréquentes
| Erreur | Cause | Action Immédiate |
| :--- | :--- | :--- |
| Préfixe `lab-*` dans un nom de skill | Confusion avec le nom du lab | Renommer en format domaine/brique (ex: `alpine-components`) |
| Oubli d'une rubrique | Inattention | Compléter la rubrique manquante parmi les 10 |
| Bloc inspiration omis | Omission YAML | Ajouter source, plugin et pattern |
| Règle dupliquée | Violation DRY | Déplacer vers `.agent/rules/` |

# 10. Exemples Concrets (Few-Shot)
*Demande : « Crée le skill alpine-components pour notre projet fil rouge. »*
➔ `skill-creator` génère `.agent/skills/alpine-components/SKILL.md` avec les 10 rubriques normées et valide avec `validate-skills.cjs`.
