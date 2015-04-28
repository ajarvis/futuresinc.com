<?php 
  include("../includes/config.php"); 
  define(PAGE, "contact");
?>

<!DOCTYPE html>
<html lang="en" >
<head>
	<meta name="robots" content="index, follow" />
	<title>Futures Inc.</title>
	<meta name="description" content="" />
  <?php include("../includes/html-head.php"); ?>
</head>

<body class="bg-pattern1" data-spy="scroll" data-target=".navbar">
<div id="preloader"></div>
    
	<!-- Page Main Wrapper -->
	<div class="page-wrapper" id="page-top">

		<?php include("../includes/header.php"); ?>        

		<!-- Main Wrapper Header -->
    <div class="main-wrapper-header fancy-header dark-header parallax parallax-breadcrumbs" data-stellar-background-ratio="0.4">
      <div class="bg-overlay bg-overlay-gdark"></div>
 			<div class="container">
				<div class="row">
          <div class="col-sm-12 columns">
            <div class="page-title">
              <h2>Contact Us</h2>                    
            </div>
            <div class="breadcrumbs-wrapper">               
							<ol class="breadcrumb">
  						  <li><a href="#">Home</a></li>
								<li class="active">Contact Us</li>
							</ol>
            </div>
					</div>
				</div>
			</div>
    </div><!-- /Main Wrapper Header -->

		<!-- Main Container -->
		<div class="main-wrapper">

      <!-- Container -->
        <div class="container">
        	<div class="white-space space-big"></div>
            
        	<div class="row">
            <div class="col-md-6">
              <h3 class="fancy-title"><span>Contact Information</span></h3>
              <p>Aliquam quis fermentum justo, sit amet tincidunt turpis. Fusce varius neque eros, in accumsan felis pellentesque at. Nulla ut bibendum dui. Nunc lobortis felis a quam sagittis, nec dignissim elit laoreet. Nam tincidunt justo at turpis sollicitudin commodo. </p>
              
              <div class="row">	
                <div class="col-sm-12">
                  <ul class="list-default fa-ul">
                    <li><span class="fa-li fa fa-phone color-default"></span>(919) 474-8500 or 1-844-USTALENT</li>
                    <li><span class="fa-li fa fa-envelope color-default"></span>info@futuresinc.com</li>
                    <li><span class="fa-li fa fa-map-marker color-default"></span>4819 Emperor Blvd. Suite 305, Durham NC 27703</li>                        
                  </ul>
                </div>
              </div>
              <div class="white-space space-small"></div>
            </div>
            <div class="col-md-6">
              <h3 class="fancy-title"><span>Contact Form</span></h3>
			  
              <!-- Form -->
              <form class="form-horizontal" role="form">
                <div class="form-group">
                	<div class="col-sm-6">
                		<input type="name" class="form-control" id="inputName" placeholder="Name">
                	</div>
                	<div class="col-sm-6">
                		<input type="email" class="form-control" id="inputEmail" placeholder="Email">
                	</div>    
                	<div class="col-sm-12">
                		<input type="message" class="form-control" id="inputEmail3" placeholder="Subject">
                	</div> 
                	<div class="col-sm-12">
                		<textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
                	</div> 
                	<div class="col-sm-12">
                		<a type="submit" class="btn btn-primary center-block">Send Message</a>
                	</div>
                </div>
              </form><!-- /Form --> 
                                           
              <div class="white-space space-small"></div>
            </div>
			    </div>               
			
        	<div class="white-space space-medium"></div>	
        </div><!-- /Container -->
                                   
		  </div><!-- /Main Container -->      

		<?php include("../includes/footer.php"); ?>

	</div>	

	<!-- Back To Top -->
	<a href="#page-top" class="scrollup smooth-scroll" ><span class="fa fa-angle-up"></span></a>
	<!-- /Back To Top -->
 
<?php include("../includes/html-footer.php"); ?>

  </body>
</html>
