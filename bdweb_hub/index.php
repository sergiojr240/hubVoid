<!DOCTYPE html>
<html>
<head>
<title>Sistema web</title>
<style>
.center {
  margin: auto;
  width: 10%;
  padding: 10px 0;
}
.center2 {
  margin: auto;
  width: 8%;
  padding: 10px 0;
}
.button {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #04AA6D;
  border-radius: 25px;
  border: none;
  color: white;
  padding: 12px 50px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
body {
  background-image: url("imagens/background.jpg");
}
</style>
</head>
<body>

<h1 style="background-color:#04AA6D; color:white; font-family:verdana; text-align:center; padding: 30px 50px;"> <b>Hub de serviços</b> </h1>

<span style="color:red; font-family:verdana; text-align:center;">
    <?php
        $msg = !empty($_GET['msg']) ? $_GET['msg'] : ''; // Testa se a variavel esta definida ou não
        if($msg){
            echo $msg.'</br><br>';
        }
    ?>
</span>

<div class="center">
<p>
<form action="cadastro.php";>
  <input type="submit" class="button" value="Cadastrar">
</form> 
</p></div>
<div class="center2">
<p>
<form action="login.php";>
  <input type="submit" class="button" value="Login">
</form> 
</p></div>

<br><br>
<?php
    echo "Sistema de Banco de Dados para Web";
?>

</body>
</html>