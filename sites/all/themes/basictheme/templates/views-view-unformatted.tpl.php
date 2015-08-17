
<div class="this-is-a-view clearfix">
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $delta => $row): ?>
  <div<?php print $row_attributes[$delta]; ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
</div>
