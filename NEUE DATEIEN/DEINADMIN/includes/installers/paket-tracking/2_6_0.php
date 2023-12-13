<?php
/**
 * @package Paket Tracking
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: 2_6_0.php  2023-12-13 19:19:51Z webchills $
 */
 
$db->Execute(" SELECT @gid:=configuration_group_id
FROM ".TABLE_CONFIGURATION_GROUP."
WHERE configuration_group_title= 'Paket Tracking'
LIMIT 1;");


$db->Execute("INSERT IGNORE INTO ".TABLE_CONFIGURATION." (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added, last_modified, use_function, set_function) VALUES
('Package Tracking - Carrier 1 Status', 'CARRIER_STATUS_1', 'False', 'Enable Tracking for Carrier 1<br /><br />Set to false if you do NOT want Carrier 1 to be displayed on Admin and Customer page.', @gid, 1, now(), now(), NULL, 'zen_cfg_select_option(array(\'True\', \'False\'),'),
('Package Tracking - Carrier 1 Name', 'CARRIER_NAME_1', 'DHL', 'Enter name of Carrier 1 <br /> <br /><strong>Example:</strong> FedEx, UPS, Canada Post, etc...<br />(default: FedEx)', @gid, 2, now(), now(), NULL, NULL),
('Package Tracking - Carrier 1 Tracking Link', 'CARRIER_LINK_1', 'https://nolp.dhl.de/nextt-online-public/set_identcodes.do?lang=de&idc=', 'Enter the tracking link of Carrier 1<br /> <br /><strong>Example:</strong> https://nolp.dhl.de/nextt-online-public/set_identcodes.do?lang=de&idc=', @gid, 3, now(), now(), NULL, NULL),
('Package Tracking - Carrier 2 Status', 'CARRIER_STATUS_2', 'False', 'Enable Tracking for Carrier 2<br /><br />Set to false if you do NOT want Carrier 2 to be displayed on Admin and Customer page.', @gid, 4, now(), now(), NULL, 'zen_cfg_select_option(array(\'True\', \'False\'),'),
('Package Tracking - Carrier 2 Name', 'CARRIER_NAME_2', 'DPD', 'Enter name of Carrier 2 <br /> <br /><strong>Example:</strong> FedEx, UPS, Canada Post, etc...<br />(default: UPS)', @gid, 5, now(), now(), NULL, NULL),
('Package Tracking - Carrier 2 Tracking Link', 'CARRIER_LINK_2', 'https://tracking.dpd.de/parcelstatus?locale=de_DE&query=', 'Enter the tracking link of Carrier 2<br /> <br /><strong>Example:</strong> http://extranet.dpd.de/cgi-bin/delistrack?typ=1&lang=de&pknr=', @gid, 6, now(), now(), NULL, NULL),
('Package Tracking - Carrier 3 Status', 'CARRIER_STATUS_3', 'False', 'Enable Tracking for Carrier 3<br /><br />Set to false if you do NOT want Carrier 3 to be displayed on Admin and Customer page.', @gid, 7, now(), now(), NULL, 'zen_cfg_select_option(array(\'True\', \'False\'),'),
('Package Tracking - Carrier 3 Name', 'CARRIER_NAME_3', 'UPS', 'Enter name of Carrier 3 <br /> <br /><strong>Example:</strong> FedEx, UPS, Canada Post, etc...<br />(default: USPS)', @gid, 8, now(), now(), NULL, NULL),
('Package Tracking - Carrier 3 Tracking Link', 'CARRIER_LINK_3', 'https://wwwapps.ups.com/WebTracking/processInputRequest?sort_by=status&tracknums_displ ayed=1&TypeOfInquiryNumber=T&loc=de_DE&InquiryNumber1=', 'Enter the tracking link of Carrier 3<br /> <br /><strong>Example:</strong>http://wwwapps.ups.com/WebTracking/processInputRequest?sort_by=status&tracknums_displ ayed=1&TypeOfInquiryNumber=T&loc=de_DE&InquiryNumber1=', @gid, 9, now(), now(), NULL, NULL),
('Package Tracking - Carrier 4 Status', 'CARRIER_STATUS_4', 'False', 'Enable Tracking for Carrier 4<br /><br />Set to false if you do NOT want Carrier 4 to be displayed on Admin and Customer page.', @gid, 10, now(), now(), NULL, 'zen_cfg_select_option(array(\'True\', \'False\'),'),
('Package Tracking - Carrier 4 Name', 'CARRIER_NAME_4', 'GLS', 'Enter name of Carrier 4 <br /> <br /><strong>Example:</strong> FedEx, UPS, Canada Post, etc...<br />(default: blank)', @gid, 11, now(), now(), NULL, NULL),
('Package Tracking - Carrier 4 Tracking Link', 'CARRIER_LINK_4', 'https://gls-group.eu/AT/de/paket-verfolgen?match=', 'Enter the tracking link of Carrier 4<br /> <br /><strong>Example:</strong> http://tracking.hlg.de/Tracking.jsp?TrackID=', @gid, 12, now(), now(), NULL, NULL),
('Package Tracking - Carrier 5 Status', 'CARRIER_STATUS_5', 'False', 'Enable Tracking for Carrier 5<br /><br />Set to false if you do NOT want Carrier 5 to be displayed on Admin and Customer page.', @gid, 13, now(), now(), NULL, 'zen_cfg_select_option(array(\'True\', \'False\'),'),
('Package Tracking - Carrier 5 Name', 'CARRIER_NAME_5', 'Post Austria', 'Enter name of Carrier 5 <br /> <br /><strong>Example:</strong> FedEx, UPS, Canada Post, etc...<br />(default: blank)', @gid, 14, now(), now(), NULL, NULL),
('Package Tracking - Carrier 5 Tracking Link', 'CARRIER_LINK_5', 'https://www.post.at/sendungsverfolgung.php/details?pnum1=', 'Enter the tracking link of Carrier 5<br /> <br /><strong>Example:</strong> http://www.post.at/tnt_query.php?pnum1=', @gid, 15, now(), now(), NULL, NULL),
('Package Tracking - Carrier 6 Status', 'CARRIER_STATUS_6', 'False', 'Enable Tracking for Carrier 6<br /><br />Set to false if you do NOT want Carrier 6 to be displayed on Admin and Customer page.', @gid, 16, now(), now(), NULL, 'zen_cfg_select_option(array(\'True\', \'False\'),'),
('Package Tracking - Carrier 6 Name', 'CARRIER_NAME_6', 'Deutsche Post', 'Enter name of Carrier 6 <br /> <br /><strong>Example:</strong> Deutsche Post<br />(default: blank)', @gid, 17, now(), now(), NULL, NULL),
('Package Tracking - Carrier 6 Tracking Link', 'CARRIER_LINK_6', 'https://www.deutschepost.de/de/s/sendungsverfolgung.html?piececode=', 'Enter the tracking link of Carrier 6<br /> <br /><strong>Example:</strong> https://www.deutschepost.de/de/s/sendungsverfolgung.html?piececode=', @gid, 18, now(), now(), NULL, NULL),
('Package Tracking - Max display for Track Order sidebox', 'MAX_DISPLAY_PRODUCTS_IN_TRACK_ORDERS_BOX', '3', 'The maximum number of orders to display on the Track Order sidebox ', @gid, 22, now(), now(), NULL, NULL)");                             


$db->Execute("REPLACE INTO ".TABLE_CONFIGURATION_LANGUAGE." (configuration_title, configuration_key, configuration_description, configuration_language_id) VALUES
('Paket Tracking - Versandunternehmen 1 Name', 'CARRIER_NAME_1', 'Geben Sie den Namen von Versandunternehmen 1 ein <br />Beispiel: DHL, GLS, DPD, Post Austria, Deutsche Post, etc...<br />(Voreingestellt: DHL)', 43),
('Paket Tracking - Versandunternehmen 1 Tracking Link', 'CARRIER_LINK_1', 'Geben Sie den Tracking Link von Versandunternehmen 1 ein.<br /> Beispiel: https://nolp.dhl.de/nextt-online-public/set_identcodes.do?lang=de&idc=', 43),
('Paket Tracking - Versandunternehmen 1 Status', 'CARRIER_STATUS_1','Wollen Sie das Tracking für Versandunternehmen 1 aktivieren?<br />Auf false setzen, wenn Sie NICHT wollen, dass Versandunternehmen 1 auf der Admin- und der Kundenseite erscheint.', 43),
('Paket Tracking - Versandunternehmen 2 Name', 'CARRIER_NAME_2', 'Geben Sie den Namen von Versandunternehmen 2 ein <br />Beispiel: DHL, GLS, DPD, Post Austria, Deutsche Post, etc...<br />(Voreingestellt: DPD)', 43),
('Paket Tracking - Versandunternehmen 2 Tracking Link', 'CARRIER_LINK_2', 'Geben Sie den Tracking Link von Versandunternehmen 2 ein.<br /> Beispiel: http://extranet.dpd.de/cgi-bin/delistrack?typ=1&lang=de&pknr=', 43),
('Paket Tracking - Versandunternehmen 2 Status', 'CARRIER_STATUS_2', 'Wollen Sie das Tracking für Versandunternehmen 2 aktivieren?<br />Auf false setzen, wenn Sie NICHT wollen, dass Versandunternehmen 2 auf der Admin- und der Kundenseite erscheint.', 43),
('Paket Tracking - Versandunternehmen 3 Name', 'CARRIER_NAME_3', 'Geben Sie den Namen von Versandunternehmen 3 ein <br />Beispiel: DHL, GLS, DPD, Post Austria, Deutsche Post, etc...<br />(Voreingestellt: UPS)', 43),
('Paket Tracking - Versandunternehmen 3 Tracking Link', 'CARRIER_LINK_3', 'Geben Sie den Tracking Link von Versandunternehmen 3 ein.<br /> Beispiel: http://wwwapps.ups.com/WebTracking/processInputRequest?sort_by=status&tracknums_displ ayed=1&TypeOfInquiryNumber=T&loc=de_DE&InquiryNumber1=', 43),
('Paket Tracking - Versandunternehmen 3 Status', 'CARRIER_STATUS_3', 'Wollen Sie das Tracking für Versandunternehmen 3 aktivieren?<br />Auf false setzen, wenn Sie NICHT wollen, dass Versandunternehmen 3 auf der Admin- und der Kundenseite erscheint.', 43),
('Paket Tracking - Versandunternehmen 4 Name', 'CARRIER_NAME_4', 'Geben Sie den Namen von Versandunternehmen 4 ein <br />Beispiel: DHL, GLS, DPD, Post Austria, Deutsche Post, etc...<br />(Voreingestellt: Hermes)', 43),
('Paket Tracking - Versandunternehmen 4 Tracking Link', 'CARRIER_LINK_4','Geben Sie den Tracking Link von Versandunternehmen 4 ein.<br /> Beispiel: http://tracking.hlg.de/Tracking.jsp?TrackID=', 43),
('Paket Tracking - Versandunternehmen 4 Status', 'CARRIER_STATUS_4', 'Wollen Sie das Tracking für Versandunternehmen 4 aktivieren?<br />Auf false setzen, wenn Sie NICHT wollen, dass Versandunternehmen 4 auf der Admin- und der Kundenseite erscheint.', 43),
('Paket Tracking - Versandunternehmen 5 Name', 'CARRIER_NAME_5', 'Geben Sie den Namen von Versandunternehmen 5 ein <br />Beispiel: DHL, GLS, DPD, Post Austria, Deutsche Post, etc...<br />(Voreingestellt: Post Austria)', 43),
('Paket Tracking - Versandunternehmen 5 Tracking Link', 'CARRIER_LINK_5','Geben Sie den Tracking Link von Versandunternehmen 5 ein.<br /> Beispiel: http://www.post.at/sendungsverfolgung.php/details?pnum1=', 43),
('Paket Tracking - Versandunternehmen 5 Status', 'CARRIER_STATUS_5','Wollen Sie das Tracking für Versandunternehmen 5 aktivieren?<br />Auf false setzen, wenn Sie NICHT wollen, dass Versandunternehmen 5 auf der Admin- und der Kundenseite erscheint.', 43),
('Paket Tracking - Versandunternehmen 6 Name', 'CARRIER_NAME_6', 'Geben Sie den Namen von Versandunternehmen 6 ein <br />Beispiel: Deutsche Post<br />(Voreingestellt: Deutsche Post)', 43),
('Paket Tracking - Versandunternehmen 6 Tracking Link', 'CARRIER_LINK_6','Geben Sie Tracking Link von Versandunternehmen 6 ein.<br /> Beispiel: https://www.deutschepost.de/de/s/sendungsverfolgung.html?piececode=', 43),
('Paket Tracking - Versandunternehmen 6 Status', 'CARRIER_STATUS_6','Wollen Sie das Tracking für Versandunternehmen 6 aktivieren?<br />Auf false setzen, wenn Sie NICHT wollen, dass Versandunternehmen 6 auf der Admin- und der Kundenseite erscheint.', 43),
('Paket Tracking - Sidebox Einstellung', 'MAX_DISPLAY_PRODUCTS_IN_TRACK_ORDERS_BOX','Maximale Anzahl der Bestellungen, die in der Bestellverfolgungs-Sidebox angezeigt werden sollen.', 43)");


// add columns to order table
    //check if track_id1 column exists - if not add it
    $sql ="SHOW COLUMNS FROM ".TABLE_ORDERS_STATUS_HISTORY." LIKE '%track_id1%'";
    $result = $db->Execute($sql);
    if(!$result->RecordCount())
    {
        $sql = "ALTER TABLE ".TABLE_ORDERS_STATUS_HISTORY." ADD track_id1 TEXT";
        $db->Execute($sql);
    }

    //check if track_id2 column exists - if not add it
    $sql ="SHOW COLUMNS FROM ".TABLE_ORDERS_STATUS_HISTORY." LIKE '%track_id2%'";
    $result = $db->Execute($sql);
    if(!$result->RecordCount())
    {
        $sql = "ALTER TABLE ".TABLE_ORDERS_STATUS_HISTORY." ADD track_id2 TEXT";
        $db->Execute($sql);
    }
    //check if track_id3 column exists - if not add it
    $sql ="SHOW COLUMNS FROM ".TABLE_ORDERS_STATUS_HISTORY." LIKE '%track_id3%'";
    $result = $db->Execute($sql);
    if(!$result->RecordCount())
    {
        $sql = "ALTER TABLE ".TABLE_ORDERS_STATUS_HISTORY." ADD track_id3 TEXT";
        $db->Execute($sql);
    }
    //check if track_id4 column exists - if not add it
    $sql ="SHOW COLUMNS FROM ".TABLE_ORDERS_STATUS_HISTORY." LIKE '%track_id4%'";
    $result = $db->Execute($sql);
    if(!$result->RecordCount())
    {
        $sql = "ALTER TABLE ".TABLE_ORDERS_STATUS_HISTORY." ADD track_id4 TEXT";
        $db->Execute($sql);
    }
    //check if track_id5 column exists - if not add it
    $sql ="SHOW COLUMNS FROM ".TABLE_ORDERS_STATUS_HISTORY." LIKE '%track_id5%'";
    $result = $db->Execute($sql);
    if(!$result->RecordCount())
    {
        $sql = "ALTER TABLE ".TABLE_ORDERS_STATUS_HISTORY." ADD track_id5 TEXT";
        $db->Execute($sql);
    }
    
     //check if track_id6 column exists - if not add it
    $sql ="SHOW COLUMNS FROM ".TABLE_ORDERS_STATUS_HISTORY." LIKE '%track_id6%'";
    $result = $db->Execute($sql);
    if(!$result->RecordCount())
    {
        $sql = "ALTER TABLE ".TABLE_ORDERS_STATUS_HISTORY." ADD track_id6 TEXT";
        $db->Execute($sql);
    }  

$admin_page = 'configProdPaketTracking';
// delete configuration menu
$db->Execute("DELETE FROM " . TABLE_ADMIN_PAGES . " WHERE page_key = '" . $admin_page . "' LIMIT 1;");
// add configuration menu
if (!zen_page_key_exists($admin_page)) {
$db->Execute(" SELECT @gid:=configuration_group_id
FROM ".TABLE_CONFIGURATION_GROUP."
WHERE configuration_group_title= 'Paket Tracking'
LIMIT 1;");

$db->Execute("INSERT IGNORE INTO " . TABLE_ADMIN_PAGES . " (page_key,language_key,main_page,page_params,menu_key,display_on_menu,sort_order) VALUES 
('configProdPaketTracking','BOX_CONFIGURATION_PRODUCT_PAKETTRACKING','FILENAME_CONFIGURATION',CONCAT('gID=',@gid),'configuration','Y',@gid)");
$messageStack->add('Paket Tracking Konfiguration erfolgreich hinzugefügt.', 'success');  
}