<?php
// Since Version 3.0.0 the additional fields for day, month and year are not used anymore, so we remove them if they still exist
//check if track_day column exists - if yes remove it
    $sql ="SHOW COLUMNS FROM ".TABLE_ORDERS_STATUS_HISTORY." LIKE '%track_day%'";
    $result = $db->Execute($sql);
    if($result->RecordCount())
    {
        $sql = "ALTER TABLE ".TABLE_ORDERS_STATUS_HISTORY." DROP COLUMN track_day";
        $db->Execute($sql);
    }
    
    //check if track_month column exists - if yes remove it
    $sql ="SHOW COLUMNS FROM ".TABLE_ORDERS_STATUS_HISTORY." LIKE '%track_month%'";
    $result = $db->Execute($sql);
    if($result->RecordCount())
    {
        $sql = "ALTER TABLE ".TABLE_ORDERS_STATUS_HISTORY." DROP COLUMN track_month";
        $db->Execute($sql);
    }
    
    //check if track_year column exists - if yes remove it
    $sql ="SHOW COLUMNS FROM ".TABLE_ORDERS_STATUS_HISTORY." LIKE '%track_year%'";
    $result = $db->Execute($sql);
    if($result->RecordCount())
    {
        $sql = "ALTER TABLE ".TABLE_ORDERS_STATUS_HISTORY." DROP COLUMN track_year";
        $db->Execute($sql);
    }
// delete unused config settings
$db->Execute("DELETE FROM ".TABLE_CONFIGURATION." WHERE configuration_key LIKE '%CARRIER_LINK_6_PART1%')");  
$db->Execute("DELETE FROM ".TABLE_CONFIGURATION." WHERE configuration_key LIKE '%CARRIER_LINK_6_PART2%')"); 
$db->Execute("DELETE FROM ".TABLE_CONFIGURATION." WHERE configuration_key LIKE '%CARRIER_LINK_6_PART3%')"); 
$db->Execute("DELETE FROM ".TABLE_CONFIGURATION." WHERE configuration_key LIKE '%CARRIER_LINK_6_PART4%')"); 
$db->Execute("DELETE FROM ".TABLE_CONFIGURATION_LANGUAGE." WHERE configuration_key LIKE '%CARRIER_LINK_6_PART1%')");  
$db->Execute("DELETE FROM ".TABLE_CONFIGURATION_LANGUAGE." WHERE configuration_key LIKE '%CARRIER_LINK_6_PART2%')"); 
$db->Execute("DELETE FROM ".TABLE_CONFIGURATION_LANGUAGE." WHERE configuration_key LIKE '%CARRIER_LINK_6_PART3%')"); 
$db->Execute("DELETE FROM ".TABLE_CONFIGURATION_LANGUAGE." WHERE configuration_key LIKE '%CARRIER_LINK_6_PART4%')"); 
// insert normal tracking link 6
$db->Execute(" SELECT @gid:=configuration_group_id
FROM ".TABLE_CONFIGURATION_GROUP."
WHERE configuration_group_title= 'Paket Tracking'
LIMIT 1;");
$db->Execute("INSERT IGNORE INTO ".TABLE_CONFIGURATION." (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added, last_modified, use_function, set_function) VALUES
('Package Tracking - Carrier 6 Tracking Link', 'CARRIER_LINK_6', 'https://www.deutschepost.de/de/s/sendungsverfolgung.html?piececode=', 'Enter the tracking link of Carrier 6<br /> <br /><strong>Example:</strong> https://www.deutschepost.de/de/s/sendungsverfolgung.html?piececode=', @gid, 18, now(), now(), NULL, NULL)");     
$db->Execute("REPLACE INTO ".TABLE_CONFIGURATION_LANGUAGE." (configuration_title, configuration_key, configuration_description, configuration_language_id) VALUES
('Paket Tracking - Versandunternehmen 6 Tracking Link', 'CARRIER_LINK_6','Geben Sie Tracking Link von Versandunternehmen 6 ein.<br /> Beispiel: https://www.deutschepost.de/de/s/sendungsverfolgung.html?piececode=', 43)");
// set module version to 3.0.0
$db->Execute("UPDATE " . TABLE_CONFIGURATION . " SET configuration_value = '3.0.0' WHERE configuration_key = 'PAKETTRACKING_MODUL_VERSION' LIMIT 1;");