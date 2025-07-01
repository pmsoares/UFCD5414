<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Mirror Fashion</title>
    <link rel="stylesheet" href="css/bootstrap.css">

    <style>
        .form-control:invalid {
            border: 1px solid #c00;
        }
    </style>
</head>

<body>
    <div class="jumbotron">
        <div class="container">

            <h1>Ótima escolha!</h1>
            <p>Obrigado por comprar na Mirror Fashion!
                Preencha os seus dados para efetivar a compra.
            </p>

        </div> <!-- fim .container dentro do jumbotron -->
    </div> <!-- fim .jumbotron -->

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">Sua compra</h2>
            </div> <!-- fim .panel-heading -->

            <div class="panel-body">
                <img src="img/produtos/foto<?= $_POST['id'] ?>-<?= $_POST['cor'] ?>.png" alt="Foto1" class="img-thumbnail img-responsive">

                <!-- 
                <img src="img/produtos/foto2-rosa.png" alt="Foto1" class="img-thumbnail img-responsive">
                -->
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

        <form action="#">
            <fieldset>
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

            <fieldset>
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

            <button type="submit" class="btn btn-primary btn-lg pull-right">
                <span class="glyphicon glyphicon-thumbs-up"></span>
                Confirmar Pedido
            </button>
        </form>
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
</body>

</html>