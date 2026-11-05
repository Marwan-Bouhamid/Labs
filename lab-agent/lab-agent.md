# Lab Agent — Analyser un projet et préparer des Labs avec des Skills

## Travail à faire

Dans ce Lab, vous étudiez le projet fil rouge afin d’en comprendre le contenu et d’identifier ses besoins techniques. À partir de cette analyse, vous proposez une liste de Labs réalisables. Vous créez ensuite des Skills pour aider à préparer ces Labs, puis vous testez les Skills avec Antigravity et GitHub Copilot dans VS Code et vérifiez les résultats.

**Projet fil rouge :** [Projet-file-rouge sur GitHub](https://github.com/Marwan-Bouhamid/Projet-file-rouge)

## Objectifs d’apprentissage

À la fin du Lab, vous serez capable de :

- explorer un dépôt GitHub et distinguer les éléments observés des hypothèses ;
- relever les besoins techniques et les questions qui restent à clarifier ;
- transformer ces besoins en une liste de Labs limités et vérifiables ;
- rédiger une Skill avec un objectif, une méthode et un format de sortie clairs ;
- tester une même Skill dans Antigravity et GitHub Copilot dans VS Code ;
- vérifier les résultats à partir du dépôt et de critères explicites.

## Prérequis

- Savoir consulter un dépôt GitHub et lire sa structure et sa documentation.
- Avoir accès à Antigravity et à GitHub Copilot dans VS Code.
- Connaître Markdown et savoir enregistrer les résultats dans le dépôt de travail.

## Travail à faire (Solution)

### 1. Examiner le projet fil rouge

1. Ouvrir le [dépôt du projet](https://github.com/Marwan-Bouhamid/Projet-file-rouge).
2. Examiner les fichiers, la documentation, les branches et les technologies effectivement présentes.
3. Noter les fonctionnalités ou composants repérés et les indices qui les justifient (fichiers, chemins ou documentation).
4. Séparer clairement les faits observés, les déductions et les informations manquantes. Ne pas attribuer une technologie ou une fonctionnalité au projet sans preuve.
5. Si le dépôt ne contient pas assez d’informations pour une analyse fiable, consigner ce qui manque et les questions à poser avant de poursuivre.

**Résultat attendu :** une courte fiche d’analyse du projet, accompagnée de références vérifiables vers les éléments consultés.

### 2. Identifier les besoins et proposer les Labs

1. Déduire les besoins techniques des éléments observés dans le projet.
2. Pour chaque besoin, formuler un problème précis et un résultat attendu.
3. Proposer des Labs indépendants, chacun centré sur un objectif principal.
4. Pour chaque Lab, préciser :
   - son titre et le besoin auquel il répond ;
   - son objectif d’apprentissage et son périmètre ;
   - les prérequis et dépendances éventuelles ;
   - les outils ou technologies à étudier, uniquement lorsqu’ils sont justifiés ;
   - les étapes de travail, les livrables et les critères de réussite.
5. Prioriser les Labs et expliquer brièvement l’ordre proposé.

**Résultat attendu :** une liste organisée de Labs reliée aux besoins identifiés. Indiquer les hypothèses et les décisions qui nécessitent une validation.

### 3. Créer une Skill de préparation

Créer une Skill qui aide à transformer un besoin du projet en consigne de Lab exploitable. Elle doit :

- décrire son objectif et les situations dans lesquelles l’utiliser ;
- demander ou examiner les informations nécessaires avant de proposer une solution ;
- distinguer les faits, les hypothèses et les questions ouvertes ;
- produire un Lab avec un contexte, un problème, un objectif, des étapes, des livrables et des critères de réussite ;
- éviter d’inventer des détails du projet ou d’imposer une technologie non justifiée.

Enregistrer la Skill dans le format et à l’emplacement pris en charge par l’outil utilisé. Documenter son nom, son objectif et son mode d’utilisation.

**Résultat attendu :** les fichiers de Skill et une consigne d’essai identique qui pourra être utilisée dans les deux assistants.

### 4. Tester la Skill dans les deux assistants

1. Fournir à Antigravity la même Skill, le même besoin et le même contexte du projet.
2. Refaire le test avec GitHub Copilot dans VS Code, sans modifier la consigne.
3. Enregistrer les réponses obtenues et indiquer les versions ou paramètres utiles à la reproduction du test.
4. Recommencer après une modification de la Skill si un résultat contient des erreurs, des suppositions ou des étapes non vérifiables.

**Résultat attendu :** deux résultats comparables et une trace des éventuelles améliorations apportées à la Skill.

### 5. Vérifier et comparer les résultats

Vérifier chaque résultat à l’aide du dépôt et de la grille suivante :

| Critère | Vérification |
|:--|:--|
| Ancrage dans le projet | Les affirmations sur le projet sont-elles appuyées par des fichiers ou de la documentation ? |
| Exactitude | Les faits, les hypothèses et les informations manquantes sont-ils distingués ? |
| Pertinence | Les Labs proposés répondent-ils aux besoins réellement identifiés ? |
| Périmètre | Chaque Lab a-t-il un objectif principal clair et réaliste ? |
| Actionnabilité | Les étapes et livrables peuvent-ils être réalisés et compris ? |
| Vérifiabilité | Les critères permettent-ils de constater objectivement la réussite ? |
| Cohérence | Les deux assistants ont-ils suivi le format et les règles de la Skill ? |

Attribuer à chaque critère un résultat (« conforme », « à améliorer » ou « non vérifié ») et ajouter une justification. Corriger la Skill lorsque les écarts proviennent de consignes ambiguës ou incomplètes.

**Résultat attendu :** une comparaison argumentée, fondée sur des preuves, et une Skill révisée si nécessaire.

## Livrables à remettre

- La fiche d’analyse du projet et ses références.
- La liste priorisée des Labs proposés.
- Les fichiers de la Skill et la consigne d’essai commune.
- Les résultats obtenus avec Antigravity et GitHub Copilot dans VS Code.
- La grille de vérification remplie, les améliorations apportées et une courte conclusion.

## Critères de réussite

Le Lab est réussi si :

- l’analyse s’appuie sur le contenu réellement consulté et signale les informations manquantes ;
- chaque Lab proposé correspond à un besoin identifié et possède un objectif et des critères vérifiables ;
- la Skill produit un format de Lab clair sans présenter des suppositions comme des faits ;
- la même consigne a été testée dans les deux assistants ;
- les résultats ont été comparés et les écarts importants sont expliqués ;
- les livrables permettent à une autre personne de reproduire l’analyse et les essais.

## Conclusion attendue

Résumer les besoins techniques relevés, les Labs retenus et leur ordre de priorité. Expliquer ce que les tests ont montré sur la Skill et sur les résultats des deux assistants, préciser les limites de l’analyse et indiquer les prochaines vérifications nécessaires.
