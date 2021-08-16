<!DOCTYPE html>
<html>
<head>
<title>Sistema web - Salvar...</title>
</head>
<body>

<h1> Salvar... </h1>


Bem Vindo <?php echo $_POST["nome"]; ?><br>
Seu endereço de email é: <?php echo $_POST["email"]; ?>
<br><br>

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

    $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('".$nome."', '".$email."', '".$senha."')";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php?msg=Usuário cadastrado com sucesso!');
        exit;
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>

<br><br>
<a href="index.php">Voltar</a>
<br><br>

</body>
</html>