<?php

// $args
$menu_id = get_field( 'mitypes_menu_selector', $item->ID );
if( ! isset( $menu_id ) || $menu_id < 1 ){ return ; }

$menu_args = array(
    'menu'      => $menu_id,
    'container' => '',
);

$menu_as_block = get_field( 'mitypes_menu_as_block', $item->ID );

if( isset( $menu_as_block ) && '1' === (string) $menu_as_block ){
    $menu_args['items_wrap'] = '%3$s';
}

wp_nav_menu( $menu_args );