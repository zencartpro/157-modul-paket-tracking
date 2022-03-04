<?php
/**
 * @package paket tracking 
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: tpl_track_orders.php 2019-09-09 09:23:14 webchills $
*/
  $content = "";
  $content .= '<div id="' . str_replace('_', '-', $box_id . 'Content') . '" class="sideBoxContent">' . "\n";
  
  if (@sizeof($customer_orders_tracking)==0) {
  
     $content .= '<a href="' . zen_href_link(FILENAME_ACCOUNT_HISTORY_INFO, '','SSL') . '">'.PT_SIDEBOX_TRACKYOURORDER.'</a>';
 }
else {
	  $content .= '<ul class="orderHistList">' . "\n" ;
	  for ($i=1, $j=sizeof($customer_orders_tracking); $i<=$j; $i++) {	 
 

        $content .= '<li><a href="' . zen_href_link(FILENAME_ACCOUNT_HISTORY_INFO, 'order_id=' . $customer_orders_tracking[$i]['id'],'SSL') . '">' .PT_SIDEBOX_ORDERNUMBER.'' . $customer_orders_tracking[$i]['id'] . '</a></li>' . "\n" ;
  }
  $content .= '</ul>' . "\n" ;
}
  $content .= '</div>';