<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IntrebariController
 *
 * @author jano
 */
class IntrebariController extends AppController {

    public function index(){
        $this->set("intrebari",$this->Intrebari->find("all"));
    }
    
}
