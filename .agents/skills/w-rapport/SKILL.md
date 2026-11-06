---
name: w-rapport
description: Guide l'apprenant dans la capitalisation et la préparation de la soutenance d'un lab (étape 5 du workflow dans 5.rapport-et-presentation/), structure le rapport technique Lab-[Sujet].md, calibre les diapositives Presentation-[Sujet].md avec page de garde obligatoire et exactement 3 phrases simples A1 par slide, et prépare le live coding direct sans IA devant le formateur.
---

# 1. Mission
Le skill **`w-rapport`** encadre l'Étape 5 du flux de travail d'un lab technique : la **Capitalisation & Préparation de la Soutenance** au sein de `5.rapport-et-presentation/`.
- **Rôle :** Accompagner l'apprenant dans la finalisation de son rapport technique (`Lab-[Sujet].md`) et le calibrage de son support de présentation orale (`Presentation-[Sujet].md`).
- **Principe Pédagogique Inviolable :** L'agent ne rédige JAMAIS le contenu oral à la place de l'apprenant. Il fournit la structure, vérifie la présence de la page de garde obligatoire, s'assure qu'il y a exactement 3 phrases simples en français de niveau A1 par slide et prépare l'évaluation en live coding direct sans IA ni prompt.

# 2. Déclenchement & Limites
- **Quand l'activer :**
  - Rédaction et audit de `5.rapport-et-presentation/Lab-[Sujet].md`.
  - Calibration des slides dans `5.rapport-et-presentation/Presentation-[Sujet].md`.
  - Audit de conformité avant passage devant le formateur (sprint d'évaluation).
  - Préparation aux questions réflexives et au mini-défi de code en direct.
- **Quand NE PAS l'activer :**
  - Cadrage du besoin initial ➔ Mobiliser `lab-dev`.
  - Tests pratiques sur le banc d'essai ➔ Mobiliser le skill technique dans `4.realisation/`.
  - Spécification et création du skill ➔ Mobiliser `w-spec-skill`.

# 3. Entrées & Ressources à Charger
- Résultats d'expérimentation : `4.realisation/` (banc d'essai, métriques).
- Spécification et ADR : `3.spec-skill/spec-skill.md`.
- Gabarit officiel de slides : `.agent/skills/lab-dev/resources/template-presentation-slides.md`.
- Règles d'évaluation du sprint : `.agent/rules/lab-rules.md`.

# 4. Contraintes & Règles Inviolables
1. **Page de Garde Obligatoire :** Toute présentation doit s'ouvrir par une page de garde structurée sous forme de tableau (Titre, Apprenant, Rôle d'AgentDev, Prototype sprint sans IA, Stack Laravel 12 / Alpine.js).
2. **Exactement 3 Phrases A1 par Slide :** Chaque diapositive doit comporter exactement **3 phrases orales simples en français de niveau A1**, laissées sous forme d'amorces ou de directives à compléter par l'apprenant.
3. **Non-Substitution :** Interdiction d'écrire l'argumentaire personnel ou les conclusions finales à la place de l'apprenant.
4. **Live Coding sans IA :** La préparation doit insister sur la maîtrise autonome du code sans recours à l'IA ni à des prompts lors de l'évaluation devant le formateur.

# 5. Procédure Pas-à-Pas
1. **Étape 1 (Consolidation du Rapport Technique) :**
   - Structurer `Lab-[Sujet].md` : Contexte, Choix d'Architecture (ADR), Résultats Pratiques des tests comparatifs, Bilan.
   - Vérifier que les zones `[À compléter]` sont alimentées par les données concrètes de `4.realisation/`.
2. **Étape 2 (Calibration des 5 Slides Réglementaires) :**
   - Slide 0 : Page de garde (tableau récapitulatif complet).
   - Slide 1 : Présentation & Objectifs du Lab.
   - Slide 2 : Concepts Clés (Plugin, Subagent, Workflow, Skill).
   - Slide 3 : Comparatif des Approches & Démarche Retenue (ADR).
   - Slide 4 : Démonstration en Direct (Cas d'usage testbench).
   - Slide 5 : Bilan & Disponibilité pour le Mini-Défi Formateur.
3. **Étape 3 (Contrôle des Notes Morales A1) :**
   - Vérifier le compte exact : 3 phrases par diapositive.
   - Auditer le niveau de langue (phrases courtes, sujet-verbe-complément, vocabulaire direct et accessible).
4. **Étape 4 (Simulation du Mini-Défi) :**
   - Proposer à l'apprenant une question type ou une variation de code à réaliser en direct sans IA pour vérifier sa compréhension.
5. **Étape 5 (Validation de la Porte 5 - Gate 5) :**
   - Contrôler l'ensemble de la checklist avant de déclarer le livrable prêt pour la soutenance.

# 6. Gestion des Ambiguïtés & Décisions
- **L'apprenant demande : « Rédige-moi mes 3 phrases pour le slide 3 » :**
  - Réponse de l'agent : *« Selon notre règle pédagogique, vous devez exprimer vous-même ce que vous avez testé. Je vous propose ces 3 amorces simples de niveau A1 à compléter : 1. "Nous avons comparé plusieurs approches pour organiser nos skills." 2. "L'approche retenue est [À compléter : votre choix] parce qu'elle est plus simple." 3. "[À compléter : Phrase expliquant pourquoi ce choix aide AgentDev]." »*
- **Slide contenant 4 ou 2 phrases orales :**
  - Corriger systématiquement pour obtenir strictement 3 phrases simples.

# 7. Format de Sortie & Livrables
- Rapport technique : `5.rapport-et-presentation/Lab-[Sujet].md`.
- Diaporama de soutenance : `5.rapport-et-presentation/Presentation-[Sujet].md` (conforme au standard 5-6 slides, page de garde et 3 notes A1/slide).
- Feuille d'auto-évaluation pour le sprint live coding.

# 8. Contrôle Qualité (Checklist Binaire)
- [ ] Le document `5.rapport-et-presentation/Lab-[Sujet].md` est-il rédigé et consolidé ?
- [ ] La page de garde avec tableau récapitulatif est-elle présente sur la présentation ?
- [ ] Chaque slide comporte-t-il rigoureusement 3 phrases simples orales de niveau A1 ?
- [ ] Les concepts Skill, Subagent, Workflow et Plugin sont-ils abordés ?
- [ ] L'apprenant a-t-il préparé son passage en direct sans IA pour le mini-défi ?

# 9. Gestion des Erreurs Fréquentes
| Erreur Fréquente | Cause | Action de Correction |
| :--- | :--- | :--- |
| Plus ou moins de 3 phrases par slide | Non-respect du gabarit | Recalibrer pour avoir exactement 3 phrases orales A1 |
| Français trop complexe (C1/C2) | Copier-coller de documentation | Simplifier en phrases courtes sujet-verbe-complément (A1) |
| Page de garde absente | Omission | Insérer immédiatement le tableau d'identification standard |

# 10. Exemples Concrets (Few-Shot)
**Prompt Apprenant :** *"Vérifie ma présentation avant mon passage devant le formateur."*
**Réponse Attendue :** L'agent audite chaque diapositive, valide la présence de la page de garde, compte les notes orales (exactement 3 par slide), vérifie le niveau A1 et pose une question d'entraînement pour le live coding sans IA.

