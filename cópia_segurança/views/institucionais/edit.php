<form class="col-xs-6" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" required value="<?=$institucional['nome']?>">
  </div>
  <div class="form-group">
    <label for="titulo">Titulo</label>
    <input type="text" class="form-control" id="titulo" name="titulo" required value="<?=$institucional['titulo']?>">
  </div>
  <div class="form-group">
    <label for="imagem">imagem</label>
    <input type="file" class="form-control" id="imagem" name="imagem">
  </div>
    <div class="form-group">
    <label for="link">Link</label>
    <input type="text" class="form-control" id="link" name="link" required value="<?=$institucional['link']?>">
  </div>
  <div class="form-group">
  	<button type="submit" class="btn btn-default pull-right">Atualizar</button>
  </div>
</form>
