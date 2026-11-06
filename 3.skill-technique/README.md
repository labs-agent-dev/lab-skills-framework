# Travail à Réaliser : 3. Skill Technique (Résultat Final du Lab)

Ce dossier accueille la spécification et la conception du skill technique final retenu à l'issue du Lab.

---

## 🎯 Objectif Technique
Concevoir et spécifier la compétence IA retenue pour l'agent **`AgentDev`**, sur la base des conclusions tirées des expérimentations dans `4.realisation/`.

## 📋 Travail Concret à Réaliser par l'Apprenant
1. **Choisir l'Approche Retenue (ADR) :**
   - Sélectionner **une seule approche** parmi les 4 expérimentées (ex: Approche modulaire hybride par domaine technique).
2. **Spécifier le Skill Dédié (`spec-skill.md`) :**
   - Créer le fichier `spec-skill.md` dans ce dossier.
   - Définir le nom normé (sans préfixe `lab-`), les règles techniques invariables, la cartographie des responsabilités et les entrées/sorties attendues.
3. **Créer le Skill dans `.agent/skills/` :**
   - Utiliser le méta-skill **`skill-creator`** pour créer et normaliser le skill sous `.agent/skills/[nom]/SKILL.md` (10 rubriques d'Anthropic).
   - Valider la conformité déterministe avec :
     ```powershell
     node .agent/skills/skill-creator/scripts/validate-skills.cjs
     ```
