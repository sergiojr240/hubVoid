<!DOCTYPE html>
<html>
<head>
<title>Sistema web</title>
</head>
<body>

<?php
    // Start the session
    session_start();
?>

<h1> Validar Usuario </h1>

<?php
$email = $_POST["email"];
$senha = $_POST["senha"];
$_SESSION["logado"] = false;
$_SESSION["email"] = $email;

$funcaoAdm = "administrador";
$funcaoOpr = "operador";
$funcaoUsr = "usuario";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "epiz_28940963_VOID_HUB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM usuario";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Comparar as informações
  while($row = $result->fetch_assoc()) {
      if($row["email"] == $email && $row["senha"] == sha1($senha)){
          $_SESSION["logado"] = true;
          $funcao = $row["funcao"];
          $id = $row["id"];
          $nome = $row["nome"];
      }
  }
} else {
  echo "0 results";
}

if($_SESSION["logado"]){
  $_SESSION["identificador"] = $id;
  $_SESSION["nome"] = $nome;
  if($funcao == $funcaoAdm){
    header("LOCATION: home.php");
  }
else if($funcao == $funcaoOpr){
    header("LOCATION: homeOperador.php");
  }
  else if($funcao == $funcaoUsr){
    header("LOCATION: homeUsuario.php");
  }
} else{
    header("LOCATION: login.php?msg=Dados invalidos");
}
$conn->close();
?>

</body>
</html>