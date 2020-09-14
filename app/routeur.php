<?php
/*----------------------------------------
..app/routeur.php
Dispatcher central
--------------------------------------------*/
use \App\Controleurs\Posts;
use \App\Controleurs\Categories;

if(isset($_GET['categorieID'])):
  
  // ROUTE DU DETAIL D'UNE CATEGORIE
  // PATTERN : ?categorieID=xxx
  // CTRL :    categoriesControleur
  // ACTION:   show
  include_once '../app/controleurs/categoriesControleur.php';
  \App\Controleurs\Categories\showAction($connexion, $_GET['categorieID']);


elseif(isset($_GET['postID'])):
  // ROUTE DU DETAIL D'UN POST
  // PATTERN : ?postID=xxx
  // CTRL :    postsControleur
  // ACTION:   show
  include_once '../app/controleurs/postsControleur.php';
  \App\Controleurs\Posts\showAction($connexion, $_GET['postID']);

else :
  // ROUTE PAR DEFAUT - LISTE DES DERNIERS POSTS
  // PATTERN : /
  // CTRL :    postsControleur
  // ACTION:   index
  include_once '../app/controleurs/postsControleur.php';
  \App\Controleurs\Posts\indexAction($connexion);

endif;
