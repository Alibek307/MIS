<?php
$title = $_POST['title'] ?? null;
$description = $_POST['description'] ?? null;

if (!empty($title) || !empty($description)){
    $sname= "localhost";
    $unmae= "root";
    $password = "";

$db_name = "mis";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if(mysqli_connect_error()){
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
} else{
    $SELECT = "SELECT title From projects Where title = ? ";
    $INSERT = "INSERT Into projects (title, description) values(?, ?)";

    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("s", $title);
    $stmt->execute();
    $stmt->bind_result($title);
    $stmt->store_result();


    $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("ss", $title, $description);
    $stmt->execute();
    echo "Project Successfully Posted";
    }
} else{
    echo "Error";
    die();
}

?>
