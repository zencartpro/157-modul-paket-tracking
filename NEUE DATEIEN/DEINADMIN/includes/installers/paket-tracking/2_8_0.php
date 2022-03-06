<?php
$db->Execute("DELETE FROM " . TABLE_CONFIGURATION . " WHERE configuration_key = 'TY_TRACKER';");
$db->Execute("DELETE FROM " . TABLE_CONFIGURATION_LANGUAGE . " WHERE configuration_key = 'TY_TRACKER';");
$db->Execute("UPDATE " . TABLE_CONFIGURATION . " SET configuration_value = '2.8.0' WHERE configuration_key = 'PAKETTRACKING_MODUL_VERSION' LIMIT 1;");