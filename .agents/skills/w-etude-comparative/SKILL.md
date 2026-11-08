---
name: w-etude-comparative
description: Guide l'apprenant dans la réalisation de l'état de l'art et de l'étude comparative des solutions existantes pour tout lab technique (étape 2 du workflow), structure la comparaison multicritères sur GitHub et catalogues open-source, génère la présentation au format Marp dans 2.etude-comparative/etude-comparative.md via le skill marp-slide, et guide l'arbitrage entre réponse directe et assimilation des fondamentaux sans rédiger l'analyse à la place de l'apprenant.
---

# 1. Mission
Le skill **`w-etude-comparative`** encadre l'Étape 2 du flux de travail d'un lab technique : l'**État de l'Art & Étude Comparative des Solutions Existantes** et sa restitution sous forme de **diaporama Marp** au sein de `2.etude-comparative/etude-comparative.md`.
- **Rôle :** Analyser le besoin technique issu de `1.besoin/besoin.md`, proposer un panier de références open-source ciblées (dépôts GitHub, registres, documentations officielles), et fournir un cadre méthodologique permettant à l'apprenant et au formateur de décider quelles sources étudier et comment en trouver d'autres.
- **Principe de Non-Substitution :** L'agent ne rédige jamais les conclusions de l'étude comparative à la place de l'apprenant. Il structure la grille d'analyse multicritères, calibre le diaporama Marp via `marp-slide` et suscite la réflexion critique.

# 2. Déclenchement & Limites
- **Quand l'activer :**
  - Cadrage et génération de la présentation Marp `2.etude-comparative/etude-comparative.md`.
  - Recherche et suggestion de références adaptées au problème technique posé dans `1.besoin/besoin.md`.
  - Rédaction du paragraphe méthodologique d'exploration pour l'apprenant et le formateur.
  - Établissement de la grille multicritères (adéquation fonctionnelle, compatibilité stack, sobriété/tokens, maintenabilité).
- **Quand NE PAS l'activer :**
  - Cadrage du besoin initial ➔ Mobiliser `lab-dev`.
  - Implémentation du banc d'essai ou du testbench ➔ Mobiliser le skill technique dédié dans `4.realisation/`.
  - Spécification formelle du skill final ➔ Mobiliser `w-spec-skill`.

