<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container last-paragraph">

      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h1 class="text-center">I'm James</h1>
          <p class="lead text-center text-muted">sometimes I get bored</p>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
          <img src="img/james_smear_resize.jpg" width="698" height="632" alt="strange image of james" class="img-responsive center-block smear">
        </div>
      </div>

    </div>

  <?php endwhile; else : ?>
  	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>

<?php get_footer(); ?>
