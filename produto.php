   <?php
   require_once("connection.php");
   $dados = mysqli_query($con, "SELECT * FROM produtos WHERE id = $_GET[id]");
   $produto = mysqli_fetch_array($dados);

   $cabecalho_title = $produto["nome"];
   $cabecalho_css = "<link rel='stylesheet' href='css/produto.css'>";
   include("cabecalho.php");
   ?>

   <div class="produto-back">
      <div class="container">
         <div class="produto">
            <h2><?= $produto["nome"] ?></h2>
            <p>por apenas <?= $produto["preco"] ?></p>

            <form action="checkout.php" method="post">
               <input type="hidden" name="id" value="<?= $produto["id"] ?>">

               <fieldset class="cores">
                  <legend>Escolha a cor:</legend>

                  <input type="radio" name="cor" id="verde" value="verde" checked>
                  <label for="verde">
                     <img src="img/produtos/foto<?= $produto["id"] ?>-verde.png" alt="verde">
                  </label>

                  <input type="radio" name="cor" id="rosa" value="rosa">
                  <label for="rosa">
                     <img src="img/produtos/foto<?= $produto["id"] ?>-rosa.png" alt="rosa">
                  </label>

                  <input type="radio" name="cor" id="azul" value="azul">
                  <label for="azul">
                     <img src="img/produtos/foto<?= $produto["id"] ?>-azul.png" alt="azul">
                  </label>
               </fieldset>

               <fieldset class="tamanhos">
                  <legend>Escolha o tamanho:</legend>

                  <input type="range" name="tamanho" id="tamanho"
                     min="36" max="46" value="42" step="2">
                  <output for="tamanho" name="valortamanho">42</output>
               </fieldset>

               <input type="submit" value="Comprar" class="comprar">
            </form>
         </div>

         <div class="detalhes">
            <h3>Detalhes do produto</h3>

            <p><?= $produto["descricao"] ?></p>

            <table>
               <thead>
                  <tr>
                     <th>Características</th>
                     <th>Detalhes</th>
                  </tr>
               </thead>

               <tbody>
                  <tr>
                     <td>Modelo</td>
                     <td>Cardigã 7845</td>
                  </tr>
                  <tr>
                     <td>Material</td>
                     <td>Algodão e poliester</td>
                  </tr>
                  <tr>
                     <td>Cores</td>
                     <td>Azul, Rosa e Verde</td>
                  </tr>
                  <tr>
                     <td>Lavagem</td>
                     <td>Lavar a mão</td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>

   <script src="js/jquery.js"></script>
   <script src="js/produto.js"></script>

   <?php include("rodape.php"); ?>