<?php get_header(); ?>

<section class="cont">
  
   <?php while(have_posts()):the_post();?>

   <div class="cont pt-5 pb-5 text-center bg-info ">
      <?php the_title('<h1>','</h1>');?>
   </div>

   <div class="cont pt-3 pb-3">
   <?php the_content();?>
   </div>

   <?php endwhile;  ?>

</section>

<?php get_footer(); ?>