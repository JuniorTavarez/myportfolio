<?php 

get_header();

    while (have_posts()){
        the_post(); 
        ?>
<section id="portfolio-projects">
      <div class="container">
        <div class="project-image">
          <div class="img" style="background: url(' <?php the_post_thumbnail_url('singleProject') ?>')"></div>
        </div>
        <h1><?php the_title(); ?></h1>
        <div class="info">
          <div class="buttons">
            <a href="<?php the_field('project_url'); ?>"><i class="fas fa-desktop"></i> View Project</a>
            <a href="<?php the_field('github_url'); ?>"><i class="fas fa-code"></i> View Code</a>
          </div>
        </div>
        <?php echo $description; ?>
        <div class="technologies">
          <h3>Technologies</h3>
           
          <?php 
            $theField = get_field('tech_icon');
            $theField2 = get_field('tech_icon_2');
            $theField3 = get_field('tech_icon_3');
            $theField4 = get_field('tech_icon_4');

            if (!get_field('tech_icon_3')){
              ?> 
              <div class="icons3">
              <div class="icon">
                <img src="<?php echo $theField ?>">
              </div>
              <div class="icon">
                <img src="<?php  echo $theField2 ?>">
              </div>
              </div>
           <?php }
           elseif (!get_field('tech_icon_4')) {
            ?> 
            <div class="icons2">
            <div class="icon">
              <img src="<?php echo $theField ?>">
            </div>
            <div class="icon">
              <img src="<?php  echo $theField2 ?>">
            </div>
            <div class="icon">
              <img src="<?php echo $theField3 ?>">
            </div>
            </div>
         <?php }
     else {?>
          <div class="icons">
            <div class="icon">
              <img src="<?php echo $theField ?>">
            </div>
            <div class="icon">
              <img src="<?php  echo $theField2 ?>">
            </div>
            <div class="icon">
              <img src="<?php echo $theField3 ?>">
            </div>
            <div class="icon">
              <img src="<?php echo $theField4 ?>">
            </div>
          </div>
     <?php } ?>
        </div>
        <div class="video">
          <h3>Video Walkthrough</h3>
          <iframe <?php the_field('youtube_url'); ?>></iframe>
        </div>
      </div>
    </section>

    <?php } 
get_footer();
?>