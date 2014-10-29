<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CompostController
 *
 * @author jano
 */
class CompostController extends AppController {
    
    public $uses = array('Post');
    
    public function index(){
        $models = $this->Post->find("all");
        $this->set("posts",$models);
    }
}
