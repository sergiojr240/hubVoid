<!DOCTYPE html>
<html>
<head>
<title>Sistema web</title>
</head>
<body>

<h1> Banco de dados </h1>

<span style="color:red">
    <?php
        if($_GET['msg']){
            echo $_GET['msg'].'</br><br>';
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