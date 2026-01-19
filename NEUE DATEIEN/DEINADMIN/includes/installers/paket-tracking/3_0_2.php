<?php
$db->Execute("UPDATE " . TABLE_CONFIGURATION . " SET configuration_value = '3.0.2' WHERE configuration_key = 'PAKETTRACKING_MODUL_VERSION' LIMIT 1;");