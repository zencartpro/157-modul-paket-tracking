<?php
/**
 * Zen Cart German Specific
 * Constants used by the zen_update_orders_history function.
 *

 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: orders_status_updates_admin.php for Paket Tracking 2022-03-04 20:53:14Z webchills $
 */
define('OSH_EMAIL_SEPARATOR', '------------------------------------------------------');
define('OSH_EMAIL_TEXT_SUBJECT', 'Order Update');
define('OSH_EMAIL_TEXT_ORDER_CUSTOMER_GENDER_MALE', 'Dear Mr. ');
define('OSH_EMAIL_TEXT_ORDER_CUSTOMER_GENDER_FEMALE', 'Dear Mrs. ');
define('OSH_EMAIL_TEXT_ORDER_CUSTOMER_NEUTRAL', 'Dear ');
define('OSH_EMAIL_TEXT_UPDATEINFO', 'We inform you about your order status at ');

define('OSH_EMAIL_TEXT_ORDER_NUMBER', 'Order Number:');
define('OSH_EMAIL_TEXT_INVOICE_URL', 'Order Details:');
define('OSH_EMAIL_TEXT_DATE_ORDERED', 'Date Ordered:');
define('OSH_EMAIL_TEXT_COMMENTS_UPDATE', '<em>The comments for your order are: </em>');
define('OSH_EMAIL_TEXT_STATUS_UPDATED', 'Your order\'s status has been updated:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_NO_CHANGE', 'Your order\'s status has not changed:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_LABEL', '<strong>Current status: </strong> %s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_CHANGE', '<strong>Old status:</strong> %1$s, <strong>New status:</strong> %2$s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Please reply to this email if you have any questions.' . "\n");
define('PT_EMAIL_YOURID', 'Your');
define('PT_EMAIL_YOURIDIS', 'is');
define('PT_EMAIL_LINKINFO', 'Click the following link to track your package or copy and paste it into your Web browser:');
define('PT_EMAIL_24HOURS', 'It may take up to 24 hours for the tracking information to appear on the website.');
