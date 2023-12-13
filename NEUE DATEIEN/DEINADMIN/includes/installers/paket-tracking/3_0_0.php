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
$db->Execute("UPDATE " . TABLE_CONFIGURATION . " SET configuration_value = '3.0.0' WHERE configuration_key = 'PAKETTRACKING_MODUL_VERSION' LIMIT 1;");