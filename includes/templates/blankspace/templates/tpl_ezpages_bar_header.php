<?php
/**
 * EZ-Pages Header Module Template
 *
 * Displays all ezpages header inside unordered list
 * EZPAGES_SEPARATOR_HEADER constant removed. Since we use list, 
 * we can style it using CSS
 *
 * @package Blankspace
 */

  include(DIR_WS_MODULES . zen_get_module_directory('ezpages_bar_header.php'));
?>
<?php if (sizeof($var_linksList) >= 1) { ?>
<ul>
<?php for ($i=1, $n=sizeof($var_linksList); $i<=$n; $i++) {  ?>
	<li><a href="<?php echo $var_linksList[$i]['link']; ?>"><?php echo $var_linksList[$i]['name']; ?></a></li>
<?php } // end FOR loop ?>
</ul>
<?php } ?>
