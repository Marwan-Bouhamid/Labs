---
marp: true
theme: default
lang: fr
size: 16:9
paginate: true
header: "Lab Planing — Plan générique des Labs"
footer: "Marwan Bouhamid | SoliCode Tanger — OFPPT"
---

<style>
section {
  font-family: 'Segoe UI', Arial, sans-serif;
  font-size: 23px;
  padding: 35px 50px;
}
.logo-bar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
  padding-bottom: 8px;
  border-bottom: 2px solid #e2e8f0;
  color: #1d4ed8;
  font-size: 20px;
  font-weight: bold;
}
table {
  font-size: 16px;
  width: 100%;
  border-collapse: collapse;
  margin-top: 8px;
}
th {
  background-color: #2563eb;
  color: white;
  padding: 6px 9px;
}
td {
  padding: 6px 9px;
}
ul {
  margin-top: 8px;
  margin-bottom: 8px;
}
li {
  margin-bottom: 5px;
}
code {
  background-color: #f1f5f9;
  padding: 2px 6px;
  border-radius: 4px;
}
</style>

<!-- _header: "" -->
<!-- _footer: "" -->

<div class="logo-bar">
  <span>OFPPT</span>
  <span>SoliCode Tanger</span>
</div>

# Lab Planing
## Plan générique des Labs techniques

### Méthode de préparation et exemple sur mon projet Fitness

- **Présenté par :** Marwan Bouhamid
- **Encadré par :**  ES-SARRAJ FOUAD
- **Centre :** SoliCode Tanger (OFPPT)
- **Cas pratique :** gérer les groupes musculaires d’une application Fitness

<!-- Note: Bonjour, je présente une méthode simple pour préparer les Labs. Je vais l’expliquer avec un exemple de mon projet Fitness. -->

---

## Plan de la présentation

- **1. Stack technique :** les outils du Lab et du projet
- **2. Définitions :** les mots importants
- **3. Problème et besoin :** pourquoi préparer un Lab commun
- **4. Solution et pratique :** les 7 parties du plan et un exemple Fitness
- **5. Résultats et conclusion :** les résultats attendus et les apprentissages

<!-- Note: La présentation explique d'abord les outils et le besoin, puis montre comment utiliser le plan sur mon projet. -->

---

## 1. Stack technique

| Outil / technologie | Rôle | Utilisation dans le Lab |
| :--- | :--- | :--- |
| **Marp et Markdown** | Écrire et présenter les diapositives | Créer ce support en format 16:9 |
| **PHP** | Traiter les données côté serveur | Préparer les actions de gestion des groupes |
| **MySQL et PDO** | Stocker et lire les données | Relier les groupes musculaires à la base de données |
| **HTML, CSS, JavaScript** | Construire et rendre interactive l’interface | Présenter les pages et les formulaires |
| **Tailwind CSS** | Appliquer des styles aux pages | Mettre en forme l’interface du projet |

<!-- Note: Marp et Markdown servent à créer les slides. Les autres technologies sont celles indiquées dans mon projet Fitness. -->

---

## 2. Définitions

- **Lab technique :** un atelier pratique pour apprendre une compétence ou un outil.
  - *Exemple :* apprendre à gérer les groupes musculaires dans une application.
- **Plan générique :** une structure commune que l’on adapte au sujet de chaque Lab.
- **PDO :** un outil PHP pour communiquer avec une base de données.
- **Groupe musculaire :** une catégorie, par exemple les pectoraux ou le dos, associée aux entraînements.

<!-- Note: Le plan est commun, mais les exemples et les outils changent selon le sujet du Lab. -->

---

## 3. Problème et besoin

| Aspect | Sans Lab bien préparé | Besoin pour mon projet Fitness |
| :--- | :--- | :--- |
| **Organisation** | Les informations des séances sont difficiles à retrouver | Organiser les entraînements et les groupes au même endroit |
| **Présentation** | Les étapes du travail ne sont pas toujours claires | Expliquer le sujet, les outils et les étapes |
| **Pratique** | Les tests peuvent être oubliés | Vérifier les formulaires avec plusieurs données |
| **Résultat** | Il est difficile de savoir si le Lab est terminé | Définir des résultats que l’on peut observer |

**Besoin du Lab :** apprendre à préparer un atelier clair pour tester l’affichage et l’ajout d’un groupe musculaire.

<!-- Note: Mon projet vise à organiser les entraînements. Le Lab limite le travail à une fonction précise : afficher et ajouter un groupe musculaire. -->

---

## 4. Solution et pratique

### Préparer le Lab en 5 étapes

1. **Choisir** un sujet précis.
2. **Expliquer** les mots importants.
3. **Présenter** le problème et le besoin.
4. **Décrire** les étapes de la pratique.
5. **Vérifier** les résultats avec des tests.

### Exemple : Lab « Ajouter un groupe musculaire »

| Partie | Contenu du plan générique | Exemple dans mon projet |
| :---: | :--- | :--- |
| **1** | Garde : titre et participants | Ajouter un groupe musculaire |
| **2** | Plan : annoncer les parties | Outils, définitions, besoin, pratique, résultats |
| **3** | Stack : outils utilisés | PHP, MySQL, PDO, HTML et CSS |
| **4** | Définitions : mots importants | Groupe musculaire, formulaire, base de données |
| **5** | Problème : besoin à résoudre | Organiser les groupes liés aux entraînements |
| **6** | Pratique : étapes et tests | Afficher la liste, ajouter un groupe, tester le formulaire |
| **7** | Résultats : bilan du Lab | Vérifier l’affichage et noter les tests à compléter |

<!-- Note: Le plan contient sept parties. Pour cet exemple, le travail porte sur l'affichage et l'ajout; les tests restent à réaliser et à documenter. -->

---

## 5. Résultats et conclusion

| Domaine | Résultat attendu |
| :--- | :--- |
| **Méthode** | Préparer un Lab avec un plan commun en 7 parties |
| **Projet Fitness** | Afficher et ajouter un groupe musculaire |
| **Vérification** | Tester le formulaire avec des données différentes |
| **Apprentissage** | Expliquer le rôle des outils et les étapes du travail |

**Conclusion :** ce plan aide à présenter chaque Lab dans un ordre simple. Il faut ensuite adapter les exemples au projet et montrer les résultats réellement vérifiés.

<!-- Note: Les tests de tous les formulaires sont encore à réaliser. Je ne présente donc pas ces résultats comme déjà validés. -->
