<?php
/*----------------------------------------------------------------------
../app/controleurs/categoriesControleur.php
Contrôleur des catégories
--------------------------------------------------------------------------*/

namespace App\Controleurs\Categories;
use \App\Modeles\Categories;

function indexActionCategories(\PDO $connexion) {
  // 1. On demande les catégories au modèle et on les met dans $categories
    include_once '../app/modeles/categoriesModele.php';
    $categories = categories\findAll($connexion);

  // 2.  Je charge directement la vue
    include_once '../app/vues/categories/index.php';
}

function showAction(\PDO $connexion, $id) {
  // 1. On demande le détail du post au modèle et on le met dans la variable $post
    include_once '../app/modeles/categoriesModele.php';
    $postsByCategorie = categories\findAllPostsById($connexion, $id);

  // 2. On charge la vue show dans $content
    GLOBAL $title, $content;
    $title = $postsByCategorie['name'];
    ob_start();
      include '../app/vues/categories/show.php';
    $content = ob_get_clean();
}
