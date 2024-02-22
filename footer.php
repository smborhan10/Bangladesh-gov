<!-- Footer part start -->
<footer class="cont_p mt-5 pb-2">
    <div class="row footer_main">
      <img src="<?php echo get_template_directory_uri()?>./assets/images/footer/download.png" alt="">
    </div>
    <div class="row footer_bottom">
      <div class="col-lg-7 fb_left">
        <nav class="navbar navbar-expand-lg bg-light">
          <div class="container-fluid">
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php wp_nav_menu([
                  'theme_location' => 'FM',
                  'menu_class'   => 'navbar-nav xx menu_bottom'

              ]); ?>  
              
              
            </div>
          </div>
        </nav>
        <p>সাইটটি শেষ হাল-নাগাদ করা হয়েছে: ২০২২-১০-৩০ ০৮:৩৫:০১</p>
      </div>
      <div class="col-lg-5 fb_right pt-3 text-end">
       
        <p>পরিকল্পনা ও বাস্তবায়নে: এটুআই, মন্ত্রিপরিষদ বিভাগ, বিসিসি, বেসিস, ডিওআইসিটি</p>
        <?php dynamic_sidebar('fbimg');?>
      </div>
    </div>
  </footer>
  <!-- Footer part end -->

    <?php wp_footer(); ?>
  
</body>
</html>