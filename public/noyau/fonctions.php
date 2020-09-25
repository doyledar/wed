<?php
/*--------------------------------------------------------------------------------
  Fonction pour transformer un titre en slug
----------------------------------------------------------------------------------*/


function slugify($string, $delimiter = '-') {
	$oldLocale = setlocale(LC_ALL, '0');
	setlocale(LC_ALL, 'en_US.UTF-8');
	$clean = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
	$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
	$clean = strtolower($clean);
	$clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
	$clean = trim($clean, $delimiter);
	setlocale(LC_ALL, $oldLocale);
	return $clean;
}


function datify(string $date, string $format ){
  return date_format(date_create($date), $format);
}


/**
 * tronquer une chaîne au premier espace
 * après un certain nombre de caractères
 * @param  string  $chaine
 * @param  integer $nbreCaracteres [valeur par défaut]
 * @return string
 */
function tronquer(string $chaine, int $nbreCaracteres = 200) :string {
  if(strlen($chaine) > $nbreCaracteres):
    $positionEspace = strpos($chaine, ' ', $nbreCaracteres);
    return substr($chaine, 0, $positionEspace);
  else:
    return $chaine;
  endif;
}
