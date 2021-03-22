<?php /* Template Name: View-Talent */ ?>
<?php
   global $wp;
   global $post;
   get_header();
   
   
    ?>
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<div id="CTAFade" style="display: block;">
   <div class="callToAction fadein">
      <img class="hero-image" src="<?php bloginfo('template_directory');?>/imgs/infbg.jpg">
   </div>
</div>
<div class="caption">
   <h1>AUSTRALIA’S LEADING INFLUENCERS</h1>
</div>
<?php
   $mp= get_field('main_paragraph');
   
   ?>
<div class="welcome">
   <div class="opening-statement">
      <h1 style="font-weight: 100; color: #222222; letter-spacing: 0.05em;      font-family: 'Fira Sans', sans-serif !important;
         "><span style="color: #ff00ff">The Influencer Agency</span><br> 
         <?php if  ($mp) : ?>
         <?php echo $mp?>
         <?php endif?>
      </h1>
   </div>
</div>
<div class="welcome" style="background-color: #eee; ">
   <div class="flex-box-container" style="width: 95%">
      <!--     <h1><button class="location-filter" id="clear-filters" style="display: none; margin: 0 auto; color: #ff00ff; background-color: white;">Clear Filters</button></h1>
         --><button class="location-filter" id="clear-filters">All</button>
      <button class="location-filter" id="wa_button">Western Australia</button>
      <button class="location-filter" id="vic_button">Victoria</button>
      <button class="location-filter" id="qld_button">Queensland</button>
      <button class="location-filter" id="nsw_button">New South Wales</button>
      <button class="location-filter" id="act_button">ACT</button>
      <button class="location-filter" id="nt_button">Northern Territory</button>
      <button class="location-filter" id="tas_button">Tasmania</button>
      <div class="flex-box">
         <?php
            global $wpdb;
            //orgainise rows by followers descending
            $myrows = $wpdb->get_results( "SELECT IG_Handle FROM influencers" );
            
            
            
            $results = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}talent", OBJECT );
            
            
            $users = $wpdb->get_results(
              "
              SELECT id, name, short_bio, long_bio, profile_picture
              FROM talent
            
              "
            );
            
            $my_c = $post->ID;
             $post_search = $wpdb->prepare( "SELECT post_content FROM wp_posts WHERE id = %s", $my_c);
             $post = $wpdb->get_results($post_search, object);
            
            foreach ( $post as $post ) {
             $html_dom = new DOMDocument;
             @$html_dom->loadHTML($post->post_content);
            
             $imageTags = $html_dom->getElementsByTagName('img');
            
             $extractedImages = array();
            }
            
             foreach($imageTags as $imageTag){
            
                //Get the src attribute of the image.
                $imgSrc = $imageTag->getAttribute('src');
            
                //Get the alt text of the image.
                $altText = $imageTag->getAttribute('alt');
            
                //Get the title text of the image, if it exists.
                $titleText = $imageTag->getAttribute('title');
            
                //Add the image details to our $extractedImages array.
                $extractedImages[] = array(
                    'src' => $imgSrc,
                    'alt' => $altText,
                    'title' => $titleText
                );
            
            }
            global $wpdb;
            
            // Set table name
            $table = $wpdb->prefix . 'temp_table';
            
            $charset_collate = $wpdb->get_charset_collate();
            
            // Write creating query
            $query =  "CREATE TEMPORARY TABLE IF NOT EXISTS temp1 (
                        talent_id INT(11) AUTO_INCREMENT,
                        post_title VARCHAR(255),
                        guid VARCHAR(255),
                        img_src VARCHAR(2555),
                        img_title VARCHAR(255),
                        img_alt VARCHAR(255),
                        IG_Handle VARCHAR(255),
                        followers VARCHAR(255),
                        PRIMARY KEY(talent_id)
                        )$charset_collate;";
            // Execute the query
            $wpdb->query( $query );
            
            
                  $int = 0;
                foreach ($extractedImages as $extractedImage) {
            
            
              $url_search = $wpdb->prepare( "SELECT post_title, guid FROM wp_posts WHERE post_title = %s AND post_type = 'page'", $extractedImages[$int]['title']);
              $url = $wpdb->get_results($url_search, object);
            
                foreach ($url as $url) {
            
                }
            
                  $urls = $wpdb->prepare( "INSERT into temp1 (img_title, img_alt, img_src, guid, post_title) VALUES (%s, %s, %s, %s, %s)", $extractedImages[$int]['title'], $extractedImages[$int]['alt'], $extractedImages[$int]['src'], $url->guid, $url->post_title);
            
                $test = $wpdb->get_results($urls, object);
                $printD = $wpdb->prepare( "SELECT * FROM temp1");
                $url2 = $wpdb->get_results($printD, object);
                $int++;
              }
            
              $insertPrep = $wpdb->prepare("
                SELECT influencer_new.FullName, influencer_new.`IG_Handle`, influencer_new.Insta_Followers, influencer_new.TikTok_Followers, temp1.img_src, temp1.img_alt, temp1.guid, influencer_new.Frequent_location, temp1.img_title
                FROM influencer_new
                INNER JOIN temp1 ON temp1.post_title=influencer_new.FullName
                ORDER BY influencer_new.Insta_Followers DESC
            
                ");
            
              $output = $wpdb->get_results($insertPrep, object);
            
              foreach ($output as $output) {
                          echo '<a class="state" href="'.$output->guid.'">';
              echo    '<span class="state"><p style="display: none;">'.$output->Frequent_location.'</p>
                        <div class="index-profile">
                        <div class="index-profile-picture">
                  <img  class="profile-picture" src='.$output->img_src.'>
                  </div>';
            
            
                echo '<div class="profile-snippet">
                  <h2>'.$output->img_title.'</h2>
                  <p>'.$output->img_alt.'
            
            
            
                  </p>
                </div>
                </div>
                </span></a>';
                # code...
            
              }
            
            
            ?>
      </div>
   </div>
   <div class="work_showcase" style="background-color: #eee;">
   </div>
</div>
<script>
   $(document).ready(function(){
     $("#myInput").on("keyup", function() {
       var value = $(this).val().toLowerCase();
       $(".dropdown-menu li").filter(function() {
         $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
       });
     });
   });
</script>
<script type="text/javascript">
   document.getElementById('wa_button').onclick = function() {
   var locbutton = document.getElementsByClassName('location-filter'),
     i = locbutton.length;
   
   do {
     i--;
     locbutton[i].className = "location-filter";
             $('#wa_button').addClass('active');
             console.log('test');
   
   } while (i > 0)
   
      var states = document.getElementsByClassName('state');
      for(var i = 0; i < states.length; i ++) {
   
           let state = states[i];
             state.style.display = 'block';
   
           let content = state.textContent.trim();
   
           if ((content.indexOf('Western Australia') >= 0) && (state.style.display != 'none')) {
             state.style.display = 'block';
   
   
           } else {
           state.style.display = 'none';
   
           }
         }
   
   
   }
   
    document.getElementById('vic_button').onclick = function() {
      var states = document.getElementsByClassName('state');
       var locbutton = document.getElementsByClassName('location-filter'),
     i = locbutton.length;
   do {
     i--;
     locbutton[i].className = "location-filter";
             $('#vic_button').addClass('active');
   
   } while (i > 0)
   
      for(var i = 0; i < states.length; i ++) {
           let state = states[i];
             state.style.display = 'block';
   
           let content = state.textContent.trim();
   
           if ((content.indexOf('Victoria') >= 0) && (state.style.display != 'none')) {
             state.style.display = 'block';
           } else {
           state.style.display = 'none';
   
           }
         }
   }
    document.getElementById('nsw_button').onclick = function() {
      var states = document.getElementsByClassName('state');
             var locbutton = document.getElementsByClassName('location-filter'),
     i = locbutton.length;
   do {
     i--;
     locbutton[i].className = "location-filter";
             $('#nsw_button').addClass('active');
   
   } while (i > 0)
   
      for(var i = 0; i < states.length; i ++) {
           let state = states[i];
             state.style.display = 'block';
   
           let content = state.textContent.trim();
   
           if ((content.indexOf('New South Wales') >= 0) && (state.style.display != 'none')) {
             state.style.display = 'block';
   
   
           } else {
           state.style.display = 'none';
   
           }
         }
   }
    document.getElementById('qld_button').onclick = function() {
      var states = document.getElementsByClassName('state');
             var locbutton = document.getElementsByClassName('location-filter'),
     i = locbutton.length;
   do {
     i--;
     locbutton[i].className = "location-filter";
             $('#qld_button').addClass('active');
   
   } while (i > 0)
   
      for(var i = 0; i < states.length; i ++) {
           let state = states[i];
             state.style.display = 'block';
   
           let content = state.textContent.trim();
   
           if ((content.indexOf('Queensland') >= 0) && (state.style.display != 'none')) {
             state.style.display = 'block';
   
   
           } else {
           state.style.display = 'none';
   
           }
         }
   }
    document.getElementById('tas_button').onclick = function() {
      var states = document.getElementsByClassName('state');
             var locbutton = document.getElementsByClassName('location-filter'),
     i = locbutton.length;
   do {
     i--;
     locbutton[i].className = "location-filter";
             $('#tas_button').addClass('active');
   
   } while (i > 0)
   
      for(var i = 0; i < states.length; i ++) {
           let state = states[i];
             state.style.display = 'block';
   
           let content = state.textContent.trim();
   
           if ((content.indexOf('Tasmania') >= 0) && (state.style.display != 'none')) {
             state.style.display = 'block';
   
           } else {
           state.style.display = 'none';
   
           }
         }
   }
    document.getElementById('act_button').onclick = function() {
      var states = document.getElementsByClassName('state');
             var locbutton = document.getElementsByClassName('location-filter'),
     i = locbutton.length;
   do {
     i--;
     locbutton[i].className = "location-filter";
             $('#act_button').addClass('active');
   
   } while (i > 0)
   
      for(var i = 0; i < states.length; i ++) {
           let state = states[i];
             state.style.display = 'block';
   
           let content = state.textContent.trim();
   
           if ((content.indexOf('Australian Capital Territory') >= 0) && (state.style.display != 'none')) {
             state.style.display = 'block';
   
           } else {
           state.style.display = 'none';
   
           }
         }
   }
    document.getElementById('nt_button').onclick = function() {
      var states = document.getElementsByClassName('state');
             var locbutton = document.getElementsByClassName('location-filter'),
     i = locbutton.length;
   do {
     i--;
     locbutton[i].className = "location-filter";
             $('#nt_button').addClass('active');
   
   } while (i > 0)
   
      for(var i = 0; i < states.length; i ++) {
           let state = states[i];
             state.style.display = 'block';
   
           let content = state.textContent.trim();
   
           if ((content.indexOf('Northern Territory') >= 0) && (state.style.display != 'none')) {
             state.style.display = 'block';
   
           } else {
           state.style.display = 'none';
   
           }
         }
   }
     document.getElementById('clear-filters').onclick = function() {
   
      var states = document.getElementsByClassName('state');
             var locbutton = document.getElementsByClassName('location-filter'),
     i = locbutton.length;
   do {
     i--;
     locbutton[i].className = "location-filter";
             $('#clear-filters').addClass('active');
   
   } while (i > 0)
   
   
      for(var i = 0; i < states.length; i ++) {
           let state = states[i];
             state.style.display = 'block';
   
           let content = state.textContent.trim();
             state.style.display = 'block';
   
   
         }
   
   }
   
</script>
<?php
   get_footer();
   
   ?>