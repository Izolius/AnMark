<?php
$req_method = $_SERVER['REQUEST_METHOD'];
switch ($req_method) {
    case 'HEAD':
        if (file_exists($_GET['file']))
            echo filesize($_GET['file']);
        break;
    case 'GET':
        $api_method=$_GET['method'];
        switch ($api_method){
            case 'CheckLoginPass':
                echo $_GET['Login'].' '.$_GET['Pass'];
                break;
        }
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