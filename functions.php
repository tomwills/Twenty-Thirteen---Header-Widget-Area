<?php

// Register header widget area
function my_widgets_init() {
        register_sidebars( 1,
                array(
                'name' => 'header-widget-area',
                'before_widget' => '
                <div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>
                ',
                'before_title' => '
                <h2 class="widgettitle">',
                'after_title' => '</h2>
                '
                )
                );


}
add_action( 'widgets_init', 'my_widgets_init', 11 );

?>
