<?php if (!defined('FW')) {
	die('Forbidden');
}
 ?>

<?php if ( !empty( $atts['demo_text'] ) ) { ?>

	<p><?php echo $atts['demo_text']; ?></p>

<?php } ?>

<?php if ( !empty( $atts['demo_edit'] ) ) { ?>

	<?php echo $atts['demo_edit']; ?>

<?php } ?>

<?php if ( !empty( $atts['demo_img'] ) ) { ?>

	<img src="<?php echo fw_resize( $atts['demo_img']['url'], 150, 150, true ); ?>" alt="Alt">

<?php } ?>