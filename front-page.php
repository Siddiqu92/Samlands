<?php
/**
 *  Template Name: HOME
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Samland
 */

get_header();
?>
<!-- Topbar Start -->
 <!-- banner -->


 
 <section class="banner_main">
  <div class="container">
     <div>
        <div class="col-md-8 col-lg-5">
           <div class="text-bg">
             
<h2 class="col-lg-12"><span style="color:#030303"><strong><?php the_field('heading'); ?></strong></span> <?php the_field('header_text'); ?></h2>
</div>
<?php $btn_text = get_field('button'); ?>
                <a href="<?php echo $btn_text['url']; ?>" class="btn btn-primary py-2 px-4 d-none d-lg-block"><?php echo $btn_text['title']; ?></a>
            </div>
             
           </div>
        </div>
        <div>
           <div class="ban_img">
          
           </div>
        </div>
     </div>
  </div>
</section>
<!-- end banner -->
<!-- Search Form Section Begin -->
<div class="search-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="search-form-text">
                        <div class="search-text">
                        
                            Buy 
                        </div>
                        <div class="home-text">
                        
                            Rent
                        </div>
                    </div>
                    <form action="#" class="filter-form">
                        <div class="first-row">
                            <select>
                                <option value="">Villa & Pool</option>
                            </select>
                            <select>
                                <option value="">Title</option>
                            </select>
                            <select>
                                <option value="">Ani City</option>
                            </select>
                            <select>
                                <option value="">Any Bithrooms</option>
                            </select>
                        </div>
                        <div class="second-row">
                            <select>
                                <option value="">Any Bedrooms</option>
                            </select>
                            <div class="price-range-wrap">
                                <div class="price-text">
                                    <label for="priceRange">Price:</label>
                                    <input type="text" id="priceRange" readonly>
                                </div>
                                <div id="price-range" class="slider"></div>
                            </div>
                            <div class="room-size-range">
                                <div class="price-text">
                                    <label for="roomsizeRange">Size:</label>
                                    <input type="text" id="roomsizeRange" readonly>
                                </div>
                                <div id="roomsize-range" class="slider"></div>
                            </div>
                            <button type="button" class="search-btn">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Form Section End -->


   <!--  A CARD Start -->
   <div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <h6 class="display-6 text-primary text-center"><?php the_field('section_text'); ?></h6>
        <h1 class="display-4 text-uppercase text-center mb-5"><?php the_field('section_heading'); ?></h1>   
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-2">
                <div>
                    <img class="img-fluid mb-4 BT" src="<?php the_field('section_image'); ?>" alt="" class="img-fluid radius-image" /><a class="btn btn-primary px-3" href="">For Sale&nbsp; PKR 9,8,00,000</a>
                    <h6 class="text-uppercase mb-6">lelakeside resident Plot#1715 Precinct 16,Bahria Town</h6>
                  <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                          <h6> <img class="img-fluid mb-4" src="<?php echo get_template_directory_uri().'/assets/img/bed_bar.png'; ?>" alt="" class="img-fluid radius-image" />&nbsp; 5 Bedrooms</h6>
                    </div>
                        <div class="px-2 border-left border-right">
                          <img class="img-fluid mb-4" src="<?php echo get_template_directory_uri().'/assets/img/bath_bas.png'; ?>" alt="" class="img-fluid radius-image" />
                            
                            <span>4 Bath</span>
                        </div>
                        <div class="px-2">
                          <img class="img-fluid mb-4" src="<?php echo get_template_directory_uri().'/assets/img/parking-sign.png'; ?>" alt="" class="img-fluid radius-image" />
                            
                            <span>Karachi</span>
                        </div>
                  </div>
