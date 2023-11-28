<?php 
/**
 * @package Paket Tracking
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: paket_tracking_functions.php 2023-11-28 19:32:51Z webchills $
 */

if (!defined('IS_ADMIN_FLAG') || IS_ADMIN_FLAG !== true) {
    exit('Invalid access');
} 

function zen_build_keyword_where_clause_tracking($fields, $string, $startWithWhere = false)
    {
        global $db, $zco_notifier;

        $zco_notifier->notify('NOTIFY_BUILD_KEYWORD_SEARCH', '', $fields, $string);
        $where_str = '';
        if (zen_parse_search_string(stripslashes($string), $search_keywords)) {
            $where_str = " AND (";
            if ($startWithWhere) {
                $where_str = " WHERE (";
            }
            for ($i = 0, $n = count($search_keywords); $i < $n; $i++) {
                switch ($search_keywords[$i]) {
                    case '(':
                    case ')':
                        break;
                    case 'and':
                    case 'or':
                        $where_str .= " " . strtoupper($search_keywords[$i]) . " ";
                        break;
                    default:
                        $sql_add = " (";
                        $first_field = true;
                        $sql_or = ' ';
                        foreach ($fields as $field_name) {
                            if (!$first_field) {
                                $sql_or = ' OR ';
                            }
                            
                                $first_field = false;
                                $sql_add .= $sql_or;
                                $sql_add .= " :field_name LIKE '%:keyword%'";
                            
                            $sql_add = $db->bindVars($sql_add, ':field_name', $field_name, 'noquotestring');
                        }
                        $sql_add .= ") ";

                        $where_str .= $sql_add;

                        $where_str = $db->bindVars($where_str, ':keyword', addslashes($search_keywords[$i]), 'noquotestring');
                        $where_str = $db->bindVars($where_str, ':numeric_keyword', $search_keywords[$i], 'integer');
                        break;
                }
            }
            $where_str .= " )";
        }
        if (substr($where_str, -7) === '( ()  )') {
            return ' ';
        }
        return $where_str;
    }