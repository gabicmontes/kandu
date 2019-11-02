<div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
            <form name="FormCadastro" id="FormCadastro" action="<?php echo DIRPAGE.'/login/logar'; ?>" method="post" class="form-signin">
              <div class="form-label-group">
              	E-mail
                <input type="text" id="Email" name="Email" class="form-control" placeholder="e-mail" required>
              </div>
              <div class="form-label-group">
              	Senha
                <input type="password" name="Senha" id="Senha" class="form-control" placeholder="Password" required>
              </div>
              <div class="form-label-group">
                <input type="radio" name="TipoUser" value="promotor"> Promotor
                <input type="radio" name="TipoUser" value="cidadao"> Cidadão
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Logar</button>
              <a class="d-block text-center mt-2 small" href="cadastro">Cadastro cidadão</a>
              <a class="d-block text-center mt-2 small" href="cadastropromotor">Cadastro promotor</a>
              <hr class="my-4">
              <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Login com o Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Login com o Facebook</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>