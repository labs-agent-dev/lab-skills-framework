# Veille Technologique : L'Ingénierie des Skills IA

Ce document synthétise l'état de l'art du marché sur la conception et l'orchestration des compétences IA (Skills) pour les développeurs.

---

## 1. Références et Écosystèmes Étudiés

### 1.1 Anthropic (`claude-plugins-official`)
- **Référence :** Dépôt officiel GitHub des plugins et skills Anthropic.
- **Motifs Clés Identifiés :**
  - Le motif `feature-dev` : développement guidé en plusieurs phases sans coder prématurément.
  - Le motif `plugin-dev` : gouvernance des compétences, validation par checklists et gabarit normé en 10 rubriques.
  - Le motif `pr-review-toolkit` : contrôle qualité binaire (PASS / FAIL).
- **Leçon apprise :** L'encapsulation des ressources dans `<skill>/resources/` (principe de divulgation progressive) évite de polluer le prompt initial.

### 1.2 Standards Ouverts : `agentskills.io`
- Spécification indépendante définissant le format standard des compétences IA.
- Structure canonique : Frontmatter YAML (`name`, `description`, `version`) + fichier `SKILL.md` avec instructions outillées.
- Règle de description à la 3ème personne précisant les conditions d'activation et d'exclusion.

### 1.3 Comparatif des Outils Agents Ciblés

| Outil Agent | Contexte d'Utilisation | Mode d'Intégration des Skills |
| :--- | :--- | :--- |
| **Claude Code** | Terminal / CLI | Exécution de commandes directes, lecture de fichiers et de tests. |
| **Google Antigravity** | IDE Graphique | Panneau de chat agentique, lecture des règles permanentes (`.agent/rules/`) et des compétences d'équipe (`.agent/skills/`). |
| **GitHub Copilot** | Éditeur de Code | Suggestions au fil de l'eau, chat contextuel et intégration native. |

---

## 2. Analyse Comparative des Modèles de Granularité

Nous avons comparé 3 hypothèses pour organiser nos compétences :

| Hypothèse | Description | Avantages | Inconvénients | Verdict |
| :--- | :--- | :--- | :--- | :---: |
| **1. Un skill par Technologie** *(ex: HTML, CSS, PHP, Laravel, Alpine)* | Découpage fin par langage | Précision technique élevée | Trop de dispersion, risque de conflits entre compétences lors de l'assemblage | ⚠️ Trop fragmenté |
| **2. Un skill par Phase du Workflow** *(ex: Analyse, Conception, Réalisation, Tests)* | Découpage par étape du projet | Aligné sur le cycle de vie logiciel | Le skill de réalisation doit connaître toutes les technos en même temps | ⚠️ Manque de précision |
| **3. Architecture Hybride Dédiée par Lab** *(Recommandé)* | 2 Méta-Skills (`lab-dev`, `plugin-dev`) + 1 Skill Technique Dédié par sujet de Lab (`lab-skill-engineering`, `lab-crud-laravel`) | Équilibre parfait : contexte ciblé, règles claires, apprentissage progressif | Nécessite un outillage initial rigoureux | ✅ **RECRUTÉ (ADR)** |

