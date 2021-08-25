<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Pixie - Ecommerce HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo css_loader('bootstrap.min');?>" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo css_loader('fontawesome');?>">
    <link rel="stylesheet" href="<?php echo css_loader('tooplate-main');?>">
    <link rel="stylesheet" href="<?php echo css_loader('owl');?>">

<!--
Tooplate 2114 Pixie
https://www.tooplate.com/view/2114-pixie
-->
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="<?php echo img_loader('header-logo','png');?>" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <?php if(isset($home)) {?>
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url()."Template"; ?>">Home
                    <span class="sr-only">(current)</span>
                </a>
              </li>
            <?php } else { ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url()."Template"; ?>">Home
                    <span class="sr-only">(current)</span>
                </a>
              </li>
            <?php }?>

            <?php if(isset($products)) {?>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url()."Template/pageProduit"; ?>">Products
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <?php } else { ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url()."Template/pageProduit"; ?>">Products
                <span class="sr-only">(current)</span>
              </a>
            </li>  
            <?php }?>


            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <?php if($this->session->userdata("utilisateur")==NULL){?>
            <li class="nav-item">
              <a class="nav-link" href="Login">Login</a>
            </li>
            <?php }?>
            <?php if($this->session->userdata("utilisateur")!=NULL){?>
              <li class="nav-item">
                <a class="nav-link" href="Load/Detruire">Logout</a>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="caption">
              <h2>Welcome,</h2>
              <div class="line-dec"></div>
              <p>We are a site specializing in the sale of clothing ranging from <strong>children</strong> to <strong>adults</strong>. 
              <br><br>We invite you to enjoy our gallery and thank you in advance for sharing our content</p>
              <div class="main-button">
                <a href="<?php echo site_url()."Template/pageProduit"; ?>">Check out our products!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="container">
      <div class="section-heading">
          <div class="line-dec"></div>
          <h1>Choose a fund</h1>
      </div>
      <?php 
        for($i=0; $i<count($caisse); $i++)
        {
          ?>
            <button type="button" class="btn btn-primary btn-sm"><?php echo $caisse[$i]['NumeroCaisse']; ?></button>      
          <?php
        }
      ?>
    </div>

    <?php include($view);?>


    <!-- Subscribe Form Starts Here -->
    <div class="subscribe-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Subscribe on PIXIE now!</h1>
            </div>
          </div>
          <div class="col-md-8 offset-md-2">
            <div class="main-content">
              <p>Take advantage of our services by registering on the site:</p>
              <div class="container">
                <form id="subscribe" action="" method="get">
                  <div class="row">
                    <div class="col-md-4">
                      <fieldset>
                        <input name="username" type="text" class="form-control" id="email" 
                        onfocus="if(this.value == 'Username') { this.value = ''; }" 
                    	onBlur="if(this.value == '') { this.value = 'Username';}"
                    	value="Username" required="">
                      </fieldset>
                    </div>
                    <div class="col-md-4">
                      <fieldset>
                        <input name="password" type="password" class="form-control" id="password" 
                        onfocus="if(this.value == 'Password') { this.value = ''; }" 
                      onBlur="if(this.value == '') { this.value = 'Password';}"
                      value="Password" required="">
                      </fieldset>
                    </div>
                    <div class="col-md-4">
                      <fieldset>
                        <button type="submit" id="form-submit" class="button">Subscribe now!</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Subscribe Form Ends Here -->


    
    <!-- Footer Starts Here -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="logo">
              <img src="<?php echo img_loader('header-logo','png');?>" alt="">
            </div>
          </div>
          <div class="col-md-12">
            <div class="footer-menu">
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">How It Works ?</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="social-icons">
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Ends Here -->


    <!-- Sub Footer Starts Here -->
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright-text">
              <p>Copyright &copy; 2021 ETU1304-Faliana ETU1294-Hasina </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sub Footer Ends Here -->


    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo js_loader('jquery.min');?>"></script>
    <script src="<?php echo js_loader('bootstrap.bundle.min');?>"></script>

    <!-- Additional Scripts -->
    <script src="<?php echo js_loader('custom');?>"></script>
    <script src="<?php echo js_loader('owl');?>"></script>
    <script src="<?php echo js_loader('isotope');?>"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
