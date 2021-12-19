<?php

defined( 'ABSPATH' ) or	die();

if( function_exists('acf_add_local_field_group') ){



    acf_add_local_field_group(array(
        'key' => 'group_mitypes_menu_61bfa486ab77d',
        'title' => 'menu',
        'fields' => array(
            array(
                'key' => 'field_mitypes_menu_selector_61bfa4925831a',
                'label' => __( 'Menu', 'mitypes-menu' ),
                'name' => 'mitypes_menu_selector',
                'type' => 'select',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                ),
                'default_value' => false,
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 0,
                'return_format' => 'value',
                'ajax' => 0,
                'placeholder' => '',
            ),
            array(
                'key' => 'field_mitypes_menu_as_block_61bfa4b25831b',
                'label' => __( 'Render menu as block', 'mitypes-menu' ),
                'name' => 'mitypes_menu_as_block',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => __( 'Menu as block', 'mitypes-menu' ),
                'default_value' => 0,
                'ui' => 0,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'mitypes',
                    'operator' => '==',
                    'value' => 'menu',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));


    /**
     * 
     * 
     * @since : 1.0
     */
    function mitypes_menu_load_menus( $field ) {
        
        $field['choices'] = array();
        $nav_menus = wp_get_nav_menus();

        foreach ( $nav_menus as $key => $menu ) {
            $field['choices'][ $menu->term_id ] = $menu->name ;
        }
        return $field;
    }

    add_filter('acf/load_field/name=mitypes_menu_selector', 'mitypes_menu_load_menus');
}