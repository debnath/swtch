<?php
namespace DAO;
//@todo add in PHPUnit tests if time permits.

require("../src/dao/UserDAO.php");

$userModel = new \DAO\UserDAO();

echo "\n Testing getUserById() \n ";
$user = $userModel->getUserById(3);
echo $user['first_name'];

echo "\n Testing getUsers() \n ";
$users = $userModel->getUsers('first_name', 0, 3);
echo print_r($users, true);

echo "\n Testing getCount() \n ";
$count = $userModel->getCount();
echo print_r($count, true);
?>