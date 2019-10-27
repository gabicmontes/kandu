<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="node_modules\bootstrap\compiler\bootstrap.css">
  <link rel="stylesheet" href="node_modules\bootstrap\compiler\style.css">
</head>

<body>
  <div class="py-5" id="header">
    <div class="container py-3">
      <div class="row">
        <div class="col-md-12">
          <div id="logo">
           <img src="img/logo.png">
        </div>
      </div>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark" id="menu">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação" id="pesquisar">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Dados Pessoais <span class="sr-only">(página atual)</span></a>
        </li>
        
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
      </form>
    </div>
  </nav>

  <div class="container">
    <div class="row">

      <div class="col-sm-8">

        <div class="py-5">
          <div class="container">
            <div class="row">
              <div class="p-0 col-lg-5 order-2 order-lg-1"> 
                <img class="img-fluid d-block img-feed" src="img/secomp.jpg"> </div>
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
                <img class="img-fluid d-block img-feed" src="img/forum.jpg"> </div>
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
                <img class="img-fluid d-block img-feed" src="img/ada.jpg"> </div>
              <div class="d-flex flex-column justify-content-center p-2 col-lg-7 order-1 order-lg-1">
                <h3>I Dia da Ada Lovelace</h3>
                <p class="lead mb-0">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the </p>
                <a class="btn btn-outline-success my-2" href="#">Detalhes</a>
              </div>
            </div>
          </div>
        </div>

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
</body>

</html>