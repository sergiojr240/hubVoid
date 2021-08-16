<html>
<head>
<title>Sistema web</title>
</head>
<body>

<?php
    // Start the session
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "epiz_28940963_VOID_HUB";

    //$servername = "sql311.epizy.com";
    //$username = "epiz_28940963";
    //$password = "nZCxAtRNQENKD";
    //$dbname = "epiz_28940963_VOID_HUB";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    // sql to delete a record
    $sql = "DELETE FROM usuario WHERE usuario.id= '".$_POST['id']."'";

    if ($conn->query($sql) === TRUE) {
        header('Location: home.php?msg=Usuario removido com sucesso!');
    } else {
    echo "<br/> ERROR: " .$sql. "<br>" .$conn->error;
    }

    $conn->close();
?>