# 3. Entrées & Ressources à Charger
- Fichier de besoin : `1.besoin/besoin.md`.
- Consignes de travail : `2.etude-comparative/README.md`.
- Guide méthodologique : `docs/04-guide-etude-comparative.md`.
- Principes de stack : `.agents/rules/stack-principles.md` (règles globales d'architecture).
- Gisements en ligne universels :
  - GitHub Topics adaptés au sujet (ex: `https://github.com/topics/coding-standards`, `https://github.com/topics/coding-agent`, `https://github.com/topics/agent-skills`, `https://github.com/topics/laravel`, etc.).
  - Catalogues open-source et registres de composants / skills (`skills.sh`, `agentskills.io`, standards ouverts comme `HoangNguyen0403/agent-skills-standard`).
  - Documentations officielles de la technologie étudiée dans le lab.

# 4. Contraintes & Règles Inviolables
1. **Format de Restitution Marp Obligatoire :** Le livrable `2.etude-comparative/etude-comparative.md` doit être une présentation Marp valide (`marp: true`, thème `tech` ou `business`, directives Marpit).
2. **Sources Réelles et Vérifiables :** Aucune référence factice ou inventée. Citer obligatoirement des dépôts GitHub réels, des bibliothèques vérifiables ou des documentations officielles.
3. **Autonomie de Choix (Formateur / Apprenant) :** L'agent propose des pistes et donne des clés de recherche, mais laisse le binôme formateur/apprenant arbitrer entre :
   - *Voie A (Réponse directe) :* Réutiliser ou adapter une brique existante prête à l'emploi.
   - *Voie B (Montée en compétences) :* Assimiler les fondamentaux pour forger une solution sur-mesure conforme.
4. **Non-Substitution :** Fournir les diapositives avec tableaux comparatifs et amorces `[À compléter : Votre analyse critique]`.

# 5. Procédure Pas-à-Pas (Universelle pour Tout Lab)
1. **Étape 1 (Analyse du Besoin) :** Lire `1.besoin/besoin.md` pour extraire les mots-clés techniques et les contraintes de stack du lab actif.
2. **Étape 2 (Sourcing Ciblé & Orientation) :**
   - Explorer activement les GitHub Topics et registres ouverts pour identifier 2 à 4 solutions ou patterns réels (au-delà des simples amorces indicatives).
   - Fournir dans le chat un paragraphe méthodologique expliquant les termes de recherche employés et comment l'apprenant/formateur peut élargir la recherche.
3. **Étape 3 (Arbitrage de la Démarche d'Étude) :**
   - Discuter avec le formateur ou l'apprenant pour décider quelles sources approfondir (recherche d'une réponse directe vs assimilation des bases nécessaires pour concevoir la brique).
4. **Étape 4 (Génération du Diaporama Marp) :**
   - Mobiliser `marp-slide` pour générer le squelette de `2.etude-comparative/etude-comparative.md` (5 diapositives : Titre, Problématique, Gisements explorés, Grille multicritères, Synthèse des hypothèses pour l'étape 3).
5. **Étape 5 (Validation de la Porte 2 - Gate 2) :**
   - Valider la complétion de la grille et l'alignement des hypothèses avant le passage à `4.realisation/`.

# 6. Gestion des Ambiguïtés & Décisions
- **L'apprenant hésite entre plusieurs solutions candidates :**
  - Réponse de l'agent : *« Distinguons deux voies : 1) Les solutions prêtes à l'emploi que vous pouvez tester directement (Voie A), 2) Les documentations et patterns fondamentaux qui vous apprennent à coder la solution vous-même (Voie B). Choisissez avec votre formateur les références prioritaires à étudier pour votre sprint. »*
- **Demande de trancher ou de conclure à la place de l'apprenant :**
  - Rappeler la règle de non-substitution et proposer des questions réflexives ciblées.

# 7. Format de Sortie & Livrables
- Diaporama Marp normé : `2.etude-comparative/etude-comparative.md` (frontmatter `marp: true`, directives de header/footer/paginate).
- Paragraphe d'orientation et de guidage méthodologique fourni dans le chat.
- Formulation d'au moins deux hypothèses comparatives claires pour `4.realisation/`.

# 8. Contrôle Qualité (Checklist Binaire)
- [ ] Le document `2.etude-comparative/etude-comparative.md` est-il rédigé au format Marp valide ?
- [ ] Des sources réelles (dépôts GitHub, registres, documentations officielles) sont-elles citées ?
- [ ] Un paragraphe méthodologique est-il fourni pour guider l'exploration ?
- [ ] L'arbitrage entre réponse directe et assimilation des bases a-t-il été posé ?
- [ ] Au moins 2 hypothèses concrètes sont-elles formulées pour l'étape 3 (`4.realisation/`) ?

# 9. Gestion des Erreurs Fréquentes
| Erreur Fréquente | Cause | Action de Correction |
| :--- | :--- | :--- |
| Livrable sous forme de texte brut sans Marp | Omission du format de présentation | Appliquer le frontmatter Marp et structurer avec `---` |
| Références inventées ou inaccessibles | Hallucination de liens | Exiger des dépôts réels et documentations officielles |
| Absence d'implication du formateur/apprenant | Décision agentique unilatérale | Poser explicitement la question d'arbitrage des lectures |

# 10. Exemples Concrets (Few-Shot)
**Prompt Apprenant :** *"Aide-moi à démarrer l'étude comparative pour ce lab."*
**Réponse Attendue :** L'agent analyse le fichier `1.besoin/besoin.md`, extrait les concepts techniques clés, propose 3 sources réelles (GitHub Topics, catalogues de briques, documentation officielle), fournit un paragraphe méthodologique pour trouver d'autres dépôts connexes, et initialise le diaporama Marp dans `2.etude-comparative/etude-comparative.md`.
