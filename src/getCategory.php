<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of getCategory
 *
 * @author ASUS
 */
class getCategory {

    public function __construct() {
        $conn = mysql_connect('localhost', 'root', '') or die('can nit connect to DB');
        mysql_select_db('brighter2morrow', $conn) or die('can not connect to db');
    }

    function build_category_tree(&$output, $preselected, $parent = 0, $indent = "") {
        $r = mysql_query("SELECT `id`,`title` FROM `categories` WHERE `parent_id` =" . $parent . "");

        while ($c = mysql_fetch_array($r, MYSQL_ASSOC)) {
            $selected = ($c["id"] == $preselected) ? "selected=\"selected\"" : "";
            $output .= "<option value=\"" . $c["id"] . "\" " . $selected . ">" . $indent . $c["title"] . "</option>";
            if ($c["id"] != $parent) {
                build_category_tree($output, $preselected, $c["id"], $indent . "&nbsp;&nbsp;");
            }
        }
    }

}
