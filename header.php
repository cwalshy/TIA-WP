



<!DOCTYPE html>
<html>
<head>
          <?php wp_head();
          $title = get_the_title();
          ?>

        <?php echo '<title>'.$title.'</title>'
        ?>
	
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W539ZVH');</script>
<!-- End Google Tag Manager -->
	
<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Fira+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory');?>/imgs/favicon.png">

<!--<script src="https://kit.fontawesome.com/a129e4b06b.js" crossorigin="anonymous"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>-->
<!--<script src="https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.js"></script>-->


<!--<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>



<body>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W539ZVH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
        <header>
			
<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <div class="topnav" id="myTopnav">

          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars icon"></i></a>
          <a href="javascript:void(0);" class="icon2" onclick="myFunction()">
          <i class="fa fa-close icon2"></i></a>
          <a href="<?php echo get_home_url(); ?>" id="home-nav">HOME</a>
          <a href="/for-business">FOR BUSINESS</a>
          <a href="/the-talent">OUR TALENT</a>
          <a href="<?php echo get_home_url(); ?>" class='logo'><img class="logo"src="<?php bloginfo('template_directory');?>/imgs/logo.png"></a>
          <a href="/influencer">JOIN THE FAMILY</a>
          <a href="/latest-posts">NEWS</a>

</div>

        </div>

        </header>

        <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">



