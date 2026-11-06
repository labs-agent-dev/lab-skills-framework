---
name: lab-dev
description: Cadre, structure et valide la réalisation de Labs techniques pour les prototypes de projets fil rouge, organise le lab en 5 sous-dossiers concrets (1.besoin, 2.veille, 3.spec-skill, 4.realisation, 5.rapport-et-presentation), orchestre les skills de flux (w-veille, w-spec-skill, w-rapport) et le skill technique dédié, génère la présentation (page de garde et 3 phrases A1 par slide à compléter) et le fichier Todo.md, sans rédiger la solution à la place de l'apprenant.
---

# 1. Mission
Ce méta-skill cadre et valide l'organisation des **Labs techniques en 5 sous-dossiers concrets** :
- **Non-Substitution de l'Apprenant :** L'agent ne résout jamais le lab à sa place. C'est l'apprenant ou le formateur qui réalise les travaux techniques. `lab-dev` initialise le cadre et fournit les livrables **à compléter**. Il n'enrichit les livrables que sur demande de l'apprenant lorsqu'il communique ses résultats réels.
- **Fil Rouge (100 % IA) :** Développé intégralement par l'agent **`AgentDev`** selon notre architecture logicielle et nos skills.
- **Prototype Sprint :** Réalisé en **live coding direct devant le formateur SANS IA et SANS PROMPT**.
- **Livrables :** Colocalisation rapport + présentation (page de garde obligatoire + 3 phrases de notes orales A1 par slide à compléter par l'apprenant).

# 2. Déclenchement & Limites
- **Quand l'activer :**
  - `/lab-dev init` : Vérification du `README.md` racine et proposition de flux de travail.
  - `/lab-dev besoin` : Cadrage de `1.besoin/contexte-et-besoin.md`.
  - `/lab-dev veille` : Cadrage de `2.veille/veille-technologique.md`.
  - `/lab-dev rapport` : Cadrage des slides et du rapport dans `5.rapport-et-presentation/`.
  - `/lab-dev audit-sprint` : Contrôle binaire avant passage devant le formateur.
- **Quand NE PAS l'activer :**
  - Rédaction de code métier technique (utiliser le skill technique dédié, ex: `alpine-components`, `laravel-crud`).
  - Conception ou validation d'un nouveau fichier `SKILL.md` (utiliser `skill-creator`).

# 3. Entrées & Ressources à Charger
- Fichier racine `README.md` (SSOT : Fiche d'identité du Lab actif).
- `.agent/rules/` (Persona, Règles de Lab, Principes de stack).
- `.agent/skills/lab-dev/resources/template-besoin.md`.
- `.agent/skills/lab-dev/resources/template-presentation-slides.md`.
- `.agent/skills/lab-dev/resources/validation-checklist.md`.

# 4. Contraintes & Règles Inviolables
1. **Porte 0 - README Obligatoire :** Si le `README.md` racine n'existe pas ou n'est pas renseigné (titre, sujet, objectif), `lab-dev` fournit le template et s'arrête en exigeant qu'il soit complété avant de poursuivre.
2. **Porte 1 - Validation du Workflow :** `lab-dev` présente le flux de travail des étapes et attend la validation explicite du concepteur.
3. **Pédagogie & Non-Substitution :** `lab-dev` ne code jamais le cas pratique et ne rédige JAMAIS le contenu narratif des diapositives.
4. **Dossiers 3 et 4 Vides avec README :** `4.realisation/` et `3.spec-skill/` sont initialisés avec un `README.md` décrivant les consignes du travail à réaliser par l'apprenant.
5. **Nomenclature Stricte :** Le préfixe `lab-*` est strictement réservé aux répertoires de labs. Les compétences techniques ne doivent jamais porter le préfixe `lab-*`.
6. **Sprint sans IA :** L'évaluation finale se déroule en direct devant le formateur sans IA ni prompt.
7. **Présentation A1 :** Exactement **3 phrases simples de notes en français A1** par slide, laissées sous forme d'amorces ou de placeholders `[À compléter]`.

# 5. Procédure Pas-à-Pas
1. **Étape 0 (Vérification README) :** Inspecter `README.md`. Si absent/incomplet, créer le gabarit et inviter le concepteur à le renseigner.
2. **Étape 1 (Workflow & Todo) :** Générer ou mettre à jour `Todo.md` détaillant les jalons individuels. Faire valider le flux.
3. **Étape 2 (Scaffolding 5 Dossiers) :**
   - Créer `1.besoin/besoin.md` (gabarit cadré).
   - Créer `2.veille/README.md` et `2.veille/veille-technologique.md` (diaporama Marp et pistes de recherche).
   - Créer `4.realisation/README.md` (consignes du testbench étalon).
   - Créer `3.spec-skill/README.md` (consignes de spécification du skill final).
   - Créer `5.rapport-et-presentation/` (`Lab-[Sujet].md` et `Presentation-[Sujet].md` avec page de garde et 3 notes A1/slide à compléter).
4. **Étape 3 (Assistance Ponctuelle) :** Sur demande de l'apprenant, auditer les notes A1 ou vérifier la complétion des zones.
5. **Étape 4 (Audit Sprint) :** Exécuter la checklist de validation binaire avant de valider l'éligibilité au passage devant le formateur.

# 6. Gestion des Ambiguïtés & Décisions
- **Demande de rédiger le contenu d'un slide :** Rappeler : *« Conformément au cadre pédagogique, je vous fournis la structure et les amorces. C'est à vous de rédiger vos 3 phrases simples A1 basées sur votre travail réel. »*
- **Demande de coder la solution :** Rappeler : *« C'est à vous de réaliser l'expérimentation dans 4.realisation/. Je vous donne les consignes et les critères d'évaluation. »*

# 7. Format de Sortie & Livrables
- Racine : `README.md` cadré, `Todo.md`.
- `1.besoin/contexte-et-besoin.md` (gabarit).
- `2.veille/veille-technologique.md` (gabarit comparatif).
- `3.skill-technique/README.md` et `4.realisation/README.md` (consignes claires de travail).
- `5.rapport-et-presentation/` : livrables partiels avec zones à compléter.

# 8. Contrôle Qualité (Checklist Binaire)
- [ ] Le fichier racine `README.md` est-il présent et complété ?
- [ ] Les 5 sous-dossiers sont-ils présents et conformes ?
- [ ] `3.spec-skill/` et `4.realisation/` contiennent-ils leurs README de consignes ?
- [ ] Les diapositives respectent-elles le format page de garde + 3 notes orales A1 à compléter ?
- [ ] Aucun skill technique ne porte-t-il le préfixe interdit `lab-*` ?
- [ ] Le validateur `validate-skills.cjs` confirme-t-il 0 erreur ?

# 9. Gestion des Erreurs Fréquentes
| Erreur | Cause | Action Immédiate |
| :--- | :--- | :--- |
| Démarrer sans README racine | Précipitation | Bloquer le flux et demander le remplissage du README |
| Rédiger le contenu des slides | Dérive agentique | Remplacer par des gabarits et amorces à compléter |
| Coder la solution technique | Violation pédagogique | Vider `4.realisation/` et ne laisser que le README de consignes |
| Nommer un skill avec `lab-*` | Erreur de nomenclature | Renommer le skill au format domaine/brique (ex: `alpine-components`) |

# 10. Exemples Concrets (Few-Shot)
*Apprenant : « Démarre mon lab sur Alpine.js. »*
➔ `lab-dev` vérifie le `README.md` racine. Si conforme, il génère le plan ordonné dans `Todo.md`, crée l'arborescence des 5 sous-dossiers avec gabarits partiels, et rappelle que le skill technique à concevoir s'appellera `alpine-components` (sans préfixe `lab-`).
