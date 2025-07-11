<?php
$cabecalho_title = "Mirror Fashion";
include_once("cabecalho.php");
require_once("connection.php");
?>

<section id="main" class="container destaques">
    <!-- Conteúdo principal -->

    <section class="busca">
        <h2>Busca</h2>
        <form action="">
            <input type="search" name="busca">
            <input type="image" src="img/busca.png">
        </form>
    </section> <!-- fim .busca -->

    <section class="menu-departamentos">
        <h2>Departamentos</h2>

        <!-- nav>ul>li*7>a -->

        <nav>
            <ul>
                <li><a href="#">Blusas e Camisas</a>
                    <ul>
                        <li><a href="#">Manga curta</a></li>
                        <li><a href="#">Manga comprida</a></li>
                        <li><a href="#">Camisa social</a></li>
                        <li><a href="#">Camisa casual</a></li>
                    </ul>
                </li>
                <li><a href="#">Calças</a></li>
                <li><a href="#">Saias</a></li>
                <li><a href="#">Vestidos</a></li>
                <li><a href="#">Sapatos</a></li>
                <li><a href="#">Bolsas e Carteirs</a></li>
                <li><a href="#">Acessórios</a></li>
            </ul>
        </nav>
    </section> <!-- fim .menu-departamentos-->

    <a href="#" class="pause"></a>
    <img src="img/destaque-home.png" alt="Promoção: Big City Night">

</section> <!-- fim .container . destaques -->

<section id="destaques" class="container">
    <!-- Painéis com destaques -->
    <div class="container paineis">
        <section class="painel novidades">
            <h2>Novidades</h2>
            <ol>
                <?php
                $dados = mysqli_query($con, "SELECT * FROM produtos ORDER BY data DESC LIMIT 0, 12");
                while ($produto = mysqli_fetch_array($dados)) {
                ?>
                    <li>
                        <a href="produto.php?id=<?= $produto["id"] ?>">
                            <figure>
                                <img src="img/produtos/miniatura<?= $produto["id"] ?>.png" alt="<?= $produto["nome"] ?>">
                                <figcaption><?= $produto["nome"] ?> por <?= $produto["preco"] ?></figcaption>
                            </figure>
                        </a>
                    </li>
                <?php } ?>
            </ol>
            <button type="button">Mostrar mais</button>
        </section>

        <section class="painel mais-vendidos">
            <h2>Mais Vendidos</h2>
            <ol>
                <?php
                $dados = mysqli_query($con, "SELECT * FROM produtos ORDER BY vendas DESC LIMIT 0, 12");
                while ($produto = mysqli_fetch_array($dados)) {
                ?>
                    <li>
                        <a href="produto.php?id=<?= $produto["id"] ?>">
                            <figure>
                                <img src="img/produtos/miniatura<?= $produto["id"] ?>.png" alt="<?= $produto["nome"] ?>">
                                <figcaption><?= $produto["nome"] ?> por <?= $produto["preco"] ?></figcaption>
                            </figure>
                        </a>
                    </li>
                <?php } ?>

            </ol>
            <button type="button">Mostrar mais</button>
        </section>
    </div>
</section>

<script src="js/jquery.js"></script>
<script src="js/home.js"></script>

<?php include("rodape.php"); ?>