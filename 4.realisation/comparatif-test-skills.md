# Réalisation : Test Comparatif des Skills & Adaptation

Ce document résume nos tests pratiques en 2 temps pour réaliser la Landing Page du Blog des Lauréats.

---

## 1. Test 1 : Réalisation avec les Skills Bruts (Sans Modification)

Nous avons demandé à l'agent de générer la landing page en utilisant uniquement les skills trouvés sur `skills.sh` sans les modifier :

| Approche Testée | Résultat Obtenu | Problèmes Rencontrés |
| :--- | :--- | :--- |
| **Par Technologie** | Code HTML et CSS fonctionnel | Pas de respect des couleurs de notre école, classes Tailwind parfois obsolètes. |
| **Par Layer** | Bonne structure de fichiers | Trop de va-et-vient entre les fichiers pour une simple page. |
| **Par Workflow** | Bonne méthode de travail | L'agent s'arrête entre chaque étape pour demander validation, c'est un peu lent. |
| **Un Seul Skill** | Page générée en une seule fois | Code compact mais parfois trop monolithique dans un seul fichier. |

**Bilan du Test 1 :** Les skills bruts du web fonctionnent, mais ils ne respectent ni notre stack exacte (Alpine.js réactif) ni nos règles de projet.

---

## 2. Test 2 : Réalisation avec les Skills Adaptés à notre Stack

Nous avons adapté les compétences en ajoutant nos règles de développement :
- Utilisation de **Tailwind CSS** moderne et composants **Preline UI**.
- Interactivité légère et fluide avec **Alpine.js** (menu mobile et filtres d'articles réactifs).
- Charte graphique professionnelle adaptée au Blog des Lauréats.

**Résultat du Test 2 :**
- Le code est propre, bien commenté et directement réutilisable dans le projet fil rouge.
- Les articles se filtrent instantanément au clic sans recharger la page.
- Le fichier `landing-page-blog-laureats/index.html` est 100% fonctionnel et prêt pour la démo du sprint.

---

## 3. Comparatif Synthétique des 4 Approches d'Architecture

| Critère d'Évaluation | Par Technologie | Par Layer | Par Workflow | Un Seul Skill |
| :--- | :---: | :---: | :---: | :---: |
| **Vitesse de Réalisation** | ⚡⚡⚡ Rapide | ⚡⚡ Moyen | ⚡⚡ Structuré | ⚡⚡⚡⚡ Très rapide |
| **Facilité pour l'Apprenant** | ⭐⭐⭐ Facile | ⭐⭐ Technique | ⭐⭐⭐⭐ Méthodique | ⭐⭐⭐⭐ Direct |
| **Consommation de Mémoire (Tokens)** | 🟢 Faible | 🟡 Moyenne | 🟢 Faible | 🔴 Élevée |
| **Risque d'Erreurs / Conflits** | 🟡 Faible | 🟡 Moyen | 🟢 Très faible | 🟡 Moyen |
| **Recommandation pour le Fil Rouge** | **Utile par brique** | **Pour gros projets** | **Pour débuter** | **Pour prototyper vite** |

