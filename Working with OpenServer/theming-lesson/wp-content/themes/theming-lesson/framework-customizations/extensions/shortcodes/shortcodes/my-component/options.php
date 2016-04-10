<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
    'demo_text'   => array(
        'label'   => __('Demo text label', '{domain}'),
        'desc'    => __('Demo text description', '{domain}'),
        'help'    => __('Demo text help', '{domain}'),
        'type'    => 'text'
    ),
    'demo_edit' => array(
    'type'   => 'wp-editor',
    'teeny'  => true,
    'reinit' => true,
    'label'  => __( 'Content', 'fw' ),
    'desc'   => __( 'Enter some content for this texblock', 'fw' )
    ),
    'demo_img' => array(
      'type'  => 'upload',
      'label' => __( 'Choose Image', 'fw' ),
      'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
    ),
);
