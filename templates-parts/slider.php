<div class="slider">
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
           <?php 
           $qry1 =new wp_Query([
            'post-type' => 'post',
            'category_name' => 'slider'
           ]);
           ?>
          <div class="carousel-inner">
            <?php 
            $x=0;
            while($qry1->have_posts()):$qry1->the_post();
            $x++;
            ?>

            <div class="carousel-item <?= ($x==1)?'active':''?>">
              <?php the_post_thumbnail();?>
               
              
            </div>
            <?php endwhile;?>
             
            
            
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>