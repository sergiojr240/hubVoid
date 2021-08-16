<html>
<head>
<title>Sistema web</title>
</head>
<body>

<?php
    // Start the session
    session_start();

    if($_SESSION["logado"]==true){
        echo "<h1> Usuário: ".$_SESSION["email"]." </h1>";
       
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "epiz_28940963_VOID_HUB";

        //$servername = "sql311.epizy.com";
        //$username = "epiz_28940963";
        //$password = "nZCxAtRNQENKD";
        //$dbname = "epiz_28940963_VOID_HUB";
        $id = $_GET['id'];

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }


        $sql = "SELECT * FROM usuario WHERE id=" .$id;

        $result = $conn->query($sql);
        echo "<h2> Tem certeza que deseja excluir esse usuário? </h2>";
        if ($result->num_rows > 0) {
             $row = $result->fetch_assoc();
             echo "<form action='deletar.php' method='post'>";
             echo "<input type='hidden'name='id' value='".$id."'>"; //Id via campo oculto "hidden"
             echo "id: " .$row["id"]. " - Nome: " .$row["nome"]. " " .$row["email"]." ";
             echo "<input type='submit' value='Excluir'>";
        } else {
        echo "0 results";
        }
        $conn->close();
    } else{
        echo "Usuario não cadastrado";
    }    

?>

</br></br><a href="home.php">Voltar</a></br>
</body>
</html>