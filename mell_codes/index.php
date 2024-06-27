<?php

    session_start();

    include 'includes/db.php';
    include 'includes/header.php';

    // Para acessar uma URL (página) específica caso solicitada pelo usuário
    if (isset($_GET['page'])) { // Código sendo usado para carregar o conteúdo da página solicitada 
        $page = $_GET['page']; // Parâmetro da URL
        $filepath = "pages/$page.php"; // Construção e "encaminhamento" da URL

        if (file_exists($filepath)) {
            include $filepath;
        } else {
            echo "<p> Página não encontrada </p>";
        } 
        
    } else {
        include 'pages/feed.php'; // Direcionamento para página principal caso nenhuma outra seja solicitada
    }
    
    include 'includes/footer.php';

?>
