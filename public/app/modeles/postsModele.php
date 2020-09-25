<?php
/*--------------------------------------------------------------------
../app/modeles/postsModele
modèle des posts
-----------------------------------------------------------------------*/

namespace App\Modeles\Posts;

// charge les derniers posts dans la variable $posts
/**
 * [findAll description]
 * @param  PDO   $connexion [description]
 * @return array            [description]
 */
function findAll(\PDO $connexion) : array{
  $sql = "SELECT p.id, p.image, p.created_at, p.title, p.content, a.firstname, a.lastname
          FROM posts p
           JOIN authors a ON p.author_id = a.id
          ORDER BY p.created_at DESC
          LIMIT 10;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

// charge les détails d'un post dans la variable $post
/**
 * [findOneById description]
 * @param  PDO    $connexion [description]
 * @param  [type] $id        [description]
 * @return array             [description]
 */
function findOneById(\PDO $connexion, $id) : array{
  $sql = "SELECT *, p.id
          FROM posts p
            JOIN authors a
              ON a.id = p.author_id
          WHERE p.id = :id
          ;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}


function findAllBySearch(\PDO $connexion, $search){
  $sql = "SELECT *
        FROM posts p
          JOIN authors a ON a.id = p.author_id
          JOIN categories c ON c.id = p.categorie_id
        WHERE p.title     LIKE :search
          OR p.texte      LIKE :search
          OR c.name       LIKE :search
          OR a.firstname  LIKE :search
          OR a.lastname   LIKE :search;";
        $rs = $connexion->prepare($sql);
        $rs->bindValue(':search', $search, \PDO::PARAM_STR);
        $rs->execute();
        return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
