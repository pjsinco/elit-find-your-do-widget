<?php

/*
 * Plugin Name: Elit Find Your DO widget
 * Plugin URI: http://orbitmedia.com
 * Description: This widget allows for sidebar placement of the Find Your DO form
 * Version: 0.2
 * Author: Mark Furrow & PJS
 * License: GPL2
 */

class DO_Locator_Widget extends WP_Widget
{
    /**
     * Sets up the widgets name etc
     */
    public function __construct()
    {

        // widget actual processes
        parent::__construct(
            'elit_find_your_do_widget', // Base ID
            'Find Your DO widget', // Name
            array(
                'description' => __( 'Find Your DO form for inside pages' )
            )
        );

    }

    public function widget( $args, $instance )
    {

        $html = '
            <div class="widget fyd__widget" id="findYourDoInsideForm">
              <div class="fyd" id="findYourDoApp"></div>
            </div>
        ';

        echo $html;

    }

    public function form( $instance ) {

    }

    public function update( $new_instance, $old_instance ) {
         $instance = $old_instance;
         return $instance;
    }
}

// add_action( 'widgets_init', create_function( '', 'return register_widget("DO_Locator_Widget");' ) );

function do_register_widget()
{
    register_widget( 'DO_Locator_Widget' );
}

add_action( 'widgets_init', 'do_register_widget' );
