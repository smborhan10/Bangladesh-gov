<div class="tab">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">জনপ্রিয় সেবা</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">নতুন সেবা</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">মোবাইল সেবা</button>
            </li>
            
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
             <?php 
             $qry2 = new wp_Query([
              'post_type' => 'post',
              'category_name' => 'জনপ্রিয়_সেবা'
             ]);
             
             ?>  
            <div class="row">
              <?php while($qry2->have_posts()){$qry2->the_post(); ?>
                <div class="col-lg-2 text-center">
                  <?php the_post_thumbnail(); ?>
                
                  <p><?php the_title(); ?></p>
                </div>
                <?php }?>
                
              </div>
            </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
            <?php 
             $qry3 = new wp_Query([
              'post_type' => 'post',
              'category_name' => 'নতুন_সেবা'
             ]);
             
             ?> 
             <div class="row">
              <?php while($qry3->have_posts()){$qry3->the_post(); ?>
                <div class="col-lg-2 text-center">
                  <?php the_post_thumbnail(); ?>
                
                  <p><?php the_title(); ?></p>
                </div>
                <?php }?>
                </div>
          
            </div>

            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
            <?php 
             $qry4 = new wp_Query([
              'post_type' => 'post',
              'category_name' => 'মোবাইল_সেবা'
             ]);
             
             ?>      
              <div class="row">
              <?php while($qry4->have_posts()){$qry4->the_post(); ?>
                <div class="col-lg-2 text-center">
                  <?php the_post_thumbnail(); ?>
                
                  <p><?php the_title(); ?></p>
                </div>
                <?php }?>
                </div>
                
            </div>
            <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
          
          </div>
        </div>