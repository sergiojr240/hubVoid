<!DOCTYPE html>
<html>
<head>
<title>Sistema web - Cadastro</title>
</head>
<body>

<h1> Cadastro </h1>

<form action="salvar.php" method="post">
    Nome:
    <br><input type="text" name="nome"><br>
    Telefone:
    <br><input type="number" name="telefone"><br>
    E-mail:
    <br><input type="text" name="email"><br>
    Senha:
    <br><input type="password" name="senha"><br>
    Selecione uma das opções abaixo: <br>
    <input type="checkbox" id="administrador" name="funcao" value="administrador">
    <label for="funcao"> Eu sou administrador</label><br>
    <input type="checkbox" id="usuario" name="funcao" value="usuario">
    <label for="funcao"> Eu sou usuario</label><br>
    <input type="checkbox" id="operador" name="funcao" value="operador">
    <label for="funcao"> Eu sou operador</label><br>

    <input type="submit" value="cadastrar">

</form>

<br>
<a href="index.php">Voltar</a>
<br><br>

</body>
</html>