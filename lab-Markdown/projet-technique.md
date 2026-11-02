# Projet technique : Gestion des groupes musculaires

## Sujet du projet

Mon projet technique est une application web de **gestion des groupes musculaires et des entraînements**. Elle s’adresse aux personnes qui administrent les séances d’une salle de sport et souhaitent organiser leurs informations au même endroit.

L’application permet notamment de consulter les entraînements, d’en ajouter et de les associer à un coach et à un groupe musculaire. Elle comprend également une interface pour gérer les groupes musculaires, comme les pectoraux ou le dos.

![Équipements dans une salle de sport](https://images.unsplash.com/photo-1534438327276-14e5300c3a48?auto=format&fit=crop&w=1200&q=80)

> « Un suivi clair aide les coachs à mieux organiser les entraînements. »

## Objectif du projet

L’objectif est de **simplifier l’organisation des entraînements** et de rendre les groupes musculaires faciles à gérer. Les informations sont structurées pour aider l’administrateur à retrouver rapidement les séances et à comprendre à quels groupes musculaires elles correspondent.

Le projet est développé avec **PHP**, **MySQL** et **PDO** côté serveur, ainsi qu’avec **HTML**, **CSS**, **JavaScript** et des styles Tailwind CSS pour l’interface.

## Fonctionnalités principales

- Consulter la liste des entraînements.
- Ajouter un entraînement avec son titre, sa description, sa durée et son niveau.
- Associer un entraînement à un coach et à un groupe musculaire.
- Afficher et ajouter des groupes musculaires.
- Accéder aux pages de gestion depuis un tableau de bord.

### Étapes prévues

1. Organiser les données des groupes musculaires et des entraînements.
2. Créer les pages de consultation et d’ajout.
3. Relier les formulaires à la base de données.
4. Tester les fonctionnalités et corriger les erreurs.

### Liste de tâches

- [x] Créer une première interface de gestion des groupes musculaires.
- [x] Préparer les pages d’entraînements et le tableau de bord.
- [ ] Tester tous les formulaires avec différentes données.
- [ ] Améliorer l’affichage sur téléphone.

## Technologies et rôle

| Technologie | Rôle dans le projet |
|:------------|:--------------------|
| PHP | Traiter les données côté serveur |
| MySQL et PDO | Stocker et interroger les données |
| HTML et CSS | Structurer et mettre en forme les pages |
| JavaScript | Ajouter des interactions à l’interface |
| Tailwind CSS | Appliquer des styles aux composants |

Par exemple, une requête SQL permet d’afficher les entraînements avec le nom du coach et le groupe musculaire correspondant :

```sql
SELECT workouts.*, users.first_name, muscle_groups.name AS muscle_name
FROM workouts
INNER JOIN users ON workouts.id_coach = users.id
INNER JOIN muscle_groups ON workouts.id_group = muscle_groups.id_group
ORDER BY workouts.created_at DESC;
```

Le code PHP utilise notamment `PDO` pour communiquer avec la base de données. Le dépôt contient aussi des versions de travail dans différentes branches.

## Dépôt du projet

Le code et son évolution sont disponibles dans les branches de mon dépôt :

[Consulter le dépôt GitHub du projet technique](https://github.com/Marwan-Bouhamid/Projet-technique)

~~L’objectif est de gérer uniquement une liste de noms~~ : le projet organise aussi les entraînements et leurs associations.

---

*Présentation du sujet et de l’objectif de mon projet technique.*
