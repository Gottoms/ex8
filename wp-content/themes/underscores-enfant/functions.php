
<?php
function wpb_add_google_fonts() {
 
 wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto&display=swap', false ); 
 }
  
 add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

 ?>