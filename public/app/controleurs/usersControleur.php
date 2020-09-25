<?php
/*------------------------------------------------------------------
../app/controleurs/usersControleur.php
contrôleur des posts
----------------------------------------------------------------*/

namespace App\Controleurs\Users;
use \App\Modeles\Users;

function loginFormAction(\PDO $connexion) {
  // 2. On charge la vue loginForm dans $content
    GLOBAL $title, $content;
    $title = TITRE_USERS_LOGINFORM;
    ob_start();
      include '../app/vues/users/loginForm.php';
    $content = ob_get_clean();
}

function login(\PDO $connexion, array $data=null){
  // Je demande l'utilisateur qui correspond au login/passwd
  include "../app/modeles/userModele.php";
  $user = User\findUserByIdPasswd($connexion, $data);

  var_dump($user);
  die();

  if($user):
    $_SESSION['user'] = $user;
    header('location: ' .ROOT_ADMIN);
  else:
    header('location: ' . ROOT . 'users/login/form');
  endif;

  // Si ok, redirection vers le backoffice, sinon, redirection vers la page de connexion

}
