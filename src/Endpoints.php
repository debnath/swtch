<?php
require_once('RequestHandler.php');
require_once('dao/UserDAO.php');


class Endpoints extends RequestHandler
{
    protected function user() {
        if ($this->method === 'GET') {
            $userModel = new \DAO\UserDAO();
            return $userModel->getUserById($this->args[0]);
        } else {
            return "Invalid method: {$this->method}";
        }
    }

    protected function users() {
        if ($this->method === 'GET') {
            $userModel = new \DAO\UserDAO();
            $limit = 10;
            $offset = $this->request['offset'] ? $this->request['offset'] : 0;
            $orderby = $this->request['orderby'] ? $this->request['orderby'] : 'user_id';
            return $userModel->getUsers($orderby, $offset, $limit);
        } else {
            return "Invalid method: {$this->method}";
        }
    }

    /*
     * Currently not working
     */
    protected function search() {
        if ($this->method === 'GET') {
            $userModel = new \DAO\UserDAO();
            $offset = $this->request['offset'] ? $this->request['offset'] : 0;
            $orderby = $this->request['orderby'] ? $this->request['orderby'] : 'user_id';
            $queryString = $this->request['queryString'] ? $this->request['queryString'] : '';
            return $userModel->fullTextSearch($queryString, $orderby, $offset);
        } else {
            return "Invalid method: {$this->method}";
        }
    }
}