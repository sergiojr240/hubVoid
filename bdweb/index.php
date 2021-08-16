<!DOCTYPE html>
<html>
<head>
<title>Sistema web?teste</title>
</head>
<body>

<h1> Banco de dados </h1>

<span style="color:red">
    <?php
        $msg = !empty($_GET['msg']) ? $_GET['msg'] : ''; // Testa se a variavel esta definida ou não
        if($msg){
            echo $msg.'</br><br>';
        }
    ?>
</span>

<a href="cadastro.php">CADASTRAR</a>
-
<a href="login.php">LOGIN</a>

<br><br>
<?php
    echo "Sistema de Banco de Dados para Web";
    echo "<br>";
?>

</body>
</html>