<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MiceliuController
 *
 * @author jano
 */
class MiceliuController extends AppController {
    
    public function index(){
        $this->set("micelius",$this->Miceliu->find("all"));
    }
}
