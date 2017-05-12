<?php
add_filter( 'rwmb_meta_boxes', 'YOURPREFIX_register_meta_boxes' );

function YOURPREFIX_register_meta_boxes( $meta_boxes ) {

    $prefix = 'rw_';

    $meta_boxes[] = array(
        'id'         => 'main-image',
        'title'      => __( 'Main Image', 'textdomain' ),
        'post_types' => array( 'post', 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',

        'fields' => array(
            array(
                'name'  => __( 'Main Image', 'textdomain' ),
                'id'    => $prefix . 'main_img',
                'type'  => 'image_advanced',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'Bio',
        'title'      => __( 'Bio', 'textdomain' ),
        'post_types' => array( 'post', 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',

        'fields' => array(
            array(
                'name'  => __( 'Bio Text', 'textdomain' ),
                'id'    => $prefix . 'bio',
                'type'  => 'textarea',
                'clone' => true,
            ),
            array(
                'name'  => __( 'Bio Image', 'textdomain' ),
                'id'    => $prefix . 'bio_img',
                'type'  => 'image_advanced',
            ),
            array(
                'name'  => __( 'Bio Quotes', 'textdomain' ),
                'id'    => $prefix . 'quotes',
                'type'  => 'text',
                'clone' => true,
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'video',
        'title'      => __( 'Videos', 'textdomain' ),
        'post_types' => array( 'post', 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',

        'fields' => array(
            array(
                'name'  => __( 'Video', 'textdomain' ),
                'id'    => $prefix . 'video',
                'type'  => 'oembed',
                'clone' => true,
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'photos',
        'title'      => __( 'Photos', 'textdomain' ),
        'post_types' => array( 'post', 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',

        'fields' => array(
            array(
                'name'  => __( 'Photos', 'textdomain' ),
                'id'    => $prefix . 'photo',
                'type'  => 'image_advanced',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'gigs',
        'title'      => __( 'Gigs', 'textdomain' ),
        'post_types' => array( 'post', 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',

        'fields' => array(
            // Group
            array(
                'name' => 'External Gig Links', // Optional
                'id'    => $prefix . 'gig_links',
                'type' => 'group',
                'clone' => true,
                // List of sub-fields
                'fields' => array(
                    array(
                        'name' => 'Gig Link Text',
                        'id'    => $prefix . 'gig_link_text',
                        'type' => 'text',
                    ),
                    array(
                        'name' => __( 'Gig Link URL', 'your-prefix' ),
                        'id'    => $prefix . 'gig_link_url',
                        'type' => 'url',
                    ),
                ),
            ),
            array(
                'name'  => __( 'TV Performances', 'textdomain' ),
                'id'    => $prefix . 'tv',
                'type'  => 'text',
                'clone' => true,
            ),
            array(
                'name'  => __( 'Festivals', 'textdomain' ),
                'id'    => $prefix . 'festivals',
                'type'  => 'text',
                'clone' => true,
            ),

        )
    );

    $meta_boxes[] = array(
        'id'         => 'contact',
        'title'      => __( 'Contact', 'textdomain' ),
        'post_types' => array( 'post', 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',

        'fields' => array(
            array(
                'name'  => __( 'Email Address', 'textdomain' ),
                'id'    => $prefix . 'email',
                'type'  => 'text',
            ),
            array(
                'name'  => __( 'Endorsements', 'textdomain' ),
                'id'    => $prefix . 'endorsements',
                'type'  => 'group',
                'clone' => true,
                'fields' => array(
                    array(
                        'name' => 'Endorsement Name',
                        'id'    => $prefix . 'endorsement_text',
                        'type' => 'text',
                    ),
                    array(
                        'name' => 'Endorsement URL',
                        'id'    => $prefix . 'endorsement_url',
                        'type' => 'url',
                    ),
                ),


            ),

        )
    );

    return $meta_boxes;
}