 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Igresso de Aeroporto </title>
    <link rel="stylesheet" href="css/style.css">
 </head>

 <body>
    <div class="card">
        <h2>Entrada no Aeroporto</h2>
        <p class="form-intro">Preencha seus dados para solicitar a passagem.</p>

        <form action="aeroporto_igresso.php" method="POST">
            
        
        <label for="usuario">Usuário:</label>
        
        <input type="text" id="usuario" name="usuario">
            
        <label for="idade">Idade:</label>
        
        <input type="Number" id="idade" name="idade">

    
        <input type="submit" value="Adquirir passagem">

    </form>
<!-- 
    <footer>
        &copy; Enzo Araújo - 2026
    </footer> -->
</div>
 </html>