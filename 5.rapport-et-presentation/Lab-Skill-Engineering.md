# Rapport Officiel : Lab Ingénierie des Skills IA

Ce document constitue le livrable technique officiel du Lab actuel, destiné à l'évaluation par le formateur.

---

## 1. Présentation du Lab

### 1.1 Métadonnées
- **Technologie ciblée :** Ingénierie Agentique, Customisations Antigravity, Standards Anthropic.
- **Niveau :** Intermédiaire / Avancé.
- **Durée estimée :** 3 heures.
- **Prérequis :** Compréhension des LLM, Node.js, Markdown, Git.

### 1.2 Introduction
Ce lab aborde la question centrale de la productivité des développeurs modernes : comment concevoir une architecture de compétences IA claire, sans conflits et facile à maintenir pour accélérer le développement d'un projet fil rouge.

### 1.3 Contexte du Projet Fil Rouge
Pour construire le prototype technique de notre projet fil rouge, nous travaillons par sprints successifs. Chaque sprint cible une brique de notre stack (CRUD Laravel, Alpine.js, Preline UI). Ce lab fournit le cadre d'ingénierie permettant d'adosser à chaque brique un skill IA dédié.

### 1.4 Objectif
À l'issue de ce lab, l'équipe dispose d'une méthode rigoureuse pour :
- Découper les compétences IA avec la bonne granularité.
- Échafauder des skills conformes aux 10 rubriques normées d'Anthropic.
- Organiser les fichiers de tout lab en 5 sous-dossiers concrets sans jamais oublier la présentation.

### 1.5 Expression du Besoin
Nous devions répondre à la question : *Faut-il un seul skill global (`feature-dev`) ou un skill par technologie ou un skill par étape de travail ?*

### 1.6 Positionnement dans notre Stack
Les compétences IA se situent dans la couche de gouvernance du projet :
```
[Développeur / Apprenant]
         │
         ▼ (Interactions chat / CLI)
 [Agents : Antigravity / Claude Code]
         │
         ▼ (Lecture des règles & skills)
[.agent/rules/ & .agent/skills/]
         │
         ▼ (Assistance au code)
[Code Applicatif : Laravel / Alpine / Preline]
```

---

## 2. Explication Théorique & Solution Choisie (ADR)

### 2.1 Notions Théoriques Clés
- **Fenêtre de Contexte :** Les modèles de langage disposent d'une mémoire de travail limitée. Charger trop de règles simultanément provoque la « dilution cognitive » et des oublis de consignes.
- **Single Source of Truth (SSOT) :** Une consigne doit être rédigée à un seul endroit faisant autorité pour éviter les incohérences lors des mises à jour.
- **Divulgation Progressive :** Les détails d'implémentation doivent être encapsulés dans `<skill>/resources/` et chargés uniquement à la demande.

### 2.2 Solution Technique Choisie (Compte-Rendu ADR)
- **Décision :** Nous avons choisi une **Architecture Hybride à 3 Niveaux** :
  1. Deux méta-skills de gouvernance (`lab-dev` pour la méthode, `plugin-dev` pour les normes).
  2. Un skill technique spécialisé pour le lab actuel (`lab-skill-engineering`).
  3. Un skill technique dédié pour chaque futur lab (`lab-crud-laravel`, `lab-alpinejs`, `lab-preline-ui`).
- **Justification :** Cette approche évite le piège du mega-prompt monolithique (qui sature la mémoire) tout en empêchant la micro-dispersion (trop de petits fichiers ingérables).

---

## 3. Réalisation Pratique (Pas-à-Pas)

### 3.1 Initialisation de l'Environnement
Vérification des outils locaux :
```powershell
node -v
Get-ChildItem .agent/skills
```

### 3.2 Déploiement des Compétences IA
1. Implémentation de `lab-dev` (version 1.2.0) gouvernant l'arborescence des 5 sous-dossiers.
2. Conception de `lab-skill-engineering` selon les 10 rubriques normées d'Anthropic.
3. Exécution du validateur déterministe `validate-skills.cjs`.

### 3.3 Vérification des Tests
Exécution de la commande :
```powershell
node .agent/skills/plugin-dev/scripts/validate-skills.cjs
```
**Résultat :** 100% conforme sur les 3 skills, 0 erreur bloquante.

---

## 4. Défi Sprint devant le Formateur

### 4.1 Démonstration en Direct (5 minutes)
1. Présentation de l'arborescence à 5 sous-dossiers.
2. Démonstration de l'exécution de `validate-skills.cjs`.
3. Présentation des slides avec les 3 phrases orales A1 par diapositive.

### 4.2 Mini-Défi du Formateur
- Capacité à expliquer la différence entre la responsabilité de `lab-dev` et celle de `lab-skill-engineering`.
- Capacité à ajouter un nouveau critère de granularité dans `resources/criteres-granularite.md`.

