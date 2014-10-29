<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Medicinale
 *
 * @author jano
 */
class MedicinaleController extends AppController{

    public function index(){
        $this->set("medicinale",$this->Medicinale->find("all"));
    }
    
}
