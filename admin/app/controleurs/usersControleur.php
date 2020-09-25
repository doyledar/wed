<?php
/*------------------------------------------------------------------
../app/controleurs/usersControleur.php
contrôleur des posts
----------------------------------------------------------------*/

namespace App\Controleurs\Users;
use \App\Modeles\Users;

function dashboardAction(\PDO $connexion) {
  // 2. On charge la vue loginForm dans $content
    GLOBAL $title, $content;
    $title = TITRE_USERS_DASHBOARD;
    ob_start();
      include '../app/vues/users/dashboard.php';
    $content = ob_get_clean();
}
