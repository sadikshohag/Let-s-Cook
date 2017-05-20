<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of utility
 *
 * @author Web App Develop PHP
 */

namespace App\utility;

class utility {

    //put your code here
    public function debug($data = '') {
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }

}
