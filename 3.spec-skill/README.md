# Travail à Réaliser : 3. Spécification Technique du Skill (Résultat Final du Lab)

Ce dossier accueille la spécification technique et la formalisation du skill IA retenu à l'issue des expérimentations du Lab.

---

## 🎯 Objectif Technique
Concevoir et spécifier formellement la compétence technique pour l'agent **`AgentDev`**, sur la base des conclusions et mesures issues de `4.realisation/`.

## 📋 Travail Concret à Réaliser par l'Apprenant (Assisté par `w-spec-skill`)
1. **Formaliser la Décision d'Architecture (ADR) :**
   - Justifier l'approche retenue (parmi les 4 pistes initiales ou une démarche alternative/hybride) à partir des données réelles mesurées dans `4.realisation/`.
2. **Rédiger la Spécification Technique (`spec-skill.md`) :**
   - Créer le fichier `spec-skill.md` dans ce dossier.
   - Définir le nom normé (format `[domaine]-[brique]`, sans préfixe `lab-`), les règles d'architecture strictes, les ressources d'entrée et le contrat d'interface.
3. **Finaliser le Skill dans `.agent/skills/` avec `skill-creator` :**
   - Structurer le skill selon les 10 rubriques normées d'Anthropic sous `.agent/skills/[domaine-brique]/SKILL.md`.
   - Valider la conformité déterministe avec :
     ```powershell
     node .agent/skills/skill-creator/scripts/validate-skills.cjs
     ```
