# Veille Technologique : Recherche sur skills.sh & État de l'Art

Ce document résume notre recherche de compétences existantes sur le site **`skills.sh`** et sur les dépôts communautaires pour nos 4 approches d'architecture.

---

## 1. Recherche de Compétences sur `skills.sh`

Nous avons recherché sur `skills.sh` et GitHub s'il existe déjà des skills prêts à l'emploi pour nos 4 approches :

| Approche Étudiée | Mots-Clés Cherchés sur `skills.sh` | Skills Existants Trouvés | Constat Immédiat |
| :--- | :--- | :--- | :--- |
| **1. Par Technologie** | `html`, `tailwind`, `alpinejs` | `tailwind-helper`, `html-boilerplate` | Précis sur le langage, mais ignore les conventions de notre projet. |
| **2. Par Layer (Couche)** | `mvc`, `controller`, `frontend-ui` | `mvc-scaffolder`, `api-controller` | Découpe bien les couches, mais oblige l'agent à basculer souvent de skill. |
| **3. Par Workflow** | `wireframe`, `testing`, `development` | `code-reviewer`, `spec-generator` | Très bon pour guider les étapes, mais moins fort pour écrire le code complet. |
| **4. Un Seul Skill** | `fullstack`, `feature-dev` | `feature-dev` (officiel Anthropic) | Très polyvalent, mais le fichier de prompt est lourd en mémoire (tokens). |

---

## 2. Ce qu'on Apprend des Compétences Existantes

1. **Les forces des skills trouvés :**
   - Ils fournissent de bonnes syntaxes de base pour Tailwind et HTML.
   - Ils montrent comment bien structurer un fichier `SKILL.md`.
2. **Les faiblesses des skills trouvés :**
   - **Non adaptés à notre stack :** beaucoup utilisent React ou Bootstrap au lieu d'Alpine.js et Preline UI.
   - **Pas de règles d'équipe :** ils ne connaissent pas nos règles permanentes (`.agent/rules/`).
3. **Notre stratégie d'équipe :**
   - D'abord tester les skills trouvés **sans modification** pour voir leurs limites.
   - Ensuite **adapter ces skills à notre stack et à nos règles** pour obtenir un code parfait pour notre projet fil rouge.
