<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?php print $cabecalho_title; ?></title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
    <?php print @$cabecalho_css; ?>
</head>

<body>

    <header class="container">
        <!-- Conteúdo do cabeçalho -->
        <h1><img src="img/logo.png" alt="Mirror Fashion"></h1>

        <p class="sacola">
            Nenhum item na sacola de compras
        </p>

        <nav class="menu-opcoes">
            <!-- ul>li*5>a -->
            <ul>
                <li><a href="#">Sua Conta</a></li>
                <li><a href="#">Lista de Desejos</a></li>
                <li><a href="#">Cartão Fidelidade</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="#">Ajuda</a></li>
            </ul>
        </nav>
    </header>