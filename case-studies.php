<?php
/*
Template Name: Case-Studies
*/global $wp;

	get_header();



	?>




<div id="CTAFade" style="display: block;">
	<div class="callToAction fadein">
<img class="hero-image" src="<?php bloginfo('template_directory');?>/imgs/tia1.png">
</div>
</div>
<div class="caption">

		<h1>Client Case Studies</h1>

	</div>



<div class="welcome" style="background-color: #F7F7F7; margin-bottom: 0; padding-bottom: 0;">

<div class="for-business for-business-case" style="margin-bottom: 0;">
	<?php
global $wpdb;
global $post;
if ( is_page() )
$my_c = $post->ID;

$post_search = $wpdb->prepare( "SELECT post_content FROM wp_posts WHERE id = %s", $my_c);

$output = $wpdb->get_results($post_search, object);

 print_r($output->post_content);
 foreach ($output as $output) {
 	echo $output->post_content;
 	# code...
 }

 ?>
	</div>
<?php require("bus-contact-form.php")?>

</div
<<?php get_footer(); ?>