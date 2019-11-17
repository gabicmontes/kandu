
 <div class="container">
    <div class="row">

      <div class="col-sm-8">

        <div class="py-5">
          <div class="container">
            <div class="row">
              <div class="p-0 col-lg-5 order-2 order-lg-1"> 
          <p style="display: inline;"><h1><?php echo $_SESSION['nome']  ?></h1></p>
          
          <?php

          if((!isset ($_SESSION['endereco']) == true) and (!isset ($_SESSION['descricao']) == true)) {
            echo "<b>Email: </b><br>";
            echo $_SESSION['email'];
            echo "<a href='#''> editar</a><br><br>
            <b>Cidade: </b><br>" .
            $_SESSION['cidade'] ."<a href='#''> editar</a><br><br>

             <b>Senha: </b><br>".
             '*************'." <a href='#''> editar</a><br><br>
            <a class='btn btn-primary' href='feed'>Voltar</a>

            ";
          } else {
            echo "<b>Email: </b><br>";
            echo $_SESSION['email'];
            echo "<a href='#''> editar</a><br><br>
            <b>Cidade: </b><br>" .
            $_SESSION['cidade'] ."<a href='#''> editar</a><br><br>

             <b>Senha: </b><br>".
             '*************'." <a href='#''> editar</a><br><br>

             <b>Descricao: </b><br>" .
            $_SESSION['descricao'] ."<a href='#''> editar</a><br><br>

            

            <b>Endereco: </b><br>" .
            $_SESSION['endereco'] ."<a href='#''> editar</a><br><br>

            <a class='btn btn-primary' href='feed'>Voltar</a>

            ";
          }
          ?> 

            
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
</div>
