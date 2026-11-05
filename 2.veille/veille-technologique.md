# Veille Technologique : Références du Marché & Choix de skills.sh

Ce document résume notre démarche de veille : identifier plusieurs références du marché, expliquer pourquoi nous avons choisi **`skills.sh`**, et analyser les compétences trouvées pour nos 4 approches d'architecture.

---

## 1. Recensement des Références du Marché

Pour concevoir nos compétences IA, nous avons exploré et comparé 4 références majeures :

| Référence Étudiée | Type de Source | Ce qu'elle Propose | Intérêt pour notre Formation |
| :--- | :--- | :--- | :--- |
| **`skills.sh`** | Registre ouvert de skills | Un très large catalogue de compétences créées par la communauté pour les agents IA. | **Idéal pour explorer, tester et comparer rapidement.** |
| **`claude-plugins-official`** *(Anthropic)* | Dépôt GitHub officiel | Les motifs de référence d'Anthropic (`feature-dev`, `plugin-dev`, `pr-review-toolkit`). | La référence pour les règles d'architecture et les 10 rubriques normées. |
| **`agentskills.io`** | Standard ouvert | La spécification formelle du format `SKILL.md` et de ses métadonnées YAML. | Garantit l'interopérabilité et la compatibilité de nos compétences. |
| **Documentations d'Agents** *(Antigravity, Claude Code)* | Guides des éditeurs | Règles de configuration des agents, gestion du contexte et exécution d'outils. | Permet d'intégrer nos compétences dans les environnements de travail réels. |

---

## 2. Pourquoi Nous Avons Choisi `skills.sh` comme Référence Principale ?

Parmi ces différentes sources, notre équipe a choisi **`skills.sh`** comme référence principale pour réaliser notre lab, pour 3 raisons concrètes :

1. **La Richesse du Catalogue :** C'est le catalogue public le plus vaste, avec des dizaines d'exemples concrets directement téléchargeables.
2. **La Diversité des Approches :** On y trouve aussi bien des skills découpés par technologie que des compétences orientées workflow ou développement complet.
3. **L'Accessibilité pour les Apprenants :** Les compétences y sont simples à lire et à tester, ce qui permet à chaque membre du groupe d'observer comment les autres développeurs formulent leurs prompts.

---

## 3. Exploration sur `skills.sh` pour nos 4 Approches d'Architecture

Chaque apprenant du groupe a cherché sur `skills.sh` les compétences existantes correspondant à son sujet :

| Approche Étudiée | Mots-Clés Cherchés sur `skills.sh` | Compétences Candidates Trouvées | Observation Technique |
| :--- | :--- | :--- | :--- |
| **1. Par Technologie** *(Apprenant 1)* | `html`, `tailwind`, `alpinejs` | `tailwind-helper`, `html-boilerplate` | Fournit les bonnes syntaxes CSS, mais ignore les composants de notre école. |
| **2. Par Layer** *(Apprenant 2)* | `mvc`, `controller`, `ui-view` | `mvc-scaffolder`, `api-controller` | Sépare bien le code, mais oblige l'agent à charger plusieurs fichiers pour une page. |
| **3. Par Workflow** *(Apprenant 3)* | `wireframe`, `testing`, `development` | `code-reviewer`, `spec-generator` | Très bon pour structurer les étapes, mais moins fort pour écrire le code complet. |
| **4. Un Seul Skill** *(Apprenant 4)* | `fullstack`, `feature-dev` | `feature-dev` (Anthropic) | Très complet et autonome, mais consomme beaucoup de mémoire (tokens). |

---

## 4. Bilan de la Veille & Décision d'Équipe

### Ce que cette veille nous apporte :
- Une vue claire de ce qui existe déjà sur le marché (inutile de réinventer la roue pour les structures de base).
- Des exemples concrets de prompts et de fichiers `SKILL.md` efficaces.

### Les limites constatées :
- Les compétences trouvées sur `skills.sh` sont génériques : elles ne connaissent pas notre stack exacte (**Alpine.js réactif, Preline UI**) ni nos règles d'école (`.agent/rules/`).

### Notre décision technique :
1. **Étape 1 :** Tester les compétences trouvées sur `skills.sh` **sans modification** sur notre cas pratique (la Landing Page du Blog des Lauréats) pour mesurer leurs limites.
2. **Étape 2 :** **Adapter ces compétences à notre stack et à nos règles** pour équiper solidement nos apprenants pour le développement de leur projet fil rouge.
