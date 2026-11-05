# Guide de Référence : Organisation d'un Lab par Sous-Dossiers

Ce guide définit l'arborescence officielle que le skill `lab-dev` doit créer ou auditer pour tout nouveau Lab technique.

---

## 1. Principe de l'Arborescence à 5 Sous-Dossiers

Pour garantir une clarté maximale aux apprenants et éviter toute dispersion :
1. **Racine :** Réservée au pilotage (`README.md` pour les infos générales, `Todo.md` pour le suivi des tâches).
2. **5 Sous-Dossiers Concrets :**
   - `1.besoin/` : Le problème métier/technique et le rôle dans le prototype (`contexte-et-besoin.md`).
   - `2.veille/` : L'analyse de l'existant et des outils communautaires (`veille-technologique.md`).
   - `3.skill-technique/` : La spécification du skill IA dédié au lab (`spec-skill.md`).
   - `4.realisation/` : La réalisation technique concrète (code, maquette, configuration, compétence IA, scripts).
   - `5.rapport-et-presentation/` : Les deux livrables réunis pour le formateur (`Lab-[Sujet].md` et `Presentation-[Sujet].md`).
3. **`docs/` :** Strictement réservé à la documentation transversale d'ingénierie et de méthode (aucun livrable de lab).
4. **`.agent/skills/` :** Les compétences IA exécutables par Antigravity et Claude Code.

---

## 2. Arborescence Standard

```
mon-lab-technique/
├── README.md                          # Informations générales sur le Lab
├── Todo.md                            # Suivi ordonné des tâches à réaliser
│
├── 1.besoin/                          # [Étape 1] Pourquoi ce lab ?
│   └── contexte-et-besoin.md          # (issu de template-besoin.md)
│
├── 2.veille/                          # [Étape 2] État de l'art
│   └── veille-technologique.md
│
├── 3.skill-technique/                 # [Étape 3] Outil IA spécialisé
│   └── spec-skill.md
│
├── 4.realisation/                     # [Étape 4] Réalisation technique concrète
│   └── [code, maquettes, scripts, configurations]
│
├── 5.rapport-et-presentation/         # [Étapes 5 & 6] Les deux livrables réunis
│   ├── Lab-[Sujet].md                 # Rapport technique officiel
│   └── Presentation-[Sujet].md        # Slides (Page de garde + 3 phrases notes A1)
│
├── .agent/skills/                     # Compétences IA exécutables
│   ├── plugin-dev/
│   ├── lab-dev/
│   └── lab-[nom]/
│
└── docs/                              # Documentation transversale d'équipe
    ├── 01-demarche-realisation-lab.md
    └── 02-organisation-fichiers-lab.md
```

