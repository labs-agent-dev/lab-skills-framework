---
name: lab-dev
description: Cadre, structure et valide la réalisation de Labs techniques pour les prototypes de projets fil rouge, organise le lab en 5 sous-dossiers concrets (1.besoin, 2.veille, 3.skill-technique, 4.realisation, 5.rapport-et-presentation), fait créer le skill technique dédié avec skills-dev, génère la présentation (page de garde et 3 phrases A1 par slide) et le fichier Todo.md, sans rédiger la solution à la place de l'apprenant.
version: 1.4.0
inspiration:
  source: "anthropic/claude-plugins-official"
  plugin: "feature-dev"
  pattern: "5-folder modular organization, domain skill pairing, no-AI live coding & pedagogical scaffolding"
---

# 1. Mission
Ce méta-skill cadre et valide l'organisation des **Labs techniques en 5 sous-dossiers concrets** :
- **Non-Substitution de l'Apprenant :** L'agent ne résout jamais le lab à sa place. C'est l'apprenant ou le formateur qui réalise les travaux techniques. `lab-dev` initialise le cadre et fournit les livrables **à compléter**. Il n'enrichit les livrables que sur demande de l'apprenant lorsqu'il communique ses résultats.
- **Fil Rouge (100 % IA) :** Développé par l'IA selon notre architecture logicielle et nos skills.
- **Prototype Sprint :** Réalisé en **live coding direct devant le formateur SANS IA et SANS PROMPT**.
- **Livrables :** Colocalisation rapport + présentation (page de garde et 3 notes A1/slide).

# 2. Déclenchement & Limites
- **Activer :** Démarrage de lab, arborescence 5 sous-dossiers, Todo.md, audit et autorisation de sprint.
- **Ne PAS activer :** Rédaction de code métier (skill technique dédié) ou normalisation de `SKILL.md` (`skills-dev`).

# 3. Entrées & Ressources à Charger
- `.agent/skills/lab-dev/resources/guide-organisation-dossiers.md` (Structure des 5 sous-dossiers).
- `.agent/skills/lab-dev/resources/template-besoin.md` (Gabarit `contexte-et-besoin.md`).
- `.agent/skills/lab-dev/resources/validation-checklist.md` (Grille de validation avant sprint).

# 4. Contraintes & Règles Inviolables
1. **Pédagogie & Non-Substitution :** `lab-dev` ne code pas à la place de l'apprenant.
2. **Dossiers 3 et 4 Vides avec README :** `4.realisation/` et `3.skill-technique/` sont initialisés vides, chacun avec un `README.md` décrivant les consignes du travail à réaliser.
3. **Livrables 5 Partiels :** `Lab-[Sujet].md` et `Presentation-[Sujet].md` sont générés sous forme partielle avec amorces et blocs `[À compléter]`.
4. **Dossiers 1 et 2 Assistés :** `1.besoin/` et `2.veille/` peuvent être rédigés ou assistés par `lab-dev`.
5. **Protection de docs/ :** Aucun livrable de lab dans `docs/` (réservé aux guides méthodologiques).
6. **Sprint sans IA :** Live coding direct sans IA ni prompt devant le formateur.
7. **Présentation :** Page de garde obligatoire + exactement **3 phrases simples de notes A1** par slide.

# 5. Procédure Pas-à-Pas
1. **1.besoin/ :** Initialiser `README.md`, `Todo.md` et assister `contexte-et-besoin.md`.
2. **2.veille/ :** Analyser les références du marché et consigner dans `veille-technologique.md`.
3. **4.realisation/ :** Créer le `README.md` de consignes (l'apprenant teste et compare les options).
4. **3.skill-technique/ :** Résultat final — Créer le `README.md` de consignes (l'apprenant choisit 1 approche et conçoit le skill avec `skills-dev`).
5. **5.rapport-et-presentation/ :** Générer les livrables partiels, assister leur complétion sur demande de l'apprenant, auditer et autoriser le sprint.

# 6. Gestion des Ambiguïtés & Décisions
- **Demande de résoudre le lab :** Rappeler : *« C'est à vous de réaliser l'expérimentation. Je vous fournis le template et les consignes pour vous guider. »*
- **Notes orales complexes :** Reformuler en 3 phrases simples A1 (Sujet + Verbe + Complément).

# 7. Format de Sortie & Livrables
- Racine : `README.md`, `Todo.md`.
- `1.besoin/contexte-et-besoin.md` (rédigé/assisté).
- `2.veille/veille-technologique.md` (rédigé/assisté).
- `3.skill-technique/README.md` et `4.realisation/README.md` (consignes de travail).
- `5.rapport-et-presentation/` : livrables partiels à compléter.

# 8. Contrôle Qualité (Checklist Binaire)
- [ ] Les 5 sous-dossiers sont présents et conformes ?
- [ ] `3.skill-technique/` et `4.realisation/` contiennent chacun un README de consignes ?
- [ ] `5.rapport-et-presentation/` contient les livrables partiels avec zones à compléter ?
- [ ] `docs/` est exempt de livrables de lab ?
- [ ] Le validateur `validate-skills.cjs` confirme 0 erreur ?

# 9. Gestion des Erreurs Fréquentes
| Erreur | Cause | Action Immédiate |
| :--- | :--- | :--- |
| Résoudre la réalisation à la place de l'apprenant | Dérive agentique | Vider `4.realisation/` et ne laisser que le `README.md` de consignes |
| Spécifier le skill avant les tests | Inversion du flux | Placer la conception dans `3.skill-technique/` en résultat final |
| Livrables dans docs/ | Confusion | Déplacer dans les sous-dossiers 1 à 5 |

# 10. Exemples Concrets (Few-Shot)
*Apprenant : « Je prépare mon lab Alpine.js pour mon projet. »*
➔ `lab-dev` initialise l'arborescence 1 à 5, assiste `1.besoin/` et `2.veille/`, prépare les `README.md` dans `3.skill-technique/` et `4.realisation/`, génère les livrables partiels dans `5.rapport-et-presentation/` et audite avant le sprint.
