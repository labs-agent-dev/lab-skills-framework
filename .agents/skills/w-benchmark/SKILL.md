---
name: w-veille
description: Guide l'apprenant dans la réalisation de la veille technologique pour un lab technique (étape 2 du workflow), structure le benchmark des solutions existantes (GitHub Topics coding-agent, skills.sh, dépôts officiels Anthropic, documentations Laravel 12, Alpine.js, Tailwind CSS, Preline UI), génère la présentation au format Marp dans 2.veille/veille-technologique.md via le skill marp-slide, et guide l'arbitrage entre réponse directe et assimilation des bases sans rédiger l'analyse à la place de l'apprenant.
---

# 1. Mission
Le skill **`w-veille`** encadre l'Étape 2 du flux de travail d'un lab technique : la réalisation de la **Veille Technologique** et sa restitution sous forme de **diaporama Marp** au sein de `2.veille/veille-technologique.md`.
- **Rôle :** Proposer un panier de références pertinentes et fournir un cadre méthodologique permettant à l'apprenant et au formateur de décider quelles sources étudier et comment en dénicher d'autres.
- **Principe de Non-Substitution :** L'agent ne rédige jamais les conclusions de la veille à la place de l'apprenant. Il structure la grille de benchmark, calibre le diaporama Marp via `marp-slide` et stimule la réflexion critique.

# 2. Déclenchement & Limites
- **Quand l'activer :**
  - Cadrage et génération de la présentation Marp `2.veille/veille-technologique.md`.
  - Recherche et suggestion de références adaptées au besoin issu de `1.besoin/besoin.md`.
  - Rédaction du paragraphe méthodologique d'exploration pour l'apprenant et le formateur.
  - Établissement de la grille de critères de comparaison (compatibilité stack, volume de tokens, maintenabilité).
- **Quand NE PAS l'activer :**
  - Cadrage du besoin initial ➔ Mobiliser `lab-dev`.
  - Implémentation du banc d'essai ou du testbench ➔ Mobiliser le skill technique dédié dans `4.realisation/`.
  - Spécification formelle du skill final ➔ Mobiliser `w-spec-skill`.

