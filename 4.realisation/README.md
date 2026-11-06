# Travail à Réaliser : 4. Réalisation & Expérimentation (Banc d'Essai Étalon)

Ce dossier accueille le banc d'essai concret de notre démarche : l'implémentation du **CRUD des Catégories** selon l'**Approche Hybride Modulaire (P0 Laravel + Module Frontend Alpine.js)**.

---

## 🎯 Objectif Technique
Concrétiser et valider l'approche retenue lors du benchmark :
1. **Socle Backend P0 (Inspiré des standards industriels `HoangNguyen0403`) :**
   - Contrôleur fin (`CategoryController.php`) sans logique métier encombrante.
   - Form Requests dédiées (`StoreCategoryRequest.php`, `UpdateCategoryRequest.php`) pour une validation étanche.
   - Modèle Eloquent (`Category.php`) optimisé avec scopes et comptage des relations (`withCount('posts')`) pour éviter les requêtes N+1.
2. **Module Frontend Réactif Alpine.js (Sur-mesure selon les fondamentaux de notre stack) :**
   - Composant d'interface autonome `index.html` motorisé par **Alpine.js 3.x**, stylisé avec **Tailwind CSS** et les composants accessibles **Preline UI**.
   - Recherche en direct, filtrage réactif par statut, pagination dynamique.
   - Modal d'ajout et d'édition sans rechargement de page (`x-show`, `x-transition`, binding `x-model`).
   - Confirmation de suppression et système de notifications Toast réactif.

---

## 📁 Organisation des Fichiers dans `4.realisation/`

- **[`index.html`](file:///d:/labs-agent-dev/lab-skills-framework/4.realisation/index.html) :** Interface interactive complète du CRUD des Catégories (prête pour la démonstration dans le navigateur et l'épreuve de live coding).
- **[`backend-contracts/`](file:///d:/labs-agent-dev/lab-skills-framework/4.realisation/backend-contracts/) :**
  - `CategoryController.php` : Contrôleur Laravel 12 conforme au standard P0 architecture.
  - `StoreCategoryRequest.php` : Form Request validant `name`, `slug` et `status`.
  - `Category.php` : Modèle Eloquent sécurisé avec `$fillable` et relations.
- **[`rapport-test-hybride.md`](file:///d:/labs-agent-dev/lab-skills-framework/4.realisation/rapport-test-hybride.md) :** Fiche de mesure des métriques (vitesse, tokens, conformité stack, préparation live coding sans IA).
