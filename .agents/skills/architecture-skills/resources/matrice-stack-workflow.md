# Matrice Croisée : Stack Technique x Flux de Travail x Skills IA

Ce document sert de référentiel technique au skill `lab-skill-engineering` pour déterminer précisément les compétences IA à créer ou à réutiliser pour le projet fil rouge.

---

## 1. Notre Stack Technique de Référence
- **Backend :** Laravel 12 / PHP 8.2+ (Routing, Controllers, Eloquent ORM, FormRequests, Migrations).
- **Frontend Réactif :** Alpine.js (Directives `x-data`, `x-show`, `x-on`, `$dispatch`, gestion d'état léger).
- **Interface & Design :** Tailwind CSS + Preline UI (Composants UI prêts à l'emploi, responsive, accessibilité).
- **Base de Données :** MySQL / MariaDB (Modélisation relationnelle, clés étrangères, index).
- **Agents IA Ciblés :** Claude Code (CLI), Google Antigravity (IDE), GitHub Copilot (éditeur).

---

## 2. Notre Flux de Travail (Workflow d'Apprenant)
1. **Phase 1 : Analyse & Cadrage du Besoin** (Cahier des charges, cas d'utilisation, user stories).
2. **Phase 2 : Conception Technique** (Modélisation MCD/MLD, maquettage UI, architecture des routes et API).
3. **Phase 3 : Réalisation Backend** (Migrations, Modèles Eloquent, Contrôleurs, Form Requests, Seeders).
4. **Phase 4 : Réalisation Frontend & UI** (Composants Blade + Preline UI, interactions Alpine.js).
5. **Phase 5 : Tests & Validation** (Tests fonctionnels, vérification console, test de régression).
6. **Phase 6 : Soutenance en Sprint devant le Formateur** (Démo live 5 min, explication orale en français A1).

---

## 3. Cartographie des Skills IA à Créer pour le Projet Fil Rouge

| Brique Technique / Étape | Problématique Technique Résolue | Skill IA Recommandé | Type de Skill |
| :--- | :--- | :--- | :--- |
| **Gouvernance des Labs** | Cadrer le workflow en 6 étapes et valider les livrables | `lab-dev` | Méta-Skill (Méthodologie) |
| **Conception de Skills** | Créer des skills conformes aux 10 rubriques Anthropic | `plugin-dev` | Méta-Skill (Gouvernance) |
| **Architecture IA** | Déterminer les compétences IA depuis la stack et le workflow | `lab-skill-engineering` | Skill Technique (Lab actuel) |
| **Backend Laravel** | Générer migrations, modèles, contrôleurs et validation RESTful | `lab-crud-laravel` | Skill Technique (Lab CRUD) |
| **Frontend Alpine.js** | Gérer les interactions réactives, modals et formulaires dynamiques | `lab-alpinejs` | Skill Technique (Lab Réactivité) |
| **Composants Preline UI** | Intégrer les composants UI Tailwind accessibles et standardisés | `lab-preline-ui` | Skill Technique (Lab UI Design) |

---

## 4. Recommandation d'Arbitrage Architectural (ADR)
- **Choix retenu :** Architecture Hybride (Méta-Gouvernance + Skills Techniques Dédiés par Lab).
- **Justification :** 
  - Évite les mega-prompts monolithiques qui saturent la fenêtre de contexte.
  - Permet à chaque apprenant de se concentrer sur une brique technique à la fois en sprint.
  - Garantit que chaque Lab possède son propre skill technique spécialisé.

