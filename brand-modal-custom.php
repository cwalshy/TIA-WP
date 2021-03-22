<?php
	$first_gallery= get_field('gallery_one');
	$second_gallery= get_field('gallery_two');
	$third_gallery= get_field('gallery_three');
	$fourth_gallery= get_field('gallery_four');
	$fifth_gallery= get_field('gallery_five');
	$sixth_gallery= get_field('gallery_six');
	$seventh_gallery= get_field('gallery_seven');
	$eight_gallery= get_field('gallery_eight');
	$nine_gallery= get_field('gallery_nine');
?>

<div class="small-gallery">
	<div class="container1">
		  			<div id='firstimg' class="img-container">

			<img class="image" src="<?php echo $first_gallery["client_logo"]?>">

			  <div class="overlay ">
	    	<div class="text hvr-shutter-in-horizontal"> <?php
	    	echo $first_gallery['icon_text'];
	    	?>
	    	<br>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">View More</button>

<!-- 	    	<br><a href="#">Read More</a>
 -->	    	</div>
		</div>
	</div>
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
<?php if ( $first_gallery['image_4']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
 <?php endif; ?>
<?php if ( $first_gallery['image_5']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
 <?php endif; ?>
<?php if ( $first_gallery['image_6']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
 <?php endif; ?>
 <?php if ( $first_gallery['image_7']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
 <?php endif; ?><?php if ( $first_gallery['image_8']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="7"></li>
 <?php endif; ?>
 <?php if ( $first_gallery['case_study']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="8"></li>
 <?php endif; ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
			<img class="imageGallery" src="<?php echo $first_gallery["image_1"]?>">
      <div class="carousel-caption">

      </div>
    </div>
    <div class="item">
			<img class="imageGallery" src="<?php echo $first_gallery["image_2"]?>">
      <div class="carousel-caption">

      </div>

    </div>
    <div class="item">
			<img class="imageGallery" src="<?php echo $first_gallery["image_3"]?>">
      <div class="carousel-caption">

      </div>

    </div>

        	    <?php if ( $first_gallery['image_4']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $first_gallery["image_4"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $first_gallery['img_5']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $first_gallery["image_5"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $first_gallery['image_6']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $first_gallery["image_6"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $first_gallery['image_7']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $first_gallery["image_7"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $first_gallery['image_8']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $first_gallery["image_8"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $first_gallery['case_study']) : ?>
    <div class="item">
		  			<div id='firstimg' class="img-container">

			<img class="image" src="<?php echo $first_gallery["client_logo"]?>">

			  <div class="overlay ">
	     <?php echo $first_gallery["case_study_text"]?>
	    	<br>
  <a href="<?php echo $first_gallery["client_logo"]?>"> <button type="button" class="btn btn-info btn-lg">Case Study</button></a>

<!-- 	    	<br><a href="#">Read More</a>
 -->
		</div>
	</div>

    </div>
        <?php endif; ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

</div>
	    <?php if ( $second_gallery['client_logo']) : ?>

<div class="container1">
  			<div id='firstimg' class="img-container">
			<img class="image" src="<?php echo $second_gallery["client_logo"]?>">

			  <div class="overlay ">
	    	<div class="text hvr-shutter-in-horizontal"> <?php
	    	echo $second_gallery['icon_text'];
	    	?>
	    	<br>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">View More</button>

<!-- 	    	<br><a href="#">Read More</a>
 -->	    	</div>
		</div>
</div>
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic2" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic2" data-slide-to="2"></li>
<?php if ( $second_gallery['image_4']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
 <?php endif; ?>
<?php if ( $second_gallery['image_5']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
 <?php endif; ?>
<?php if ( $second_gallery['image_6']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
 <?php endif; ?>
 <?php if ( $second_gallery['image_7']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
 <?php endif; ?><?php if ( $second_gallery['image_8']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="7"></li>
 <?php endif; ?>
 <?php if ( $second_gallery['case_study']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="8"></li>
 <?php endif; ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
			<img class="imageGallery" src="<?php echo $second_gallery["image_1"]?>">
      <div class="carousel-caption">

      </div>
    </div>
    <div class="item">
			<img class="imageGallery" src="<?php echo $second_gallery["image_2"]?>">
      <div class="carousel-caption">

      </div>

    </div>
    <div class="item">
			<img class="imageGallery" src="<?php echo $second_gallery["image_3"]?>">
      <div class="carousel-caption">

      </div>

    </div>

        	    <?php if ( $second_gallery['image_4']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $second_gallery["image_4"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $second_gallery['image_5']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $second_gallery["image_5"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $second_gallery['image_6']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $second_gallery["image_6"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $second_gallery['image_7']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $second_gallery["image_7"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $second_gallery['image_8']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $second_gallery["image_8"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

</div>
    <?php endif; ?>

	    <?php if ( $third_gallery['client_logo']) : ?>

<div class="container1">
  			<div id='firstimg' class="img-container">
			<img class="image" src="<?php echo $third_gallery["client_logo"]?>">

			  <div class="overlay ">
	    	<div class="text hvr-shutter-in-horizontal"> <?php
	    	echo $third_gallery['icon_text'];
	    	?>
	    	<br>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">View More</button>

<!-- 	    	<br><a href="#">Read More</a>
 -->	    	</div>
		</div>
</div>
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <div id="carousel-example-generic3" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic3" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic3" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic3" data-slide-to="2"></li>
<?php if ( $third_gallery['image_4']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
 <?php endif; ?>
<?php if ( $third_gallery['image_5']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
 <?php endif; ?>
<?php if ( $third_gallery['image_6']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
 <?php endif; ?>
 <?php if ( $third_gallery['image_7']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
 <?php endif; ?><?php if ( $second_gallery['image_8']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="7"></li>
 <?php endif; ?>
 <?php if ( $third_gallery['case_study']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="8"></li>
 <?php endif; ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
			<img class="imageGallery" src="<?php echo $third_gallery["image_1"]?>">
      <div class="carousel-caption">

      </div>
    </div>
    <div class="item">
			<img class="imageGallery" src="<?php echo $third_gallery["image_2"]?>">
      <div class="carousel-caption">

      </div>

    </div>
    <div class="item">
			<img class="imageGallery" src="<?php echo $third_gallery["image_3"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        	    <?php if ( $third_gallery['image_4']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $third_gallery["image_4"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $third_gallery['image_5']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $third_gallery["image_5"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $third_gallery['image_6']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $third_gallery["image_6"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $third_gallery['image_7']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $third_gallery["image_7"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $third_gallery['image_8']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $third_gallery["image_8"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>


  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic3" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic3" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

</div>
    <?php endif; ?>

	    <?php if ( $fourth_gallery['client_logo']) : ?>
<div class="container1">
  			<div id='firstimg' class="img-container">
			<img class="image" src="<?php echo $fourth_gallery["client_logo"]?>">

			  <div class="overlay ">
	    	<div class="text hvr-shutter-in-horizontal"> <?php
	    	echo $fourth_gallery['icon_text'];
	    	?>
	    	<br>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4">View More</button>

<!-- 	    	<br><a href="#">Read More</a>
 -->	    	</div>
		</div>
</div>
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <div id="carousel-example-generic4" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic4" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic4" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic4" data-slide-to="2"></li>
<?php if ( $fourth_gallery['image_4']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
 <?php endif; ?>
<?php if ( $fourth_gallery['image_5']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
 <?php endif; ?>
<?php if ( $fourth_gallery['image_6']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
 <?php endif; ?>
 <?php if ( $fourth_gallery['image_7']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
 <?php endif; ?><?php if ( $fourth_gallery['image_8']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="7"></li>
 <?php endif; ?>
 <?php if ( $fourth_gallery['case_study']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="8"></li>
 <?php endif; ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
			<img class="imageGallery" src="<?php echo $fourth_gallery["image_1"]?>">
      <div class="carousel-caption">

      </div>
    </div>
    <div class="item">
			<img class="imageGallery" src="<?php echo $fourth_gallery["image_2"]?>">
      <div class="carousel-caption">

      </div>

    </div>
    <div class="item">
			<img class="imageGallery" src="<?php echo $fourth_gallery["image_3"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        	    <?php if ( $fourth_gallery['image_4']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $fourth_gallery["image_4"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $fourth_gallery['image_5']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $fourth_gallery["image_5"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $fourth_gallery['image_6']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $fourth_gallery["image_6"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $fourth_gallery['image_7']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $fourth_gallery["image_7"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $fourth_gallery['image_8']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $fourth_gallery["image_8"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>


  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic4" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic4" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

</div>
    <?php endif; ?>

	    <?php if ( $fifth_gallery['client_logo']) : ?>
<div class="container1">
  			<div id='firstimg' class="img-container">
			<img class="image" src="<?php echo $fifth_gallery["client_logo"]?>">

			  <div class="overlay ">
	    	<div class="text hvr-shutter-in-horizontal"> <?php
	    	echo $fifth_gallery['icon_text'];
	    	?>
	    	<br>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal5">View More</button>

<!-- 	    	<br><a href="#">Read More</a>
 -->	    	</div>
		</div>
</div>
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal5" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <div id="carousel-example-generic5" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic5" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic5" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic5" data-slide-to="2"></li>
<?php if ( $fifth_gallery['image_4']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
 <?php endif; ?>
<?php if ( $fifth_gallery['image_5']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
 <?php endif; ?>
<?php if ( $fifth_gallery['image_6']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
 <?php endif; ?>
 <?php if ( $fifth_gallery['image_7']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
 <?php endif; ?><?php if ( $fourth_gallery['image_8']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="7"></li>
 <?php endif; ?>
 <?php if ( $fifth_gallery['case_study']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="8"></li>
 <?php endif; ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
			<img class="imageGallery" src="<?php echo $fifth_gallery["image_1"]?>">
      <div class="carousel-caption">

      </div>
    </div>
    <div class="item">
			<img class="imageGallery" src="<?php echo $fifth_gallery["image_2"]?>">
      <div class="carousel-caption">

      </div>

    </div>
    <div class="item">
			<img class="imageGallery" src="<?php echo $fifth_gallery["image_3"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        	    <?php if ( $fifth_gallery['image_4']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $fifth_gallery["image_4"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $fifth_gallery['image_5']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $fifth_gallery["image_5"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $fifth_gallery['image_6']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $fifth_gallery["image_6"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $fifth_gallery['image_7']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $fifth_gallery["image_7"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $fifth_gallery['image_8']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $fifth_gallery["image_8"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic5" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic5" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

</div>
    <?php endif; ?>

	    <?php if ( $sixth_gallery['client_logo']) : ?>
<div class="container1">
  			<div id='firstimg' class="img-container">
			<img class="image" src="<?php echo $sixth_gallery["client_logo"]?>">

			  <div class="overlay ">
	    	<div class="text hvr-shutter-in-horizontal"> <?php
	    	echo $sixth_gallery['icon_text'];
	    	?>
	    	<br>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal6">View More</button>

<!-- 	    	<br><a href="#">Read More</a>
 -->	    	</div>
		</div>
</div>
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal6" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <div id="carousel-example-generic6" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic6" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic6" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic6" data-slide-to="2"></li>
   <?php if ( $sixth_gallery['image_4']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
 <?php endif; ?>
<?php if ( $sixth_gallery['image_5']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
 <?php endif; ?>
<?php if ( $sixth_gallery['image_6']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
 <?php endif; ?>
 <?php if ( $sixth_gallery['image_7']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
 <?php endif; ?><?php if ( $fourth_gallery['image_8']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="7"></li>
 <?php endif; ?>
 <?php if ( $sixth_gallery['case_study']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="8"></li>
 <?php endif; ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
			<img class="imageGallery" src="<?php echo $sixth_gallery["image_1"]?>">
      <div class="carousel-caption">

      </div>
    </div>
    <div class="item">
			<img class="imageGallery" src="<?php echo $sixth_gallery["image_2"]?>">
      <div class="carousel-caption">

      </div>

    </div>
    <div class="item">
			<img class="imageGallery" src="<?php echo $sixth_gallery["image_3"]?>">
      <div class="carousel-caption">

      </div>

    </div>

    	    <?php if ( $sixth_gallery['image_4']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $sixth_gallery["image_4"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $sixth_gallery['image_5']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $sixth_gallery["image_5"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $sixth_gallery['image_6']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $sixth_gallery["image_6"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $sixth_gallery['image_7']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $sixth_gallery["image_7"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $sixth_gallery['image_8']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $sixth_gallery["image_8"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic6" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generi6" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

</div>
    <?php endif; ?>

	    <?php if ( $seventh_gallery['client_logo']) : ?>
<div class="container1">
  			<div id='firstimg' class="img-container">
			<img class="image" src="<?php echo $seventh_gallery["client_logo"]?>">

			  <div class="overlay ">
	    	<div class="text hvr-shutter-in-horizontal"> <?php
	    	echo $seventh_gallery['icon_text'];
	    	?>
	    	<br>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal7">View More</button>

<!-- 	    	<br><a href="#">Read More</a>
 -->	    	</div>
		</div>
</div>
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal7" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <div id="carousel-example-generic7" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic7" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic7" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic7" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic7" data-slide-to="3"></li>

<?php if ( $seventh_gallery['image_4']) : ?>
    <li data-target="#carousel-example-generic7" data-slide-to="3"></li>
 <?php endif; ?>
<?php if ( $seventh_gallery['image_5']) : ?>
    <li data-target="#carousel-example-generic7" data-slide-to="4"></li>
 <?php endif; ?>
<?php if ( $seventh_gallery['image_6']) : ?>
    <li data-target="#carousel-example-generic7" data-slide-to="5"></li>
 <?php endif; ?>
 <?php if ( $seventh_gallery['image_7']) : ?>
    <li data-target="#carousel-example-generic7" data-slide-to="6"></li>
 <?php endif; ?><?php if ( $seventh_gallery['image_8']) : ?>
    <li data-target="#carousel-example-generic7" data-slide-to="7"></li>
 <?php endif; ?>

  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
			<img class="imageGallery" src="<?php echo $seventh_gallery["image_1"]?>">
      <div class="carousel-caption">

      </div>
    </div>
    <div class="item">
			<img class="imageGallery" src="<?php echo $seventh_gallery["image_2"]?>">
      <div class="carousel-caption">

      </div>

    </div>
    <div class="item">
			<img class="imageGallery" src="<?php echo $seventh_gallery["image_3"]?>">
      <div class="carousel-caption">

      </div>

    </div>
    	    <?php if ( $seventh_gallery['image_4']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $seventh_gallery["image_4"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $seventh_gallery['image_5']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $seventh_gallery["image_5"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $seventh_gallery['image_6']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $seventh_gallery["image_6"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $seventh_gallery['image_7']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $seventh_gallery["image_7"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $seventh_gallery['image_8']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $seventh_gallery["image_8"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>




  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic7" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic7" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
</div>
</div>
    <?php endif; ?>

	    <?php if ( $eight_gallery['client_logo']) : ?>
<div class="container1">
  			<div id='firstimg' class="img-container">
			<img class="image" src="<?php echo $eight_gallery["client_logo"]?>">

			  <div class="overlay ">
	    	<div class="text hvr-shutter-in-horizontal"> <?php
	    	echo $eight_gallery['icon_text'];
	    	?>
	    	<br>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal8">View More</button>

<!-- 	    	<br><a href="#">Read More</a>
 -->	    	</div>
		</div>
</div>
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal8" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <div id="carousel-example-generic8" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic8" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic8" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic8" data-slide-to="2"></li>
   <?php if ( $eight_gallery['image_4']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
 <?php endif; ?>
<?php if ( $eight_gallery['image_5']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
 <?php endif; ?>
<?php if ( $eight_gallery['image_6']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
 <?php endif; ?>
 <?php if ( $eight_gallery['image_7']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
 <?php endif; ?><?php if ( $eight_gallery['image_8']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="7"></li>
 <?php endif; ?>
 <?php if ( $eight_gallery['case_study']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="8"></li>
 <?php endif; ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
			<img class="imageGallery" src="<?php echo $eight_gallery["image_1"]?>">
      <div class="carousel-caption">

      </div>
    </div>
    <div class="item">
			<img class="imageGallery" src="<?php echo $eight_gallery["image_2"]?>">
      <div class="carousel-caption">

      </div>

    </div>
    <div class="item">
			<img class="imageGallery" src="<?php echo $eight_gallery["image_3"]?>">
      <div class="carousel-caption">

      </div>

    </div>
    	    <?php if ( $eight_gallery['image_4']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $eight_gallery["image_4"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $eight_gallery['image_5']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $eight_gallery["image_5"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $eight_gallery['image_6']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $eight_gallery["image_6"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $eight_gallery['image_7']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $eight_gallery["image_7"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>
    	    <?php if ( $eight_gallery['image_8']) : ?>
    <div class="item">
			<img class="imageGallery" src="<?php echo $eight_gallery["image_8"]?>">
      <div class="carousel-caption">

      </div>

    </div>
        <?php endif; ?>


  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic8" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic8" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

</div>
    <?php endif; ?>

	    <?php if ( $nine_gallery['client_logo']) : ?>
<div class="container1">

  			<div id='firstimg' class="img-container">
			<img class="image" src="<?php echo $nine_gallery["client_logo"]?>">

			  <div class="overlay ">
	    	<div class="text hvr-shutter-in-horizontal"> <?php
	    	echo $nine_gallery['icon_text'];
	    	?>
	    	<br>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal8">View More</button>

<!-- 	    	<br><a href="#">Read More</a>
 -->	    	</div>
		</div>
</div>
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal9" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
   <?php if ( $sixth_gallery['image_4']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
 <?php endif; ?>
<?php if ( $sixth_gallery['image_5']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
 <?php endif; ?>
<?php if ( $sixth_gallery['image_6']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
 <?php endif; ?>
 <?php if ( $sixth_gallery['image_7']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
 <?php endif; ?><?php if ( $fourth_gallery['image_8']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="7"></li>
 <?php endif; ?>
 <?php if ( $sixth_gallery['case_study']) : ?>
    <li data-target="#carousel-example-generic" data-slide-to="8"></li>
 <?php endif; ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
			<img class="imageGallery" src="<?php echo $nine_gallery["image_1"]?>">
      <div class="carousel-caption">

      </div>
    </div>
    <div class="item">
			<img class="imageGallery" src="<?php echo $nine_gallery["image_2"]?>">
      <div class="carousel-caption">

      </div>

    </div>
    <div class="item">
			<img class="imageGallery" src="<?php echo $nine_gallery["image_3"]?>">
      <div class="carousel-caption">

      </div>

    </div>


  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

</div>
    <?php endif; ?>


</div>
