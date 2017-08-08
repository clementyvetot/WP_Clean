<?
/*------------------------------------------------------------*\
    Changer la longeur du excerpt
\*------------------------------------------------------------*/


function themify_custom_excerpt_length( $length ) {
   return 20;
}
add_filter( 'excerpt_length', 'themify_custom_excerpt_length', 999 );
