<?php

    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = '';
    }
    $add_successful = array();

    switch ($action) {
        case 'add_user':
            if(isset($_POST['add_account'])){
                $input_user = $_POST['username'];
                $input_pass = $_POST['password'];
                $input_re_pass = $_POST['re_password'];
                $captcha = $_POST['captcha'];
                if (empty($input_user) || empty($input_pass) || empty($input_re_pass)) {
                    echo 'Please fill in all information.';
                } else {
                    if (checkPass_input($input_pass, $input_re_pass)) {
                        $hashPass = password_hash($input_pass, PASSWORD_DEFAULT);                       
                        $db_regis->Insert($input_user, $hashPass);
                        $add_successful[] = 'add_success';
                        echo 'User Added Successfully!';
                        exit;                       
                    } else {
                        echo 'Passwords do not match.';
                    }
                }
                
            }
            require_once('View/Register/index.php');  
            break; 
        default:
            echo 'Unknown error';
            break;
    }
?>
