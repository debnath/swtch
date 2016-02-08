<?php

namespace DAO;

require 'BaseDAO.php';

class UserDAO extends BaseDAO {
    protected $_tableName = 'user';

    public function getUserById($user_id) {
        return $this->find('user_id', $user_id);
    }

    public function getUsers($orderby = 'user_id', $offset = 0, $limit = 10) {
        return $this->findAll($orderby, $offset, $limit);
    }

    public function getCount() {
        return $this->count();
    }

    public function keywordSearch($keyword, $orderby = 'user_id', $offset = 0, $limit = 10) {
        $fields = "last_name, first_name, email, role, department, street_address_1, suburb, state, country";
        return $this->fullTextSearch($keyword, $fields, $orderby, $offset, $limit);
    }
}