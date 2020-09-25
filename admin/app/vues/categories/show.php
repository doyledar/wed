<?php
/*-------------------------------------------------------
../app/vues/categories/show.php
Détail d'une catégorie
Variables disponibles $postsByCategorie (tableau de tableaux)
-----------------------------------------------------------*/

?>

<?php foreach ($postsByCategorie as $postByCategorie): ?>
<?php $date=strtotime($postByCategorie['created_at']); ?>
<?php echo $_GET['categorieID']; ?>
<?php $postByCategorie['name']; ?>
<?php endforeach; ?>
