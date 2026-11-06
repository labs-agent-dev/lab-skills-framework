# Todo List : Lab Skills Framework (Architecture des Skills IA)

## Phase 1 : Cadrage Commun (Besoin & Veille - Assisté par lab-dev)
- [x] **Concepts :** Différencier Plugin, Subagent, Workflow et Skill.
- [x] **Règles Transversales :** Configurer `.agents/rules/` (`persona.md`, `lab-rules.md`, `stack-principles.md`, `skills-display.md`).
- [x] **Besoin :** Cadrer `1.besoin/besoin.md` (expression du problème, 4 pistes exploratoires et démarche alternative).
- [x] **Veille :** Explorer les références (GitHub Topics `coding-agent`, `skills.sh`), initialiser `2.veille/README.md` et le diaporama Marp `2.veille/veille-technologique.md`.
- [x] **Consignes 2, 3 & 4 :** Initialiser les README de travail dans `2.veille/`, `3.spec-skill/` et `4.realisation/`.

## Phase 2 : Expérimentation & Tests Comparatifs (À Réaliser dans `4.realisation/`)
- [ ] **Testbench :** Monter la Landing Page du Blog des Lauréats (Tailwind CSS, Alpine.js).
- [ ] **Tests comparatifs :** Évaluer les approches (Test 1 brut sur `skills.sh` vs Test 2 adapté à notre stack).
- [ ] **Matrice comparative :** Mesurer vitesse, tokens et maintenabilité dans `4.realisation/`.

## Phase 3 : Spécification Technique & Finalisation du Skill (À Réaliser dans `3.spec-skill/`)
- [ ] **Arbitrage ADR :** Choisir **une seule approche** optimale à partir des tests comparatifs.
- [ ] **Spécification :** Rédiger `spec-skill.md` pour l'approche retenue (résultat final : `architecture-skills`).
- [ ] **Validation du skill :** Valider la conformité via `skill-creator` :
  ```powershell
  node .agents/skills/skill-creator/scripts/validate-skills.cjs
  ```

## Phase 4 : Soutenance Sprint Formateur (À Compléter dans `5.rapport-et-presentation/`)
- [ ] **Rapport :** Compléter les zones de résultats dans `Lab-Skill-Engineering.md`.
- [ ] **Présentation :** Compléter les diapositives et les 3 phrases orateur A1 par slide.
- [ ] **Live Coding sans IA :** Réaliser le sprint et réussir le mini-défi sans IA devant le formateur.
