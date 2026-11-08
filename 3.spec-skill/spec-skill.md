# Spécification Technique : Skill `architecture-skills` & Décisions d'Architecture (ADR)

> **Document de Spécification Référent (Gate 4) :** Formalisation de l'ingénierie de l'agent `AgentDev` et de ses compétences, appuyée sur le modèle Playbook d'Addy Osmani (`skills.addy.ie`) et l'analyse comparative des 4 philosophies d'agents de Martin Jordanovski.

---

## 1. Fiche d'Identité du Skill

- **Nom Normé :** `architecture-skills` (sans préfixe `lab-*`, conforme à la convention `[domaine]-[brique]`).
- **Emplacement Cible :** `.agents/skills/architecture-skills/SKILL.md`.
- **Rôle Principal :** Concevoir et orchestrer l'architecture globale des compétences de l'agent **`AgentDev`**. Structurer les règles selon le **Playbook SDLC en 6 phases** et les adapter à notre stack : PHP 8.2+ / Laravel 12 avec Service Layer, DTOs, Form Requests, et Alpine.js réactif.
- **Conditions de Déclenchement (Triggers) :**
  - Conception ou refonte de l'architecture des compétences d'un agent de développement.
  - Arbitrage entre les grands paradigmes d'agents (Playbook, Pipeline, Toolkit, OS).
  - Découpage des responsabilités techniques pour un nouveau sprint ou projet fil rouge.
- **Conditions de Non-Déclenchement :**
  - Cadrage méthodologique d'un lab (mobiliser `lab-dev`).
  - Validation déterministe de syntaxe (mobiliser `skill-creator`).
  - Écriture de code métier unitaire.

---

## 2. Décisions d'Architecture (ADRs)

### 📌 ADR-001 : Architecture Hybride Modulaire (Backend P0 + Frontend Réactif)
- **Contexte :** Confrontation des pistes mono-skill vs par technologie vs par couche.
- **Décision :** Adopter un découpage modulaire qui sépare un socle backend P0 (contrôleurs fins, Eloquent sans $N+1$) d'un module d'interactions réactives Alpine.js.

### 📌 ADR-002 : Paradigme Playbook SDLC (Addy Osmani) comme Modèle d'Agent
- **Contexte :** D'après l'analyse de Martin Jordanovski, quatre philosophies d'agents coexistent :
  1. *Le Playbook* ([`skills.addy.ie`](https://skills.addy.ie/) / Addy Osmani) : cycle SDLC complet (Define, Plan, Build, Verify, Review, Ship) avec garde-fous anti-bâclage.
  2. *Le Pipeline* ([`obra/superpowers`](https://github.com/obra/superpowers) / Jesse Vincent) : boucle interne TDD rigide et sous-agents avec git worktrees.
  3. *La Boîte à Outils* (`mattpocock/skills`) : outils chirurgicaux légers (`/grill-me`, `/diagnose`).
  4. *Le Système d'Exploitation* (`ECC`) : couche système globale de session et de mémoire.
- **Décision Retenue :** Consacrer **Le Playbook SDLC** comme paradigme fondamental pour `AgentDev`.
- **Justification :**
  - Le Playbook impose la discipline d'ingénierie là où les modèles d'IA coupent habituellement les virages (omission des tests, absence de DTO, logique mélangée dans les contrôleurs).
  - Il fournit un cadre parfait pour implémenter un **Service Layer sous Laravel 12** de façon reproductible et mesurable.

---

## 3. Matrice Stack x Playbook SDLC pour `AgentDev`

| Phase Playbook | Rôle Méthodologique | Compétence Technique `AgentDev` | Artefact Produit |
| :--- | :--- | :--- | :--- |
| **1. DEFINE** | Cadrer le besoin et les critères d'acceptation | `w-spec` & `architecture-skills` | Fiche de spécification & interfaces (`CategoryServiceInterface`). |
| **2. PLAN** | Modéliser les flux et l'architecture logicielle | `laravel-architecture` | Diagramme de flux MVC ➔ DTO ➔ Service ➔ Eloquent. |
| **3. BUILD** | Coder les composants étanches | `laravel-service-layer`, `laravel-dto`, `alpine-reactive` | `CategoryService.php`, `CategoryData.php`, `index.html`. |
| **4. VERIFY** | Écrire et exécuter les tests automatisés | `laravel-testing` (Pest / PHPUnit) | `CategoryServiceTest.php` avec contrôle anti-$N+1$. |
| **5. REVIEW** | Auditer le code et traquer les rationalisations | `code-reviewer` & anti-rationalization guards | Grille d'audit de simplification et de gating qualité. |
| **6. SHIP** | Préparer la livraison et l'évaluation | `w-rapport` | Déploiement et protocole de live coding direct sans IA. |

---

## 4. Contrats d'Interface & Règles Inviolables

1. **Règle d'Or du Service Layer :** Les contrôleurs HTTP sont strictement des passe-plats. Toute écriture en base de données doit passer par le Service Layer encapsulé dans une transaction (`DB::transaction()`).
2. **Typage Strict & Immutabilité :** Utilisation systématique de DTOs en PHP 8.2+ (`readonly class`).
3. **Zéro Régression Frontend :** Les composants d'interface utilisent exclusivement Alpine.js 3.x, Tailwind CSS et Preline UI. Interdiction formelle de jQuery.
4. **Validation Déterministe :** Tout skill créé doit respecter les 10 rubriques d'Anthropic et être validé par `validate-skills.cjs`.
