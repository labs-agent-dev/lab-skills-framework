# Spécification Technique : Skill `lab-skill-engineering`

Ce document définit la fiche d'identité et les exigences techniques du skill dédié à l'ingénierie des compétences IA.

---

## 1. Fiche d'Identité du Skill

- **Nom :** `lab-skill-engineering`
- **Emplacement :** `.agent/skills/lab-skill-engineering/`
- **Version :** `1.0.0`
- **Inspiration :** Anthropic `feature-dev` (motif d'architecture et de matrice de décision).
- **Déclencheur d'activation :** `/lab-skill-engineering` ou toute question d'architecture de compétences IA.

---

## 2. Mission Principale
Analyser notre stack technique (Laravel, Alpine.js, Preline UI, MySQL) et notre flux de travail d'apprenant (Analyse, Conception, Réalisation, Tests, Sprint), pour déterminer, concevoir et cartographier les skills IA nécessaires pour réussir le prototype du projet fil rouge.

---

## 3. Règles Techniques Inviolables
1. **Règle de Granularité :** Recommander un découpage méso (un skill technique par sujet de lab) pour préserver la fenêtre de contexte de l'agent.
2. **Règle DRY / SSOT :** Placer les directives permanentes dans `.agent/rules/` et les ressources spécialisées dans `<skill>/resources/`.
3. **Compatibilité Multi-Agents :** Garantir que les formats sont exploitables sur Claude Code, Antigravity et Copilot.
4. **Validation Déterministe :** Exiger un passage à 100% sans erreur du script `validate-skills.cjs`.

---

## 4. Ressources Associées
- `resources/matrice-stack-workflow.md` (Cartographie Stack x Workflow x Skills).
- `resources/criteres-granularite.md` (Grille de décision pour la taille des compétences).

