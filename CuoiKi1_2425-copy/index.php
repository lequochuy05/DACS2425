<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Shortcut icon" href="img/logo.png" />
    <link rel="stylesheet" href="View/Register/style.css ">
    <link rel="stylesheet" href="View/Login/style.css">
</head>
<body>
    <script src="View/Register/register.js"></script>
</body>
</html>
<?php
    include "Model/DBconfig.php";
    include "Model/Register/register.php";
    include "Model/Login/login.php";
    $db = new Database();
    $db->connect();
    $db_regis = new db_register();
    $db_log = new db_login();
    
   
    if(isset($_GET['controller'])){
        $controller = $_GET['controller'];

    }else{
        $controller = '';
    }
    switch($controller){
        case 'register' : {
            require_once('Controller/Register/index.php');
        }
        case 'login':{
            require_once('Controller/Login/index.php');
        }

    }
?>