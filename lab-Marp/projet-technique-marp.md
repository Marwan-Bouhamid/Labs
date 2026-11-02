---
marp: true
theme: fitness
lang: fr
paginate: true
size: 16:9
header: "OFPPT · Solicode | Projet technique"
footer: "Application Fitness · Marwan Bouhamid"
---

<!-- _class: cover -->

![bg right:38% opacity:25%](https://images.unsplash.com/photo-1534438327276-14e5300c3a48?auto=format&fit=crop&w=1400&q=85)

<div class="logos">
  <img src="https://raw.githubusercontent.com/elmehdi-sekrare/ofppt-futurelearn/main/public/ofppt-logo.svg" alt="Logo OFPPT">
  <img src="https://solicode.co/assets/imgs/logo.png" alt="Logo SoliCode Tanger">
</div>

## PROJET TECHNIQUE

# Application Fitness

### Gestion des groupes musculaires et des entraînements

**Apprenant :** Marwan Bouhamid  
**Encadrant :** [Nom et prénom de l'encadrant à compléter]

<!-- Notes du présentateur : Présenter le contexte de formation, puis annoncer l'application et ses utilisateurs. -->

---

<!-- _class: light -->

## Plan de présentation

1. Introduction et besoin
2. Analyse des besoins et fonctionnalités
3. Conception : acteurs, modèle et scénario
4. Réalisation : technologies et prototype
5. Conclusion et techniques Marp utilisées

---

## Introduction

**Application Fitness** est un projet web de gestion de séances sportives. Il réunit les entraînements, les coachs et les groupes musculaires dans une application destinée à une salle de sport.

Le dépôt contient des versions de travail réparties sur plusieurs branches, avec des maquettes, des diagrammes et un prototype.

> **Idée directrice :** rendre les entraînements faciles à créer, organiser et consulter.

[Dépôt GitHub du projet](https://github.com/Marwan-Bouhamid/Projet-technique)

---

<!-- _class: light -->

## Besoin : quel problème résoudre ?

Lorsque les séances et leurs informations sont dispersées, il devient difficile de :

- retrouver rapidement un entraînement et son niveau ;
- savoir quel groupe musculaire est ciblé ;
- distinguer les actions du coach, de l’administrateur et du visiteur ;
- contrôler les séances avant leur publication.

### Besoin identifié

Disposer d’un espace web centralisé pour **organiser les groupes musculaires et le cycle de vie des entraînements**, de leur création à leur consultation.

---

## Analyse des besoins

| Acteur | Besoins et fonctionnalités |
|:-------|:---------------------------|
| Administrateur | Gérer les utilisateurs et les groupes musculaires ; valider, publier ou retirer des entraînements |
| Coach | Gérer son profil et créer, modifier ou supprimer ses entraînements non publiés |
| Visiteur | Consulter les entraînements publiés |

### Données d’un entraînement

`titre` · `description` · `durée` · `niveau` · `coach` · `groupe musculaire`

<!-- Notes du présentateur : Les rôles et les fonctionnalités sont repris des diagrammes de cas d’utilisation du dépôt. -->

---

<!-- _class: light -->

## Conception : diagramme de contexte

```text
Administrateur ── gère utilisateurs et contenu ──┐
Coach ─────────── crée et gère ses séances ──────┼── Application Fitness
Visiteur ──────── consulte les séances publiées ─┘
```

Le modèle de classes distingue trois entités principales :

| Entité | Informations représentées |
|:-------|:---------------------------|
| `USER` | Identité, courriel, rôle et spécialité |
| `WORKOUT` | Titre, description, durée et difficulté |
| `MUSCLE_GROUP` | Nom et description du groupe musculaire |

---

## Conception : relations et scénario

### Relations du modèle

- Un utilisateur peut **créer plusieurs entraînements**.
- Les utilisateurs peuvent **suivre plusieurs entraînements**.
- Chaque entraînement cible **un groupe musculaire**.

### Scénario : ajouter un groupe musculaire

**Coach** → demande le formulaire → saisit le nom et la description → l’application vérifie les champs → enregistre le groupe et affiche la liste.

Si un champ obligatoire est vide, l’application doit refuser l’enregistrement et afficher un message d’erreur.

[Diagrammes de conception dans le dépôt](https://github.com/Marwan-Bouhamid/Projet-technique/tree/Session-3/Live%20coding%20Marwan%20bouhamid/conception)

---

<!-- _class: light -->

## Réalisation : stack technique

| Couche | Technologies repérées dans le prototype |
|:-------|:----------------------------------------|
| Interface | HTML, CSS, JavaScript et Tailwind CSS |
| Serveur | PHP |
| Persistance | MySQL avec PDO dans les pages PHP ; fichiers JSON dans un prototype de gestion |
| Conception | Diagrammes Mermaid (`.mmd`) |

Exemple de lecture des entraînements et de leurs relations :

```sql
SELECT workouts.*, users.first_name, muscle_groups.name AS muscle_name
FROM workouts
INNER JOIN users ON workouts.id_coach = users.id
INNER JOIN muscle_groups ON workouts.id_group = muscle_groups.id_group
ORDER BY workouts.created_at DESC;
```

---

## Réalisation : prototype

Le prototype présente des pages d’administration pour :

- consulter et gérer les groupes musculaires ;
- ajouter un entraînement avec sa durée et son niveau ;
- afficher un tableau de bord des entraînements.

**État du projet :** les pages et les diagrammes constituent une base fonctionnelle de démonstration ; les tests complets et la consolidation des différentes versions restent à poursuivre.

[Prototype — gestion des groupes musculaires](https://github.com/Marwan-Bouhamid/Projet-technique/blob/Session-3/prototype/index.html)  
[Prototype — tableau de bord](https://github.com/Marwan-Bouhamid/Projet-technique/blob/Session-3/prototype/dashboard.php) · [Ajout d’un entraînement](https://github.com/Marwan-Bouhamid/Projet-technique/blob/Session-3/prototype/add_workout.php)

---

<!-- _class: light -->

## Conclusion

Le projet répond au besoin d’organiser les entraînements sportifs autour de rôles clairs et de groupes musculaires.

- Les besoins sont décrits pour l’administrateur, le coach et le visiteur.
- Les modèles et les scénarios sont documentés par des diagrammes.
- Le prototype illustre la gestion des groupes musculaires et des entraînements.

### Suite du travail

**Consolider la persistance des données, tester les parcours et améliorer l’expérience sur mobile.**

<!-- Notes du présentateur : Conclure en montrant le prototype, puis citer les prochaines étapes sans présenter le projet comme finalisé. -->

---

## Marp : créer et mettre en forme

Installez **Marp for VS Code**, puis activez Marp avec le front matter placé au début du fichier :

```yaml
---
marp: true
theme: fitness
paginate: true
size: 16:9
---
```

Une nouvelle diapositive commence avec `---`. Les thèmes intégrés donnent trois points de départ différents :

| Thème | Style général |
|:------|:--------------|
| `default` | Sobre et polyvalent |
| `gaia` | Graphique et coloré |
| `uncover` | Minimaliste |

Choisissez un seul thème à la fois dans le front matter ; cette présentation utilise le thème personnalisé `fitness`.

---

<!-- _class: light -->

## Marp : directives et styles

Les directives locales permettent de varier le style d’une diapositive :

```markdown
<!-- _class: light -->
<!-- _backgroundColor: #f3f6fa -->
<!-- _color: #172337 -->
<!-- _header: Application Fitness -->
<!-- _footer: Solicode -->
```

Le numéro de diapositive est activé avec `paginate: true`. Le thème personnalisé `fitness` est défini dans [projet-technique.css](./projet-technique.css) et relié à Marp dans `.vscode/settings.json`.

---

## Marp : images, progression et notes

- Les logos sont intégrés comme images sur la page de garde.
- Une image de salle de sport est utilisée comme **arrière-plan**.
- Les listes progressives ne sont pas animées nativement par Marp : séparez les étapes en diapositives, ou ajoutez une animation après export PowerPoint.
- Les commentaires HTML servent de **notes du présentateur** ; vérifiez leur présence dans le fichier PowerPoint exporté.

<!-- Notes du présentateur : Les notes sont masquées dans le rendu normal et destinées à aider pendant l’oral. -->

---

<!-- _class: light -->

## Marp : prévisualiser et exporter

1. Ouvrir ce fichier dans VS Code et choisir **Marp: Open Preview**.
2. Vérifier les images, la lisibilité et le débordement de chaque diapositive.
3. Exporter en PDF, HTML ou PowerPoint depuis la palette de commandes Marp.

Avec Marp CLI, les exports peuvent aussi être générés ainsi :

```bash
npx @marp-team/marp-cli lab-Marp/projet-technique-marp.md --pdf
npx @marp-team/marp-cli lab-Marp/projet-technique-marp.md --html
npx @marp-team/marp-cli lab-Marp/projet-technique-marp.md --pptx
```

---

## Merci !

### Questions ?

**Application Fitness** · Projet technique de Marwan Bouhamid

[Voir le code source et les branches du projet](https://github.com/Marwan-Bouhamid/Projet-technique)
