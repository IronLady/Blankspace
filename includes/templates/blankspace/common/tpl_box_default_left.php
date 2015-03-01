<?php
/**
 *
 * The left sidebar layout template
 *
 * @package Blankspace
 */

if ( $title_link ) {
	$title = sprintf( '<a href="%s">%s</a>', zen_href_link($title_link), $title . BOX_HEADING_LINKS );
}
?>
<div id="<?php echo sprintf( '%s-sidebox', str_replace('_', '-', $box_id) ); ?>" class="sidebox">
	<h3 id="<?php echo sprintf( '%s-heading', str_replace('_', '-', $box_id) ); ?>" class="sidebox-heading"><?php echo $title; ?></h3>
	<?php echo $content; ?>
</div>