</div>
            </div>
          <div class="col-lg-4 col-md-6 mb-2">
              <div> <img class="img-fluid mb-4 BT" src="<?php the_field('section_image2'); ?>" alt="" class="img-fluid radius-image" /><a class="btn btn-primary px-3" href="">For Sale&nbsp; PKR 9,8,00,000</a>
                <h6 class="text-uppercase mb-6">lelakeside resident Plot#1715 Precinct 16,Bahria Town</h6>
                <div class="d-flex justify-content-center mb-4">
                  <div class="px-2">
                    <h6> <img class="img-fluid mb-4" src="<?php echo get_template_directory_uri().'/assets/img/bed_bar.png'; ?>" alt="" class="img-fluid radius-image" />&nbsp;5 Bedrooms</h6>
                  </div>
                  <div class="px-2 border-left border-right"> <img class="img-fluid mb-4" src="<?php echo get_template_directory_uri().'/assets/img/bath_bas.png'; ?>" alt="" class="img-fluid radius-image" /> <span>4 Bath</span> </div>
                  <div class="px-2"> <img class="img-fluid mb-4" src="<?php echo get_template_directory_uri().'/assets/img/parking-sign.png'; ?>" alt="" class="img-fluid radius-image" /> <span>Karachi</span> </div>
                </div>
              </div>
            </div>
          <div class="col-lg-4 col-md-6 mb-2">
              <div> <img class="img-fluid mb-4 BT" src="<?php the_field('section_image3'); ?>" alt="" class="img-fluid radius-image" /><a class="btn btn-primary px-3" href="">For Sale&nbsp; PKR 9,8,00,000</a>
                <h6 class="text-uppercase mb-6">lelakeside resident Plot#1715 Precinct 16,Bahria Town</h6>
                <div class="d-flex justify-content-center mb-4">
                  <div class="px-2">
                    <h6> <img class="img-fluid mb-4" src="<?php echo get_template_directory_uri().'/assets/img/bed_bar.png'; ?>" alt="" class="img-fluid radius-image" />&nbsp;5 Bedrooms</h6>
                  </div>
                  <div class="px-2 border-left border-right"> <img class="img-fluid mb-4" src="<?php echo get_template_directory_uri().'/assets/img/bath_bas.png'; ?>" alt="" class="img-fluid radius-image" /> <span>4 Bath</span></div>
                  <div class="px-2"> <img class="img-fluid mb-4" src="<?php echo get_template_directory_uri().'/assets/img/parking-sign.png'; ?>" alt="" class="img-fluid radius-image" /> <span>Karachi</span></div>
                </div>
              </div>
            </div>
            <div> </div>
</div>
            </div>
        </div>
    </div>
</div>
<!-- Rent A Car End -->

 <!--/ Testimonials Star /-->
 <section>
<div id="testimonial-carousel" class="owl-carousel owl-arrow">
    <div class="carousel-item-a">
        <div class="testimonials-box">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="testimonial-img">
              <img class="img-fluid mb-4 BT" src="<?php the_field('modern_apartment'); ?>" alt="" class="img-fluid radius-image" />

              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="testimonial-ico">
                
              </div>
              <div class="testimonials-content">

                <marquee behavior="scroll" Scrollamount="0" direction="left" loop="0" bgcolor="#000000
                " width="650" height="450">
                <blockquote>
                  <div class="w-header-a">
                  <h1 class="w-title-a text-brand text-capitalize"><?php the_field('intro_new'); ?></span></h1>
                  </div>
                </blockquote>
                <div class="w-header-a">
                  <h6 class="w-title-a text-brand text-capitalize">&nbsp; &nbsp; &nbsp;Luxury Apartments </h6>
                </div>
<div class="w-body-a">
<p class="w-text-a color-text-a"> &nbsp  &nbsp Each apartment has been individually designed to maximise space<br>
    &nbsp &nbsp and light. Smart Home Technology installed as standard in each <br>
    &nbsp &nbsp apartment putting you in total control of your home at the touch of a<br> 
    &nbsp &nbsp button from wherever you might be. </p>
</div>
              </marquee>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Testimonials End /-->
 <!--/ Agents Star /-->
 <section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-wrap d-flex justify-content-between">
          <div class="title-box">
            <p class="title-link"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Discover New Projects</strong></p>
<h2 class="title-a">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Our Projects</h2>
          </div>
          <div class="title-link">
            <a href="agents-grid.html">&nbsp;&nbsp;
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card-box-d">
          <div class="card-img-d col-lg-12">
          <img src="<?php the_field('sam_villas'); ?>" alt="" class="img-fluid radius-image" />

          </div>
          <div>
            <div class="card-header-d">
              <div class="card-title-d align-self-center">
                <h3 class="title-d">
                  <a href="agent-single.html" class="link-two">SAMVILLAS
                  </a>
        </h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-box-d">
          <div class="card-img-d col-lg-12"> <img src="<?php the_field('aq_bazar'); ?>" alt="" class="img-fluid radius-image" /></div>
          <div>
            <div class="card-header-d">
              <div class="card-title-d align-self-center">
                <h3 class="title-d"> <a href="agent-single.html" class="link-two">AQ BAZAR </a> </h3>
              </div>
            </div>
          </div>
        </div>
      </div>
