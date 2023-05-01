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

    switch($action) {
        case 'show_portal':
            $teams = TeamsDB::get_teams();
            $projects = ProjectsDB::get_projects();
            $requests = QuoteRequestDB::get_requests();
            $employees = EmployeesDB::get_employees();
            include('../views/admin_portal.php');
            break;
        case 'create_team':
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
            TeamsDB::create_team($name);
            $teams = TeamsDB::get_teams();
            $projects = ProjectsDB::get_projects();
            $requests = QuoteRequestDB::get_requests();
            $employees = EmployeesDB::get_employees();
            include('../views/admin_portal.php');
            break;
        case 'create_project':
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
            $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_SPECIAL_CHARS);
            $team = filter_input(INPUT_POST, 'team', FILTER_SANITIZE_SPECIAL_CHARS);
            ProjectsDB::create_project($name, $email, $description, $team);
            $teams = TeamsDB::get_teams();
            $projects = ProjectsDB::get_projects();
            $requests = QuoteRequestDB::get_requests();
            $employees = EmployeesDB::get_employees();
            include('../views/admin_portal.php');
            break;
        case 'create_employee':
            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
            $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
            $type = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_SPECIAL_CHARS);
            $team = filter_input(INPUT_POST, 'team', FILTER_SANITIZE_SPECIAL_CHARS);
            EmployeesDB::create_employee($type, $username, $password, $team);
            $teams = TeamsDB::get_teams();
            $projects = ProjectsDB::get_projects();
            $requests = QuoteRequestDB::get_requests();
            $employees = EmployeesDB::get_employees();
            include('../views/admin_portal.php');
            break;
        case 'delete_request':
            $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
            QuoteRequestDB::delete_request($id);
            $teams = TeamsDB::get_teams();
            $projects = ProjectsDB::get_projects();
            $requests = QuoteRequestDB::get_requests();
            $employees = EmployeesDB::get_employees();
            include('../views/admin_portal.php');
            break;
    }

?>