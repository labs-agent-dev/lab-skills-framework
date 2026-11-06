# Todo List : Lab Skills Framework (Architecture des Skills IA)

## Phase 1 : Cadrage Commun (Besoin & Benchmark - Assisté par lab-dev)
- [x] **Concepts :** Différencier Plugin, Subagent, Workflow et Skill.
- [x] **Règles Transversales :** Configurer `.agents/rules/` (`persona.md`, `lab-rules.md`, `stack-principles.md`, `skills-display.md`).
- [x] **Besoin :** Cadrer `1.besoin/besoin.md` (expression du problème, 4 pistes exploratoires et démarche alternative).
- [x] **Benchmark :** Explorer les références (GitHub Topics `coding-standards`, `coding-agent`, `agent-skills`, standard `HoangNguyen0403`, `skills.sh`), initialiser `2.benchmark/README.md` et finaliser le diaporama Marp `2.benchmark/benchmark.md` (Gate 2 franchie).
- [x] **Consignes 2, 3 & 4 :** Initialiser les README de travail dans `2.benchmark/`, `3.spec-skill/` et `4.realisation/`.

## Phase 2 : Expérimentation & Tests Pratiques (Réalisé dans `4.realisation/`)
- [x] **Testbench CRUD Catégories :** Interface réactive complète montée dans `4.realisation/index.html` (Alpine.js 3.x, Tailwind CSS, Preline UI).
- [x] **Approche Retenue (Test 2) :** Implémentation du socle backend P0 Laravel (`CategoryController.php`, `StoreCategoryRequest.php`, `Category.php`) inspiré de `HoangNguyen0403`.
- [x] **Rapport d'Évaluation :** Fiche de mesure rédigée dans `4.realisation/rapport-test-hybride.md` (vitesse, économie de tokens, conformité stack, préparation live coding sans IA - Gate 3 franchie).

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
