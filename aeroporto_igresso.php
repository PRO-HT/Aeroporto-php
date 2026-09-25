<?php
declare(strict_types=1);
session_start();

if (isset($_POST['usuario'], $_POST['idade'])) {

if (!empty($_POST['usuario']) && !empty($_POST['idade'])) {

    $usuario = htmlspecialchars($_POST['usuario']);

    $idade = htmlspecialchars($_POST['idade']);
    
    if($idade >= 18 ){
        $comentario = "Bem vindo! ✈️ <br> Você esta autorizado a viajar   <br> <h2>  Suas informações  </h2> Nome: $usuario <br> Idade: $idade ";
    } else {
        $comentario = "Bem vindo! ✈️ <br> Você Não esta autorizado a viajar    <br> <h2>  Suas informações  </h2> Nome: $usuario <br> Idade: $idade   <br> <strong> Necessario ir com os responsáveis </strong>  ";
    }

} else {
    $comentario = "Você necessita preencher os seus dados";
}

} else {
    $comentario = "Você necessita preenhcer os seus dados";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aeroporto</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <main class="card resultado">
        <h2>Resultado da viagem</h2>
        <p><?php echo $comentario; ?></p>
        <a href="aeroporto_login.php">Voltar ao formulário</a>
    </main>

    <!-- 
    <footer>
        &copy; Enzo Araújo - 2026
    </footer> --> 
    
</body>
</html>

