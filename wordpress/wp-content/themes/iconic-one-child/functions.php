<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );}

function mail_send() {
    mail('yohanndore48@gmail.com', 'rien', 'c\'est bon ça marche');
}

add_action("save_post", "mail_send");

?>
