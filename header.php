<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php bloginfo( 'Samlands' ); ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php get_template_directory_uri() ?> /assets/img/favicon.png'; ?>" rel="icon">
  <link href="<?php echo get_template_directory_uri().'/assets/img/apple-touch-icon.png'; ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
 

  <?php wp_head(); ?>

</head>
<div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>Contact us : <?php the_field('contact_us','option'); ?></small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-search mr-2"></i>ACCOUNT LOGIN<?php the_field('Account_login','option'); ?></small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand ml-lg-3">
           
            <marquee behavior="scroll" Scrollamount="0" direction="left" loop="0" bgcolor="#000000" width="300" height="100">
                      <img class="w-30" src="<?php echo get_template_directory_uri().'/assets/img/SamLands.png'; ?>" alt="" class="img-fluid radius-image" />
                  </marquee>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Hot Properties</a>
                    <a href="about.html" class="nav-item nav-link">New Projects</a>
                    <a href="service.html" class="nav-item nav-link">Sam villas</a>
                    <a href="price.html" class="nav-item nav-link">Residential</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Commercial</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="single.html" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>
                    <div>
                    <a href="contact.html" class="nav-item nav-link">Blogs</a>
                   
        </nav>
        <div> <marquee behavior="scroll" Scrollamount="0" direction="left" loop="0" bgcolor="YELLOW" width="1345" height="30">
        <small>   SPL Tournament Our mega event SamLands Premier League (SPL) 2021 is on 26, 27 and 28 of November 2021 </small>
        
                  </marquee>
</div>  
    </div>
    <!-- Navbar End -->

