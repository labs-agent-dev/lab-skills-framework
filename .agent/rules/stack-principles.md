# Principes Directeurs de notre Stack Logicielle

## 1. Stack Technique de Référence
- **Backend :** PHP 8.2+ / Laravel 12 (Dernière version majeure - Architecture en couches, séparation stricte Contrôleurs / Actions / Modèles Eloquent).
- **Frontend :** HTML5, Tailwind CSS, Preline UI, Alpine.js réactif (`x-data`, `x-bind`, `x-on`).
- **Agentique :** Standard Anthropic (`SKILL.md` en 10 rubriques), Google Antigravity & GitHub Copilot.

## 2. Séparation des Responsabilités (SSOT & DRY)
- Pas de requêtes SQL, ni de logique métier complexe dans les vues Blade ou templates HTML.
- Composants UI légers propulsés par Alpine.js pour l'interactivité sans framework lourd.
- **Principe du Lean Context :** Ce fichier ne contient aucun snippet ou syntaxe détaillée. Les détails techniques, règles d'API et snippets spécialisés doivent résider dans le skill technique dédié (`resources/`), chargés uniquement lors de la phase de réalisation technique.
