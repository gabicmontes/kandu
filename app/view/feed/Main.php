   <div class="container">
    <div class="row">
      <div class="col-sm-8">

        <?php



          $x = new App\Controller\ControllerFeed();

          $x->selecionarEvento();
        ?>
        <!--<p><input type="text" id="txt_texto" /></p>
        <p><input type="button" id="button" value="Postar via Javascript" onclick="posta()" /></p>
        <br />
        <div id="resposta"></div>
        <script type="text/javascript">
          function posta(){
            //Obtendo o texto digitado pelo usuário:
            var texto = document.getElementById("txt_texto").value;
            //Armazenando a referência da Div dentro de uma variável:
            var div = document.getElementById("resposta"); 
            //Inserindo o texto dentro da Div:
            div.innerHTML = div.innerHTML + '<div class="py-5"><div class="container"><div class="row"><div class="p-0 col-lg-5 order-2 order-lg-1"><img class="img-fluid d-block img-feed" src="<?php echo DIRIMG ?>/secomp.jpg"> </div><div class="d-flex flex-column justify-content-center p-2 col-lg-7 order-1 order-lg-1"><h3>VIII Semana da Computação</h3><p class="lead mb-0">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the </p><a class="btn btn-outline-success my-2" href="#">Detalhes</a></div></div></div></div>';
            //Limpando a caixa de texto:
            document.getElementById("txt_texto").value = ""; 
            //Focando a caixa de texto:
            document.getElementById("txt_texto").focus(); 
          } 


          /*document.body.onload = adcElemento;

          function adcElemento () { 
            // cria um novo elemento div 
            // e dá à ele conteúdo
            var divNova = document.createElement("div"); 
            var conteudoNovo = document.createTextNode("Olá, cumprimentos!"); 
            divNova.appendChild(conteudoNovo); //adiciona o nó de texto à nova div criada 

            // adiciona o novo elemento criado e seu conteúdo ao DOM 
            var divAtual = document.getElementById("div1"); 
            document.body.insertBefore(divNova, divAtual); 
          }
          function createDiv()
          var div = document.createElement('div');
          div.setAttribute('class', 'py-5');

          //adiciona o html dentro da nova "div"
          div.innerHTML = "<p>ooo</p>";
          document.body.appendChild(div);*/

        </script>

        <div class="py-5">
          <div class="container">
            <div class="row">
              <div class="p-0 col-lg-5 order-2 order-lg-1"> 
                <img class="img-fluid d-block img-feed" src="<?php echo DIRIMG ?>/secomp.jpg"> </div>
              <div class="d-flex flex-column justify-content-center p-2 col-lg-7 order-1 order-lg-1">
                <h3>VIII Semana da Computação</h3>
                <p class="lead mb-0">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the </p>
                <a class="btn btn-outline-success my-2" href="#">Detalhes</a>
              </div>
            </div>
          </div>
        </div>

        <div class="py-5">
          <div class="container">
            <div class="row">
              <div class="p-0 col-lg-5 order-2 order-lg-1"> 
                <img class="img-fluid d-block img-feed" src="<?php echo DIRIMG ?>/forum.jpg"> </div>
              <div class="d-flex flex-column justify-content-center p-2 col-lg-7 order-1 order-lg-1">
                <h3>XII Fórum Regional de Agroecologia</h3>
                <p class="lead mb-0">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the </p>
                <a class="btn btn-outline-success my-2" href="#">Detalhes</a>
              </div>
            </div>
          </div>
        </div>

        <div class="py-5">
          <div class="container">
            <div class="row">
              <div class="p-0 col-lg-5 order-2 order-lg-1"> 
                <img class="img-fluid d-block img-feed" src="<?php echo DIRIMG ?>/ada.jpg"> </div>
              <div class="d-flex flex-column justify-content-center p-2 col-lg-7 order-1 order-lg-1">
                <h3>I Dia da Ada Lovelace</h3>
                <p class="lead mb-0">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the </p>
                <a class="btn btn-outline-success my-2" href="#">Detalhes</a>
              </div>
            </div>
          </div>
        </div>-->
      </div>
      <div class="col-sm-4 py-5 pl-5">

        <h3>Filtrar por</h3>
        <br>
        <h5>Categoria</h5>

        <div class="form-check pl-4 pt-3">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            Saúde
          </label>
        </div>

        <div class="form-check pl-4">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            Curso
          </label>
        </div>

       <div class="form-check pl-4">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
          <label class="form-check-label" for="defaultCheck2">
            Festa
          </label>
        </div>

        <br>
        <h5>Preço</h5>

        <div class="form-check pl-4 pt-3">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
          Grátis
          </label>
        </div>

        <div class="form-check pl-4 ">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
          <label class="form-check-label" for="exampleRadios2">
            Até R$15,00
          </label>
        </div>

        <div class="form-check disabled pl-4 ">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
          <label class="form-check-label" for="exampleRadios3">
            Até R$30,00
          </label>
        </div>

        <div class="form-check disabled pl-4 ">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
          <label class="form-check-label" for="exampleRadios3">
            Até R$50,00
          </label>
        </div>

        <div class="form-check disabled pl-4 ">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
          <label class="form-check-label" for="exampleRadios3">
            Todos
          </label>
        </div>

      </div>

    </div>
  </div>

  <div class="py-5" id="rodape">
    <div class="container py-3">
      <div class="row">
        <div class="col-md-12">
        </div>
      </div>
    </div>
  </div>
  
  <script src="slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="node_modules\jquery\dist\jquery.slim.js" charset="utf-8"></script>
    <script src="node_modules\popper.js\dist\popper.js" charset="utf-8"></script>
    <script src="node_modules\bootstrap\dist\js\bootstrap.js" charset="utf-8"></script>