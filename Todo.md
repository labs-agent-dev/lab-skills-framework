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

## Phase 3 : Spécification Technique & Finalisation du Skill (Réalisé dans `3.spec-skill/`)
- [x] **Arbitrage ADR :** Décision d'Architecture formelle (ADR-001) actant l'approche Hybride Modulaire rédigée dans `3.spec-skill/spec-skill.md`.
- [x] **Spécification :** Fiche de spécification et matrice Stack x Workflow formalisées dans `3.spec-skill/spec-skill.md` (Gate 4 franchie).
- [x] **Validation du skill :** Conformité déterministe validée via `skill-creator` (100 % conforme, 0 erreur bloquante) :
  ```powershell
  node .agents/skills/skill-creator/scripts/validate-skills.cjs
  ```

## Phase 4 : Soutenance Sprint Formateur (Réalisé dans `5.rapport-et-presentation/`)
- [x] **Rapport :** Rapport technique finalisé dans `5.rapport-et-presentation/Lab-Skill-Engineering.md`.
- [x] **Présentation :** Diapositives finalisées avec page de garde réglementaire et exactement 3 phrases orales A1 par slide dans `5.rapport-et-presentation/Presentation-Skill-Engineering.md`.
- [x] **Live Coding sans IA :** Préparation au mini-défi formateur (ajout de champ dynamique dans Alpine.js et contrôle N+1 dans Laravel) - Gate 5 franchie.
