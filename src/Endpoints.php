<?php
require_once('RequestHandler.php');
require_once('dao/UserDAO.php');


class Endpoints extends RequestHandler
{
    protected function user() {
        if ($this->method == 'GET') {
            $userModel = new \DAO\UserDAO();
            return $userModel.getUserById(2);  //$this->args[0])  //something funny going on here. 
        } else {
            return "Invalid method: {$this->method}";
        }
    }

    protected function users() {
        if ($this->method == 'GET') {
            return "Logic in here for User DAO Multiple";
        } else {
            return "Invalid method: {$this->method}";
        }
    }
}