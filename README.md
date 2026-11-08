# Lab Skills Framework : Conception & Architecture des Skills IA

## 1. Contexte & Règle Cardinale
- **Agent Final (`AgentDev`) :** L'agent unique chargé de développer 100 % du code du Projet Fil Rouge selon notre architecture logicielle et nos skills dédiés.
- **Projet Technique (Live Coding sans IA) :** Compris et maîtrisé par l'apprenant, évalué en direct devant le formateur sans IA ni prompt.
- **Objectif du Lab :** Établir le cadre méthodologique, tester et arbitrer les 4 approches d'architecture de skills sur le cas étalon (Landing Page Lauréats), et formaliser les règles transversales dans `.agent/rules/`.

## 2. Architecture des Compétences de ce Lab
| Skill | Type | Déclencheur | Rôle |
| :--- | :--- | :--- | :--- |
| **`lab-dev`** | Méta-Méthodologie | `/lab-dev` | Chef d'orchestre : structure les 5 sous-dossiers, valide le workflow et audite la soutenance. |
| **`architecture-skills`** | Technique (Lab 01) | `/architecture-skills` | Cartographie et conçoit l'architecture des compétences IA selon notre stack (Laravel 11, Alpine.js, Preline UI). |
| **`skill-creator`** | Méta-Outillage | `/skill-creator` | Conçoit, norme (10 rubriques) et valide tout skill IA (issu du Lab 02). |

## 3. Validation Rapide des Compétences
```powershell
node .agent/skills/skill-creator/scripts/validate-skills.cjs
```

## 4. Références - v2
- https://medium.com/@martin.jordanovski/
- https://skills.addy.ie/
  - https://github.com/addyosmani/agent-skills
- https://github.com/obra/superpowers
- https://www.aihero.dev/skills
  - https://github.com/mattpocock/skills
- https://ecc.tools/
  - https://github.com/affaan-m/ECC
  

## 4. Références - v1
- https://github.com/anthropics/claude-plugins-official
- https://github.com/anthropics/skills
- https://www.skills.sh/
