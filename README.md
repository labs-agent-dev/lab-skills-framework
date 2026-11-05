# Lab Skills v2 : Conception des Skills IA

## 1. Contexte & Règle Cardinale
- **Projet Fil Rouge (100 % IA) :** Développé intégralement par l'IA selon notre architecture logicielle et nos skills.
- **Projet Technique (Live Coding sans IA) :** Compris par l'apprenant, réalisé en direct devant le formateur sans IA ni prompt.
- **Objectif du Lab :** Concevoir et structurer les compétences IA de notre agent pour le fil rouge.

## 2. Architecture des Compétences
| Skill | Type | Commande | Rôle |
| :--- | :--- | :--- | :--- |
| **`plugin-dev`** | Méta-Gouvernance | `/plugin-dev` | Conçoit, norme et valide tout skill IA (standard Anthropic, 10 rubriques). |
| **`lab-dev`** | Méta-Méthodologie | `/lab-dev` | Structure les 5 sous-dossiers de lab, audite les slides A1 et autorise le sprint. |
| **`lab-skill-engineering`** | Technique | `/lab-skill-engineering` | Cartographie et conçoit les compétences IA selon notre stack et workflow. |

## 3. Validation Rapide
```powershell
node .agent/skills/plugin-dev/scripts/validate-skills.cjs
```
