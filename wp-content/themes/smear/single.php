<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2 last-paragraph">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1><a  class="blog-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <p class="text-muted"><?php the_content(); ?></p>

  <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>

    </div>
  </div>
</div>

<?php get_footer(); ?>
