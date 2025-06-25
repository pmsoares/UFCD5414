   <?php
   $cabecalho_title = "Produto da Mirror Fashion";
   $cabecalho_css = "<link rel='stylesheet' href='css/produto.css'>";
   include("cabecalho.php");
   ?>

   <div class="container">
      <div class="produto">
         <h2>Fuzzy Cardigan</h2>
         <p>por apenas R$ 129,00</p>

         <form action="#">
            <fieldset class="cores">
               <legend>Escolha a cor:</legend>

               <input type="radio" name="cor" id="verde" value="verde" checked>
               <label for="verde">
                  <img src="img/produtos/foto2-verde.png" alt="verde">
               </label>

               <input type="radio" name="cor" id="rosa" value="rosa">
               <label for="rosa">
                  <img src="img/produtos/foto2-rosa.png" alt="rosa">
               </label>

               <input type="radio" name="cor" id="azul" value="azul">
               <label for="azul">
                  <img src="img/produtos/foto2-azul.png" alt="azul">
               </label>
            </fieldset>

            <fieldset class="tamanhos">
               <legend>Escolha o tamanho:</legend>

               <input type="range" name="tamanho" id="tamanho"
                  min="36" max="46" value="42" step="2">
            </fieldset>

            <input type="submit" value="Comprar" class="comprar">
         </form>
      </div>
   </div>

   <?php include("rodape.php"); ?>