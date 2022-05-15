# MyPortfolio

## https://benjaminadrien-myportfolio.herokuapp.com/
![portfolio](https://user-images.githubusercontent.com/90291370/168131671-19368ffa-0aa9-46df-b6f3-46dd14ee7e65.jpg)
Il s'agit du code source de mon site web personnel.

## Technologies utilisées
Ce projet a été l'occasion pour moi de découvrir de nouveaux moyen de construire un site Web.

### Sass
Utilisé pour styliser le site, Sass a été assez facile à prendre en main et m'a grandement facilité la tâche lors du développement du Portfolio.

### JavaScript
Bien que familier avec le langage, je ne l'avais encore jamais utiliser dans un site web. Il m'a permit de créer les animations autour des icons du menu ainsi que les différentes section du site Web.

### PHP
Complétement inconnu avant ce projet. J'ai voulu mettre en place un formulaire permettant de m'envoyer un mail intégré au site Web c'est pourquoi j'ai décidé d'utiliser le PHP. Le script se trouve dans le dossier version PHP.

## difficultés rencontrées
Les deux plus gros challenges de ce portfolio ont été la création des animations en JavaScript et la partie envoi d'email en PHP.

### Création d'animation
Au début de ce projet, je n'avais aucune idée de comment réaliser des animations à partir d'un script JavaScript. Il m'a fallu alors apprendre et comprendre comment récupérer et modifier des informations de mon fichier HTML. Pour cela je me suis beaucoup renseigné sur internet notamment avec Youtube et Stackoverflow.
L'animation des boutons du menu m'a pris le plus de temps comme il s'agissait de la première réaliser. <br> 
Par ailleurs, lors de l'exécution du script PHP, la page se rafraichissait et ramenait le site sur la première page. Or, je souhaitais que la page contact reste active, après l'envoi du mail afin que l'utilisateur puisse voir s'afficher le message indiquant le succès ou l'échec de l'envoi. J'ai du, pour cela, utiliser la variable window.name afin de pouvoir passer une condition ramenant le site sur la page contact.

### Envoi de mail depuis le formulaire
Pour la partie contact de mon Portfolio, j'ai voulu permettre l'envoi d'email depuis le formulaire. Après quelques recherches, le faire en PHP semblait la réponse la plus commune, et au vu des compétences recherchée sur le marché du travail, la plus adaptée. <br> 
J'ai, dans un premier temps, recherché comment executer un script PHP puis, comme je cherchais juste à permettre l'envoi de mail, je me suis concentré le fonctionnement de la fonction mail() afin de la mettre en place dans mon projet. Localement, tout s'exécute correctement, cependant l'envoi de mail n'est toujours pas 
fonctionnel depuis la mise en ligne via Heroku. <br>


