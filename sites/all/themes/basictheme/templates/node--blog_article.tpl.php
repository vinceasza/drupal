<div class="blog-article">
  <div class="blog-title" style="background-image: url(<?php print render(image_style_url('thumbnail', $content['field_blog_article_image']['#items'][0]['uri']));?>);background-repeat: no-repeat;background-size: cover;background-position: center;">

      <h2><?php print $title;?></h2>

  </div>
  <div class="container">
  <h3><?php print render($content['field_blog_article_type']);?></h3>
  <h4>By: <?php print render($content['field_author']);?></h4>
  <div class="blog-content">
    <?php print render($content['body']);?>
  </div>
</div>


</div>
