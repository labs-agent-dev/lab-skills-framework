# Veille Technologique : Références & Choix de skills.sh

## 1. Références du Marché Comparées
| Référence | Type | Apport Principal |
| :--- | :--- | :--- |
| **`skills.sh`** | Registre ouvert de skills | Large catalogue communautaire : idéal pour explorer et comparer rapidement. |
| **`claude-plugins-official`** *(Anthropic)* | Dépôt GitHub officiel | Patterns de référence (`feature-dev`) et standard des 10 rubriques normées. |
| **`agentskills.io`** | Standard ouvert | Spécification formelle du format `SKILL.md` et interopérabilité. |
| **Docs Agents** *(Antigravity, Claude Code)* | Guides éditeurs | Règles d'exécution et gestion de contexte en conditions réelles. |

## 2. Justification du Choix : skills.sh
Nous avons retenu **`skills.sh`** comme référence principale pour :
1. **La richesse :** Catalogue public vaste avec exemples immédiatement exploitables.
2. **La diversité :** Présence des 4 approches (technologie, couche, workflow, skill global).
3. **L'accessibilité :** Facilité d'analyse et de test pour les apprenants.

## 3. Exploration sur skills.sh pour nos 4 Approches
| Approche | Recherche | Compétences Candidates | Constat Technique |
| :--- | :--- | :--- | :--- |
| **1. Technologie** | `html`, `tailwind`, `alpinejs` | `tailwind-helper`, `html-boilerplate` | Syntaxe CSS correcte, mais ignore nos composants d'école. |
| **2. Layer** | `mvc`, `controller`, `ui-view` | `mvc-scaffolder`, `api-controller` | Bonne séparation, mais charge trop de fichiers pour une vue. |
| **3. Workflow** | `wireframe`, `testing`, `dev` | `code-reviewer`, `spec-generator` | Structure bien les phases, mais ne produit pas le code complet. |
| **4. Un Seul Skill** | `fullstack`, `feature-dev` | `feature-dev` (Anthropic) | Très complet et autonome, mais consomme beaucoup de tokens. |

## 4. Décision d'Équipe
1. **Test 1 (Brut) :** Évaluer les skills communautaires de `skills.sh` sans modification sur le cas test.
2. **Test 2 (Adapté) :** Adapter les compétences à notre stack (Preline UI, Alpine.js) et à nos règles d'architecture pour le projet fil rouge.
