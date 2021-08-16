<html>
<head>
<title>Sistema web - Atualizar...</title>
</head>
<body>

<h1> Atualizar... </h1>

<?php 
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = sha1($_POST['senha']);

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

    if(strlen($_POST['senha'])>0){
        $sql = "UPDATE usuario SET nome= '".$nome."', email= '".$email."', senha= '".$senha."' WHERE usuario.id= '".$_POST['id']."'";
    } else{
        $sql = "UPDATE usuario SET nome= '".$nome."', email= '".$email."' WHERE usuario.id= '".$_POST['id']."'";
    }

    if ($conn->query($sql) === TRUE) {
        header('Location: home.php?msg=Usuário atualizado com sucesso!');
        exit;
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>

<br><br>
<a href="home.php">Voltar</a>
<br><br>

</body>
</html>