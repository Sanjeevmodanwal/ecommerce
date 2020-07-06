<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Auth extends CI_Model {
   
     public function __construct() {
        parent::__construct();
        $this->chk();
    }
    
    public function chk(){
         if (isset($_SESSION['user'])) {
            
        } else {
            redirect('login');
        }
    }
}
