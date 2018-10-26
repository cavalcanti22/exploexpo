<form method="POST" class="col-md-6">

  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome">
  </div>

  <div class="form-group">
    <label for="texto ">Texto </label>
    <textarea type="text" class="form-control" rows="5"  id="texto" name="texto"></textarea>
  </div> 

  <button type="submit" class="btn btn-primary">Cadastrar</button>
  <a href="<?=site_url()?>usuarios"> << Retornar</a>
</form>