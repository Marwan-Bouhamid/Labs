---
marp: true
theme: default
paginate: true
size: 16:9
lang: fr
style: |
  section {
    background: #101827;
    color: #edf3fa;
    font-family: Inter, "Segoe UI", Arial, sans-serif;
    font-size: 24px;
    padding: 42px 60px;
    justify-content: center;
  }
  h1, h2 {
    color: #f7fbff;
    font-family: "Segoe UI", Arial, sans-serif;
    line-height: 1.08;
  }
  h1 { font-size: 62px; }
  h2 { font-size: 42px; }
  h3, strong { color: #56d6c2; }
  li { margin-bottom: 8px; }
  code {
    background: rgba(86, 214, 194, 0.14);
    border-radius: 4px;
    color: #b9fff2;
    padding: 2px 6px;
  }
  pre {
    background: #0a111d;
    border: 1px solid #2a3b50;
    border-radius: 8px;
    font-size: 17px;
    line-height: 1.3;
    padding: 12px 16px;
  }
  table { font-size: 19px; }
  th, td { padding: 6px 9px; }
  section.light {
    background: #f3f6fa;
    color: #172337;
  }
  section.light h1, section.light h2 { color: #172337; }
  section.light h3, section.light strong { color: #087f73; }
  section.light code {
    background: #dceeea;
    color: #075e56;
  }
  section.light pre {
    background: #e8edf3;
    border-color: #d0d9e4;
    color: #172337;
  }
---

<!-- _class: lead -->

# Erreurs JS

---

<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented
4. Outils de débogage
5. Vérification et conclusion

---

## Introduction

Pendant le développement d’un blog, une erreur peut venir du code JavaScript, du navigateur, de l’appel API ou du serveur PHP.

### Objectifs

- Étudier cinq erreurs JavaScript représentatives et expliquer leur origine.
- Lire la console et remonter du message à la ligne et à la cause.
- Déboguer pas à pas dans VS Code et Google Chrome.
- Inspecter les requêtes API et les réponses PHP avec Chrome DevTools.
- Vérifier qu’une correction résout le problème sans casser le parcours.

> Les exemples suivants sont des scénarios reproductibles de développement, et non l’affirmation qu’ils se sont tous produits dans le projet.

---

<!-- _class: light -->

## Une méthode pour chaque erreur

Pour chacun des cinq cas :

1. **Problème de départ :** reproduire le symptôme dans une page ou un parcours du blog.
2. **Lecture de l’erreur :** relever le message, le fichier, la ligne et la pile d’appels.
3. **Recherche de la cause :** examiner les valeurs, le DOM ou la requête concernée.
4. **Résolution :** corriger une cause à la fois et expliquer pourquoi.
5. **Vérification :** refaire le parcours normal et le cas d’erreur.
6. **Outils :** noter les vues et commandes utilisées pour le diagnostic.

---

## Configurer le débogage : PHP, VS Code et Chrome

1. Ouvrir le dossier du blog dans VS Code et démarrer son serveur PHP dans le terminal intégré. Exemple à adapter à la racine du projet :

   ```bash
   php -S localhost:8000
   ```

2. Ouvrir l’URL locale dans Google Chrome.
3. Dans VS Code, placer un point d’arrêt dans le fichier JavaScript.
4. Créer `.vscode/launch.json` pour lancer Chrome sur la page du projet :

   ```json
   {
     "version": "0.2.0",
     "configurations": [
       {
         "type": "chrome",
         "request": "launch",
         "name": "Blog dans Chrome",
         "url": "http://localhost:8000",
         "webRoot": "${workspaceFolder}"
       }
     ]
   }
   ```

Adaptez l’URL, le répertoire public et les chemins au projet. Dans VS Code, démarrer la configuration avec **F5**.

---

<!-- _class: light -->

## Exécuter le code pas à pas

Lorsque le point d’arrêt est atteint :

- **F10 — Step Over :** exécuter la ligne sans entrer dans la fonction appelée.
- **F11 — Step Into :** entrer dans la fonction appelée.
- **Maj+F11 — Step Out :** terminer la fonction en cours.
- Examiner **Variables**, **Watch** et **Call Stack** dans la vue Run and Debug.
- Survoler une variable pour voir sa valeur au point d’arrêt.

Dans Chrome, ouvrir les DevTools avec **F12** ou **Ctrl+Maj+I**. L’onglet **Sources** permet aussi de placer des points d’arrêt et de parcourir les variables.

---

## Erreur 1 — `ReferenceError`

### Problème de départ

Le clic sur un article doit charger ses commentaires, mais l’appel utilise un identifiant qui n’a jamais été déclaré :

```javascript
const articleId = article.id;
loadComments(articleID);
```

### Lire l’erreur

`ReferenceError: articleID is not defined` indique que JavaScript ne trouve pas cet identifiant. Dans la console, relever aussi le fichier et le numéro de ligne.

### Résolution et vérification

Corriger la casse et conserver le même nom de variable :

```javascript
loadComments(articleId);
```

Recharger l’article et vérifier que l’appel utilise le bon identifiant.

**Outils :** Console, lien vers la ligne d’erreur, point d’arrêt VS Code, panneau **Variables**.

---

<!-- _class: light -->

## Erreur 2 — `Cannot read properties of null`

### Problème de départ

Le script du formulaire de commentaire tente d’attacher un gestionnaire à un élément absent ou pas encore chargé :

```javascript
document.querySelector("#comment-form")
  .addEventListener("submit", sendComment);
```

### Lire l’erreur

`TypeError: Cannot read properties of null` signifie que `querySelector()` n’a trouvé aucun élément. Vérifier l’identifiant dans le HTML et l’ordre de chargement du script.

### Résolution et vérification

Charger le script avec `defer`, puis confirmer que le sélecteur correspond au formulaire :

```html
<script src="/js/comments.js" defer></script>
```

```javascript
const form = document.querySelector("#comment-form");
if (!form) {
  throw new Error("Formulaire de commentaire introuvable");
}
form.addEventListener("submit", sendComment);
```

Recharger la page et vérifier l’envoi du formulaire et la console.

**Outils :** Elements pour inspecter le DOM, Console, point d’arrêt au chargement du script.

---

## Erreur 3 — `SyntaxError: Unexpected token '<'`

### Problème de départ

Le blog attend une réponse JSON pour afficher les articles, mais l’endpoint PHP renvoie une page HTML (par exemple une page 404 ou une erreur PHP) :

```javascript
const response = await fetch("/api/articles");
const articles = await response.json();
```

### Lire l’erreur

Le caractère `<` au début du corps suggère souvent du HTML. Ce message ne prouve pas à lui seul la cause : vérifier le statut, l’URL, le type de contenu et le corps reçu.

### Résolution et vérification

Dans **Network → Fetch/XHR → requête → Response**, vérifier que la route est correcte. Corriger l’endpoint PHP pour qu’il renvoie le JSON attendu avec un en-tête approprié :

```php
header('Content-Type: application/json; charset=utf-8');
echo json_encode($articles);
```

Rejouer l’appel et confirmer que la réponse est du JSON valide et que le blog affiche les articles.

**Outils :** Console, Network (**Status**, **Headers**, **Response**), terminal et logs PHP.

---

<!-- _class: light -->

## Erreur 4 — `TypeError: Failed to fetch`

### Problème de départ

Le formulaire ne reçoit aucune réponse de l’API de publication d’un commentaire.

### Lire l’erreur

`Failed to fetch` indique que le navigateur n’a pas obtenu de réponse exploitable. Ce n’est pas à lui seul un code HTTP : la connexion peut être impossible ou bloquée. Examiner la requête dans **Network** et les éventuels messages CORS dans la console.

### Résolution et vérification

1. Vérifier que le serveur PHP fonctionne et que l’URL et le port sont corrects.
2. Vérifier dans Network si la requête part, son URL, sa méthode et son éventuelle erreur réseau.
3. Si le navigateur signale CORS, vérifier l’origine et la configuration serveur adaptée ; ne pas désactiver les protections du navigateur.
4. Rejouer la soumission et confirmer qu’une réponse est reçue.

**Outils :** Console, Network, terminal du serveur PHP et configuration de l’endpoint.

---

## Erreur 5 — réponse HTTP `404` non traitée

### Problème de départ

Le frontend appelle une route d’API incorrecte. Le serveur répond `404`, mais le code essaie de traiter cette réponse comme une réussite.

### Lire l’erreur

À la différence d’une panne réseau, un `404` est une réponse HTTP reçue. `fetch()` ne rejette pas automatiquement sa Promise pour un statut `404` ou `500` : il faut vérifier `response.ok`.

### Résolution

```javascript
async function loadArticles() {
  const response = await fetch("/api/articles");
  if (!response.ok) {
    throw new Error(`Chargement impossible (HTTP ${response.status})`);
  }
  return response.json();
}

loadArticles()
  .then(renderArticles)
  .catch((error) => {
    console.error(error);
    showError("Les articles ne peuvent pas être chargés.");
  });
```

Corriger la route si elle est erronée et prévoir un message compréhensible pour l’utilisateur.

**Vérification :** tester une route valide et une route inexistante ; contrôler le statut, le rendu et l’absence de rejet non traité.

---

<!-- _class: light -->

## Google Chrome DevTools : Console et Network

### Console

- Lire le type, le texte et la pile de l’erreur JavaScript.
- Cliquer sur le fichier et la ligne pour ouvrir le code concerné.
- Utiliser `console.log()` temporairement pour observer une valeur ; retirer les traces de diagnostic inutiles après le test.

### Network

1. Ouvrir **Network** avant de reproduire le problème.
2. Activer **Preserve log** si la navigation efface les requêtes.
3. Filtrer avec **Fetch/XHR**, puis sélectionner l’appel API.
4. Vérifier **Request URL**, méthode, **Status**, **Payload**, **Headers** et **Response**.
5. Comparer le corps réel avec le format attendu par JavaScript.

---

## De l’appel API à la réponse PHP

Pour diagnostiquer un échec, suivre le même appel sur toute la chaîne :

| Étape | À examiner |
|:--|:--|
| JavaScript | URL, méthode, données envoyées, traitement de `response.ok` |
| Network — requête | URL finale, statut, en-têtes et payload |
| Network — réponse | Corps exact, `Content-Type`, JSON ou HTML |
| Serveur PHP | Route exécutée, validation, erreur du terminal ou des logs |
| Vérification | Même requête après correction et résultat affiché dans le blog |

Un statut `500` signale un échec serveur, mais n’indique pas sa cause précise. Consulter les logs PHP côté développement. Ne pas exposer les détails internes ni les traces PHP aux visiteurs en production.

---

## Résolution : vérifier avant et après

Pour chaque erreur, consigner :

- le scénario et le message exact ;
- le fichier, la ligne ou l’appel API à l’origine du symptôme ;
- les observations de Console, Network, VS Code et/ou PHP ;
- la cause confirmée, distincte des hypothèses ;
- la correction et le résultat du nouveau test.

Tester aussi un cas nominal et un cas d’échec attendu. Une console sans erreur ne suffit pas : vérifier que le comportement du blog est correct.

---

<!-- _class: light -->

## Conclusion

**Lire → localiser → observer → corriger → retester**

À la fin du Lab, vous devez pouvoir :

- expliquer l’origine de cinq erreurs JavaScript représentatives ;
- utiliser VS Code et Chrome pour exécuter le code pas à pas et examiner les variables ;
- inspecter les appels API et les réponses du serveur PHP dans Network ;
- justifier une correction par des observations et des tests reproductibles.

### Livrable

Un compte rendu des cinq erreurs, avec pour chacune le problème, la lecture du message, la résolution, les outils utilisés et la vérification finale.
