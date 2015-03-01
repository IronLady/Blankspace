<?php
/**
 * The main file of our template
 *
 * The layout of our template, display everything inside the <body> tag.
 *
 * @package Blankspace
 */
?>
<body id="<?php echo $body_id . 'Body'; ?>"<?php if($zv_onload !='') echo ' onload="'.$zv_onload.'"'; ?>>
  <div id="page" class="site">

    <?php require( $template->get_template_dir( $header_template, DIR_WS_TEMPLATE, $current_page_base, 'common' ). '/' . $header_template );?>
    
    <section id="main-container" class="site-container container">
      <div class="site-inner-container row">

        <?php if ( !isset( $flag_disable_left ) || !$flag_disable_left ) : ?>
          <div id="left-sidebar" class="site-sidebar" role="complementary">
            <?php require( DIR_WS_MODULES . zen_get_module_directory( 'column_left.php' ) ); ?>
          </div><!-- #left-sidebar -->
        <?php endif; ?>

        <main id="main" class="site-main" role="main">

          <?php if ( DEFINE_BREADCRUMB_STATUS == '1' || ( DEFINE_BREADCRUMB_STATUS == '2' && !$this_is_home_page ) ) : ?>
            <div id="navBreadCrumb"><?php echo $breadcrumb->trail( BREAD_CRUMBS_SEPARATOR ); ?></div>
          <?php endif; ?>
          <?php if ( $messageStack->size( 'upload' ) > 0 ) echo $messageStack->output( 'upload' ); ?>
          <?php require( $body_code ); ?>

        </main><!-- #main -->

        <?php if ( !isset( $flag_disable_right) || !$flag_disable_right ) : ?>
          <div id="right-sidebar" class="site-sidebar" role="complementary">
            <?php require(DIR_WS_MODULES . zen_get_module_directory('column_right.php')); ?>
          </div><!-- #right-sidebar -->
        <?php endif; ?>

      </div>
    </section><!-- #main-container -->
    
    <?php require( $template->get_template_dir( $footer_template, DIR_WS_TEMPLATE, $current_page_base, 'common'). '/' . $footer_template ); ?>

  </div><!-- #page -->
</body>