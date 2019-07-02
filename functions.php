<?php 
function portfolio_features(){
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_image_size('project', 376.66, 310, true);
add_image_size('singleProject', 1150, 450, true);

}
add_action('after_setup_theme', 'portfolio_features');