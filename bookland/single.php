<?php
get_header();
?>
<div class="container py-5">
  <div class="row">
    <div class="col-md-4">
      <?php if (has_post_thumbnail()) : ?>
        <img src="<?php the_post_thumbnail_url('smallest') ?>" class="card-img-top" alt="Book 1">
      <?php endif; ?>
    </div>
  </div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile;
    endif; ?>
</div>
</div>
<!-- footer & scripts-->
<?php
get_footer();
?>