<?php
/**
 * The Footer of our template
 *
 * @package Blankspace
 */

require(DIR_WS_MODULES . zen_get_module_directory('footer.php'));
?>
<?php if ( !isset( $flag_disable_footer ) || !$flag_disable_footer ) : ?>
<footer id="main-footer" class="site-footer" role="contentinfo">

	<nav id="footer-navigation" class="site-navigation" role="navigation">
		<ul>
			<li><?php echo '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">'; ?><?php echo HEADER_TITLE_CATALOG; ?></a></li>
			<?php if (EZPAGES_STATUS_FOOTER == '1' or (EZPAGES_STATUS_FOOTER == '2' and (strstr(EXCLUDE_ADMIN_IP_FOR_MAINTENANCE, $_SERVER['REMOTE_ADDR'])))) { ?>
				<?php require($template->get_template_dir('tpl_ezpages_bar_footer.php',DIR_WS_TEMPLATE, $current_page_base,'templates'). '/tpl_ezpages_bar_footer.php'); ?>
			<?php } ?>
		</ul>
	</nav><!-- #footer-navigation -->

	<div class="site-info"><?php echo FOOTER_TEXT_BODY; ?></div>

</footer><!-- #main-footer -->	
<?php endif; ?>
