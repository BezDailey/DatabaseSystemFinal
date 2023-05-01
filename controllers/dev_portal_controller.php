<?php
    require_once("../models/database.php");
    require_once("../models/projects_db.php");
    require_once("../models/teams_db.php");
    require_once("../models/quote_request_db.php");
    require_once("../models/employees_db.php");
    require_once("../models/request.php");

    if (isset($_POST['action'])) { 
        $action = $_POST['action'];
    } else if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'show_portal';
    }

    switch ($action) {
        case 'show_portal':
            $teams = TeamsDB::get_teams();
            $projects = ProjectsDB::get_projects();
            $requests = QuoteRequestDB::get_requests();
            $employees = EmployeesDB::get_employees();
            include('../views/dev_portal.php');
            break;
    }
?>