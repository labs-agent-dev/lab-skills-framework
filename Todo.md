# Todo List : Lab Skills Framework (Architecture & Playbook SDLC des Agents IA)

## Phase 1 : Cadrage Commun (Besoin & Benchmark - Assisté par lab-dev)
- [x] **Concepts :** Différencier Plugin, Subagent, Workflow et Skill.
- [x] **Règles Transversales :** Configurer `.agents/rules/` (`persona.md`, `lab-rules.md`, `stack-principles.md`, `skills-display.md`).
- [x] **Besoin :** Cadrer `1.besoin/besoin.md` (de l'agent naïf à l'Agent Architecte outillé selon le Playbook SDLC).
- [x] **Benchmark :** Explorer les 4 Philosophies d'Agents (Martin Jordanovski : Playbook vs Pipeline vs Toolkit vs OS), sourcing actif (`skills.addy.ie`, `obra/superpowers`, `HoangNguyen0403`) et diaporama Marp `2.benchmark/benchmark.md` (Gate 2 franchie).
- [x] **Consignes 2, 3 & 4 :** Initialiser les README de travail dans `2.benchmark/`, `3.spec-skill/` et `4.realisation/`.

## Phase 2 : Expérimentation Pratique : Le Playbook en 6 Phases (Réalisé dans `4.realisation/`)
- [x] **1. Define :** Spécification fonctionnelle et contrat `CategoryServiceInterface` dans `1-define/`.
- [x] **2. Plan :** Architecture Service Layer et flux de données DTO dans `2-plan/`.
- [x] **3. Build :** Code complet du Service Layer (`CategoryService.php`, `CategoryData.php`, `CategoryController.php`, `Category.php`) et interface réactive Alpine.js dans `3-build/`.
- [x] **4. Verify :** Tests unitaires Pest / PHPUnit et vérification anti-$N+1$ dans `4-verify/`.
- [x] **5. Review :** Audit de simplification de code et garde-fous anti-rationalisation dans `5-review/`.
- [x] **6. Ship :** Fiche de livraison et protocole de démonstration en direct dans `6-ship/` (Gate 3 franchie).

## Phase 3 : Spécification Technique & Finalisation du Skill (Réalisé dans `3.spec-skill/`)
- [x] **Arbitrage ADR :** Décisions d'Architecture formelles (ADR-001 Hybride Modulaire & ADR-002 Paradigme Playbook SDLC Addy Osmani) rédigées dans `3.spec-skill/spec-skill.md`.
- [x] **Spécification :** Matrice Stack x Playbook SDLC pour `AgentDev` formalisée dans `3.spec-skill/spec-skill.md` (Gate 4 franchie).
- [x] **Validation du skill :** Conformité déterministe validée via `skill-creator` (100 % conforme, 0 erreur bloquante) :
  ```powershell
  node .agents/skills/skill-creator/scripts/validate-skills.cjs
  ```

## Phase 4 : Soutenance Sprint Formateur (Réalisé dans `5.rapport-et-presentation/`)
- [x] **Rapport :** Rapport technique consolidant les 4 philosophies et le Playbook dans `5.rapport-et-presentation/Lab-Skill-Engineering.md`.
- [x] **Présentation :** Diapositives finalisées avec page de garde réglementaire et exactement 3 phrases orales A1 par slide dans `5.rapport-et-presentation/Presentation-Skill-Engineering.md`.
- [x] **Live Coding sans IA :** Préparation au mini-défi formateur (explication du Service Layer, withCount et manipulation Alpine.js) - Gate 5 franchie.
