<?php
/**
 * The Template Utility Functions.
 *
 * Define your custom functions here
 *
 * @package Blankspace
 */

function bs_init(){

  $args = array( 
    'page'  => array( 'checkout', 'checkout_shipping', 'checkout_payment', 'checkout_confirmation', 'checkout_success', 'checkout_shipping_address', 'checkout_payment_address' )
  );
  bs_disable_header( $args );

}

/*
 * Function to disable header in a certain condition
 * Pass array of arguments e.g current_page, categories, products
 * $args = array()
 *    'page'        => array( 'checkout', 'checkout_shipping', 'checkout_payment'), 
 *    'categories'  => array( 1, 2, 3, 4, 5), 
 *    'products'    => array( 1, 2, 3);
 * );
 */
function bs_disable_header( $args = array() ){
  global $flag_disable_header, $current_page_base, $cPath_array;
  
  if ( in_array( $current_page_base, $args['page'] ) ) {
    $flag_disable_header = true;
  }

  if ( !$flag_disable_header && zen_not_null( $args['categories'] ) ){
    foreach ( $cPath_array as $category_id ) {
      if ( in_array( $category_id, $args['categories'] ) ) {
        $flag_disable_header = true;
      }
    }
  }

  if ( !$flag_disable_header && isset( $_GET['products_id'] ) && zen_not_null( $args['products'] ) ) {
    if ( in_array( (int) $_GET['products_id'], $args['products'] ) ) {
      $flag_disable_header = true;
    }
  }

}

/*
 * Function to disable footer in a certain condition
 * Pass array of arguments e.g current_page, categories, products
 * $args = array()
 *    'page'        => array( 'checkout', 'checkout_shipping', 'checkout_payment'), 
 *    'categories'  => array( 1, 2, 3, 4, 5), 
 *    'products'    => array( 1, 2, 3);
 * );
 */
function bs_disable_footer( $args = array() ){
  global $flag_disable_footer, $current_page_base, $cPath_array;
  
  if ( in_array( $current_page_base, $args['page'] ) ) {
    $flag_disable_footer = true;
  }

  if ( !$flag_disable_footer && zen_not_null( $args['categories'] ) ){
    foreach ( $cPath_array as $category_id ) {
      if ( in_array( $category_id, $args['categories'] ) ) {
        $flag_disable_footer = true;
      }
    }
  }

  if ( !$flag_disable_footer && isset( $_GET['products_id'] ) && zen_not_null( $args['products'] ) ) {
    if ( in_array( (int) $_GET['products_id'], $args['products'] ) ) {
      $flag_disable_footer = true;
    }
  }

}

/*
 * Function to disable left sidebar in a certain condition
 * Pass array of arguments e.g current_page, categories, products
 * $args = array()
 *    'page'        => array( 'checkout', 'checkout_shipping', 'checkout_payment'), 
 *    'categories'  => array( 1, 2, 3, 4, 5), 
 *    'products'    => array( 1, 2, 3);
 * );
 */
function bs_disable_left( $args = array() ){
  global $flag_disable_left, $current_page_base, $cPath_array;
  
  if ( in_array( $current_page_base, $args['page'] ) ) {
    $flag_disable_left = true;
  }

  if ( !$flag_disable_left && zen_not_null( $args['categories'] ) ){
    foreach ( $cPath_array as $category_id ) {
      if ( in_array( $category_id, $args['categories'] ) ) {
        $flag_disable_left = true;
      }
    }
  }

  if ( !$flag_disable_left && isset( $_GET['products_id'] ) && zen_not_null( $args['products'] ) ) {
    if ( in_array( (int) $_GET['products_id'], $args['products'] ) ) {
      $flag_disable_left = true;
    }
  }

}

/*
 * Function to disable right sidebar in a certain condition
 * Pass array of arguments e.g current_page, categories, products
 * $args = array()
 *    'page'        => array( 'checkout', 'checkout_shipping', 'checkout_payment'), 
 *    'categories'  => array( 1, 2, 3, 4, 5), 
 *    'products'    => array( 1, 2, 3);
 * );
 */
function bs_disable_right( $args = array() ){
  global $flag_disable_right, $current_page_base, $cPath_array;
  
  if ( in_array( $current_page_base, $args['page'] ) ) {
    $flag_disable_right = true;
  }

  if ( !$flag_disable_right && zen_not_null( $args['categories'] ) ){
    foreach ( $cPath_array as $category_id ) {
      if ( in_array( $category_id, $args['categories'] ) ) {
        $flag_disable_right = true;
      }
    }
  }

  if ( !$flag_disable_right && isset( $_GET['products_id'] ) && zen_not_null( $args['products'] ) ) {
    if ( in_array( (int) $_GET['products_id'], $args['products'] ) ) {
      $flag_disable_right = true;
    }
  }

}

