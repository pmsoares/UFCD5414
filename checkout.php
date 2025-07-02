<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Mirror Fashion</title>
    <link rel="stylesheet" href="css/bootstrap-flatly.css">

    <style>
        body {
            padding-top: 60px;
        }

        .form-control:invalid {
            border: 1px solid #c00;
        }

        .navbar .glyphicon {
            color: yellow;
        }

        .navbar-brand {
            padding: 10px 15px;
        }

        #logo-img {
            height: 40px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand">
                <img src="img/logo-rodape.png" alt="Mirror Fashion" class="img-responsive" id="logo-img">
            </a>
            <button class="navbar-toggle" type="button" data-target=".navbar-collapse" data-toggle="collapse">
                <span class="glyphicon glyphicon-align-justify"></span>
            </button>
        </div>

        <ul class="nav navbar-nav collapse navbar-collapse">
            <li>
                <a href="sobre.php">
                    <span class="glyphicon glyphicon-home"></span>
                    &nbsp;Sobre
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="glyphicon glyphicon-question-sign"></span>
                    &nbsp;Ajuda
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="glyphicon glyphicon-list-alt"></span>
                    &nbsp;Perguntas frequentes
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="glyphicon glyphicon-bullhorn"></span>
                    &nbsp;Entre em contacto
                </a>
            </li>
        </ul>
    </nav>


    <div class="jumbotron">
        <div class="container">

            <h1>Ótima escolha!</h1>
            <p>Obrigado por comprar na Mirror Fashion!
                Preencha os seus dados para efetivar a compra.
            </p>

        </div> <!-- fim .container dentro do jumbotron -->
    </div> <!-- fim .jumbotron -->

    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Sua compra</h2>
                    </div> <!-- fim .panel-heading -->

                    <div class="panel-body">
                        <img src="img/produtos/foto<?= $_POST['id'] ?>-<?= $_POST['cor'] ?>.png" alt="Foto1" class="img-thumbnail img-responsive hidden-xs">

                        <dl>
                            <dt>Produto</dt>
                            <dd><?= $_POST['nome'] ?></dd>

                            <dt>Preço</dt>
                            <dd><?= $_POST['preco'] ?></dd>

                            <dt>Cor</dt>
                            <dd><?= $_POST['cor'] ?></dd>

                            <dt>Tamanho</dt>
                            <dd><?= $_POST['tamanho'] ?></dd>
                        </dl>
                    </div> <!-- fim .panel-body -->
                </div> <!-- fim .panel -->
            </div>

            <div class="col-sm-8 col-lg-9">
                <form action="#">
                    <div class="row">
                        <fieldset class="col-md-6">
                            <legend>Dados pessoais</legend>

                            <div class="form-group">
                                <label for="nome">Nome completo</label>
                                <input type="text" name="nome" id="nome" class="form-control" autofocus required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>

                                <div class="input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="email@exemplo.com">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cpf">CPF</label>
                                <input type="text" name="cpf" id="cpf" class="form-control" placeholder="000.000.000-00" required>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="spam" checked value="sim">
                                    Quero receber spam da Mirror Fashion
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="col-md-6">
                            <legend>Cartão de crédito</legend>

                            <div class="form-group">
                                <label for="numero-cartao">Número - CVV</label>
                                <input type="text" name="numero-cartao" id="numero-cartao" class="form-control" placeholder="0000 0000 0000 0000 - 000">
                            </div>

                            <div class="form-group">
                                <label for="bandeira-cartao">Bandeira</label>
                                <select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
                                    <option value="master">MasterCard</option>
                                    <option value="visa">VISA</option>
                                    <option value="amex">American Express</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="validade-cartao">Validade</label>
                                <input type="month" name="validade-cartao" id="validade-cartao" class="form-control">
                            </div>
                        </fieldset>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg pull-right">
                        <span class="glyphicon glyphicon-thumbs-up"></span>
                        Confirmar Pedido
                    </button>
                </form>
            </div>
        </div> <!-- fim .row -->
    </div> <!-- fim .container da página -->

    <script>
        document.querySelector('input[type=email]').oninvalid = function() {
            // remove mensagens de erro antigas
            this.setCustomValidity("");

            // reexecutar validação
            if (!this.validity.valid) {
                //se inválido, coloca mensagem de erro
                this.setCustomValidity("Email inválido!");
            }
        };
    </script>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>