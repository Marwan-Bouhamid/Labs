---
marp: true
theme: default
paginate: true
size: 16:9
---

# Préparer un lab technique
## À partir d’un besoin de blog

---

## Plan du lab

1. Partir d’un besoin utilisateur
2. Formuler le problème
3. Choisir un objectif technique
4. Décrire la solution à explorer
5. Définir les critères de réussite

---

## Du besoin au sujet technique

**Besoin du blog — exemple**

Les lecteurs veulent retrouver facilement un article parmi les nombreuses publications.

**Piste de lab**

Étudier une approche de recherche d’articles et évaluer si une bibliothèque répond au besoin.

> Le besoin guide l’expérience : il ne prescrit pas à lui seul une technologie.

---

## Formuler le problème

**Question à résoudre**

Comment permettre aux lecteurs de retrouver un article à partir de son contenu, sans rendre la recherche difficile à intégrer ou à maintenir ?

**Périmètre**

- Inclure une recherche dans un jeu d’articles de démonstration.
- Étudier une bibliothèque compatible avec la stack réelle du projet.
- Exclure, pour ce lab, la création d’un moteur de recherche complet pour tout le blog.

---

## Fixer l’objectif d’apprentissage

À la fin du lab, la personne doit pouvoir :

- intégrer la recherche dans une démonstration limitée ;
- vérifier les résultats sur des requêtes représentatives ;
- évaluer l’intégration, les fonctionnalités et les limites de la bibliothèque ;
- justifier si elle convient au besoin du blog.

**Stack :** à choisir selon le projet. Ne pas supposer un framework ou une bibliothèque avant de vérifier les besoins et les prérequis.

---

## Travail à faire (Solution)

1. **Préparer** un petit ensemble d’articles avec titres et contenus.
2. **Choisir** une bibliothèque compatible avec la stack du projet et noter les critères d’évaluation.
3. **Créer** une page de démonstration permettant de saisir une requête et d’afficher les articles correspondants.
4. **Tester** plusieurs cas : mot présent dans un titre, mot présent dans le contenu, requête sans résultat et requête vide.
5. **Consigner** les observations, les difficultés d’intégration et les limites rencontrées.

---

## Vérifier et conclure

### Critères de réussite

- La recherche s’exécute sur les données de démonstration.
- Les résultats correspondent aux cas de test définis.
- Le comportement sans résultat et avec une requête vide est observé.
- Les avantages et limites de la bibliothèque sont documentés.

### Conclusion attendue

Répondre à la question de départ à partir des tests : la bibliothèque convient-elle à ce besoin ? Expliquer pourquoi et signaler ce qui reste à vérifier avant une intégration au blog.
