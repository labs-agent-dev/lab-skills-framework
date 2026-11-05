# Réalisation : Test Comparatif des 4 Approches de Skills

## 1. Test 1 (Skills Bruts) vs Test 2 (Skills Adaptés)
| Étape | Approche | Résultat Pratique |
| :--- | :--- | :--- |
| **Test 1 (Brut `skills.sh`)** | Skills communautaires sans retouche | Code généré mais sans nos règles : classes Tailwind obsolètes, Alpine.js ignoré. |
| **Test 2 (Adapté)** | Injection de notre stack (Tailwind, Preline UI, Alpine.js) | Code moderne, filtres d'articles réactifs au clic, structure 100 % prête pour le sprint. |

## 2. Matrice Comparative des 4 Approches
| Critère | Par Technologie | Par Layer | Par Workflow | Un Seul Skill |
| :--- | :---: | :---: | :---: | :---: |
| **Vitesse** | ⚡⚡⚡ Rapide | ⚡⚡ Moyen | ⚡ Structuré | ⚡⚡⚡⚡ Direct |
| **Pédagogie** | ⭐⭐⭐ Facile | ⭐⭐ Technique | ⭐⭐⭐⭐ Méthodique | ⭐⭐⭐ Simple |
| **Tokens (Prompt)** | 🟢 Faible | 🟡 Moyen | 🟢 Faible | 🔴 Élevé |
| **Usage Fil Rouge** | **Briques isolées** | **Back-end lourd** | **Apprentissage & Guidage** | **Prototypage rapide** |

## 3. Livrables du Testbench
- [`landing-page-blog-laureats/index.html`](landing-page-blog-laureats/index.html) : Code testbench responsive avec filtres d'articles réactifs Alpine.js.
- **Décision (ADR) :** Choix de l'**Approche par Phase de Flux de Travail** (`flow-*`), formalisée dans `3.skill-technique/spec-skill.md`.
