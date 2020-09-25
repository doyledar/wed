<?php
/*-------------------------------------------------------
../app/vues/posts/search.php
Liste des posts
Variables disponibles
  $posts (tableau de tableaux indexés)
  $search (string)
-----------------------------------------------------------*/

?>

<?php foreach ($posts as $post): ?>
<?php $date=strtotime($post['created_at']); ?>

      <article class="blog_item">
          <div class="blog_item_img">
              <img class="card-img rounded-0" src="assets/img/blog/<?php echo $post['image']; ?>" alt="">
              <a href="?posts=show&id=<?php echo $post['id']."/".slugify($post['title']); ?> " class="blog_item_date">
                  <h3><?php echo date('d', $date); ?></h3>
                  <p><?php echo date('F', $date); ?></p>
              </a>
          </div>

          <div class="blog_details">
              <a class="d-inline-block" href="?postID=<?php echo $post['id']."/".slugify($post['title']); ?>">
                  <h2><?php echo $post['title']; ?></h2>
              </a>
              <p><?php echo $post['content']; ?></p>
              <ul class="blog-info-link">
                  <li><a href="?posts=show&id=<?php echo $post['id']; ?>"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
              </ul>
          </div>
      </article>

<?php endforeach; ?>
