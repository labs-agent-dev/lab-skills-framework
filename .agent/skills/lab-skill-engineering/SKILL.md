---
name: lab-skill-engineering
description: Réalise l'ingénierie des compétences IA (Skill Engineering) à partir de notre stack de développement et de notre flux de travail. Détermine, conçoit et cartographie les skills IA à créer ou à réutiliser pour le prototype du projet fil rouge. À déclencher pour concevoir l'architecture des compétences IA. Ne pas déclencher pour le cadrage méthodologique de lab ou pour coder du code métier.
version: 1.0.1
inspiration:
  source: "anthropic/claude-plugins-official"
  plugin: "feature-dev"
  pattern: "skill-architecture, trade-off matrix & progressive disclosure"
---

# 1. Mission
Ce skill expert conçoit l'architecture globale des compétences IA pour le projet fil rouge. Il analyse notre **Stack Technique** (Laravel, Alpine.js, Preline UI) et notre **Flux de Travail** pour déterminer et cartographier les skills nécessaires pour que l'IA développe 100 % du code du projet fil rouge.

# 2. Déclenchement & Limites
- **Activer :** Conception de l'architecture des compétences IA, arbitrage de granularité (par tech, par couche, par flux ou skill unique).
- **Ne PAS activer :** Cadrage méthodologique de lab (`lab-dev`), normalisation de `SKILL.md` (`plugin-dev`), ou rédaction de code métier.

# 3. Entrées & Ressources à Charger
- `.agent/skills/lab-skill-engineering/resources/matrice-stack-workflow.md` (Matrice Stack x Workflow).
- `.agent/skills/lab-skill-engineering/resources/criteres-granularite.md` (Règles de granularité des skills).

# 4. Contraintes & Règles Inviolables
1. **Granularité Optimale :** Ni micro-skills de quelques lignes, ni mega-prompts monolithiques. Privilégier un skill technique dédié par sujet de lab.
2. **SSOT / DRY :** Directives transversales dans `.agent/rules/`, ressources locales dans `<skill>/resources/`.
3. **Multi-Agents :** Compatibilité avec Claude Code, Google Antigravity et GitHub Copilot.

# 5. Procédure Pas-à-Pas
1. **Cartographie Stack & Workflow :** Décomposer les composants techniques et les étapes du projet.
2. **Veille Références :** Comparer les compétences disponibles (`skills.sh`, Anthropic).
3. **Arbitrage Granularité :** Valider l'approche (hybride : 2 méta-skills + 1 skill dédié par sujet).
4. **Spécification :** Définir les fiches d'identité des compétences à créer.
5. **Formalisation ADR :** Rédiger la décision d'architecture pour le rapport de lab.

# 6. Gestion des Ambiguïtés & Décisions
- **Hésitation sur la granularité :** Un skill technique par brique de lab garantit un contexte propre et une évaluation claire en sprint.
- **Outil mineur :** Ne pas créer de skill dédié ; consigner la consigne dans les ressources d'un skill parent.

# 7. Format de Sortie & Livrables
- Matrice des compétences IA (`matrice-architecture-skills.md`).
- Fiches de spécification prêtes pour `plugin-dev`.
- Rapport d'arbitrage (ADR).

# 8. Contrôle Qualité (Checklist Binaire)
- [ ] La cartographie couvre-t-elle l'ensemble de notre stack ?
- [ ] Le principe SSOT/DRY est-il respecté (zéro duplication de règles) ?
- [ ] L'arbitrage de granularité est-il justifié ?
- [ ] Le validateur `validate-skills.cjs` confirme 0 erreur ?

# 9. Gestion des Erreurs Fréquentes
| Erreur | Cause | Action Immédiate |
| :--- | :--- | :--- |
| Micro-skill de 3 lignes | Dispersion | Intégrer dans les ressources d'un skill parent |
| Monolithe tout-en-un | Saturation de contexte | Découper en skills techniques dédiés par sujet |
| Règles CSS dupliquées | Dette technique | Centraliser dans `.agent/rules/` |

# 10. Exemples Concrets (Few-Shot)
*Apprenant : « Quelle architecture de skills pour Laravel, Alpine.js et Preline UI ? »*
➔ `lab-skill-engineering` propose : méta-gouvernance (`lab-dev`, `plugin-dev`) + skills dédiés (`lab-crud-laravel`, `lab-alpinejs`, `lab-preline-ui`) et génère la matrice d'architecture.
