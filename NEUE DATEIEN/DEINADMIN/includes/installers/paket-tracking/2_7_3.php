<?php
$db->Execute("UPDATE " . TABLE_CONFIGURATION . " SET configuration_value = '2.7.3' WHERE configuration_key = 'PAKETTRACKING_MODUL_VERSION' LIMIT 1;");