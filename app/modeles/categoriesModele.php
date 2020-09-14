<?php
/*--------------------------------------------------------------------
../app/modeles/categoriesModele
modèle des categories
-----------------------------------------------------------------------*/

namespace App\Modeles\Categories;

function findAll(\PDO $connexion){
  $sql = "SELECT c.id, name, count(p.id) as nbr
          FROM categories c
            JOIN posts p
            ON p.categorie_id = c.id
            GROUP BY c.id
          ORDER BY name ASC;";
          $rs = $connexion->query($sql);
          return $rs->fetchAll(\PDO::FETCH_ASSOC);
        }

        function findAllPostsById(\PDO $connexion, $id) : array{
          $sql = "SELECT *, p.id as idPost, p.title as title, p.content as content, p.created_at as created_at, p.image as image, c.id as idCategorie
                  FROM categories c
                    JOIN posts p
                      ON c.id = p.categorie_id
                  WHERE c.id = :id
                  ;";
          $rs = $connexion->prepare($sql);
          $rs->bindValue(':id', $id, \PDO::PARAM_INT);
          $rs->execute();
          return $rs->fetch(\PDO::FETCH_ASSOC);
        }
