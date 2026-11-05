---
marp: true
theme: default
paginate: true
style: |
  section {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: #ffffff;
    font-size: 24px;
    padding: 40px 60px;
  }
  section.center {
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  h1 {
    color: #ffffff;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.4);
    font-size: 42px;
    margin-bottom: 15px;
    line-height: 1.2;
  }
  h2 {
    color: #ffffff;
    font-size: 32px;
    margin-top: 20px;
    margin-bottom: 15px;
    line-height: 1.3;
  }
  h3 {
    color: #ffd700;
    font-size: 28px;
    margin-top: 20px;
    margin-bottom: 12px;
    line-height: 1.3;
  }
  ul, ol {
    margin-top: 8px;
    margin-bottom: 8px;
    line-height: 1.6;
    padding-left: 30px;
  }
  li {
    margin-bottom: 6px;
  }
  strong {
    color: #ffd700;
    font-weight: bold;
  }
  a {
    color: #ffd700;
    text-decoration: underline;
  }
  code {
    background: rgba(0,0,0,0.3);
    color: #ffd700;
    padding: 2px 8px;
    border-radius: 4px;
    font-family: 'Courier New', monospace;
  }
  pre {
    background: rgba(0,0,0,0.4);
    padding: 15px;
    border-radius: 8px;
    overflow-x: auto;
    font-size: 20px;
  }
  blockquote {
    border-left: 4px solid #ffd700;
    padding: 12px 20px;
    margin: 15px 0;
    font-style: italic;
    color: #ffffff;
    background: rgba(255,255,255,0.1);
    border-radius: 4px;
  }
  em {
    color: #e0e0e0;
  }
  section.invert {
    background: linear-gradient(135deg, #1e40af 0%, #1e293b 100%);
  }
---

<!-- _paginate: false -->
<!-- _class: center -->

# 🏋️ Mon projet technique

## Gestion des entraînements

**Application web pour organiser les séances et les groupes musculaires**

---

# 🎯 Sujet du projet

## Organiser les informations d’une salle de sport

L’application centralise les entraînements et les groupes musculaires pour aider à organiser les séances.

- Consulter et ajouter des entraînements
- Associer les séances à un coach
- Classer les entraînements par groupe musculaire, comme les pectoraux ou le dos

---

# 🚀 Objectif du projet

## Simplifier le suivi des entraînements

- Retrouver les séances depuis un espace de gestion
- Faciliter l’ajout et la consultation des entraînements
- Identifier rapidement le coach et le groupe musculaire associés

> Un suivi clair aide les coachs à mieux organiser les entraînements.

---

# 💻 Stack technique

## Interface et serveur

- **HTML** — structurer les pages
- **CSS et Tailwind CSS** — mettre en forme l’interface
- **JavaScript** — ajouter des interactions dans le navigateur
- **PHP** — traiter les requêtes côté serveur

## Données

- **MySQL** — stocker les entraînements, les coachs et les groupes musculaires
- **PDO** — permettre à PHP de communiquer avec la base de données

---

# ⚙️ Fonctionnalités principales

- Afficher la liste des entraînements
- Ajouter un entraînement avec son titre, sa description, sa durée et son niveau
- Associer un entraînement à un coach
- Relier la séance à un groupe musculaire
- Gérer les groupes musculaires
- Accéder aux pages depuis un tableau de bord

---

# 🔄 Parcours des données

## De l’interface à la base de données

1. L’administrateur remplit un formulaire dans l’application.
2. **PHP** reçoit et traite les informations.
3. **PDO** transmet la requête à **MySQL**.
4. Les données enregistrées peuvent ensuite être consultées dans l’interface.

---

# 🧩 Exemple de requête SQL

Cette requête associe chaque entraînement à son coach et à son groupe musculaire :

```sql
SELECT workouts.*, users.first_name, muscle_groups.name AS muscle_name
FROM workouts
INNER JOIN users ON workouts.id_coach = users.id
INNER JOIN muscle_groups ON workouts.id_group = muscle_groups.id_group
ORDER BY workouts.created_at DESC;
```

---

# 📋 Avancement du projet

- [x] Créer une première interface de gestion des groupes musculaires
- [x] Préparer les pages d’entraînements et le tableau de bord
- [ ] Tester les formulaires avec différentes données
- [ ] Améliorer l’affichage sur téléphone

---

<!-- _class: invert -->
<!-- _paginate: false -->

# 🚀 Prochaines étapes

## Tester, améliorer et compléter

- Vérifier l’ajout et l’affichage des informations
- Tester les associations entre entraînements, coachs et groupes
- Améliorer l’expérience sur mobile

### Dépôt du projet

[Consulter le projet technique sur GitHub](https://github.com/Marwan-Bouhamid/Projet-technique)

**Merci !**
