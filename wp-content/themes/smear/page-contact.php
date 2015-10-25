<?php get_header(); ?>

<div class="container last-paragraph">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<?php if ( is_front_page() ) { ?>
		<h2 class="entry-title"><?php the_title(); ?></h2>
	<?php } else { ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
	<?php } ?>
	<?php the_content(); ?>
<?php endwhile; ?>

</div>

<?php get_footer(); ?>
