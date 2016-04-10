<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
    array(
        'type'    => 'box',
        'context' => 'side',
        'options' => array(
    		'page_edit_box' => array(
			    'type'   => 'wp-editor',
			    'teeny'  => true,
			    'reinit' => true,
			    'label'  => __( 'Дополнительное описание', 'fw' ),
			    'desc'   => __( 'Enter some content for this texblock', 'fw' )
    			),
        	)
    )
);
