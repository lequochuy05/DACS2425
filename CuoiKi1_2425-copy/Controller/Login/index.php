<?php
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = '';
    }
    switch ($action) {
        case 'login':
            if(isset($_POST['login'])){
                $input_user = $_POST['username'];
                $input_pass = $_POST['password'];
                $tblTable = "danhsachtaikhoannguoidung";
               
                if (empty($input_user) || empty($input_pass)) {
                    echo 'Please fill in all information.';
                } else {    
                    if(!$db_log->checkUserExistence($input_user, $input_pass)){
                        echo 'Username/Password is Incorrect';
                    }else{
                    
                    }
                    
                     
                }               
            }
            require_once('View/Login/index.php');           
            break;

        default:
            echo 'Unknown error.';
            break;
    }
?>
