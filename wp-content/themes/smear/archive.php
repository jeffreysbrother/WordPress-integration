<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2 last-paragraph">

  <?php if ( have_posts() ) :

    ?>

    <h2><?php

    if(is_category()) {
      single_cat_title();
    } elseif(is_tag()) {
      single_tag_title();
    } elseif(is_author()){
      the_post();
      echo 'Author Archives: ' . get_the_author();
      rewind_posts();
    } elseif(is_day()) {
      echo 'Daily Archives: ' . get_the_date();
    } elseif(is_month()) {
      echo 'Monthly Archives: ' . get_the_date('F Y');
    } elseif(is_year()) {
      echo 'Yearly Archives: ' . get_the_date('Y');
    } else {
      echo 'Archives';
    }

    ?></h2>

    <?php while ( have_posts() ) : the_post(); ?>

    <h2><a  class="blog-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <p class="text-muted"><?php the_time('F jS, Y'); ?> | <?php the_author(); ?> <span class="pipe">|</span> <span class="category-part">Posted in

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

    <p class="text-muted"><?php echo get_the_excerpt(); ?></p>

  <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>

    </div>
  </div>
</div>

<?php get_footer(); ?>
