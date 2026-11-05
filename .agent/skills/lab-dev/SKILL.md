---
name: lab-dev
description: Cadre, structure et valide la réalisation de Labs techniques pour les prototypes de projets fil rouge, organise le lab en 5 sous-dossiers concrets (1.besoin, 2.veille, 3.skill-technique, 4.realisation, 5.rapport-et-presentation), fait créer le skill technique dédié avec plugin-dev, génère la présentation (page de garde et 3 phrases A1 par slide) et le fichier Todo.md, sans rédiger la solution à la place de l'apprenant.
version: 1.3.1
inspiration:
  source: "anthropic/claude-plugins-official"
  plugin: "feature-dev"
  pattern: "5-folder modular organization, domain skill pairing, no-AI live coding & speaker notes guidance"
---

# 1. Mission
Ce méta-skill cadre et valide l'organisation des **Labs techniques en 5 sous-dossiers concrets** :
- **Fil Rouge (100 % IA) :** Développé intégralement par l'IA selon notre architecture logicielle et nos skills.
- **Prototype Sprint :** Réalisé par l'apprenant en **live coding direct devant le formateur SANS IA et SANS PROMPT**.
- **Livrables :** Colocalisation rapport + présentation (page de garde et 3 notes A1/slide).

# 2. Déclenchement & Limites
- **Activer :** Démarrage de lab, arborescence 5 sous-dossiers, Todo.md, audit et autorisation de sprint.
- **Ne PAS activer :** Rédaction de code métier (utiliser le skill technique dédié) ou normalisation de `SKILL.md` (utiliser `plugin-dev`).

# 3. Entrées & Ressources à Charger
- `.agent/skills/lab-dev/resources/guide-organisation-dossiers.md` (Structure des 5 sous-dossiers).
- `.agent/skills/lab-dev/resources/template-besoin.md` (Gabarit `contexte-et-besoin.md`).
- `.agent/skills/lab-dev/resources/validation-checklist.md` (Grille de validation avant sprint).

# 4. Contraintes & Règles Inviolables
1. **Arborescence en 5 Dossiers :** `1.besoin/`, `2.veille/`, `3.skill-technique/`, `4.realisation/`, `5.rapport-et-presentation/`.
2. **Protection de docs/ :** Aucun livrable de lab dans `docs/` (réservé aux guides méthodologiques transversaux).
3. **Sprint sans IA :** Live coding direct sans IA ni prompt devant le formateur.
4. **Présentation :** Page de garde obligatoire + exactement **3 phrases de notes en français A1** par slide.

# 5. Procédure Pas-à-Pas
1. **1.besoin/ :** Générer `README.md`, `Todo.md` et `contexte-et-besoin.md`.
2. **2.veille/ :** Analyser les références du marché et consigner dans `veille-technologique.md`.
3. **4.realisation/ :** Tester et comparer les options sur le cas pratique étalon (code/maquette).
4. **3.skill-technique/ :** Résultat final du lab — Retenir une seule approche et créer le skill avec `plugin-dev`.
5. **5.rapport-et-presentation/ :** Générer le rapport et les slides A1, auditer avec la checklist et autoriser le sprint.

# 6. Gestion des Ambiguïtés & Décisions
- **Contenu de 4.realisation/ :** Y placer le code développé, les maquettes ou configurations testées.
- **Notes orales trop complexes :** Reformuler en 3 phrases simples A1 (Sujet + Verbe + Complément).

# 7. Format de Sortie & Livrables
- Racine : `README.md`, `Todo.md`.
- Dossiers : `1.besoin/`, `2.veille/`, `3.skill-technique/`, `4.realisation/`, `5.rapport-et-presentation/`.

# 8. Contrôle Qualité (Checklist Binaire)
- [ ] Les 5 sous-dossiers sont présents et conformes ?
- [ ] Le dossier `docs/` est exempt de livrables de lab ?
- [ ] Rapport ET Présentation sont réunis dans `5.rapport-et-presentation/` ?
- [ ] La présentation contient la page de garde et 3 phrases A1 par slide ?
- [ ] Le validateur `validate-skills.cjs` confirme 0 erreur ?

# 9. Gestion des Erreurs Fréquentes
| Erreur | Cause | Action Immédiate |
| :--- | :--- | :--- |
| Livrable dans docs/ | Confusion | Déplacer dans les sous-dossiers 1 à 5 |
| Rapport et slides séparés | Dispersion | Regrouper dans `5.rapport-et-presentation/` |
| Notes orales verbeuses | Niveau inadapté | Réduire à 3 phrases simples directes A1 |

# 10. Exemples Concrets (Few-Shot)
*Apprenant : « Je prépare mon lab Alpine.js pour mon projet. »*
➔ `lab-dev` crée l'arborescence 1 à 5, initialise `Todo.md`, oriente vers `plugin-dev` pour créer `lab-alpinejs`, prépare les slides A1 et valide la conformité avant le sprint.
