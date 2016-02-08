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
            $users = $userModel->getUsers($orderby, $offset, $limit);
            $count = $userModel->getCount();
            return array('count' => $count[0], 'users' => $users);
        } else {
            return "Invalid method: {$this->method}";
        }
    }

    protected function wordsearch() {
        if ($this->method === 'GET') {
            $userModel = new \DAO\UserDAO();
            $offset = isset($this->request['offset']) ? $this->request['offset'] : 0;
            $orderby = isset($this->request['orderby']) ? $this->request['orderby'] : 'user_id';
            $keyword = isset($this->request['keyword']) ? $this->request['keyword'] : '';
            return array('users' => $userModel->keywordSearch($keyword, $orderby, $offset));
        } else {
            return "Invalid method: {$this->method}";
        }
    }
}