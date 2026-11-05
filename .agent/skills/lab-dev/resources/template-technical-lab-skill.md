# Gabarit : Modèle de Skill Technique pour un Lab

Ce gabarit sert de base pour créer le **Skill Technique Dédié** associé à un Lab spécifique (ex: `lab-crud-laravel`, `lab-alpinejs`, `lab-preline-ui`, `lab-skill-engineering`). Il doit être conçu et validé avec le méta-skill **`plugin-dev`** selon les 10 rubriques normées d'Anthropic.

---

```markdown
---
name: lab-[nom-de-la-brique]
description: Fournit l'assistance technique et applique les règles de développement pour le Lab [Nom du Lab] dans notre stack technique. À déclencher pour coder la solution du lab. Ne pas déclencher pour le cadrage méthodologique ou l'audit de présentation.
version: 1.0.0
inspiration:
  source: "anthropic/claude-plugins-official"
  plugin: "feature-dev"
  pattern: "domain-specific technical guidance & rule enforcement"
---

# 1. Mission
Ce skill est l'expert technique dédié au Lab **[Nom du Lab]**. Sa mission est de guider l'apprenant dans la réalisation technique de la brique **[Brique]** au sein du Prototype du projet fil rouge, en appliquant les règles d'architecture de notre stack.

# 2. Déclenchement & Limites
- **Quand l'activer :**
  - Rédaction de la solution technique du Lab [Nom du Lab].
  - Écriture et structuration du code de la brique [Brique].
  - Résolution des bugs ou questions de syntaxe spécifiques à cette technologie.
- **Quand NE PAS l'activer :**
  - Cadrage initial du lab, README et soutenance sprint ➔ Utiliser `lab-dev`.
  - Création ou modification de nouveaux skills ➔ Utiliser `plugin-dev`.

# 3. Entrées & Ressources à Charger
- **Priorité 1 :** `resources/regles-techniques.md` (Règles spécifiques à cette technologie).
- **Priorité 2 :** `resources/snippets-reference.md` (Modèles de code et patrons d'architecture).
- **Priorité 3 :** `resources/erreurs-frequentes.md` (Catalogue des pièges et solutions).

# 4. Contraintes & Règles Inviolables
- **Règle 1 :** [Règle d'architecture clé, ex: respect strict du MVC, pas de SQL dans les vues].
- **Règle 2 :** [Convention de nommage des fichiers et classes].
- **Règle 3 :** [Gestion des erreurs et validation des entrées utilisateur].
- **Règle 4 :** [Obligation de commenter le code de manière accessible au niveau A1/A2].

# 5. Procédure Pas-à-Pas (Assistance Technique)
1. **Étape 1 - Préparation & Contrats d'Interface :** Vérifier les prérequis et définir les structures de données.
2. **Étape 2 - Implémentation de la Couche Base :** Écrire la logique métier / backend avec validation.
3. **Étape 3 - Implémentation de l'Interface & Dynamisme :** Créer la vue et l'interactivité.
4. **Étape 4 - Tests de Fonctionnement :** Valider le cas d'usage sans erreur dans la console / logs.

# 6. Gestion des Ambiguïtés & Décisions
- Si une bibliothèque externe est demandée : vérifier si notre stack contient déjà un équivalent avant d'ajouter une dépendance.
- Si le code ne fonctionne pas : isoler l'erreur dans les logs avant de proposer une modification.

# 7. Format de Sortie & Livrables
- Snippets de code prêts à être intégrés et expliqués simplement.
- Explication en français direct (phrases courtes) du fonctionnement du code.

# 8. Contrôle Qualité (Checklist Binaire)
- [ ] Le code respecte-t-il les conventions de notre stack ?
- [ ] Les règles techniques inviolables sont-elles respectées ?
- [ ] L'apprenant peut-il expliquer le code produit ?
- [ ] Le test de bon fonctionnement est-il documenté ?

# 9. Gestion des Erreurs Fréquentes
| Erreur Technique | Cause Classique | Solution Immédiate |
| :--- | :--- | :--- |
| [Erreur 1] | [Cause] | [Solution] |
| [Erreur 2] | [Cause] | [Solution] |

# 10. Exemples Concrets (Few-Shot)
**Prompt Apprenant :** *"Comment implémenter [Fonctionnalité] selon nos règles ?"*
**Réponse Attendue :** L'agent fournit le snippet propre, commente les lignes clés et rappelle la règle technique appliquée.
```

