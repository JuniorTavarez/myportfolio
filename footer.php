<footer>
<div class="social-container">
<?php
          $footerIcons = new WP_Query(array(
            'post_type' => 'footer-icon'
          ));
          while($footerIcons->have_posts()){
            $footerIcons->the_post();?>

          <a href="<?php the_field('social_site')?>">
            <i class="<?php the_field('icon_class')?>"></i>
          </a>
        

         <?php } ?>
         </div>
      <h5>Junior Tavarez</h5>
      <h6>Web Developer</h6>
    </footer>

    <script type="module" src="<?php echo get_bloginfo('template_directory'); ?>/js/app.js"></script>

    <?php wp_footer(); ?>
  </body>
</html>