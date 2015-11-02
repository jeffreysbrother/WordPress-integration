<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2 last-paragraph">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h2><a  class="blog-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <p class="text-muted"><?php the_time('F jS, Y'); ?> | by <?php the_author(); ?> <span class="pipe">|</span> <span class="category-part">Posted in

            <?php
              $categories = get_the_category();
              $separator = ", ";
              $output = '';

              if($categories) {
                foreach($categories as $category) {
                  $output .= '<a href=" ' . get_category_link($category->term_id) . ' ">' . $category->cat_name . '</a>' . $separator;
                }
                echo trim($output, $separator);
              }
            ?></span>
        </p>

        <p class="text-muted"><?php the_content(); ?></p>
        <hr>

      <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>

      <?php comments_template(); ?>

    </div>
  </div>
</div>

<?php get_footer(); ?>