<div class="col-md-4">
      <div class="card-box-d">
          <div class="card-img-d col-lg-12">
          <img src="<?php the_field('aq_supermarket'); ?>" alt="" class="img-fluid radius-image" />
          </div>
          <div class="col-lg-8">
            <div class="card-header-d">
              <div class="card-title-d align-self-center">
                <h3 class="title-d">
                  <a href="agent-single.html" class="link-two">AQ SUPERMARKET
                    <br> </a>
                </h3>
              </div>
</div>
            <div class="card-body-d"> </div>
            <div> </div>
          </div>
        </div>
      </div>
      <div class="col-md-4"> </div>
    </div>
</div>
        </div>
      </div>
</div>
  </div>
</section>
<!--/ Agents End /-->

  <!--/ Our Partner Start /-->


  <div class="container">
    <h1>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Our Partners</h1>
    <section class="customer-logos slider">
      <div class="slide col-lg-3"><img src="<?php the_field('partner_1'); ?>" alt="" class="img-fluid radius-image" />
      </div>
  
      <div class="slide col-lg-3"><img src="<?php the_field('partner_2'); ?>" alt="" class="img-fluid radius-image" />      </div>
  
      <div class="slide col-lg-3"><img src="<?php the_field('partner_3'); ?>" alt="" class="img-fluid radius-image" />
      </div>
  
      <div class="slide col-lg-3"><img src="<?php the_field('partner_4'); ?>" alt="" class="img-fluid radius-image" />
      </div>
</section>
  
  
    <!--/ Our Partner End /-->


    


<!-- service section -->
<div id="service" class="service">
  <div class="container">
     <div class="row">
        <div class="col-md-10 offset-md-1">
           <div class="titlepage">
              <h2>Why SamLands?</h2>
              
           </div>
        </div>
     </div>
     <div class="row">
        <div class="col-md-12">
           <div class="service_main">
              <div class="service_box blu_colo">
                 <i><img src="<?php echo get_template_directory_uri().'/assets/img/real-estate-agent-with-house-m (1).png'; ?>" alt="" class="img-fluid radius-image" /></i>
                 <h4> Hundreds of Listed Properties</h4>
              </div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
              <div class="service_box yelldark_colo">
                 <i><img src="<?php echo get_template_directory_uri().'/assets/img/hands-agent-client-shaking-han (1).png'; ?>" alt="" class="img-fluid radius-image" /></i>
                 <h4>Shariah Compliant Investments</h4>
              </div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
              <div class="service_box yell_colo">
                 <i><img src="<?php echo get_template_directory_uri().'/assets/img/close-up-shot-caucasian-contra (1).png'; ?>" alt="" class="img-fluid radius-image" /></i>
                 <h4>Trusted by Hundreds</h4>
              </div>
              
              </div>
           </div>
        </div>
      
         
        </div>
     </div>
  </div>
</div>
<!-- end service section -->
  <!--/ Services Star /-->  
  <section class="section-services section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="container-fluid py-5">
            <div>
<div> </div>
<h1 class="display-4 text-uppercase text-center mb-5">Popular Locations</h1>
<h4 class="display-6 text-primary text-center">Most Popular Locations for Homes&nbsp;</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card-box-c foo">
<div>
            <h3> LAHORE&nbsp;</h3>
<h5>Houses for sale in DHA Defence(6,038)</h5>
              <p class="text-left"> Houses for sale in Bahria Town(1,824)&nbsp;Houses for sale in Johar Town(1,138) Houses for sale in State Life Housing Society(374) Houses for sale in Allama Iqbal Town(494) Flats for sale in Askari(702) Houses for sale in Wapda Town(666) Houses for sale in Paragon City(381)</p>
</div>
</div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c foo">
<div class="col-lg-12">
            <h3>&nbsp; &nbsp; KARACHI</h3>
            <p class="text-left">&nbsp;Houses for sale in Bahria Town Karachi(2,561)&nbsp;Flats for sale in Bahria Town Karachi(1,522) Houses for sale in DHA Defence(2,568) Flats for sale in DHA Defence(2,061) Houses for sale in Gadap Town(1,007) Flats for sale in Gulistan-e-Jauhar(1,774) Houses for sale in North Karachi(774)</p>
