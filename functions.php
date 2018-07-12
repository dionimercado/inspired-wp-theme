<?php

function inspired_maintenance() {
  if( !is_user_logged_in() && !is_page( '4' ) ) :
    wp_redirect( get_the_permalink( '4' ) );
  endif;
}

add_action( 'template_redirect', 'inspired_maintenance' )
?>
