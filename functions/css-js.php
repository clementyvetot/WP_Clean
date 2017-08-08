<?
/*------------------------------------------------------------*\
    Gestion des scripts et css
\*------------------------------------------------------------*/




function include_custom_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js');

	wp_deregister_script('jsglobal');
	wp_enqueue_script('jsglobal', get_template_directory_uri() . '/js/global.js');

}

function add_js_scripts()
{
    // pass Ajax Url to ajax.js
    wp_localize_script('script', 'ajaxcustom', get_template_directory_uri() . '/ajax/custom-ajax.php' ); //
}


add_action('wp_enqueue_scripts', 'include_custom_jquery');
add_action('wp_enqueue_scripts', 'add_js_scripts');


?>
