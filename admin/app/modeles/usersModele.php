<?php
/*--------------------------------------------------------------------
../app/modeles/usersModele
modèle des users


LIRE _ AJOUTER _ MODIFIER _ SUPPRIMER A PARTIR D'UN FORMULAIRE (examen)
-----------------------------------------------------------------------*/

namespace App\Modeles\Users;

function findOneByIdPasswd(\PDO $connexion, array $data[]){
  $sql = "SELECT *
          FROM users
          WHERE login = :login
            AND passord = :password;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':login', $data['login'], \PDO::PARAM_STR);
  $rs->bindValue(':password', $data['password'], \PDO::PARAM_STR);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}
