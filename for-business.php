<?php
/*
Template Name: For-business
*/
	get_header()?>




<div id="CTAFade" style="display: block;">
	<div class="callToAction fadein">
<img class="hero-image" src="<?php bloginfo('template_directory');?>/imgs/infbg.jpg">
</div>
</div>
<div class="caption">

		<h1>SOCIAL INFLUENCE IS POWERFUL</h1>


	</div>



<div class="welcome" style="background-color: #F7F7F7; margin-bottom: 0; padding-bottom: 0;">
    



<div class="welcome" style="background-color: #F7F7F7; margin-bottom: 0; padding-bottom: 0;">
			<!--<button class="button-alt"><a href='<?php bloginfo("template_directory")?>/for-business-1'>View Our Case Studies</a></button>-->
<?php

	$bc= get_field('for_business');

	?>
<div class="for-business for-business-first" style="margin-bottom: 0;">
    <?php if ( $bc['title']) : ?>
	<h1><?php echo $bc['title'] ?></h1>
	 <?php endif; ?>

	<div class="svg-icon">
	<img src="<?php bloginfo('template_directory');?>/imgs/customer.svg">
</div>
<?php if ( $bc['first_paragraph']) : ?>
	<p><?php echo $bc['first_paragraph'] ?></p>
	<hr>
	 <?php endif; ?>

		<div class="svg-icon">

	<img src="<?php bloginfo('template_directory');?>/imgs/product.svg">
</div>
<?php if ( $bc['second_paragraph']) : ?>
	<p><?php echo $bc['second_paragraph'] ?></p>
	 <?php endif; ?>
		<hr>

		<div class="svg-icon">

		<img src="<?php bloginfo('template_directory');?>/imgs/party.svg">

</div>
<?php if ( $bc['third_paragraph']) : ?>
	<p> <?php echo $bc['third_paragraph'] ?></p>
	 <?php endif; ?>
		<hr>

		<div class="svg-icon" style="border: none;">

	<img src="<?php bloginfo('template_directory');?>/imgs/school.svg">
</div>
<?php if ( $bc['fourth_paragraph']) : ?>
	<p><?php echo $bc['fourth_paragraph'] ?></p>
	 <?php endif; ?>
<?php if ( $bc['fifth_paragraph']) : ?>
	<p><?php echo $bc['fifth_paragraph'] ?></p>
	 <?php endif; ?>
		<hr>
	</div>
</div>
<?php require("contact-forms/bus-contact-form.php")?>
</div>

<?php get_footer(); ?>