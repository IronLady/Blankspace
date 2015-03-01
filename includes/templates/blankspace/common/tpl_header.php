<?php
/**
 * The Header of our template
 *
 * @package Blankspace
 */
?>
<?php
  if ($messageStack->size( 'header' ) > 0) {
    echo $messageStack->output( 'header' );
  }
  if ( isset( $_GET['error_message'] ) && zen_not_null( $_GET['error_message'] ) ) {
    echo htmlspecialchars( urldecode( $_GET['error_message'] ), ENT_COMPAT, CHARSET, TRUE );
  }
  if ( isset( $_GET['info_message'] ) && zen_not_null( $_GET['info_message'] ) ) {
    echo htmlspecialchars( $_GET['info_message'], ENT_COMPAT, CHARSET, TRUE );
  }
?>
<?php if ( !isset( $flag_disable_header ) || !$flag_disable_header ) : ?> 
<header id="main-header" class="site-header" role="banner">

  <nav id="main-navigation" class="site-navigation" role="navigation">
    <ul>
      <li><?php echo '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">'; ?><?php echo HEADER_TITLE_CATALOG; ?></a></li>
    <?php if ( $_SESSION['customer_id'] ) { ?>
      <li><a href="<?php echo zen_href_link( FILENAME_LOGOFF, '', 'SSL' ); ?>"><?php echo HEADER_TITLE_LOGOFF; ?></a></li>
      <li><a href="<?php echo zen_href_link( FILENAME_ACCOUNT, '', 'SSL' ); ?>"><?php echo HEADER_TITLE_MY_ACCOUNT; ?></a></li>
    <?php } else { ?>
      <?php if ( STORE_STATUS == '0' ) { ?>
      <li><a href="<?php echo zen_href_link( FILENAME_LOGIN, '', 'SSL' ); ?>"><?php echo HEADER_TITLE_LOGIN; ?></a></li>
      <?php } ?>
    <?php } ?>
    <?php if ( $_SESSION['cart']->count_contents() != 0 ) { ?>
      <li><a href="<?php echo zen_href_link( FILENAME_SHOPPING_CART, '', 'NONSSL' ); ?>"><?php echo HEADER_TITLE_CART_CONTENTS; ?></a></li>
      <li><a href="<?php echo zen_href_link( FILENAME_CHECKOUT_SHIPPING, '', 'SSL' ); ?>"><?php echo HEADER_TITLE_CHECKOUT; ?></a></li>
    <?php } ?>
    </ul>
    <div id="header-search" class="site-search"><?php require(DIR_WS_MODULES . 'sideboxes/search_header.php'); ?></div>
  </nav><!-- #main-navigation -->

  <div class="site-branding">
    <h1 class="site-logo"><?php echo '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">' . zen_image( $template->get_template_dir( HEADER_LOGO_IMAGE, DIR_WS_TEMPLATE, $current_page_base,'images' ). '/' . HEADER_LOGO_IMAGE, HEADER_ALT_TEXT ) . '</a>'; ?></h1>
  <?php if ( HEADER_SALES_TEXT != '' ) : ?>
    <h2 class="site-tagline"><?php echo HEADER_SALES_TEXT;?></h2>
  <?php endif; ?>
  </div><!-- .site-branding -->

  <nav id="categories-navigation" class="site-navigation" role="navigation">
    <?php require( $template->get_template_dir( 'tpl_modules_categories_tabs.php',DIR_WS_TEMPLATE, $current_page_base,'templates' ). '/tpl_modules_categories_tabs.php'); ?>
  </nav><!-- #categories-navigation -->

  <?php if ( EZPAGES_STATUS_HEADER == '1' or ( EZPAGES_STATUS_HEADER == '2' and ( strstr( EXCLUDE_ADMIN_IP_FOR_MAINTENANCE, $_SERVER['REMOTE_ADDR'] ) ) ) ) : ?>
  <nav id="ezpages-header-navigation" class="site-navigation" role="navigation">
    <?php require( $template->get_template_dir( 'tpl_ezpages_bar_header.php',DIR_WS_TEMPLATE, $current_page_base,'templates' ). '/tpl_ezpages_bar_header.php' ); ?>
  </nav><!-- #ezpages-header-navigation -->
  <?php endif; ?>

</header><!-- #main-header -->
<?php endif; ?>
