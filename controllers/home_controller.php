<?php
    require_once('../models/database.php');
    require_once('../models/employees_db.php');
    //require_once("../models/project_db.php");
    //require_once("../models/quote_request_db.php");
    //require_once("../models/teams_db.php");
    
    if (isset($_POST['action'])) { 
        $action = $_POST['action'];
    } else if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'show_home';
    }

    switch($action) {
        case 'show_home':
            include('../views/home.php');
            break;
        case 'login':
            header('Location: ../controllers/login_form_controller.php');
            break;
        case 'get_quote':
            header('Location: ../controllers/quote_form_controller.php');
            break;
    }


?>