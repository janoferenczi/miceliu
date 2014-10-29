<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PreturiController
 *
 * @author jano
 */
class PreturiController extends AppController{
    public function index(){
        $this->set("preturi",$this->Preturi->find("all"));
    }
}
