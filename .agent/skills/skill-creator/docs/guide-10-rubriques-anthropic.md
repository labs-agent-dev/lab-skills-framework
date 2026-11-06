# Guide de Référence : Les 10 Rubriques Normées d'Anthropic pour les Skills IA

Ce guide constitue la référence méthodologique officielle pour la conception, la rédaction et l'audit de tout fichier `SKILL.md` au sein de notre écosystème d'ingénierie logicielle (Google Antigravity, GitHub Copilot, Claude Code).

---

## 1. Philosophie & Principe de Divulgation Progressive (Progressive Disclosure)

Un **Skill** n'est pas un prompt figé ou un long document passif. C'est une **procédure opérationnelle outillée** chargée à la demande dans la mémoire de travail de l'agent.

Pour préserver la fenêtre de contexte et éviter les hallucinations :
1. **Au démarrage :** L'agent ne lit que les métadonnées légères (`name` et `description`).
2. **À l'activation :** Dès qu'une requête correspond au déclencheur, le fichier `SKILL.md` est injecté.
3. **À l'exécution :** Les fichiers secondaires du sous-dossier `resources/` ne sont lus que si l'étape en cours le réclame.

---

## 2. Le Frontmatter YAML Obligatoire

Tout skill débute obligatoirement par un en-tête YAML délimité par `---` :

```yaml
---
name: [nom-en-kebab-case]
description: [Description à la 3e personne décrivant le rôle précis et les déclencheurs clés]
version: 1.0.0
inspiration:
  source: "anthropic/claude-plugins-official"
  plugin: "[plugin-source-ex-feature-dev-ou-plugin-dev]"
  pattern: "[motif-architectural-utilise]"
---
```

### Règles d'or du Frontmatter :
- **`name` :** Minuscules et tirets uniquement (`kebab-case`). Aucun préfixe `lab-*` (réservé aux répertoires de labs).
- **`description` :** Rédigée obligatoirement à la 3e personne du singulier (*« Conçoit... »*, *« Valide... »*). Doit expliciter quand activer et quand ne pas activer.
- **`inspiration` :** Indique la source formelle de référence chez Anthropic garantissant la traçabilité architecturale.

---

## 3. Détail des 10 Rubriques Normées

### `# 1. Mission`
- **Objectif :** Définir en 2 à 4 phrases la raison d'être fondamentale de la compétence.
- **Contenu :** Qui est ce skill, quel problème il résout, et pour quel livrable ou résultat final il travaille (ex: brique pour le projet fil rouge développé par `AgentDev`).

### `# 2. Déclenchement & Limites`
- **Objectif :** Poser les frontières d'activation strictes pour éviter les conflits d'outils.
- **Contenu :** 
  - Deux sous-parties indispensables :
    - **Quand l'activer :** mots-clés, intentions utilisateur, étapes de flux.
    - **Quand NE PAS l'activer :** réorientation explicite vers d'autres compétences (ex: *« Ne pas activer pour le cadrage ➔ utiliser `lab-dev` »*).

### `# 3. Entrées & Ressources à Charger`
- **Objectif :** Lister les prérequis documentaires et les fichiers d'appui.
- **Contenu :** Chemins relatifs vers `.agent/rules/` ou le sous-dossier local `<skill>/resources/`, ordonnés par niveau de priorité.

### `# 4. Contraintes & Règles Inviolables`
- **Objectif :** Énoncer les gardes-fous non négociables.
- **Contenu :** Règles de sécurité, principes d'architecture (SSOT, DRY), respect de la nomenclature (pas de `lab-*` technique), et interdiction de substitution de l'apprenant.

### `# 5. Procédure Pas-à-Pas`
- **Objectif :** Décrire l'algorithme d'exécution séquentiel.
- **Contenu :** Étapes ordonnées et numérotées (1, 2, 3...) guidant l'agent de l'analyse initiale jusqu'à la production du livrable.

### `# 6. Gestion des Ambiguïtés & Décisions`
- **Objectif :** Anticiper les cas limites et les choix d'implémentation.
- **Contenu :** Arbre décisionnel sous forme : *« Si [situation floue], alors [décision déterministe préconisée] »*.

### `# 7. Format de Sortie & Livrables`
- **Objectif :** Définir la forme exacte des réponses et des fichiers générés.
- **Contenu :** Gabarits de code, structure des messages de confirmation, format des rapports (ex: Markdown, JSON, diff de code).

### `# 8. Contrôle Qualité (Checklist Binaire)`
- **Objectif :** Auto-vérification finale par l'agent avant de redonner la main à l'utilisateur.
- **Contenu :** Une liste à puces de vérifications binaires formulées sous forme de questions fermées :
  - `[ ] Critère 1 respecté ?`
  - `[ ] Critère 2 validé ?`

### `# 9. Gestion des Erreurs Fréquentes`
- **Objectif :** Diagnostic immédiat des dérives et remédiation directe.
- **Contenu :** Tableau markdown à 3 colonnes :
  | Erreur Détectée | Cause Racine | Action Immédiate de Remédiation |
  | :--- | :--- | :--- |

### `# 10. Exemples Concrets (Few-Shot)`
- **Objectif :** Guider le modèle par l'exemple (apprentissage en contexte).
- **Contenu :** Au moins un scénario concret avec le prompt typique de l'utilisateur et le comportement / livrable précis attendu de l'agent.

---

## 4. Contrôle Automatisé

La conformité de tout fichier `SKILL.md` est validée de façon déterministe par le script :
```powershell
node .agent/skills/skill-creator/scripts/validate-skills.cjs
```
Ce script vérifie l'intégrité du frontmatter YAML, la présence des 10 titres exacts et l'absence d'erreurs bloquantes.
