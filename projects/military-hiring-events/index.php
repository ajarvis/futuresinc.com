<?php 
  include("../../includes/config.php"); 
  define(PAGE, "projects");
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta name="robots" content="index, follow" />
  <title>Military Hiring Events - Futures Inc.</title>
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
                <li class="active">Military Hiring Events</li>
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
                    <img src="../../img/content/projects/military-hiring-events-1.jpg" alt="Military Hiring Events"/>
                  </div>                         
                </div><!-- /Carousel Item -->

                <!-- Carousel Item -->
                <div>
                  <div class="overlay-wrapper">
                    <iframe width="100%" height="445px" src="https://www.youtube.com/embed/dR0QGiuO0YA" frameborder="0" allowfullscreen></iframe>
                  </div>                         
                </div><!-- /Carousel Item -->
              
              </div>
            </div><!-- /Carousel Box -->
            
            <div class="white-space space-medium"></div>                
        
          </div>
          
          <div class="col-md-4 col-sm-6"> 
            <h4 class="fancy-title"><span>Military Hiring Events</span></h4> 
            <p>A different way to hire candidates. Military Hiring Events uses Pipeline technology to pre-match candidates to employers prior to the hiring event.</p>
            <p>Employers can schedule interviews with those candidates that match their job requirements.</p>
            <div class="white-space space-xsmall"></div>
            <h5 class="fancy-title"><span>Project Details</span></h5>
            <ul class="divider-list list-unstyled">
              <li><a href="https://militaryhiringevents.com/" target="_blank">Visit Site</a></li>
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
