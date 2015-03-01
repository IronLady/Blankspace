<?php
/**
 * The template variables you can execute any code needed by the template here
 *
 * @package Blankspace
 */
require(DIR_WS_MODULES . zen_get_module_directory('template_functions.php'));

$header_template = 'tpl_header.php';
$footer_template = 'tpl_footer.php';
$left_column_file = 'column_left.php';
$right_column_file = 'column_right.php';
$body_id = ($this_is_home_page) ? 'indexHome' : str_replace('_', '', $_GET['main_page']);

if (CUSTOMERS_APPROVAL_AUTHORIZATION == 1 && CUSTOMERS_AUTHORIZATION_HEADER_OFF == 'true' and ($_SESSION['customers_authorization'] != 0 or $_SESSION['customer_id'] == '')) {
	$flag_disable_header = true;
}
if (COLUMN_LEFT_STATUS == 0 || (CUSTOMERS_APPROVAL == '1' and $_SESSION['customer_id'] == '') || (CUSTOMERS_APPROVAL_AUTHORIZATION == 1 && CUSTOMERS_AUTHORIZATION_COLUMN_LEFT_OFF == 'true' and ($_SESSION['customers_authorization'] != 0 or $_SESSION['customer_id'] == ''))) {
	$flag_disable_left = true;
}
if (COLUMN_RIGHT_STATUS == 0 || (CUSTOMERS_APPROVAL == '1' and $_SESSION['customer_id'] == '') || (CUSTOMERS_APPROVAL_AUTHORIZATION == 1 && CUSTOMERS_AUTHORIZATION_COLUMN_RIGHT_OFF == 'true' and ($_SESSION['customers_authorization'] != 0 or $_SESSION['customer_id'] == ''))) {
	$flag_disable_right = true;
}
if (CUSTOMERS_APPROVAL_AUTHORIZATION == 1 && CUSTOMERS_AUTHORIZATION_FOOTER_OFF == 'true' and ($_SESSION['customers_authorization'] != 0 or $_SESSION['customer_id'] == '')) {
	$flag_disable_footer = true;
}

/* Template init function */
bs_init();

if (file_exists(DIR_WS_MODULES . 'pages/' . $current_page_base . '/main_template_vars.php')) {
	$body_code = DIR_WS_MODULES . 'pages/' . $current_page_base . '/main_template_vars.php';
} else {
	$body_code = $template->get_template_dir('tpl_' . preg_replace('/.php/', '',$_GET['main_page']) . '_default.php',DIR_WS_TEMPLATE, $current_page_base,'templates'). '/tpl_' . $_GET['main_page'] . '_default.php';
}

?>
