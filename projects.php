<?php
include 'db_conn.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <header class="container">
        <nav class="nav">
            <ul class="nav__menu">
                <li class="nav__menu_item">
                    <a href="index.html">Home</a>
                </li>
                <li class="nav__menu_item">
                    <a class="nav__menu_active" href="projects.php">Projects</a>
                </li>
                <li class="nav__menu_item">
                    <a href="tutorial.html">Tutorial</a>
                </li>
                <li class="nav__menu_item">
                    <a href="login.php">Log In</a>
                </li>
                <li class="nav__menu_item">
                    <a href="signup.php">Sign Up</a>
                </li>
            </ul>
            <div class="nav__btn">
                <div>
                    <a href="">Post a project</a>
                </div>
            </div>
        </nav>
    </header>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <?php
    $sql= "SELECT * FROM projects";
    $result = mysqli_query($sql);
    if($result){
        $row = mysqli_fetch_assoc($result);
        echo $row['title'];
    }
         ?>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</body>

</html>