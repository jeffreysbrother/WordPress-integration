<?php get_header(); ?>

<div class="container last-paragraph">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

    <p><?php the_category(); ?></p>
    <p><?php the_date(); ?></p>
    <p><?php the_excerpt(); ?></p>

  <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>

</div>

<?php get_footer(); ?>
