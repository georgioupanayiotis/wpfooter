<?php
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'Footer Widgets Left',
'id' => 'left-footer',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>'
));

if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'Footer Widgets Center',
'id' => 'center-footer',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>'
));

if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'Footer Widgets Right',
'id' => 'right-footer',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>'
));
?>
