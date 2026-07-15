# Examen final EDW2

## Identification

- Nom : Yosbel Piloto Placeres
- Numéro d’étudiant : e2596151
- Groupe : H26-EDW2

## Liens publics

- [Dépôt GitHub](https://github.com/yosbelplaceres2023-maker/edw2-examen-final-Yosbel-piloto-Placeres)
- [Site déployé sur N0C](https://e2596151.webdevmaisonneuve.ca/edw2-examen-final/)


## Étapes réalisées

1. J’ai cloné le projet fourni avec Git.
2. J’ai ouvert le fichier ("index.php") et remplacé le texte temporaire par mon nom complet.
3. J’ai vérifié la syntaxe PHP et testé la page dans mon navigateur local.
4. J’ai créé un dépôt public sur mon compte GitHub.
5. J’ai ajouté mon dépôt personnel comme remote Git nommé ("rendu").
6. J’ai vérifié les remotes avec ("git remote -v").
7. J’ai créé un premier commit contenant la modification de mon nom.
8. J’ai envoyé la branche "main" vers mon dépôt GitHub public.
9. Je me suis connecté à N0C avec SSH sur le port ("5022").
10. J’ai cloné mon dépôt dans ("/home/sukscqempj/public_html/edw2-examen-final").
11. J’ai ouvert le site public dans le navigateur et vérifié que mon nom apparaissait sur la page d’accueil.


## Commandes Git utilisées

| Commande | Rôle |
| --- | --- |
| `git clone URL` | Récupérer une copie d’un dépôt Git sur l’ordinateur ou sur N0C. |
| `git remote -v` | Afficher les remotes configurés et leurs adresses. |
| `git remote add rendu URL` | Ajouter mon dépôt GitHub personnel sous le nom `rendu`. |
| `git status` | Vérifier l’état des fichiers et de la branche. |
| `git add index.php` | Préparer la modification de `index.php` pour le commit. |
| `git add rapport-examen.md` | Préparer le rapport pour le deuxième commit. |
| `git commit -m "message"` | Enregistrer une nouvelle version du projet dans Git. |
| `git push -u rendu main` | Envoyer la branche `main` vers mon dépôt GitHub public. |
| `git pull` | Récupérer les nouveaux commits dans un projet déjà cloné. |

## Déploiement sur N0C

Je me suis connecté au serveur N0C avec SSH en utilisant la commande suivante :

```bash
ssh -p 5022 sukscqempj@node19-ca.n0c.com
```

Après la connexion, je me trouvais dans le répertoire `/home/sukscqempj`. J’ai cloné mon dépôt GitHub public avec cette commande :

```bash
git clone https://github.com/yosbelplaceres2023-maker/edw2-examen-final-Yosbel-piloto-Placeres.git public_html/edw2-examen-final
```

Le projet a été placé dans `/home/sukscqempj/public_html/edw2-examen-final`. J’ai testé le [site N0C](https://e2596151.webdevmaisonneuve.ca/edw2-examen-final/) et vérifié que la page affichait « Déployé par : Yosbel Piloto Placeres ».

## Réponses théoriques

### Question 1 — Client et serveur

Dans le contexte du Web, le client est l’appareil ou le logiciel qui envoie une demande afin d’obtenir une ressource. Le navigateur Web, par exemple Chrome, joue le rôle de client : il envoie une requête HTTP ou HTTPS et affiche la réponse reçue. Le serveur est l’ordinateur ou le logiciel distant qui reçoit cette requête, exécute le code nécessaire, puis retourne une page HTML ou une autre ressource au client.

### Question 2 — Adresse IP, domaine et sous-domaine

| Élément | Définition | Exemple |
| --- | --- | --- |
| Adresse IP | Adresse numérique qui permet d’identifier un appareil ou un serveur sur un réseau. | `199.16.129.153` |
| Domaine | Nom lisible associé à une adresse IP afin de faciliter l’accès à un site. | `webdevmaisonneuve.ca` |
| Sous-domaine | Partie ajoutée avant le domaine principal pour identifier un site ou un service particulier. | `e2596151.webdevmaisonneuve.ca` |

L’adresse IP sert à localiser le serveur sur le réseau. Le domaine offre une adresse plus facile à mémoriser, tandis que le sous-domaine permet d’organiser plusieurs sites ou services sous un même domaine principal.


### Question 3 — Ports réseau

Un port réseau est un numéro qui permet à un ordinateur de diriger les communications vers le bon service. Une même adresse IP peut offrir plusieurs services, chacun utilisant généralement un port différent.

| Port | Service associé | Utilité |
| ---: | --- | --- |
| 22 | SSH | Se connecter à distance à un serveur de manière sécurisée. |
| 80 | HTTP | Transmettre des pages Web sans chiffrement. |
| 443 | HTTPS | Transmettre des pages Web avec une connexion chiffrée et sécurisée. |

 
### Question 4 — HTTP et HTTPS

HTTP transmet les pages Web sans chiffrer les données. HTTPS utilise TLS pour sécuriser les communications entre le navigateur et le serveur. HTTPS est important pour protéger les informations échangées et confirmer l’identité du site public.

### Question 5 — SSH et N0C

SSH est un protocole de connexion sécurisée à distance. Je l’ai utilisé pour me connecter à N0C et déployer mon projet dans `public_html` avec le port `5022`.

### Question 6 — Dépôt GitHub public

Un dépôt public peut être cloné sur N0C sans authentification GitHub. Il facilite donc le déploiement et permet aussi à l’enseignante de consulter le projet.

## Difficultés rencontrées

Au début, ma modification dans `index.php` n’était pas enregistrée. J’ai sauvegardé le fichier et vérifié le résultat avec `git status`. J’ai aussi vérifié que le remote `rendu` avait été correctement ajouté avant de pousser le projet.