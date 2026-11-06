# Règle de Traçabilité : Affichage des Skills Utilisés

## 1. Principe de Transparence Agentique
Pour garantir une traçabilité explicite et rigoureuse des compétences mobilisées par l'assistant ou l'agent dans chaque échange :

1. **Au début de chaque échange / réponse :**
   - Afficher obligatoirement la liste des skills mobilisés ou consultés pour amorcer l'analyse ou le traitement de la demande.
   - Format standardisé :
     ```markdown
     > 🛠️ **Skills mobilisés au démarrage :** [nom-du-skill-1, nom-du-skill-2]
     ```
     *(Si aucun skill particulier n'est requis pour la demande, indiquer : `> 🛠️ **Skills mobilisés au démarrage :** [Aucun - échange général]`)*

2. **À la fin de chaque échange / réponse :**
   - Rappeler obligatoirement la liste récapitulative des skills qui ont été effectivement consultés, exécutés ou appliqués durant l'intervention.
   - Format standardisé :
     ```markdown
     > 📌 **Skills utilisés pour cette intervention :** [nom-du-skill-1, nom-du-skill-2]
     ```
     *(Si aucun skill n'a été exploité, indiquer : `> 📌 **Skills utilisés pour cette intervention :** [Aucun - échange général]`)*

