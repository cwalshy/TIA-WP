<?php
/*
 * Template Name: Featured Article
 * Template Post Type: post, page, product
 */


get_header();
 ?>
<div id="CTAFade" style="display: block; height: 12vh;">
	<div  id='profile-banner' class="callToAction fadein">
<img class="hero-image" src="<?php bloginfo('template_directory');?>/imgs/tiabg2.png">
</div>
</div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="welcome">
<div class="post_content">

	<div class="for-business post-content">
<h5><?php echo get_the_date(); ?></h5>

 <h1><?php the_title(); ?></h1>
 <?php the_content(); ?>

<?php endwhile; ?>
<?php endif; ?>
</div>

<div class="post-nav">

	<div class="post-back" style="float: left;">
		<p>Previous</p>
		<?php next_post_link( '<strong>%link</strong>' ); ?>
	</div>

		<div class="post-forward" style="float: right;">
			<p>Next</p>
		<?php previous_post_link( '<strong>%link</strong>' ); ?>
	</div>

</div>

</div>
</div>
<?php get_footer(); ?>
