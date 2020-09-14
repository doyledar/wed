<?php
/*--------------------------------------------------------------------
../app/modeles/tagsModele
modèle des tags
-----------------------------------------------------------------------*/

namespace App\Modeles\Tags;

function findAll(\PDO $connexion){
  $sql = "SELECT *
          FROM tags t
            JOIN posts_has_tags pht
            ON pht.tag_id = t.id
            JOIN posts p
            ON pht.post_id = p.id
          ORDER BY t.name ASC
          LIMIT 8;";
          $rs = $connexion->query($sql);
          return $rs->fetchAll(\PDO::FETCH_ASSOC);
        }
