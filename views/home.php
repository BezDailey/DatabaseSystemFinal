<!DOCTYPE html>
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

        nav a {
            text-decoration: none;
            color: black;
        }

        nav a:hover {
            cursor: point;
            color: gray;
        }

        .projects {
            width: 100%;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

        .project {
            width: 25%;
            height: 500px;
            display: flex;
            flex-direction: column;
        }

        .project_img {
            width: 100%;
            height: 25%;
            background-color: black;
        }

        .project_img:hover {
            background-color: gray;
            cursor: pointer;
        }

        .hero {
            width: 100%;
            height: 50vh;
            margin: 0;
            padding: 0;
            background-color: black;
            color: white;
        }

        .hero button {
            float: right;
            margin-right: 10px;
        }
    </style>
</head>
    <body>
        <nav>
            <a href="../controllers/home_controller.php?action=show_home">Mobile and Web Development Firm</a>
            <a href="../controllers/home_controller.php?action=login">Login</a>
        </nav>
        <div class="hero">
            <h1>Atlanta's leading Mobile and Web Development Firm</h1>
            <form action="../controllers/home_controller.php" method="post">
                <input type="hidden" name="action" value="get_quote">
                <button type='submit'>Get a free quote</button>
            </form>
        </div>
        <div class="project_section">
            <h1>Our Projects</h1>
            <div class="projects">
                <div class="project">
                    <div class="project_img"></div>
                    <p>BrightSphere Consulting</p>
                </div>
                <div class="project">
                    <div class="project_img"></div>
                    <p>SwiftShift Solutions</p>
                </div>
                <div class="project">
                    <div class="project_img"></div>
                    <p>Nexus Innovations Inc.</p>
                </div>
            </div>
        </div>
    </body>
</html>