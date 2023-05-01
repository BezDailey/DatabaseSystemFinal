<?php
    require_once("../models/database.php");
    require_once("../models/quote_request_db.php");

    if (isset($_POST['action'])) { 
        $action = $_POST['action'];
    } else if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'show_form';
    }

    switch($action) {
        case 'show_form':
            include("../views/quote_form.php");
            break;
        case 'request_quote':
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
            $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_SPECIAL_CHARS);
            QuoteRequestDB::create_request($name, $email, $description);
            header('Location: ../controllers/home_controller.php');
            break;

    }


?>