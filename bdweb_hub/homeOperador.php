<html>
<head>
<title>Sistema web</title>
<style>
#hub {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#hub td, #hub th {
  border: 1px solid #ddd;
  padding: 8px;
}

#hub tr:nth-child(even){background-color: #f2f2f2;}

#hub tr:hover {background-color: #ddd;}

#hub th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #a80000;
  color: white;
}

#hub2 {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 20%;
}

#hub2 td, #hub th {
  border: 1px solid #ddd;
  padding: 8px;
}

#hub2 tr:nth-child(even){background-color: #f2f2f2;}

#hub2 tr:hover {background-color: #ddd;}

#hub2 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #a80000;
  color: white;
}

.button {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #a80000;
  border-radius: 25px;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.header{
  background-color:#a80000;
  color:white;
  font-family:verdana;
  text-align:center;
  padding:20px 50px;
}
.header2{
  color:#a80000;
  font-family:verdana;
}
body {
  background-image: url("imagens/background.jpg");
}
</style>
</head>
<body>

<?php
    // Start the session
    session_start();
    if($_SESSION["logado"]==true){

?>
        
    <h1 class='header'><b>Operador - Seja Bem Vindo <?php echo $_SESSION['email']; ?> </b></h1>

    <?php //Conexão com o banco de dados
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
    ?>

    <h2 class='header2'><b>Solicitações</b></h2>

    <?php
    $sql = "SELECT * FROM solicitacoes";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row

      echo "<table id='hub2'>";
      
      while($row = $result->fetch_assoc()){
        $id = $row["id_solicitacoes"];
    ?>
        <tr>
            <td> <?php 
                switch ($id) {
                  case 1:
                      echo "Em atraso";
                      break;
                  case 2:
                      echo "Pendentes";
                      break;
                  case 3:
                      echo "Finalizadas";
                      break;
                  case 4:
                      echo "Entrega";
                  break;
                  case 5:
                      echo "Retirada";
                  break;
              }            
            ?> </td>
            <td> <?php echo $row["quantidade"]; ?> </td>
          </tr>
    <?php               
      }
      echo "</table>";
    } else {
      echo "0 results";
      }
    ?>

    <h2 class='header2'><b>Cadastros</b></h2>

    <?php
    $sql = "SELECT * FROM usuario";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row

      echo "<table id='hub'>
      <tr>
          <th>Nome</th>
          <th>E-mail</th>
          <th>Telefone</th>
          <th>Função</th>
          <th>Editar</th>
          <th>Excluir</th>
      </tr>";

      while($row = $result->fetch_assoc()){
        $id = $row["id"];
    ?>
        <tr>
            <td> <?php echo $row["nome"]; ?> </td>
            <td> <?php echo $row["email"]; ?> </td>
            <td> <?php echo $row["telefone"]; ?> </td>
            <td> <?php echo $row["funcao"]; ?> </td>
            <td align='center' >
            <a type="button" target="blank"  href='editar.php?id=<?php echo $id; ?>' value="Editar"><img src= 'imagens/edit.png' style='height:30px' alt='Editar'></a>
            </td>
            <td align='center' >
            <a type="button" target="blank"  href='confirmarDelete.php?id=<?php echo $id; ?>' value="Excluir" onclick="return confirm('Tem certeza que quer prosseguir com o cancelamento?')"><img src= 'imagens/delete.png' style='height:30px' alt='Excluir'></a>
            </td>
          </tr>
    <?php               
      }
      echo "</table>";
    } else {
      echo "0 results";
      }

    $conn->close();

    } else{
        echo "Usuario não cadastrado";
    }
    ?>
<br>
<form action="logout.php">
  <input type="submit" class="button" value="Logout">
</form> 
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