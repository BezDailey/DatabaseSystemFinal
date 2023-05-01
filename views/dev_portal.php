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
        <h1>Developer Portal</h1>
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
    </body>
</html>