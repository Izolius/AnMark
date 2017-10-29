<?php
$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
    case 'HEAD':
        if (file_exists($_GET['file']))
            echo filesize($_GET['file']);
        break;
    case 'GET':
        if (file_exists($_GET['file']))
            echo file_get_contents($_GET['file']);
        break;
    case 'POST':
        file_put_contents($_GET['file'],file_get_contents('php://input'));
        break;
    case 'DELETE':
        if (file_exists($_GET['file']))
            unlink($_GET['file']);
        break;
    case 'PATCH':
        file_put_contents($_GET['file'],file_get_contents('php://input'),FILE_APPEND);
        break;
}
?>