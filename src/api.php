<?php
require_once "Endpoints.php";

try {
    $API = new Endpoints($_REQUEST['request']);
    echo $API->processAPI();
} catch (Exception $e) {
    echo json_encode(Array('error' => $e->getMessage()));
}