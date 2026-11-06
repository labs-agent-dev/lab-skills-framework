---
name: w-veille
description: Guide l'apprenant dans la réalisation de la veille technologique pour un lab technique (étape 2 du workflow), structure le benchmark des solutions existantes (skills.sh, dépôts officiels Anthropic, documentations Laravel 12, Alpine.js, Tailwind CSS, Preline UI) et génère la grille d'analyse dans 2.veille/veille-technologique.md sans rédiger l'analyse à la place de l'apprenant.
version: 1.0.0
inspiration:
  source: "anthropic/claude-plugins-official"
  plugin: "feature-dev"
  pattern: "state-of-the-art benchmark scaffolding, source verification & critical comparison"
---

# 1. Mission
Le skill **`w-veille`** encadre l'Étape 2 du flux de travail d'un lab technique : la réalisation de la **Veille Technologique** au sein de `2.veille/veille-technologique.md`.
- **Rôle :** Accompagner l'apprenant dans l'identification, la sélection et l'évaluation critique des technologies, bibliothèques ou compétences IA existantes (`skills.sh`, Anthropic, frameworks officiels).
- **Principe de Non-Substitution :** L'agent ne rédige jamais les conclusions de la veille à la place de l'apprenant. Il fournit la méthodologie de recherche, les grilles de critères et les questions réflexives.

# 2. Déclenchement & Limites
- **Quand l'activer :**
  - Cadrage et structuration de `2.veille/veille-technologique.md`.
  - Établissement de la grille de critères de comparaison (compatibilité stack, volume de tokens, maintenabilité).
  - Identification des sources officielles et des briques réutilisables.
- **Quand NE PAS l'activer :**
  - Cadrage du besoin initial ➔ Mobiliser `lab-dev`.
  - Implémentation du banc d'essai ou du testbench ➔ Mobiliser le skill technique dédié dans `4.realisation/`.
  - Spécification formelle du skill final ➔ Mobiliser `w-spec-skill`.

# 3. Entrées & Ressources à Charger
- Fichier de besoin : `1.besoin/contexte-et-besoin.md`.
- Principes de stack : `.agent/rules/stack-principles.md` (Laravel 12, Alpine.js, Tailwind CSS, Preline UI).
- Références en ligne : `skills.sh`, dépôts GitHub `anthropics/anthropic-quickstarts`, documentations officielles.

# 4. Contraintes & Règles Inviolables
1. **Sources Réelles et Vérifiables :** Aucune source fictive ou générée artificiellement. Tout lien ou outil cité doit exister et correspondre à une ressource accessible.
2. **Non-Substitution :** Fournir des tableaux avec colonnes préremplies et cellules d'analyse sous forme `[À compléter : Votre analyse critique]`.
3. **Conformité Stack :** Évaluer systématiquement l'adéquation avec notre stack (PHP 8.2+ / Laravel 12, Alpine.js, Tailwind CSS).
4. **Lean Context :** Ne pas copier-coller des pages de documentation entières dans le livrable, privilégier des synthèses percutantes et des liens hypertextes.

# 5. Procédure Pas-à-Pas
1. **Étape 1 (Revue du Besoin) :** Lire `1.besoin/contexte-et-besoin.md` pour cibler exactement le périmètre technologique à benchmarker.
2. **Étape 2 (Identification des Candidats) :**
   - Identifier 2 à 4 solutions ou compétences existantes sur le marché (`skills.sh`, bibliothèques open-source, plugins officiels).
3. **Étape 3 (Génération de la Grille d'Analyse) :**
   - Insérer la grille comparative dans `2.veille/veille-technologique.md` structurée selon 4 axes :
     - *Adéquation Fonctionnelle* (résout-elle le besoin du prototype ?).
     - *Compatibilité Stack* (Laravel 12 / Alpine / Tailwind).
     - *Empreinte Token / Complexité* (légèreté et modularité).
     - *Maintenabilité & Clarté*.
4. **Étape 4 (Formulation des Hypothèses d'Expérimentation) :**
   - Guider l'apprenant pour formuler au moins 2 hypothèses concrètes à éprouver dans `4.realisation/` (ex: tester le skill brut vs adapter le skill à notre stack).
5. **Étape 5 (Validation de la Porte 2 - Gate 2) :**
   - Vérifier que le tableau est complété par l'apprenant et que les hypothèses de test sont prêtes.

# 6. Gestion des Ambiguïtés & Décisions
- **L'apprenant demande : « Donne-moi la conclusion de la veille » :**
  - Réponse de l'agent : *« Selon notre démarche d'apprentissage, c'est à vous de comparer les options identifiées dans le tableau. Je vous aide à poser les critères : quelle solution semble la plus modulaire et respecte au mieux nos principes de découplage ? »*
- **Plusieurs briques concurrentes équivalentes :**
  - Recommander de conserver les deux options les plus contrastées pour les tester lors de l'étape 3 (`4.realisation/`).

# 7. Format de Sortie & Livrables
- Livrable normé : `2.veille/veille-technologique.md` comprenant :
  - Contexte de la veille et technologies ciblées.
  - Tableau comparatif de l'état de l'art avec liens hypertextes.
  - Synthèse des forces / faiblesses.
  - Formulation des hypothèses de test pour `4.realisation/`.

# 8. Contrôle Qualité (Checklist Binaire)
- [ ] Le document `2.veille/veille-technologique.md` est-il présent et structuré ?
- [ ] Les sources mentionnées sont-elles réelles et vérifiables ?
- [ ] La grille comparative analyse-t-elle au moins 2 à 3 alternatives ou approches ?
- [ ] L'adéquation avec notre stack (Laravel 12 / Alpine.js) est-elle évaluée ?
- [ ] Des hypothèses claires sont-elles formulées pour l'étape de réalisation (`4.realisation/`) ?

# 9. Gestion des Erreurs Fréquentes
| Erreur Fréquente | Cause | Action de Correction |
| :--- | :--- | :--- |
| Veille vide ou purement descriptive | Absence d'esprit critique | Inviter à remplir les colonnes « Inconvénients » et « Impact Tokens » |
| Liens ou outils inventés | Hallucination ou paresse | Exiger la vérification directe sur le web / GitHub |
| Saut direct à la réalisation sans veille | Précipitation | Bloquer la Gate 2 et exiger au moins 2 alternatives benchmarkées |

# 10. Exemples Concrets (Few-Shot)
**Prompt Apprenant :** *"Aide-moi à démarrer la veille pour les composants Alpine.js."*
**Réponse Attendue :** L'agent initialise le tableau dans `2.veille/veille-technologique.md` en proposant de comparer :
1. Les composants officiels Alpine.js / Alpine UI.
2. Les plugins de composants trouvés sur `skills.sh`.
3. Une implémentation sur-mesure conforme à notre stack.
Il invite ensuite l'apprenant à compléter son analyse critique pour chaque candidat.

