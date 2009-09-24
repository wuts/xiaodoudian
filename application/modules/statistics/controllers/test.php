<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Test extends Public_Controller{
    function __construct(){
        parent::Public_Controller();
        $this->load->model("statistics_m");
        $this->load->library("unit_test");
    }

    function test_countStatistics(){
        $this->unit->run("1+1","2","test");
    }
}

?>
