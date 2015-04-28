<?php 
  include("../../includes/config.php"); 
  define(PAGE, "projects");
?>

<!DOCTYPE html>
<html lang="en" >
<head>
	<meta name="robots" content="index, follow" />
	<title>US Military Pipeline - Futures Inc.</title>
	<meta name="description" content="" />
  <?php include("../../includes/html-head.php"); ?>
</head>

<body class="bg-pattern1" data-spy="scroll" data-target=".navbar">
<div id="preloader"></div>
    
	<!-- Page Main Wrapper -->
	<div class="page-wrapper" id="page-top">

		<?php include("../../includes/header.php"); ?>

		<!-- Main Wrapper Header -->
    <div class="main-wrapper-header fancy-header dark-header parallax parallax-breadcrumbs" data-stellar-background-ratio="0.4">
      <div class="bg-overlay bg-overlay-gdark"></div>
 			<div class="container">
				<div class="row">
          <div class="col-sm-12 columns">
            <div class="page-title">
              <h2>Projects</h2>
            </div>
            <div class="breadcrumbs-wrapper">
							<ol class="breadcrumb">
  						  <li><a href="<?=BASEURL;?>">Home</a></li>
                <li><a href="<?=BASEURL;?>projects/">Projects</a></li>
								<li class="active">US Military Pipeline</li>
							</ol>
            </div>
					</div>
				</div>
			</div>
    </div><!-- /Main Wrapper Header -->

    <!-- Main Container -->
    <div class="main-wrapper">
            
      <div class="container">
            
        <div class="white-space space-big"></div>

        <div class="row">
          <div class="col-md-8 col-sm-6"> 
                                                
            <div class="carousel-box">
              <div class="carousel" data-carousel-autoplay="false" data-carousel-nav="true" data-carousel-pagination="true" data-carousel-single="true" data-carousel-speed="1000" data-carousel-transition="fadeUp">
                
                <!-- Carousel Item -->
                <div>
                  <div class="overlay-wrapper">
                    <img src="../../img/content/projects/us-military-pipeline-1.jpg" alt="US Military Pipeline Homepage"/>
                  </div>                         
                </div><!-- /Carousel Item -->
                
                <!-- Carousel Item -->
                <div>
                  <div class="overlay-wrapper">
                    <iframe width="100%" height="445px" src="https://www.youtube.com/embed/KZ096-sb5X8" frameborder="0" allowfullscreen></iframe>
                  </div>                         
                </div><!-- /Carousel Item -->

                <!-- Carousel Item -->
                <div>
                  <div class="overlay-wrapper">
                    <img src="../../img/content/projects/us-military-pipeline-2.jpg" alt="Explore Industries"/>
                  </div>                         
                </div><!-- /Carousel Item -->
              
              </div>
            </div><!-- /Carousel Box -->
            
            <div class="white-space space-medium"></div>                
        
          </div>
          
          <div class="col-md-4 col-sm-6"> 
            <h4 class="fancy-title"><span>US Military Pipeline</span></h4> 
            <p>US Military Pipeline uses Futures' matching technology to connect employers with job seekers based on their skills and experiences.</p>
            <div class="white-space space-xsmall"></div>
            <h5 class="fancy-title"><span>Project Details</span></h5>
            <ul class="divider-list list-unstyled">
              <li><a href="https://usmilitarypipeline.com" target="_blank">Visit Site</a></li>
            </ul>
            <div class="white-space space-big"></div> 
          </div>

        </div><!-- /Row -->

        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="text-center"><a class="btn btn-primary btn-lg" href="<?=BASEURL;?>projects/">View All Projects</a></div>
          </div>
        </div>
      
        <div class="white-space space-big"></div>
      
      </div><!-- /Container -->

    </div><!-- /Main Container -->
		
		<?php include("../../includes/footer.php"); ?>

	</div>	

	<!-- Back To Top -->
	<a href="#page-top" class="scrollup smooth-scroll" ><span class="fa fa-angle-up"></span></a>
	<!-- /Back To Top -->

<?php include("../../includes/html-footer.php"); ?>

  </body>
</html>
