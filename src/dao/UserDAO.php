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

    public function fullTextSearch($queryString, $orderby = 'user_id', $offset = 0, $limit = 10) {
        $fields = "last_name, email, role, department, street_address_2, suburb, state, postcode, country";
        return $this->fullTextSearch($queryString, $fields, $orderby, $offset, $limit);
    }
}