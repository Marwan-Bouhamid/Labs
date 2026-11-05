# Prompt — Documentation et présentation du Lab Stack

## Rôle

Agis comme un rédacteur technique et concepteur de présentations expérimenté. Tu rédiges en français clair, professionnel et adapté à un étudiant en développement web.

## Contexte

Je réalise un lab consacré à la découverte de la stack technique de mon projet. Mon projet technique est une application web de **gestion des entraînements et des groupes musculaires**.

Le dossier de travail est `lab-stack/`. Les fichiers attendus sont :

- `README.md` : document explicatif du lab ;
- `presentation.md` : présentation du projet technique au format Marp.

Les informations actuellement connues sur le projet mentionnent PHP, MySQL avec PDO, HTML, CSS, JavaScript et Tailwind CSS. Les fonctionnalités décrites comprennent la consultation et l’ajout d’entraînements, leur association à un coach et à un groupe musculaire, ainsi que la gestion des groupes musculaires et un tableau de bord. Vérifie ces informations dans les documents du dépôt avant de les reprendre.

Le dépôt du projet technique est : [Projet-technique sur GitHub](https://github.com/Marwan-Bouhamid/Projet-technique).

## Travail demandé

Crée ou mets à jour uniquement `lab-stack/README.md` et `lab-stack/presentation.md`. Les deux fichiers doivent porter sur **mon projet de gestion des entraînements**, et non sur le projet d’un autre étudiant.

### 1. `README.md` — guide du lab

Rédige un document autonome et bien organisé qui explique :

- les objectifs pédagogiques du lab et les compétences visées ;
- les prérequis utiles ;
- ce qu’est un lab et comment les expérimentations soutiennent le projet principal ;
- les technologies réellement utilisées par mon projet et leur rôle ;
- le lien entre les exercices du lab et les besoins de l’application ;
- des activités ou livrables concrets, une liste de tâches Markdown et des critères de validation ;
- des ressources documentaires pertinentes et fiables.

Présente le contenu avec des titres hiérarchisés, des paragraphes concis, des listes et au moins un tableau. N’inclus pas une liste arbitraire de technologies, de fonctionnalités ou de Labs qui ne sont pas nécessaires ou vérifiés.

### 2. `presentation.md` — diaporama du projet technique

Crée un diaporama Marp valide, rédigé en français, qui présente de façon concise :

1. le projet et son sujet ;
2. son objectif et ses utilisateurs concernés ;
3. ses principales fonctionnalités ;
4. sa stack technique, avec le rôle de chaque technologie ;
5. le parcours général des données entre l’interface, PHP et MySQL, si ce fonctionnement est confirmé par les sources ;
6. l’état d’avancement et les prochaines étapes ;
7. un lien vers le dépôt du projet.

Utilise des diapositives clairement séparées par `---`, des titres lisibles et peu de texte par page. Le front matter doit définir Marp, un thème, la pagination et, si cela est utile, un style CSS cohérent. Tu peux reprendre l’inspiration visuelle du modèle Marp fourni, mais adapte le contenu et conserve une bonne lisibilité.

## Exactitude et qualité

- Consulte d’abord les documents disponibles dans le dépôt afin de confirmer les informations du projet.
- N’invente ni technologie, ni fonctionnalité, ni état d’avancement, ni diagramme.
- Si une information importante ne peut pas être vérifiée, omets-la ou signale-la clairement comme `[À COMPLÉTER : ...]`.
- N’utilise pas les technologies du projet d’un ami, sauf si elles sont également confirmées dans mon propre projet.
- Maintiens un contenu cohérent entre le README et les diapositives.
- N’ajoute aucun autre fichier et ne modifie aucun fichier hors de `lab-stack/`.
- Vérifie la syntaxe Markdown, les séparateurs Marp et les liens avant de terminer.

## Résultat attendu

Enregistre directement les deux fichiers dans `lab-stack/`. À la fin, indique brièvement les fichiers créés et les validations effectuées.
