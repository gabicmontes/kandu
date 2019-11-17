<center>
  <div class="col-sm-8 center">
    <div class="py-5">
      <div class="container">
        <div class="row">
          <div class="p-0 col-lg-8 order-2 order-lg-1"> 
            <form action="<?php echo DIRPAGE.'/cadastroevento/cadastrarEvento'; ?>" method="post">
              <div class="form-group">
                <label>Nome do evento</label>
                <input type="text" name="Nome" class="form-control" placeholder="">
              </div>
              <div class="form-group">
                <label>Endereço</label>
                <input type="text" name="Endereco" class="form-control" placeholder="">
              </div>
              <div class="form-group">
                <label>Descrição do evento</label>
                <input type="text" name="Descricao" class="form-control"placeholder="">
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label>Cidade</label>
                  <select name="Cidade" class="form-control">
                    <option selected value="1">Rio Pomba</option>
                    <option value="2">Ubá</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Hora</label>
                  <input type="time" name="Hora" class="form-control">
                </div>  
                   <div> .</div>
                <div class="form-group">
                  <label>Data</label>
                  <input type="date" name="Data" class="form-control">
                </div>
                <div class="form-group col-md-4">
                  <label>Categoria</label>
                  <select class="form-control" name="Categoria">
                    <option selected value="1">Festa</option>
                    <option value="2">Curso</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Preço de entrada</label>
                  <input type="number" name="Preco" class="form-control">
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>            
          </div>
        </div>
      </div>
    </div>
  </div>
</center>