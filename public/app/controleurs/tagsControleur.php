<?php
/*------------------------------------------------------------------
../app/controleurs/tagsControleur.php
contrôleur des tags
----------------------------------------------------------------*/

namespace App\Controleurs\Tags;
use \App\Modeles\Tags;

function indexActionTags(\PDO $connexion) {
  // 1. On demande les tags au modèle et on les met dans $tags
    include_once '../app/modeles/tagsModele.php';
    $tags = Tags\findAll($connexion);

    // 2.  Je charge directement la vue
      include_once '../app/vues/tags/index.php';
}
