<?php get_header(); ?>
    <section id="top">
      <div class="container">
        <div class="info">
          <div class="blue-square"></div>
          <h1><?php echo get_bloginfo('name'); ?> </h1>
          <p>Web Developer</p>
          <a href="#portfolio-section">Latest Works</a>
        </div>
        <div class="img">
          <div class="background-img">
          <!-- <img src="http://localhost/user-img/"> -->
          </div>
        </div>
      </div>
    </section>
    <section id="services-section">
      <div class="container">
        <div class="title">
          <div class="circle"></div>
          <h1>services</h1>
        </div>
        <div class="services-container">
        <?php
            $servicesPosts = new WP_Query(array(
              'posts_per_page' => 3,
              'post_type' => 'service',
              'orderby' => 'title',
              'order' => 'ASC'
            ));
        
          while ($servicesPosts->have_posts()){
            $servicesPosts->the_post(); ?>
            <div class="box <?php the_field('border_color') ?>">
              <i class="<?php the_field('icon_class') ?>"></i>
              <h5><?php the_title() ?></h5>
              <p><?php the_content() ?></p>
            </div>

          <?php } ?>
     </div>
      </div>
    </section>

    <section id="portfolio-section">
      <div class="container">
        <div class="title">
          <div class="square"></div>
          <h1>portfolio</h1>
        </div>
        <div class="portfolio-container">
        <?php
        
        $projectPosts = new WP_Query(array(
          'posts_per_page' => -1,
          'post_type' => 'project',
          'orderby' => 'meta_value_num',
          'order' => 'ASC'
          ));

          while ($projectPosts->have_posts()){
              $projectPosts->the_post(); 
              $loopIndex += 1;
              ?>
               <a href="<?php the_permalink(); ?>" class="box image<?php echo $loopIndex?>">
            <div class="image" style='background: url("<?php the_post_thumbnail_url('project'); ?>");
            height: 100%;
            width: 100%;
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;'>
              <div class="hover-bg">
              
                <div class="title">
                
                  <div class="text"><?php the_title(); ?>
                  
                  </div>
                </div>
              </div>
            </div>
          </a>
          <?php } ?>
        </div>
      </div>
    </section>
       
         
    
    <section id="experience-section">
      <div class="container">
        <div class="large-title">
          Experience
        </div>
        <div class="experience-container">
          <div class="large-icons">
            <div class="square">
              <div class="blue-box">
                Experience
              </div>
            </div>
            <div class="circle">
              <div class="white-box">
                AWARDS
              </div>
            </div>
            <div class="triangle">
              <div class="triangle-box">
                <div class="text">Work</div>
              </div>
            </div>
          </div>
          <div class="info">
          <?php
          $experiencePosts = new WP_Query(array(
          'posts_per_page' => -1,
          'post_type' => 'experience',
          'orderby' => 'meta_value_num',
          'order' => 'ASC'
           ));
            
          while ($experiencePosts->have_posts()){
              $experiencePosts->the_post(); 
              ?>
              <div class="info-box">
              <h4> <?php the_title() ?> - <?php the_field('location') ?></h4>
              <span class="date"> <?php $startDate = new DateTime(get_field('start_date')); echo $startDate->format('F Y');  ?> - <?php 
              $endDate = new DateTime(get_field('end_date'));
              if ( $endDate->format('F Y') == Date('F Y')){
                echo 'Current';
              } else {
              echo $endDate->format('F Y'); } ?></span>
              <p> <?php the_content() ?> </p>
            </div>
          </div>
        </div>
      </div>
    </section>
          <?php }  ?>
         
    <section id="contact-section">
        <div class="container">
            <?php echo do_shortcode( '[contact-form-7 id="1234" title="Contact form 1"]' ); ?>
        </div>
    </section>

  <?php get_footer(); ?>