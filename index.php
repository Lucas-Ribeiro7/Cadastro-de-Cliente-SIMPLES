<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>

    <h2>Sistema de Cadastro</h2>
    <form action="processa.php" method="POST" name="Cadastro">
        <label>Nome:</label>
        <input type="text" name="nome" placeholder="Digite seu Nome">
        <br>
        <br>
        <label>Sobrenome:</label>
        <input type="text" name="sobrenome" placeholder="Digite seu Sobrenome">
        <br>
        <br>
        <input type="submit" name="enviar" value="Cadastrar">
    </form>
    
</body>
</html>