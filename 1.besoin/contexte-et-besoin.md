# Cadrage du Besoin : Lab Ingénierie des Skills IA

Ce document formalise le besoin technique et pédagogique de notre Lab actuel.

---

## 1. Mon Projet Fil Rouge
- **Nom de mon projet :** Déploiement d'une Usine Logicielle Agentique pour les Projets Fil Rouge (Solicode LMS / Projets Techniques).
- **À quoi sert mon projet :** Permettre à chaque apprenant de concevoir, développer et soutenir son prototype technique par sprints en utilisant efficacement les agents IA (Claude Code, Antigravity, Copilot).

## 2. Mon Prototype Technique
- **Partie du prototype développée aujourd'hui :** Le socle d'ingénierie des compétences IA (Skill Engineering) et l'orchestration des Labs techniques.
- **Pourquoi ce lab est indispensable :** Sans ce lab, nous ne saurions pas comment découper les compétences de nos agents, ce qui provoquerait des conflits, une saturation de la mémoire (tokens) et un code de mauvaise qualité.

## 3. Mon Besoin Technique
- **Le problème que je dois résoudre :** 
  - Déterminer la bonne granularité des compétences : Faut-il un seul skill global (`feature-dev`) ou un skill par technologie (Laravel, Alpine.js, Preline UI) ou un skill par étape de travail ?
  - Définir comment orchestrer les compétences entre Claude Code, Antigravity et Copilot.
- **Ce que l'utilisateur (apprenant et formateur) doit pouvoir faire :**
  - Savoir exactement quel skill IA déclencher pour chaque tâche de développement.
  - Générer et valider des livrables de lab propres et soutenables en sprint.

## 4. Position dans notre Stack Technique
- **Couche technique concernée :** Compétences IA, Gouvernance Agentique & Orchestration de projet.
- **Schéma simple des flux :**
```
[Apprenant / Formateur]
         │
         ▼ (Déclenchement /lab-dev)
    [Méta-Skill Méthodologique (lab-dev)]
         │
         ▼ (Délègue l'ingénierie)
[Skill Technique : lab-skill-engineering]
         │
         ▼ (Génère & Normalise)
[Compétences IA Dédiées : Laravel, Alpine, Preline]
```

## 5. Critères de Réussite du Lab
Pour valider mon lab devant le formateur, je dois réussir à :
- [x] Concevoir une architecture de compétences modulaire et sans doublons (DRY/SSOT).
- [x] Créer le skill technique `lab-skill-engineering` validé à 100% par script (0 erreur).
- [x] Fournir une matrice claire associant chaque brique de notre stack à un skill dédié.
- [x] Présenter les 5 slides avec la page de garde et les 3 phrases de notes en français A1 par slide.

