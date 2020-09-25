<?php
/*
  ./app/routeur.php
 */



/*
  CHARGEMENT DU ROUTEUR DES USERS
  PATTERN: index.php?users=xxx
*/
if (isset($_GET['users'])):
  include_once '../app/routeurs/users.php';

/*
  DETAILS D'UN POST
  PATERN: /index.php?post=show&id=x
  CTRL: postsControleur
  ACTION: show
 */
elseif(isset($_GET['categorie'])):
  include_once '../app/controleurs/categoriesControleur.php';
  \App\Controleurs\Categories\showAction($connexion, $_GET['id']);

/*
  DETAILS D'UN POST
  PATERN: /index.php?post=show&id=x
  CTRL: postsControleur
  ACTION: show
 */
elseif(isset($_GET['post'])):
  include_once '../app/controleurs/postsControleur.php';
  \App\Controleurs\Posts\showAction($connexion, $_GET['id']);

/*
  ROUTE PAR DEFAUT
  PATTERN: /
  CTRL: postsControleur
  ACTION: index
 */
else:
  include_once '../app/controleurs/postsControleur.php';
  \App\Controleurs\Posts\indexAction($connexion);
endif;
