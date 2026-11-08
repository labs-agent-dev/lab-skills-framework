# Présentation du Lab : Framework & Architecture des Skills IA

> **Support de Soutenance Oral (Marp / Markdown) :** Conforme aux règles d'évaluation du sprint. Chaque diapositive comporte exactement 3 phrases orales simples en français de niveau A1.

---

## Page de Garde
| Information | Détail |
| :--- | :--- |
| **Titre du Lab** | Framework & Architecture des Skills IA |
| **Apprenant** | Équipe Solicode 2026 |
| **Agent Final** | **AgentDev** (Développe 100 % du Projet Fil Rouge selon notre architecture) |
| **Prototype Sprint** | Live coding direct devant le formateur SANS IA et SANS PROMPT |
| **Stack Technique** | PHP 8.2+ / Laravel 12 avec Service Layer, Alpine.js 3.x, Tailwind CSS |

---

## Slide 1 : Présentation & Objectifs du Lab
- **AgentDev (100 % IA) :** Code produit selon notre architecture logicielle et le Playbook SDLC.
- **Prototype Sprint :** Réalisé et maîtrisé en direct sans IA ni prompt devant le formateur.
- **Cas Test Commun :** CRUD des Catégories avec Laravel Service Layer et Alpine.js.

> **🎙️ Notes de l'orateur (3 phrases simples A1) :**
> 1. « Bonjour, je vous présente notre travail sur l'architecture des compétences IA. »
> 2. « Nous voulons construire un agent de code sérieux qui respecte toutes les règles. »
> 3. « Pour l'évaluation, je maîtrise tout le code et je peux coder en direct sans IA. »

---

## Slide 2 : Les 4 Philosophies d'Agents IA (Martin Jordanovski)
- **Le Playbook (Addy Osmani) :** Cycle complet SDLC en 6 phases avec garde-fous anti-bâclage.
- **Le Pipeline (Superpowers) :** Boucle interne rigide guidée par le TDD et les sous-agents.
- **La Boîte à Outils (Matt Pocock) :** Outils légers et rapides pour le développeur.
- **Le Système d'Exploitation (ECC) :** Couche globale de session, mémoire et sécurité.

> **🎙️ Notes de l'orateur (3 phrases simples A1) :**
> 1. « Il existe quatre grandes manières d'organiser le travail d'un agent IA. »
> 2. « Certaines méthodes sont trop rigides et d'autres sont trop simples. »
> 3. « Nous avons choisi le modèle du Playbook d'Addy Osmani pour notre projet. »

---

## Slide 3 : Le Playbook Adapté à Laravel Service Layer
- **6 Phases Réelles :** Define ➔ Plan ➔ Build ➔ Verify ➔ Review ➔ Ship.
- **Séparation des Couches :** Contrôleur fin ➔ DTO ➔ Service Métier ➔ Eloquent sans $N+1$.
- **Rigueur d'Ingénierie :** Tests unitaires obligatoires et zéro code spaghetti.

> **🎙️ Notes de l'orateur (3 phrases simples A1) :**
> 1. « Le Playbook oblige l'agent à suivre les six étapes de développement. »
> 2. « Toute la logique métier est isolée dans une classe de Service dédiée. »
> 3. « Grâce à cette méthode, l'IA ne peut plus sauter les tests ni bâcler le code. »

---

## Slide 4 : Démonstration en Direct (CRUD des Catégories)
- **Banc d'Essai Réel :** Application interactive dans `4.realisation/3-build/index.html`.
- **Réactivité Alpine.js :** Recherche instantanée, filtrage par statut et slug automatique.
- **Architecture Backend :** Service Layer avec `DB::transaction()` et `withCount('posts')`.

> **🎙️ Notes de l'orateur (3 phrases simples A1) :**
> 1. « Je vous montre maintenant la démonstration du CRUD dans le navigateur. »
> 2. « La recherche et le formulaire modal fonctionnent en direct avec Alpine.js. »
> 3. « Le contrôleur appelle proprement notre service sans aucune requête directe. »

---

## Slide 5 : Bilan & Mini-Défi du Formateur
- **Résultats Obtenus :** Architecture d'agent opérationnelle et 5 étapes franchies.
- **Compétences Prêtes :** Skills conformes au standard Anthropic et validés à 100 %.
- **Prêt pour le Sprint :** Disponible pour le mini-défi de programmation en direct sans IA.

> **🎙️ Notes de l'orateur (3 phrases simples A1) :**
> 1. « Notre cadre de compétences pour l'agent AgentDev est prêt et validé. »
> 2. « Je comprends parfaitement la séparation entre le contrôleur et le service. »
> 3. « Je suis prêt à réussir le mini-défi de code en direct devant le formateur. »
