<?php
/**
 *
 * Columnar / Grid Layout template.
 *
 * @package Blankspace
 */

if ( $title ) {
  echo $title; 
}

if (is_array($list_box_contents) > 0 ) {
  for($row=0;$row<sizeof($list_box_contents);$row++) {
    $params = '';
    for($col=0;$col<sizeof($list_box_contents[$row]);$col++) {
      $r_params = '';
      if (isset($list_box_contents[$row][$col]['params'])) {
        $r_params .= sprintf( ' %s', (string)$list_box_contents[$row][$col]['params']);
      } 
      if (isset($list_box_contents[$row][$col]['text'])) {
        echo sprintf( '<div %s>%s</div>', $r_params, $list_box_contents[$row][$col]['text'] ) . "\n";
      }
    }
  echo '<div class="cleafix"></div>';  
  }
}
?> 
