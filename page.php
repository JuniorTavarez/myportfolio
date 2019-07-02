<?php get_header(); ?>
<section id="page-template">
    <div class="container">

    <?php
    while (have_posts()){
            the_post();
            the_title();           
            the_content(); 
          ?>

          <?php } ?>

</div>
</section>
<?php get_footer(); ?>