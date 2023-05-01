<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile and Web Development Firm</title>
    <style>
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

        .login_form_container {
            border: 1px solid;
            width: 85%;
            margin-top: 1em;
            margin-left: 5%;
            margin-right: 5%;
            padding-left: 2.5%;
            padding-right: 2.5%;
        }
    </style>
</head>
    <body>
        <nav>
            <a href="../controllers/home_controller.php?action=show_home">Mobile and Web Development Firm</a>
            <a href="../controllers/home_controller.php?action=login">Login</a>
        </nav>
    </body>
    <div class="login_form_container">
        <h2>Login Form</h2>
        <form method="post" action="../controllers/login_form_controller.php" class="login_form">
            <input type="hidden" name="action" value="attempt_login">
            <label for="username">Username:</label></br>
            <input type="text" id="username" name="username" required></br>
            <label for="password">Password:</label></br>
            <input type="text" id="password" name="password" required></br>
            <input type="submit" value="submit">
        </form>
    </div>
</html>