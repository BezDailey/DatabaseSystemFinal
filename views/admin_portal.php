<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile and Web Development Firm</title>
    <style>
        table, td {
            border: 1px solid;
        }
        nav {
            width: 100%;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        nav {
            width: 100%;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        nav a {
            text-decoration: none;
            color: black;
        }

        nav a:hover {
            cursor: point;
            color: gray;
        }
    </style>
</head>
    <body>
        <nav>
            <a href="../controllers/home_controller.php?action=show_home">Mobile and Web Development Firm</a>
            <a href="../controllers/home_controller.php?action=login">Login</a>
        </nav>
    </body>
    <h1>Admin Portal</h1>
    <div class="Teams">
        <h2>Teams</h2>
        <?php if ($teams != NULL): ?>
            <table>
            <?php foreach($teams as $team): ?>
                <tr>
                    <td><?php echo($team[1]); ?></td>
                </tr>
            <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
    <div class="Projects">
        <h2>Projects</h2>
        <?php if ($projects != NULL): ?>
            <table>
            <?php foreach($projects as $project): ?>
                <tr>
                    <td><?php echo($project[1]); ?></td>
                    <td><?php echo($project[2]); ?></td>
                    <td><?php echo($project[3]); ?></td>
                </tr>
            <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
    <div class="Requests">
        <h2>Quote Requests</h2>
        <?php if ($requests != NULL): ?>
            <table>
            <?php foreach($requests as $request): ?>
                <tr>
                    <td><?php echo($request->name); ?></td>
                    <td><?php echo($request->email); ?></td>
                    <td><?php echo($request->description); ?></td>
                    <td>
                        <form method="post" action="../controllers/admin_portal_controller.php" class="login_form">
                            <input type="hidden" name="action" value="delete_request">
                            <input type="hidden" name="id" value="<?php echo($request->id) ?>">
                            <input type="submit" value="delete">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
    <div class="Employees">
        <h2>Employees</h2>
        <?php if ($employees != NULL): ?>
            <table>
            <?php foreach($employees as $employee): ?>
                <tr>
                    <td><?php echo($employee[1]); ?></td>
                    <td><?php echo($employee[2]); ?></td>
                    <td><?php echo($employee[3]); ?></td>
                    <td><?php echo($employee[4]); ?></td>
                </tr>
            <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
    <div>
        <h2>Create Team Form</h2>
        <form method="post" action="../controllers/admin_portal_controller.php" class="login_form">
            <input type="hidden" name="action" value="create_team">
            <label for="name">Team Name:</label></br>
            <input type="text" id="name" name="name" required></br>
            <input type="submit" value="submit">
        </form>
    </div>
    <div>
        <h2>Create Project Form</h2>
        <form method="post" action="../controllers/admin_portal_controller.php" class="login_form">
            <input type="hidden" name="action" value="create_project">
            <label for="name">Client Name:</label></br>
            <input type="text" id="name" name="name" required></br>
            <label for="email">Client Email:</label></br>
            <input type="email" id="email" name="email" required></br>
            <label for="description">Project Description:</label></br>
            <textarea id="description" name="description" required></textarea></br>
            <label for="team">Project's Team:</label></br>
            <input type="number" id="team" name="team" required></br>
            <input type="submit" value="submit">
        </form>
    </div>
    <div>
        <h2>Create Employee Form</h2>
        <form method="post" action="../controllers/admin_portal_controller.php" class="login_form">
            <input type="hidden" name="action" value="create_employee">
            <label for="username">Employee's Username:</label></br>
            <input type="text" id="username" name="username" required></br>
            <label for="password">Employee's Password:</label></br>
            <textarea id="password" name="password" required></textarea></br>
            <label for="type">Employee's Type:</label></br>
            <input type="text" id="type" name="type" required></br>
            <label for="team">Employee's Team:</label></br>
            <input type="number" id="team" name="team" required></br>
            <input type="submit" value="submit">
        </form>
    </div>
</html>