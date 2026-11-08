# Phase 6 : SHIP — Fiche de Livraison & Démonstration Live Coding (Sans IA)

> **Étape 6 du Playbook SDLC :** Livraison formelle du livrable, contrôle d'intégrité et préparation à l'évaluation en direct sans IA devant le formateur.

---

## 1. Récapitulatif du Package Livré

| Composant | Emplacement | Rôle |
| :--- | :--- | :--- |
| **Interface Réactive** | [`4.realisation/3-build/index.html`](file:///d:/labs-agent-dev/lab-skills-framework/4.realisation/3-build/index.html) | Vue autonome (Alpine.js 3.x, Tailwind CSS, Preline UI). |
| **Service Layer Métier** | [`4.realisation/3-build/app/Services/CategoryService.php`](file:///d:/labs-agent-dev/lab-skills-framework/4.realisation/3-build/app/Services/CategoryService.php) | Logique métier et transactions SQL. |
| **Data Transfer Object** | [`4.realisation/3-build/app/DTO/CategoryData.php`](file:///d:/labs-agent-dev/lab-skills-framework/4.realisation/3-build/app/DTO/CategoryData.php) | Typage strict immutable (PHP 8.2+). |
| **Contrôleur HTTP Fin** | [`4.realisation/3-build/app/Http/Controllers/CategoryController.php`](file:///d:/labs-agent-dev/lab-skills-framework/4.realisation/3-build/app/Http/Controllers/CategoryController.php) | Passerelle HTTP pure. |
| **Tests Unitaires & Intégration** | [`4.realisation/4-verify/CategoryServiceTest.php`](file:///d:/labs-agent-dev/lab-skills-framework/4.realisation/4-verify/CategoryServiceTest.php) | Validation Pest / PHPUnit anti-$N+1$. |

---

## 2. Déroulé de Démonstration en Direct (Sprint Formateur - 5 min sans IA)

### Minute 1 : Arborescence & Présentation du Playbook
- Présenter l'organisation en 6 phases inspirée de [`skills.addy.ie`](https://skills.addy.ie/).
- Montrer la séparation physique : `1-define/`, `2-plan/`, `3-build/`, `4-verify/`, `5-review/`, `6-ship/`.

### Minute 2 à 3 : Démonstration Réactive dans le Navigateur
- Lancer [`index.html`](file:///d:/labs-agent-dev/lab-skills-framework/4.realisation/3-build/index.html).
- Tester la recherche instantanée (filtrage réactif sans rechargement).
- Créer une catégorie : montrer la saisie du nom et l'auto-génération du slug en direct via Alpine.js.
- Modifier et supprimer une catégorie : observer les transitions du modal et les toasts de notification.

### Minute 4 à 5 : Explication du Code & Mini-Défi sans IA
- Ouvrir `CategoryService.php` et expliquer l'intérêt de `DB::transaction()` et de `withCount('posts')`.
- Ouvrir `CategoryController.php` et montrer comment il injecte le service sans aucune requête SQL directe.
- **Réussir le mini-défi formateur :** ajouter un champ ou modifier un filtre en direct dans le code sans prompt ni IA.

