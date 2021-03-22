<?php
/*
Template Name: Join-Team
*/
	get_header()?>




<div id="CTAFade" style="display: block;">
	<div class="callToAction fadein">
<img class="hero-image" src="<?php bloginfo('template_directory');?>/imgs/infbg.jpg">
</div>
</div>
<div class="caption">

		<h1>THE INFLUENCER IS VALUABLE</h1>


	</div>


<div class="welcome" style="background-color: #F7F7F7; margin-bottom: 0; padding-bottom: 0;">
<div class="welcome" style="background-color: #F7F7F7; margin-bottom: 0; padding: 5% 10%;">
<div class="gallery">
	<?php
global $wpdb;
global $post;
if ( is_page() )
global $post;
setup_postdata($post);
the_content();

 ?>
</div>
</div>
 <?php

	$ic= get_field('for_influencers_content_');

	?>


<div class="welcome" style="background-color: #F7F7F7; margin-bottom: 0; padding-bottom: 0;">
<div class="for-business" style="margin-bottom: 0;">
<h1 style="color: #FF00FF; font-weight: 900; font-family: 'futura-pt', sans-serif;">Join our network of influencers below</h1>
</div>

<div class="for-business for-business-first" style="margin-bottom: 0;">
<?php if ( $ic['first_paragraph']) : ?>

	<p><?php echo $ic['first_paragraph'] ?></p>
	<hr>
	 <?php endif; ?>
<?php if ( $ic['second_paragraph']) : ?>

	<p><?php echo $ic['second_paragraph'] ?></p>
	<hr>
	 <?php endif; ?>
<?php if ( $ic['third_paragraph']) : ?>

	<p><?php echo $ic['third_paragraph'] ?></p>
	<hr>
	 <?php endif; ?>
	</div>
</div>
<?php require("contact-forms/contact.php")?>

<?php get_footer(); ?>