</div>
</div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c">
<div class="card-body-c">
            <h3> RAWALPINDI/ISLAMABAD </h3>
            <p class="text-left">&nbsp;Houses for sale in DHA Defence(1,112)&nbsp;Houses for sale in G-13(811) Houses for sale in Gulraiz Housing Scheme(255) Flats for sale in Bahria Town Rawalpindi(1,059) Houses for sale in Adiala Road(477) Houses for sale in Bahria Town(483) Houses for sale in E-11(325)</p>
<p class="content-c">&nbsp;
</p>
            </div>
           
          </div>
        </div>
      </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="container-fluid">
            <div>
<h1 class="display-4 text-uppercase text-center mb-5">News &amp; Updates</h1>
              <h4 class="display-6 text-primary text-center">Read the Latest Updates from Our Blog</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div></div>
              <div class="img-box-a"> <img src="<?php echo get_template_directory_uri().'/assets/img/terrah-holly-pmhdkgRCbtE-unspl.png'; ?>" alt="" class="img-fluid radius-image" /> </div>
            </div>
            <div class="card-body-c">
              <p class="text-left">NEWS MAY 3, 2020</p>
              <h5>Important Things To Consider When Buying</h5>
              <p class="content-c text-left"> Spousal support is the amount of money that one partner pays to another partner after a separation or divorce. </p>
            </div>
</div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div></div>
              <div class="img-box-a"> <img src="<?php echo get_template_directory_uri().'/assets/img/jacques-bopp-Hh18POSx5qk-unspl.png'; ?>" alt="" class="img-fluid radius-image" /></div>
            </div>
            <div class="card-body-c">
              <p class="text-left">NEWS MAY 3, 2020</p>
              <h5>BENEFITS OF INVESTING IN REAL ESTATE</h5>
              <p class="content-c text-left"> Spousal support is the amount of money that one partner pays to another partner after a separation or divorce. </p>
            </div>
</div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div></div>
              <div class="img-box-a"> <img src="<?php echo get_template_directory_uri().'/assets/img/tierra-mallorca-rgJ1J8SDEAY-un.png'; ?>" alt="" class="img-fluid radius-image" /></div>
            </div>
            <div class="card-body-c">
              <p class="text-left">NEWS MAY 3, 2020</p>
              <h5>When Do I Need A Building Permit For Home</h5>
              <p class="content-c text-left"> Spousal support is the amount of money that one partner pays to another partner after a separation or divorce. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!--/ Services End /-->


  <!--/ Instagram Star /-->

  <section class="section-news section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Instagram Feeds</h2>
            </div>
            <div class="title-link">
              <a href="blog-grid.html">
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="new-carousel" class="owl-carousel owl-theme">
        <div class="carousel-item-c">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="<?php echo get_template_directory_uri().'/assets/img/sddff.png'; ?>" alt="" class="img-fluid radius-image" />
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    
                  </h2>
                </div>
                <div class="card-date">
                 
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-c">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="<?php echo get_template_directory_uri().'/assets/img/dddff.png'; ?>" alt="" class="img-fluid radius-image" />
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    
                  </h2>
                </div>
                <div class="card-date">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-c">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="<?php echo get_template_directory_uri().'/assets/img/rewe.png'; ?>" alt="" class="img-fluid radius-image" />
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    
                  </h2>
                </div>
                <div class="card-date">
                
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-c">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="<?php echo get_template_directory_uri().'/assets/img/errt.png'; ?>" alt="" class="img-fluid radius-image" />
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                 
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    
                  </h2>
                </div>
                <div class="card-date">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </section>
  <!--/ Instagram End /-->
 <!--/ Extra Star /-->
 <section class="section-footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-4">
        <div class="widget-a">
          <div class="col-lg-7">
            
            <marquee behavior="scroll" Scrollamount="0" direction="left" loop="0" bgcolor="yellow" width="1000" height="200">
<h1>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Get The Best Deals For Your&nbsp;</h1>
              <h1>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Dream Home With Us</h1>
            </marquee>
          </div>
          
            </ul>
          </div>
        </div>
      </div>
      
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>