<h4 class="widget_title">Tag Clouds</h4>
<ul class="list">
  <?php foreach ($tags as $tag): ?>

    <li>
        <a href="?tagID=<?php echo $tag['id']."/".slugify($tag['name']); ?>" class="d-flex">
          <?php echo $tag['name'] ?>
        </a>
    </li>

<?php endforeach; ?>
</ul>
