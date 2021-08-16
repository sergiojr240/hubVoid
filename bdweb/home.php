<html>
<head>
<title>Sistema web</title>
</head>
<body>

<?php
    // Start the session
    session_start();

    if($_SESSION["logado"]==true){
        echo "<h1> Seja Bem Vindo ".$_SESSION["email"]." </h1>";
        echo "<a href='logout.php'>Logout</a></br>";

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


        $sql = "SELECT * FROM usuario";
        $result = $conn->query($sql);
        echo "<h2> Lista de Usuarios </h2>";
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " .$row["id"]. " - Nome: " .$row["nome"]. " - Email: " .$row["email"]. "<a href='editar.php?id=" .$row["id"]."'><img src=\"imagens/edit.png\"/ style='height:20px' alt='Editar'></a> <a href='confirmarDelete.php?id=" .$row["id"]."'><img src=\"imagens/delete.png\"/ style='height:20px' alt='Excluir'></a> <br>" ;
        }
        } else {
        echo "0 results";
        }
        $conn->close();
    } else{
        echo "Usuario não cadastrado";
    }
?>

</br>
<span style="color:red">
    <?php
        $msg = !empty($_GET['msg']) ? $_GET['msg'] : ''; // Testa se a variavel esta definida ou não
        if($msg){
            echo $msg.'</br><br>';
        }
    ?>
</span>
</body>
</html>