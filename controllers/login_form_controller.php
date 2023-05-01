<?php
    require_once("../models/database.php");
    require_once("../models/employees_db.php");

    if (isset($_POST['action'])) { 
        $action = $_POST['action'];
    } else if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'show_form';
    }

    switch($action) {
        case 'show_form':
            include("../views/login_form.php");
            break;
        case 'attempt_login':
            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
            $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
            if(EmployeesDB::is_employee($username, $password)) {
                if(EmployeesDB::is_admin($username)) {
                    header('Location: ../controllers/admin_portal_controller.php');
                } else {
                    header('Location: ../controllers/dev_portal_controller.php');
                }
            } else {
                include("../views/login_form.php");
            }
            break;
    }
?>