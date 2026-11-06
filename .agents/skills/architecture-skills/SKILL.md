---
name: architecture-skills
description: Réalise l'ingénierie des compétences IA (Skill Engineering) à partir de notre stack de développement et de notre flux de travail. Détermine, conçoit et cartographie les skills IA à créer ou à réutiliser pour le projet fil rouge développé par AgentDev. À déclencher pour concevoir l'architecture des compétences IA. Ne pas déclencher pour le cadrage méthodologique de lab ou pour coder du code métier.
version: 1.1.0
inspiration:
  source: "anthropic/claude-plugins-official"
  plugin: "feature-dev"
  pattern: "skill-architecture, trade-off matrix & progressive disclosure"
---

# 1. Mission
Ce skill expert conçoit l'architecture globale des compétences IA pour le projet fil rouge développé par l'agent **`AgentDev`**. Il analyse notre **Stack Technique** (Laravel 11, Alpine.js, Preline UI, Tailwind CSS) et notre **Flux de Travail** pour déterminer et cartographier les skills nécessaires pour que l'IA développe 100 % du code du projet fil rouge, tout en servant de socle de compréhension pour l'apprenant dans son projet technique.

# 2. Déclenchement & Limites
- **Activer :** Conception de l'architecture des compétences IA, arbitrage de granularité (par tech, par couche, par flux ou skill unique), cartographie des responsabilités.
- **Ne PAS activer :** Cadrage méthodologique de lab (`lab-dev`), normalisation de `SKILL.md` (`skill-creator`), ou rédaction de code métier.

# 3. Entrées & Ressources à Charger
- `.agent/skills/architecture-skills/resources/matrice-stack-workflow.md` (Matrice Stack x Workflow).
- `.agent/skills/architecture-skills/resources/criteres-granularite.md` (Règles de granularité des skills).

# 4. Contraintes & Règles Inviolables
1. **Nomenclature Normée :** Aucun skill technique ne doit porter le préfixe `lab-*` (réservé aux répertoires de labs). Utiliser `[domaine]-[brique]` (ex: `alpine-components`, `laravel-crud`, `preline-ui`).
2. **Granularité Optimale :** Ni micro-skills de quelques lignes, ni mega-prompts monolithiques. Privilégier un skill technique dédié par sujet technique majeur.
3. **SSOT / DRY :** Directives transversales dans `.agent/rules/`, ressources locales dans `<skill>/resources/`.
4. **Multi-Agents :** Compatibilité prioritaire avec Google Antigravity, puis GitHub Copilot et Claude Code.

# 5. Procédure Pas-à-Pas
1. **Cartographie Stack & Workflow :** Décomposer les composants techniques et les étapes du projet fil rouge.
2. **Veille Références :** Comparer les compétences disponibles (`skills.sh`, Anthropic).
3. **Arbitrage Granularité :** Valider l'approche (hybride : méta-skills `lab-dev` + `skill-creator`, complétés de skills techniques dédiés par brique).
4. **Spécification :** Définir les fiches d'identité des compétences à créer pour l'agent `AgentDev`.
5. **Formalisation ADR :** Rédiger la décision d'architecture pour le rapport de lab.

# 6. Gestion des Ambiguïtés & Décisions
- **Hésitation sur la granularité :** Un skill technique par brique majeure garantit un contexte propre et une évaluation claire en sprint live coding.
- **Outil mineur :** Ne pas créer de skill dédié ; consigner la consigne dans les ressources d'un skill parent.

# 7. Format de Sortie & Livrables
- Matrice des compétences IA (`matrice-architecture-skills.md`).
- Fiches de spécification prêtes pour `skill-creator`.
- Rapport d'arbitrage (ADR).

# 8. Contrôle Qualité (Checklist Binaire)
- [ ] La cartographie couvre-t-elle l'ensemble de notre stack ?
- [ ] Le principe SSOT/DRY est-il respecté (zéro duplication de règles) ?
- [ ] La nomenclature exclut-elle strictement le préfixe `lab-*` pour les skills techniques ?
- [ ] Le validateur `validate-skills.cjs` confirme 0 erreur ?

# 9. Gestion des Erreurs Fréquentes
| Erreur | Cause | Action Immédiate |
| :--- | :--- | :--- |
| Préfixe `lab-*` sur un skill technique | Violation de nomenclature | Renommer en format domaine/brique (ex: `alpine-components`) |
| Micro-skill de 3 lignes | Dispersion | Intégrer dans les ressources d'un skill parent |
| Monolithe tout-en-un | Saturation de contexte | Découper en skills techniques dédiés par sujet |
| Règles CSS dupliquées | Dette technique | Centraliser dans `.agent/rules/` |

# 10. Exemples Concrets (Few-Shot)
*Apprenant : « Quelle architecture de skills pour Laravel, Alpine.js et Preline UI ? »*
➔ `architecture-skills` propose : méta-gouvernance (`lab-dev`, `skill-creator`) + skills techniques dédiés (`laravel-crud`, `alpine-components`, `preline-ui`) et génère la matrice d'architecture.
