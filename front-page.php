<?php
   /*
   Template Name: Front-page
   */
   	get_header()
 ?>
<div id="CTAFade" style="display: block;">
   <div class="callToAction fadein">
      <img class="hero-image" src="<?php bloginfo('template_directory');?>/imgs/infbg.jpg">
   </div>
</div>
<div class="caption">
   <h1>THE INFLUENCER AGENCY</h1>
</div>
<div class="welcome" style="padding: 10% 5%;">
   <div class="banner">
      <div class="bannerLogo">
         <img src="<?php bloginfo('template_directory');?>/imgs/logo.png">
      </div>
      <!-- Custom Homepage Fields --> 
      <?php
         $hp= get_field('home_page');
         
         ?>
      <?php if ( $hp['main_paragraph']) : ?>
      <h1 class="opening-statement"> 
         <?php 	 
            echo $hp['main_paragraph'];
            ?>
      </h1>
      <?php endif; ?>
   </div>
</div>
<div class="welcome2 welcome" style="background-color: transparent; height: 80vh; color: white;">
   <div class="caption">
      <h1 class='title' style="margin-top: 7%;">Meet our influencers</h1>
      <a class="caption-button" href="/the-talent" style="text-decoration: none;">FIND OUT MORE</a></h1>
   </div>
</div>
</div>
<div class="work_showcase" style="background-color: white;">
<h1 style="padding-bottom: 2%;">Brands we've worked with</h1>
<!--logo showcase modals Custom PHP/JS-->
<?php include 'brand-modal-custom.php';?>
<!--Logo carousels WP-Plugin-->
<div class="logo-container">
   <h1>Plus Many More</h1>
   <?php echo do_shortcode('[URIS id=2794]'); ?>
   <?php echo do_shortcode('[URIS id=2803]'); ?>
   <?php echo do_shortcode('[URIS id=4179]'); ?>
   <?php echo do_shortcode('[URIS id=2806]'); ?>
   <?php echo do_shortcode('[URIS id=4194]'); ?>
</div>
<!--Instagram Feed -->
<div class="work_showcase" style="background-color: white;">
   <h1 style="padding-top: 3.5%; padding-bottom: 0; color: #ff00ff">FOLLOW US ON INSTAGRAM</h1>
   <div style="margin: 0 auto; width: 80%; ">
      <?php echo do_shortcode('[instagram-feed]'); ?>
   </div>
</div>
<!--footer-->
<?php
   get_footer();
 ?>