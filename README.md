# Lab Skills v2

Ce dépôt contient les compétences IA (Skills) pour assister le développement des prototypes techniques de nos projets fil rouge.

## 1. Rôle dans le Projet Fil Rouge
- Chaque apprenant développe un **Projet Fil Rouge** pour valider ses compétences.
- Pour construire ce projet, nous réalisons d'abord un **Prototype technique** par sprints.
- Chaque sprint est présenté en direct devant le formateur.
- Les **Labs** permettent de résoudre une problématique technique précise de notre stack (CRUD Laravel, dynamique Alpine.js, composants Preline UI, Ingénierie des Skills).

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
