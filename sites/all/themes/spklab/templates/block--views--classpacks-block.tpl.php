<div class="row">
<div class="col-sm-4  classpack">
<section id="<?php print $block_html_id; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
  <?php endif;?>
  <?php print render($title_suffix); ?>

  <?php print $content ?>

</section>
</div>
