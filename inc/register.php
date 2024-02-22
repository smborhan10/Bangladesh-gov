<?php 


register_nav_menus([

    'TM' => 'Primary',
    'FM' => 'Footer'
]);

register_sidebar([
    'name'=>'Main Image',
    'id'=>'mainimg',
    'before_widget'=>'',
    'after_widget'=>''
]);

register_sidebar([
    'name'=>'Side Image',
    'id'=>'sideimg',
    'before_widget'=>'',
    'after_widget'=>''
]);

register_sidebar([
    'name'=>'Side Video',
    'id'=>'sidevideo',
    'before_widget'=>'',
    'after_widget'=>''
]);

register_sidebar([
    'name'=>'List',
    'id'=>'list',
    'before_widget' => '',
	'after_widget'  => "",
]);
register_sidebar([
    'name'=>'Footer Bottom image',
    'id'=>'fbimg',
    'before_widget' => '',
	'after_widget'  => "",
]);
?>