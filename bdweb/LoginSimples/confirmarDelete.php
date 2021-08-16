<!DOCTYPE html>
<html>
<head>
<title>Sistema web</title>
</head>
<body>

<?php
    // Start the session
    session_start();

    if($_SESSION["logado"]==true){
        echo "<h1> delete php </h1>";
        echo "<a href='logout.php'>Logout</a></br>";

        $servername = "sql311.epizy.com";
        $username = "epiz_28940963";
        $password = "nZCxAtRNQENKD";
        $dbname = "epiz_28940963_VOID_HUB";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }


        $sql = "SELECT * FROM usuario";
        $result = $conn->query($sql);
        echo "<h2> Lista de Usuarios </h2>";
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " .$row["id"]. " - Nome: " .$row["nome"]. " - Email: " .$row["email"].;
        }
        } else {
        echo "0 results";
        }
        $conn->close();
    } else{
        echo "Usuario não cadastrado";
    }
?>

</body>
</html>