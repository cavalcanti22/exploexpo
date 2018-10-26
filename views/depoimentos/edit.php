<form class="col-xs-6" method="POST" enctype="multipart/form-data">

  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" required value="<?=$depoimento['nome']?>">
  </div>

  <div class="form-group col-md-12">
    <label for="texto">Depoimento</label>
    <textarea type="text" class="form-control" rows="5"  id="editor" name="texto">
      <?=$depoimento['texto']?>
    </textarea>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-default pull-right">Atualizar</button>
  </div>

</form>
