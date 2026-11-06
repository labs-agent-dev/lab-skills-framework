# Gabarit : Modèle de Skill Technique pour une Brique du Projet Fil Rouge

Ce gabarit sert de base pour créer une **Compétence Technique Dédiée** (ex: `laravel-crud`, `alpine-components`, `preline-ui`, `architecture-skills`). Elle doit être conçue et validée avec le méta-skill **`skill-creator`** selon les 10 rubriques normées d'Anthropic.

> [!IMPORTANT]
> **Règle Inviolable de Nomenclature :** Le préfixe `lab-*` est strictement réservé aux répertoires de labs. Un skill technique ne doit JAMAIS débuter par `lab-`.

---

```markdown
---
name: [domaine]-[brique]
description: Fournit l'expertise technique et applique les règles de développement pour la brique [Brique] dans notre stack technique pour l'agent AgentDev. À déclencher pour coder la solution de cette brique. Ne pas déclencher pour le cadrage méthodologique de lab ou pour concevoir de nouveaux skills.
version: 1.0.0
inspiration:
  source: "anthropic/claude-plugins-official"
  plugin: "feature-dev"
  pattern: "domain-specific technical guidance & rule enforcement"
---

# 1. Mission
Ce skill est l'expert technique dédié à la brique **[Brique]**. Sa mission est d'assister le développement du code au sein du Projet Fil Rouge opéré par l'agent **`AgentDev`**, en appliquant strictement les règles d'architecture de notre stack.

# 2. Déclenchement & Limites
- **Quand l'activer :**
  - Rédaction et structuration du code de la brique [Brique].
  - Résolution des bugs ou questions de syntaxe spécifiques à cette technologie.
- **Quand NE PAS l'activer :**
  - Cadrage initial du lab, README et soutenance sprint ➔ Utiliser `lab-dev`.
  - Création ou modification de nouveaux skills ➔ Utiliser `skill-creator`.

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
- Snippets de code propres et prêts à être intégrés.
- Explication en français direct (phrases courtes) du fonctionnement du code.

# 8. Contrôle Qualité (Checklist Binaire)
- [ ] Le code respecte-t-il les conventions de notre stack ?
- [ ] Les règles techniques inviolables sont-elles respectées ?
- [ ] L'apprenant peut-il expliquer le code produit lors de son sprint sans IA ?
- [ ] Le test de bon fonctionnement est-il documenté ?

# 9. Gestion des Erreurs Fréquentes
| Erreur Technique | Cause Classique | Solution Immédiate |
| :--- | :--- | :--- |
| [Erreur 1] | [Cause] | [Solution] |
| [Erreur 2] | [Cause] | [Solution] |

# 10. Exemples Concrets (Few-Shot)
**Prompt Développeur :** *"Comment implémenter [Fonctionnalité] selon nos règles ?"*
**Réponse Attendue :** L'agent fournit le snippet propre, commente les lignes clés et rappelle la règle technique appliquée.
```
