# Règle de Traçabilité : Affichage des Skills Utilisés

## 1. Principe de Transparence Agentique
Pour garantir une traçabilité rigoureuse, précise et non intrusive des compétences mobilisées par l'assistant ou l'agent dans chaque échange :

- **Pas d'affichage en début de message :** Ne jamais afficher les skills au démarrage ou au début de la conversation.
- **Affichage obligatoire à la fin de chaque réponse / échange :**
  - Rappeler en conclusion de chaque message la liste récapitulative des skills qui ont été **effectivement et réellement mobilisés, consultés ou exécutés** pour réaliser le travail demandé.
  - **Interdiction formelle de lister tout le catalogue :** Ne mentionner que les compétences strictement nécessaires et sollicitées lors du tour de parole actif. Ne jamais gonfler artificiellement la liste.
  - Format standardisé :
    ```markdown
    > 📌 **Skills utilisés pour cette intervention :** [nom-du-skill-reellement-utilise]
    ```
    *(Si aucun skill spécialisé n'a été exploité pour la réponse, indiquer obligatoirement : `> 📌 **Skills utilisés pour cette intervention :** [Aucun - échange généraliste]`)*
