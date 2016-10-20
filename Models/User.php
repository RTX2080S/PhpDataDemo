<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author LL
 */
class User {

    public $id;
    public $name;
    public $password;
    
    public function display() {
        return sprintf('<p>ID = %s; Name = %s</p>', $this->id, $this->name);
    }

}
