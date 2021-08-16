<html>
<head>
<title>Sistema web - Solicitação</title>
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

<h2 style="font-size:180%; color:#04AA6D; font-family:verdana; padding: 3px 5px;"><b>Nova Solicitação</b></h2>

<span style="color:red">
    <?php
        $msg = !empty($_GET['msg']) ? $_GET['msg'] : ''; // Testa se a variavel esta definida ou não
        if($msg){
            echo $msg.'</br><br>';
        }
    ?>
</span>

<form action="salvarSolicitacao.php" method="post"> 
    <p style= "color:#04AA6D; font-size:120%";><b>
    E-mail
    <input type="text" name="email">
    Senha
    <input type="password" name="senha">
    <input type="submit" class="button" value="enviar">
    </b></p>
</form>

<br>
<form action="index.php";>
  <input type="submit" class="button" value="Voltar">
</form> 
<br><br>

</body>
</html>