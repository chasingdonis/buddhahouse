<?php 
register_nav_menu(); 
register_sidebar(array(
    'before_widget' => '<div class="sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<div class="title">',
    'after_title' => '</div>',
));
?> 
