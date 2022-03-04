<?php
/**
 * @package paket tracking 
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: track_orders.php 2019-09-09 08:12:14 webchills $
*/
// test if track orders sidebox should show
  $show_track_orders= false;
  if (zen_is_logged_in()) {
  	$show_track_orders= true;
  }

if ($show_track_orders === true) {
  
// retrieve the last x products purchased
  $orders_history_tracking_query = 'select o.orders_id, o.date_purchased
                   from ' . TABLE_ORDERS . " o
                   where o.customers_id = '" . (int)$_SESSION['customer_id'] . "'
                   order by o.date_purchased desc
                   limit " . MAX_DISPLAY_PRODUCTS_IN_TRACK_ORDERS_BOX;

    $orders_history_tracking = $db->Execute($orders_history_tracking_query);

    if ($orders_history_tracking->RecordCount() > 0) {
      $orders_history_ids = '';
      while (!$orders_history_tracking->EOF) {
        $orders_history_ids .= (int)$orders_history_tracking->fields['orders_id'] . ',';
        $orders_history_tracking->MoveNext();
      }
      $orders_history_ids = substr($orders_history_ids, 0, -1);
      $rows=0;
      $customer_orders_tracking_string = '<table border="0" width="100%" cellspacing="0" cellpadding="1">';
      $products_history_tracking_query = 'select orders_id, date_purchased
                         from ' . TABLE_ORDERS . '
                         where orders_id in (' . $orders_history_ids . ')
                         order by date_purchased desc';

      $products_history_tracking = $db->Execute($products_history_tracking_query);

      while (!$products_history_tracking->EOF) {
        $rows++;
        $customer_orders_tracking[$rows]['id'] = $products_history_tracking->fields['orders_id'];
        $customer_orders_tracking[$rows]['date'] = $products_history_tracking->fields['date_purchased'];
        $products_history_tracking->MoveNext();
      }
      $customer_orders_tracking_string .= '</table>';
    }
  
      require $template->get_template_dir('tpl_track_orders.php',DIR_WS_TEMPLATE, $current_page_base,'sideboxes'). '/tpl_track_orders.php';
      $title =  BOX_HEADING_TRACK_ORDERS;
      $title_link = false;
      require $template->get_template_dir($column_box_default, DIR_WS_TEMPLATE, $current_page_base,'common') . '/' . $column_box_default;
} // $show_track_orders