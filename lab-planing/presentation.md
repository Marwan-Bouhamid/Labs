---
marp: true
theme: default
lang: fr
paginate: true
size: 16:9
---

# Préparer et présenter un Lab technique

## Plan générique et exemple : découvrir Git et GitHub

**Apprenant :** Marwan Bouhamid<br>
**Encadrant :** [Nom et prénom de l’encadrant]

---

## Plan de présentation

1. **Page de garde** — identifier le Lab et ses participants
2. **Plan** — annoncer les étapes de la présentation
3. **Stack technique** — nommer les outils et expliquer leur rôle
4. **Définitions** — clarifier les notions utiles au sujet
5. **Problème et besoin** — expliquer le contexte et l’intérêt du Lab
6. **Solution et pratique** — décrire les étapes, exemples et tests
7. **Résultats et conclusion** — présenter les constats et apprentissages

**Exemple fil rouge :** réaliser les premières opérations Git et proposer une modification sur GitHub.

---

## Stack technique

**Dans cette partie :** présenter les technologies et outils réellement utilisés, puis expliquer leur rôle dans le Lab. Ne pas ajouter un outil simplement parce qu’il est courant.

**Exemple proposé — Lab Git et GitHub**

| Outil | Rôle dans l’exemple |
|:--|:--|
| Git | Enregistrer et suivre les versions du projet sur la machine |
| GitHub | Héberger le dépôt distant et faciliter la revue des modifications |
| Terminal | Exécuter les commandes Git |

---

## Définitions

**Dans cette partie :** expliquer les termes indispensables avec une définition simple et leur utilité dans le Lab.

**Exemple proposé**

- **Dépôt (repository)** — espace qui contient les fichiers et leur historique ; il permet de retrouver les versions du projet.
- **Commit** — enregistrement d’un ensemble de changements ; il décrit une étape de travail.
- **Branche (branch)** — ligne de travail séparée ; elle permet de préparer une modification sans toucher directement à la branche principale.
- **Pull request (PR)** — proposition de fusion d’une branche dans une autre ; elle permet de revoir les changements avant leur intégration.

---

## Problème et besoin

**Dans cette partie :** présenter une situation concrète, le problème rencontré et la raison pour laquelle le Lab est utile. Distinguer le besoin de la solution technique.

**Scénario de l’exemple :** plusieurs versions d’un même fichier peuvent être difficiles à suivre. Lorsqu’on travaille à plusieurs, une modification peut être écrasée ou intégrée sans avoir été relue.

**Besoin :** apprendre à conserver l’historique des modifications et à proposer un changement pouvant être relu avant son intégration.

**Pourquoi ce Lab ?** pratiquer un flux simple de gestion de versions et de collaboration avant de l’utiliser sur un projet plus important.

---

## Solution et pratique

**Dans cette partie :** présenter les étapes dans l’ordre, montrer les commandes ou manipulations utiles, puis vérifier le résultat avec des tests observables.

**Exemple proposé — déroulement**

1. Cloner le dépôt distant : `git clone <URL-du-depot>`
2. Créer une branche de travail : `git switch -c docs-lab`
3. Modifier `README.md`, puis vérifier les fichiers modifiés : `git status`
4. Enregistrer la modification : `git add README.md` puis `git commit -m "docs: update README"`
5. Envoyer la branche : `git push -u origin docs-lab`
6. Sur GitHub, ouvrir une pull request et examiner les fichiers modifiés avant la fusion.

**Vérifications :** contrôler le dernier commit avec `git log -1 --oneline`, vérifier que la branche et sa modification apparaissent sur GitHub, puis examiner le diff de la pull request.

---

## Résultats et conclusion

**Dans cette partie :** montrer les résultats obtenus, dire si les objectifs sont atteints et résumer les apprentissages. Signaler les limites ou les points qui restent à vérifier.

**Résultats attendus pour l’exemple** *(à confirmer après réalisation)* :

- un commit décrit la modification de `README.md` ;
- la branche `docs-lab` est visible sur le dépôt distant ;
- une pull request présente le diff pour relecture.

**Conclusion possible :** « Ce Lab m’a appris à enregistrer une modification avec Git et à la proposer à la relecture sur GitHub. Je vérifierai que le commit, la branche et le diff sont visibles avant de conclure que le flux fonctionne. »

> Pour chaque nouveau Lab, garder cette structure et remplacer l’exemple par le problème, la stack, les étapes et les résultats réellement liés au sujet.