# 3. Entrées & Ressources à Charger
- Fichier de besoin : `1.besoin/besoin.md`.
- Consignes de travail : `2.veille/README.md`.
- Guide méthodologique : `docs/04-guide-veille-technologique.md`.
- Principes de stack : `.agent/rules/stack-principles.md` (PHP 8.2+ / Laravel 12, Alpine.js, Tailwind CSS, Preline UI).
- Gisements en ligne clés :
  - [`https://github.com/topics/coding-agent`](https://github.com/topics/coding-agent) (Référence mondiale des agents et compétences).
  - [`skills.sh`](https://skills.sh) et `claude-plugins-official`.

# 4. Contraintes & Règles Inviolables
1. **Format de Restitution Marp Obligatoire :** Le livrable `2.veille/veille-technologique.md` doit être une présentation Marp valide (`marp: true`, thème `tech` ou `business`, directives Marpit).
2. **Sources Réelles et Vérifiables :** Aucune référence factice ou inventée. Citer obligatoirement des dépôts GitHub réels (notamment via `coding-agent`), des URLs `skills.sh` ou des documentations officielles.
3. **Autonomie de Choix (Formateur / Apprenant) :** L'agent propose des pistes et explique comment en trouver d'autres, mais laisse le binôme formateur/apprenant arbitrer entre :
   - *Voie A (Réponse directe) :* Réutiliser une brique existante transposable.
   - *Voie B (Montée en compétences) :* Assimiler les fondamentaux pour concevoir la brique sur-mesure.
4. **Non-Substitution :** Fournir les diapositives avec tableaux de benchmark et amorces `[À compléter : Votre analyse critique]`.

# 5. Procédure Pas-à-Pas
1. **Étape 1 (Revue du Besoin) :** Lire `1.besoin/besoin.md` pour cibler les concepts techniques à benchmarker.
2. **Étape 2 (Recherche Ciblée & Guide d'Exploration) :**
   - Identifier 2 à 4 projets ou compétences de référence sur `https://github.com/topics/coding-agent`, `skills.sh` et les documentations officielles.
   - Fournir à l'apprenant et au formateur un paragraphe méthodologique expliquant les requêtes de recherche et les critères pour trouver d'autres projets connexes.
3. **Étape 3 (Arbitrage de la Démarche d'Étude) :**
   - Inviter le formateur ou l'apprenant à décider des sources à lire en profondeur (pourquoi telle source offre une réponse directe et pourquoi telle autre permet d'apprendre les bases).
4. **Étape 4 (Génération du Diaporama Marp) :**
   - Utiliser le skill `marp-slide` pour formater `2.veille/veille-technologique.md` en 4 à 6 diapositives (Page de garde, Problématique, Gisements explorés, Grille comparative multicritères, Synthèse des hypothèses).
5. **Étape 5 (Validation de la Porte 2 - Gate 2) :**
   - Vérifier la validité du format Marp et la complétion critique des diapositives avant de passer à `4.realisation/`.

# 6. Gestion des Ambiguïtés & Décisions
- **L'apprenant hésite entre plusieurs sources :**
  - Réponse de l'agent : *« Je vous suggère de distinguer deux catégories : 1) Les sources offrant une solution directe prête à tester (Voie A), 2) Celles expliquant les principes fondamentaux pour concevoir vous-même la solution (Voie B). Discutez avec votre formateur pour décider lesquelles approfondir selon vos objectifs de sprint. »*
- **Demande de rédiger les conclusions du benchmark :**
  - Rappeler la règle de non-substitution et proposer des questions réflexives ciblées.

# 7. Format de Sortie & Livrables
- Diaporama Marp normé : `2.veille/veille-technologique.md` (frontmatter `marp: true`, directives de header/footer/paginate).
- Paragraphe d'orientation et de guidage méthodologique fourni dans le chat pour enrichir la recherche.
- Hypothèses de test comparatif formulées pour l'étape 3 (`4.realisation/`).

# 8. Contrôle Qualité (Checklist Binaire)
- [ ] Le document `2.veille/veille-technologique.md` est-il rédigé au format Marp valide ?
- [ ] Le lien `https://github.com/topics/coding-agent` ou des projets issus de ce topic sont-ils exploités ?
- [ ] Un guide ou paragraphe méthodologique est-il fourni pour orienter la recherche d'autres sources ?
- [ ] L'arbitrage entre réponse directe et assimilation des bases a-t-il été posé ?
- [ ] Au moins 2 hypothèses concrètes sont-elles formulées pour l'étape 3 (`4.realisation/`) ?

# 9. Gestion des Erreurs Fréquentes
| Erreur Fréquente | Cause | Action de Correction |
| :--- | :--- | :--- |
| Livrable sous forme de texte brut sans Marp | Omission du format de présentation | Appliquer le frontmatter Marp et structurer avec `---` |
| Références inventées ou inaccessibles | Hallucination de liens | Exiger des dépôts réels issus de GitHub Topics ou `skills.sh` |
| Absence d'implication du formateur/apprenant | Décision agentique unilatérale | Poser explicitement la question d'arbitrage des lectures |

# 10. Exemples Concrets (Few-Shot)
**Prompt Apprenant :** *"Aide-moi à faire ma veille pour l'architecture des skills."*
**Réponse Attendue :** L'agent référence le topic `https://github.com/topics/coding-agent` et `skills.sh`, propose 3 axes de lecture (patterns Anthropic, skills communautaires, doc Laravel 12), donne un court guide pour rechercher d'autres projets sur GitHub, et génère le squelette de diaporama Marp dans `2.veille/veille-technologique.md`.
