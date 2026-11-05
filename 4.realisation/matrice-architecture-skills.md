# Réalisation : Matrice d'Architecture des Skills IA

## 1. Cartographie Multi-Niveaux
```mermaid
graph TD
    subgraph Méta ["Niveau 1 : Méta-Gouvernance"]
        G1["plugin-dev (Normes Anthropic)"]
        G2["lab-dev (Méthode 5 Dossiers)"]
    end
    subgraph Architecture ["Niveau 2 : Skill d'Architecture"]
        S0["lab-skill-engineering"]
    end
    subgraph Futur ["Niveau 3 : Skills Techniques Futurs"]
        S1["lab-crud-laravel"]
        S2["lab-alpinejs"]
        S3["lab-preline-ui"]
    end
    G1 & G2 --> S0 --> S1 & S2 & S3
```

## 2. Définition des Rôles
| Skill | Niveau | Rôle Opérationnel | Périmètre |
| :--- | :--- | :--- | :--- |
| **`plugin-dev`** | Méta | Conçoit et valide les `SKILL.md` (10 rubriques). | `.agent/skills/*/SKILL.md` |
| **`lab-dev`** | Méta | Cadre les 5 dossiers, Todo.md et slides A1. | `1.besoin/` à `5.rapport-et-presentation/` |
| **`lab-skill-engineering`** | Technique (Actuel) | Cartographie les compétences pour le fil rouge. | `4.realisation/` |
| **`lab-crud-laravel`** | Technique (Futur) | Génère le backend Laravel (Eloquent, FormRequests). | Controllers, Models |
| **`lab-alpinejs`** | Technique (Futur) | Frontend réactif (états, modals, filtres). | `x-data`, vues Blade |
| **`lab-preline-ui`** | Technique (Futur) | Intégration de composants Tailwind accessibles. | Composants Blade UI |

## 3. Contrôle Qualité
- Script `validate-skills.cjs` : **100 % conforme (0 erreur)** sur `lab-dev`, `lab-skill-engineering` et `plugin-dev`.
