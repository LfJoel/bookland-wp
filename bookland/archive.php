<?php
get_header();
?>

<div class="container py-5">
  <div class="row">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="col-md-4">
          <div class="card mb-4">
            <!-- <img src="book1.jpg" class="card-img-top" alt="Book 1"> -->
            <div class="card-body">
              <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('smallest') ?>" class="card-img-top" alt="Book 1">
              <?php endif; ?>
              <h3 class="card-title"><?php the_title(); ?></h3>
              <p class="card-text"><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>" class="btn btn-success">Read More</a>
            </div>
          </div>
        </div>


    <?php endwhile;
    endif; ?>
  </div>
</div>


<?php
get_footer();
?>