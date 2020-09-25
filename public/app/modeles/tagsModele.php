<?php
/*--------------------------------------------------------------------
../app/modeles/tagsModele
modèle des tags
-----------------------------------------------------------------------*/

namespace App\Modeles\Tags;

function findAll(\PDO $connexion){
  $sql = "SELECT *
          FROM tags t
            
          ORDER BY t.name ASC
          LIMIT 8;";
          $rs = $connexion->query($sql);
          return $rs->fetchAll(\PDO::FETCH_ASSOC);
        }
