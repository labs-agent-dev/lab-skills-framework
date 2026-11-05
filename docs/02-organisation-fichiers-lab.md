# Guide d'Organisation des Fichiers d'un Lab

## 1. Règle des 4 Espaces de Travail
1. **Pilotage (Racine) :** `README.md` (contexte général) et `Todo.md` (suivi des tâches).
2. **Livrables Apprenant (5 Sous-Dossiers) :**
   - `1.besoin/` : Contexte du fil rouge et problème technique (`contexte-et-besoin.md`).
   - `2.veille/` : État de l'art et références (`veille-technologique.md`).
   - `3.skill-technique/` : Spécification du skill dédié (`spec-skill.md`).
   - `4.realisation/` : Code, maquettes, schémas ou configurations concrètes.
   - `5.rapport-et-presentation/` : `Lab-[Sujet].md` et `Presentation-[Sujet].md` (slides A1).
3. **Outillage Agentique :** `.agent/skills/` (`plugin-dev`, `lab-dev`, skill technique du lab).
4. **Méthode d'Équipe :** `docs/` réservé exclusivement aux guides transversaux (aucun livrable de lab).

## 2. Arborescence Type
```
mon-lab/
├── README.md
├── Todo.md
├── 1.besoin/contexte-et-besoin.md
├── 2.veille/veille-technologique.md
├── 3.skill-technique/spec-skill.md
├── 4.realisation/[code ou livrable testé]
├── 5.rapport-et-presentation/
│   ├── Lab-[Sujet].md
│   └── Presentation-[Sujet].md
└── docs/
```

## 3. Règle Inviolable de la Soutenance
- Page de garde obligatoire.
- Exactement **3 phrases simples de notes en français A1** par slide.
- Évaluation en sprint réalisée en **live coding direct sans IA ni prompt**.
