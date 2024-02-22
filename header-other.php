<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
</head>
<body>
  <!-- header part start -->
  <header class="cont_p">
    <div class="row header_top">
        <div class="col-lg-6 top_left">
            <p>বাংলাদেশ জাতীয় তথ্য বাতায়ন</p>
        </div>
        <div class="col-lg-6 top_right d-flex justify-content-end">
            <p>২৬ কার্তিক, ১৪২৯ |</p>
            <a href="#">English</a>
        </div>
    </div>
    
  </header>
  <!-- header part end -->
  <!-- manu part start -->
  <section class="cont_p">
    <div class="row">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <?php wp_nav_menu([
                  'theme_location' => 'TM',
                  'menu_class'   => 'navbar-nav'

              ]); ?>  
            
                
              </div>
            </div>
          </nav>
    </div>
  </section>
  <!-- manu part end -->