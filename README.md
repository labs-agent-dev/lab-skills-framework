# Lab Skills v2

Ce dépôt contient les compétences IA (Skills) pour assister le développement des prototypes techniques de nos projets fil rouge.

## 1. Rôle dans le Projet Fil Rouge
- Chaque apprenant réalise individuellement un **Projet Fil Rouge** durant son année de formation.
- **Objectif du Projet Fil Rouge : Développé à 100 % par l'IA.** L'IA doit générer l'ensemble de l'application en respectant notre architecture logicielle et la description des compétences définies dans nos skills.
- **Rôle du Projet Technique (Prototype) : Compréhension & Live Coding.** L'apprenant y apprend et comprend le code en profondeur. Lors de chaque sprint, il réalise le prototype en **live coding direct devant le formateur SANS IA et SANS PROMPT**.
- Les **Labs** permettent de résoudre une problématique technique précise de notre stack (CRUD Laravel, dynamique Alpine.js, composants Preline UI, Conception des Skills).
- **Objectif du Lab actuel :** Concevoir les compétences IA (Skills) de notre agent pour que l'IA développe 100 % du code du projet fil rouge selon notre architecture, tout en préparant l'apprenant à maîtriser le code pour son évaluation en direct.

## 2. Approche Méthodologique
- Nous analysons les compétences existantes dans la communauté (Anthropic, GitHub, agentskills.io).
- Nous appliquons le principe : **« Un Skill Technique Dédié pour chaque Lab »**.
- Nous séparons les responsabilités en 3 niveaux :
  1. **La Méta-Gouvernance (`plugin-dev`) :** création et validation des compétences selon les 10 rubriques normées d'Anthropic.
  2. **La Méta-Méthodologie (`lab-dev`) :** accompagnement du workflow en 6 étapes, cadrage, validation des slides A1 et autorisation du sprint devant le formateur.
  3. **Les Skills Techniques Dédiés (ex: `lab-skill-engineering`) :** compétences spécialisées portant les règles techniques et l'assistance de code pour chaque sujet.

## 3. Les Skills Disponibles dans ce Dépôt

| Skill | Type | Commande | Rôle & Problématique résolue |
| :--- | :--- | :--- | :--- |
| **`plugin-dev`** | Méta-Gouvernance | `/plugin-dev` | Conçoit, norme et valide techniquement tout skill IA selon les standards officiels d'Anthropic. |
| **`lab-dev`** | Méta-Méthodologie | `/lab-dev` | Guide le workflow générique en 6 étapes, cadre le README, audite les slides A1 et autorise le sprint. |
| **`lab-skill-engineering`** | Technique (Lab Actuel) | `/lab-skill-engineering` | Analyse notre stack et notre workflow pour déterminer la cartographie des skills IA à créer pour le projet fil rouge. |

## 4. Démarrage & Validation
- Pour vérifier la conformité de tous les skills présents dans ce dépôt :
  ```powershell
  node .agent/skills/plugin-dev/scripts/validate-skills.cjs
  ```
- Pour préparer un nouveau Lab avec l'agent :
  1. Remplir le fichier `README.md` de votre lab.
  2. Déclencher `lab-dev` pour suivre les 6 étapes méthodologiques.
  3. Créer le skill technique dédié à votre lab en utilisant `plugin-dev`.
