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

if ($result->num_rows > 0) {
  // Comparar as informações
  while($row = $result->fetch_assoc()) {
      if($row["email"] == $email && $row["senha"] == sha1($senha)){
          $_SESSION["logado"] = true;
      }
    //echo "id: " . $row["id"]. " - Nome: " . $row["nome"]. "  - Email: " . $row["email"]. "<br>";
  }
} else {
  echo "0 results";
}

if($_SESSION["logado"]){
    header("LOCATION: home.php");
} else{
    header("LOCATION: login.php?msg=Dados invalidos");
}
$conn->close();
?>

</body>
</html>