# Spécification Technique : Les 4 Approches d'Architecture de Skills

Ce document définit les fiches d'identité des compétences IA génériques à utiliser pour développer notre projet fil rouge.

---

## 1. Sujet 1 : Skills par Technologie (Apprenant 1)
- **Objectif :** Une compétence par langage ou outil technique.
- **Liste des Skills Génériques :**
  1. `tech-html` : Structure HTML5 sémantique et accessibilité web.
  2. `tech-tailwind` : Classes utilitaires, mise en page responsive et design system.
  3. `tech-alpine` : Interactivité frontend, gestion d'état local et événements.
  4. `tech-laravel` : Contrôleurs backend, templates Blade, routes et validation.

---

## 2. Sujet 2 : Skills par Layer / Couche (Apprenant 2)
- **Objectif :** Une compétence par couche de l'architecture logicielle.
- **Liste des Skills Génériques :**
  1. `layer-ui-view` : Rendu visuel et interface utilisateur (Blade, HTML, Tailwind).
  2. `layer-controller` : Traitement des requêtes HTTP et validation des formulaires.
  3. `layer-service` : Logique métier et règles d'affaires applicatives.
  4. `layer-data` : Modèles Eloquent, migrations et requêtes de base de données.

---

## 3. Sujet 3 : Skills par Flux de Travail (Apprenant 3)
- **Objectif :** Une compétence par étape chronologique de développement.
- **Liste des Skills Génériques :**
  1. `flow-analyse` : Analyse du besoin, user stories et critères d'acceptation.
  2. `flow-conception` : Maquettage, choix des composants et architecture.
  3. `flow-developpement` : Écriture et assemblage du code technique.
  4. `flow-test-qualite` : Contrôle qualité, tests fonctionnels et validation mobile.

---

## 4. Sujet 4 : Un Seul Skill Global (Apprenant 4)
- **Objectif :** Une compétence unique polyvalente de bout en bout.
- **Skill Générique :**
  - `fullstack-developer` (inspiré du motif Anthropic `feature-dev`) : capable de prendre en charge n'importe quelle fonctionnalité complète du projet fil rouge.

---

## 5. Règles Techniques Communes Inviolables
1. **Noms Génériques :** Aucun skill ne doit porter un nom de page ponctuelle (les skills servent pour tout le projet fil rouge).
2. **Respect DRY / SSOT :** Les règles permanentes restent dans `.agent/rules/`.
3. **Format Standard :** Chaque skill créé doit respecter les 10 rubriques normées via `plugin-dev`.
