<?php
$db->Execute("UPDATE " . TABLE_CONFIGURATION . " SET configuration_value = '2.7.0' WHERE configuration_key = 'PAKETTRACKING_MODUL_VERSION' LIMIT 1;");