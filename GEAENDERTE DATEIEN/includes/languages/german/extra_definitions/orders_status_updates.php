<?php
/**
 * Constants used by the zen_update_orders_history function.
 *

 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: orders_status_updates.php for Paket Tracking 2022-03-04 20:39:16Z webchills $
 */
define('OSH_EMAIL_SEPARATOR', '------------------------------------------------------');
define('OSH_EMAIL_TEXT_SUBJECT', 'Aktualisierung der Bestellung');
define('OSH_EMAIL_TEXT_ORDER_NUMBER', 'Bestellnummer:');
define('OSH_EMAIL_TEXT_INVOICE_URL', 'Bestelldetails:');
define('OSH_EMAIL_TEXT_DATE_ORDERED', 'Bestelldatum:');
define('OSH_EMAIL_TEXT_COMMENTS_UPDATE', '<em>Kommentare zu Ihrer Bestellung: </em>');
define('OSH_EMAIL_TEXT_STATUS_UPDATED', 'Ihr Bestellstatus wurde aktualisiert:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_NO_CHANGE', 'Ihr Bestellstatus hat sich nicht geändert:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_LABEL', '<strong>Aktueller Status: </strong> %s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_CHANGE', '<strong>Alter Status:</strong> %1$s, <strong>Neuer Status:</strong> %2$s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Wenn Sie Fragen haben, antworten Sie bitte auf dieses Email.' . "\n");

define('SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT', '[BESTELLSTATUS]');
define('PT_EMAIL_YOURID', 'Ihre');
define('PT_EMAIL_YOURIDIS', 'ist');
define('PT_EMAIL_LINKINFO', 'Klicken Sie auf den folgenden Link, um Ihre Sendung nachzuverfolgen oder kopieren Sie ihn in die Adresszeile Ihres Browsers:');
define('PT_EMAIL_24HOURS', 'Es kann bis zu 24 Stunden dauern, bis die Tracking-Informationen auf der Website verfügbar sind.');