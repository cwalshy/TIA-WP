<?php
/*
 * Template Name:  Post Feed
 * Template Post Type: post, page, product
 */


get_header();
 ?>
<div id="CTAFade" style="display: block;">
	<div class="callToAction fadein">
<img class="hero-image" src="<?php bloginfo('template_directory');?>/imgs/tiabg2.png">
</div>
</div>
<div class="caption">

		<h1>NEWS</h1>

	</div>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="welcome">
<div class="post_content">
	<div class="for-business post-content">

 <?php the_content(); ?>

<?php endwhile; ?>
<?php endif; ?>
</div>
</div>
</div>
<?php get_footer(); ?>