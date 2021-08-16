<html>
<head>
<title>Sistema web - Cadastro</title>
</head>
<body>

<h1> Login </h1>

<span style="color:red">
    <?php
        $msg = !empty($_GET['msg']) ? $_GET['msg'] : ''; // Testa se a variavel esta definida ou não
        if($msg){
            echo $msg.'</br><br>';
        }
    ?>
</span>

<form action="validar_usuario.php" method="post">
    E-mail
    <input type="text" name="email">
    Senha
    <input type="password" name="senha">
    <input type="submit" value="enviar">
</form>

<br>
<a href="index.php">Voltar</a>
<br><br>

</body>
</html>