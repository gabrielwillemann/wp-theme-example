<?php

if (function_exists('register_sidebar'))
{
    register_sidebar(array(
        'name'          => 'sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}

?>
