<div id="header">
  <div class="container">
    <div class="logo">
      <h1><?php print render($site_name);?></h1>
    </div>
    <div class="main-menu">
      <?php print render($page['header']);?>
    </div>
  </div>
</div>

<?php if($page['feature']): ?>
  <div id="feature">
    <div class="container">
      <?php print render($page['feature']);?>
    </div>
  </div>
<?php endif;?>



<?php if ($page['content']): ?>
  <div id="content">
    <div class="container">
      <?php print render($page['content']); ?>
    </div>
  </div>
<?php endif;?>

  <div id="signup">
    <div class="container">
      <?php if($page['signup']): ?>
        <?php print render($page['signup']);?>
      <?php endif;?>
    </div>
  </div>

<div id="footer">
  <?php if ($page['footer']): ?>
    <?php print render($page['footer']); ?>
  <?php endif; ?>
</div>
