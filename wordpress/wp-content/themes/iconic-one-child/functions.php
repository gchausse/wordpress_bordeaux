<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );}

add_filter( 'get_search_form', 'wpdocs_my_search_form' );
function wpdocs_my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="http://localhost:8080/wordpress_bordeaux/wordpress/">
    		  <div>
    			     <label class="screen-reader-text" for="s">Rechercher&nbsp;:</label>
    			     <input type="text" value="" name="s" id="s" />
    			     <input type="submit" id="searchsubmit" value="" />
    		    </div>
            </form>';

    return $form;

}


?>
