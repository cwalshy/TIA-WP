<?php
   /*
   Template Name: New-Profile
   */
   
   global $wp;
   get_header();
   
   global $wp;
   global $post;
   
   ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.js"></script>
<div id="CTAFade" class="CTANav" style="display: block; height: 12vh;">
   <div class="callToAction fadein">
      <img class="hero-image" src="<?php bloginfo('template_directory');?>/imgs/tia1.png">
   </div>
</div>
</div>
</div>
</div>
<div class="bg-container">
   <div class="view-profile" style="background-color: rgba(230, 230, 230, .2);">
      <?php
         $bio = get_field('profile_bio');
         ?>
      <div class="main-profile-picture">
         <h1><img src="<?php echo $bio["profile_picture"];?>" alt="">
            <br>
         </h1>
         <h5 class="loc" style="font-family: 'Fira Sans', sans-serif !important;
            "><?php echo $bio['location']?></h5>
      </div>
      <div class="profile-bio">
         <div class="bio-title">
            <h1>
               <?php echo $bio["name"];?>
               <a href=https://<?php echo 'www.instagram.com/'.$bio['instagram_handlle'].''?>> <img class="igicon" style="width: 4.5vw;" src="<?php bloginfo('template_directory');?>/imgs/igicon.svg"></a>
            </h1>
         </div>
         <p style="white-space: pre-wrap;"><?php echo $bio["bio_paragraph"];?></p>
         <?php if ( $bio['brands_worked_with']['brand1']) : ?>
         <p style="white-space: pre-wrap;">Working with brands such as:</p>
         <ul>
            <?php if ( $bio['brands_worked_with']['brand1']) : ?>
            <li style="white-space: pre-wrap;"><?php echo $bio["brands_worked_with"]["brand1"]?></li>
            <?php endif;?>
            <?php if ( $bio['brands_worked_with']['brand2']) : ?>
            <li style="white-space: pre-wrap;"><?php echo $bio["brands_worked_with"]["brand2"]?></li>
            <?php endif;?>
            <?php if ( $bio['brands_worked_with']['brand3']) : ?>
            <li style="white-space: pre-wrap;"><?php echo $bio["brands_worked_with"]["brand3"]?></li>
            <?php endif;?>
         </ul>
         <?php endif;?>
         <figure class="wp-block-table">
            <?php echo $bio["audience_interests"];?>
         </figure>
         <div class="social-stats">
            <?php 
               $instafollwers = $bio["followers"];
               
               $instasubtotal =  number_format($instafollwers, 0, '.', ',');
               
               echo'<p><strong>Social Statistics</strong></p>
               <figure class="wp-block-table"><table class="has-fixed-layout">
               <tbody><tr>
               
               <td class="socialLogo"><strong></strong></td> <td><strong>Following</strong></td><td><strong>Engagement Rate</strong></td>
               <tr>
               <td class="socialLogo">'?>
            <a href=https://<?php echo 'www.instagram.com/'.$bio['instagram_handlle'].''?>>	<img class="igicon ls-is-cached lazyloaded" style="width: 4.5vw; vertical-align: super !important;" src="<?php bloginfo('template_directory');?>/imgs/igicon.svg">
            </a>
            </td>
            <?php echo '<td id="_followers">'.$instasubtotal.'</td><td id="_engagement">'.$bio["engagement_rate"].'%</td>
               </tr>'
               ?>
            <?php if ( $bio['tiktokfollowers']) : ?>
            <tr>
               <td class="socialLogo">
                  <a href=https://<?php
                     $tikfollowers = $bio["tiktokfollowers"];
                     
                     $toksubtotal =  number_format($tikfollowers, 0, '.', ',');
                     
                     echo 'www.tiktok.com/@'.$bio['tiktok_handle'].''?>>
                  <img class="igicon ls-is-cached lazyloaded tiktokicon" style="width: 3.05vw; vertical-align: super !important;" src="<?php bloginfo('template_directory');?>/imgs/TikTokLogo.svg">
                  </a>
               </td>
               <?php echo '</td> <td id="tik_followers">'.$toksubtotal.'</td><td id="tik_engagement">'.$bio["tiktokengagement_rate"].'%</td>
                  </tr>
                  '
                  ?>
               <?php endif;?>
            </tbody>
            </table>
            </figure>
         </div>
         <?php echo '
            <div style="display: none">
            
            <p id="malep">'.$bio["female_following"].'</p>
            <p id="femalep">'.$bio["male_following"].'</p>
            </div>
            
            ';?>
      </div>
      <div class="pc-container">
         <figure class="chart">
            <canvas id="myChart" width="50px" height="50px"></canvas>
         </figure>
      </div>
      <div style="display: grid;">
         <p style="white-space: pre-wrap; text-align: center;"><strong>Audience Interests</strong></p>
         <div class="barchart" >
            <div class="bc">
               <div class="bc-container">
                  <span id="interest1"></span>
                  <div class="barwrapper">
                     <div id='firstSkill' class="skills html"></div>
                  </div>
               </div>
               <div class="bc-container">
                  <span id="interest2"></span>
                  <div class="barwrapper">
                     <div id='secondSkill' class="skills css"></div>
                  </div>
               </div>
               <div class="bc-container">
                  <span id="interest3"></span>
                  <div class="barwrapper">
                     <div  id="thirdSkill" class="skills js"></div>
                  </div>
               </div>
            </div>
         </div>
         <br>
      </div>
   </div>
