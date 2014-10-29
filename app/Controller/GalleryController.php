<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GalleryController
 *
 * @author Jano
 */
class GalleryController extends AppController {

    public function index(){
        $this->set("images", $this->Gallery->findAll());
    }
    
    public function add(){
        if(!empty($this->data)) { 
          $this->Gallery->save($this->data); 
       } 
    }
    
}
