<?
/*------------------------------------------------------------*\
	Custom Post Types
\*------------------------------------------------------------*/

// NOTE : REACTIVER LES PERMALIENS DEPUIS L'ADMIN WP POUR PRENDRE EN COMPTE LA NOUVELLE URL

/*
function create_post_type() {
    register_post_type('equipes', 
        array(
            'label'                 => __('label'),
            'singular_label'        => __('label'),
            'add_new_item'          => __( 'Ajouter un item' ),
            'edit_item'             => __( 'Modifier un item' ),
            'new_item'              => __( 'Nouvel item' ),
            'view_item'             => __( "Voir l'item" ),
            'search_items'          => __( 'Rechercher un item' ),
            'not_found'             =>  __( 'Aucun item trouvé' ),
            'not_found_in_trash'    => __( 'Aucun item trouvé' ),
            'public'                => true,
            'show_ui'               => true,
            'capability_type'       => 'post',
            'has_archive'           => true,
            'hierarchical'          => true,
            'menu_icon'             => 'dashicons-groups',
            //'taxonomies'            => array('galerie'),
            'supports'              => array( 'title', 'editor', 'thumbnail'),
            'rewrite'               => array('slug' => 'item', 'with_front' => true)
        )
    );
}
add_action( 'init', 'create_post_type' );
*/