</div>
<!--Update database on page load -->
<?php
   // echo $bio['instagram_handlle'];
   
   //prepare Query checks if Influencer appears in database - If not add new Influencer else update existing Influencer 
   
   $query = $wpdb->prepare("SELECT IG_Handle FROM influencer_new WHERE IG_Handle = %s", $bio['instagram_handlle']);
   $result = $wpdb->get_results($query, object);
   	if (!empty($result)) {
   				$wpdb->replace(
   				'influencer_new',
   				array(
   					'IG_Handle' => $bio['instagram_handlle'],
   				  	'FullName' => $bio['name'],
   				  	'Insta_Followers' => $bio['followers'],
   					'Insta_Post_engagement' => $bio["engagement_rate"],
   				  	'TikTok_Followers' => $bio['tiktokfollowers'],
   					'TikTok_Engagement' => $bio["tiktokengagement_rate"],
   				  	'Avg_post_likes' => $bio['average_likes'],
   				  	'Avg_post_comments' => $bio['average_comments'],
   				  	'Frequent_location' => $bio['location'],
   				  	'Male' => $bio['male_following'],
   				  	'Female' => $bio['female_following']
   
   
   				),
   				array(
   				    '%s',
   					'%s',
   					'%s',
   					'%f',
   					'%s',
   					'%s',
   				    '%s'
   				   	)
   				);
   			}
   			else
   			{
   				$wpdb->insert( "influencer_new", array(
   					'IG_Handle' => $bio['instagram_handlle'],
   				  	'FullName' => $bio['name'],
   				  	'Insta_Followers' => $bio['followers'],
   					'Insta_Post_engagement' => $bio["engagement_rate"],
   				  	'TikTok_Followers' => $bio['tiktokfollowers'],
   					'TikTok_Engagement' => $bio["tiktokengagement_rate"],
   				  	'Avg_post_likes' => $bio['average_likes'],
   				  	'Avg_post_comments' => $bio['average_comments'],
   				  	'Frequent_location' => $bio['location'],
   				  	'Male' => $bio['male_following'],
   				  	'Female' => $bio['female_following']
   
   				));
   			}
   
   ?>
</div>
<div class="main-contact-wrapper">
   <div class="contact-wrapper">
      <?php
         $title = get_the_title();
         
         echo '<h1 style="text-align: center; font-size: 28px;"">Contact us regarding '.$title.' below</h1></div>';
         
         require("contact-forms/bus-contact-form.php")?>
   </div>
</div>
</div>
<!--Social Statistics JS Script - ChartJs+Custom -->
<script>
   document.getElementsByTagName('table')[1].style.display = 'inline-table';
   
   var cat1 = document.getElementsByTagName("TD")[0].innerText;
   var cat2 = document.getElementsByTagName("TD")[2].innerText;
   var cat3 = document.getElementsByTagName("TD")[4].innerText;
   
   var val1 = document.getElementsByTagName("TD")[1].innerText;
   var val2 = document.getElementsByTagName("TD")[3].innerText;
   var val3 = document.getElementsByTagName("TD")[5].innerText;
   
   var num1 = parseFloat(val1).toFixed(2);
   var num2 = parseFloat(val2).toFixed(2);
   var num3 = parseFloat(val3).toFixed(2);
   document.getElementById("interest1").innerHTML = cat1;
   document.getElementById("interest2").innerHTML = cat2;
   document.getElementById("interest3").innerHTML=  cat3;
   
   document.getElementById("firstSkill").innerHTML = num1+'%';
   document.getElementById("secondSkill").innerHTML = num2+'%';
   document.getElementById("thirdSkill").innerHTML= num3+'%';
   
   largest = Math.max(num1, num2, num3);
   
   firstSkillWidth = num1/largest*100;
   secondSkillWidth = num2/largest*100;
   thirdSkillWidth = num3/largest*100;
   
   
   document.getElementById("firstSkill").style.width =  firstSkillWidth+'%';
   document.getElementById("secondSkill").style.width = secondSkillWidth+'%';
   document.getElementById("thirdSkill").style.width = thirdSkillWidth+'%';
   
   male = document.getElementById("malep").innerHTML;
   female = document.getElementById("femalep").innerHTML;
   
   document.getElementsByTagName("table")[0].setAttribute("id", "mytable");
   var t = document.getElementById("mytable");
   for (var r = 0; r < t.rows.length; r++) {
   console.log(t.rows[r].cells);
   }
   var ctx = document.getElementById('myChart').getContext('2d');
   var engagement_rate = document.getElementById('_engagement').innerHTML;
   var followers = document.getElementById('_followers').innerHTML;
   
   
   
   var myChart = new Chart(ctx, {
      type: 'pie',
      data: {
          labels: ['Female', 'Male'],
          datasets: [{
              label: 'Audience Split',
   
              data: [male, female],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.7)',
                  'rgba(54, 162, 235, 0.7)'
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)'
              ],
              borderWidth: 1
          }]
      },
   
      options: {
      plugins: {
            labels: {
                      fontColor: ['rgba(255, 99, 132, 0.1)', 'rgba(54, 162, 235, 0.1)'],
                      fontSize: 16
   
      	}
   },
     tooltips: {
    callbacks: {
      label: function(tooltipItem, data) {
        return data['labels'][tooltipItem['index']] + ': ' + data['datasets'][0]['data'][tooltipItem['index']] + '%';
      }
    }
   },
   legend: {
          		display: true,
          		reverse: true,
          		labels: {
          		fontSize: 16
          		}
          	},
         scales: {
     xAxes: [{
     	 ticks: {
                    display: false
                 },
        gridLines: {
           display: false
        }
   
     }],
     yAxes: [{
     	 ticks: {
                    display: false
                 },
        gridLines: {
           display: false
        }
     }]
   },
     title: {
          display: true,
          text: 'Following Split By Gender',
          fontSize: 20
        }
      },
   
   });
</script>
<?php
   get_footer();
   ?>