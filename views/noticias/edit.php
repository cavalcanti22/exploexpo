<form class="col-xs-6" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" required value="<?=$noticia['nome']?>">
  </div>
  <div class="form-group">
    <label for="titulo">Titulo</label>
    <input type="text" class="form-control" id="titulo" name="titulo" required value="<?=$noticia['titulo']?>">
  </div>
  <div class="form-group">
    <label for="imagem">Imagem</label>
    <input type="file" class="form-control" id="imagem" name="imagem">
  </div>
     <div class="form-group col-md-6">
    <label for="link">Link</label>
    <input type="text" class="form-control" id="link" name="link" value="<?=$noticia['link']?>">
  </div>
   <div class="form-group col-md-12">
    <label for="textolongo">Notícia</label>
    <textarea type="text" class="form-control" rows="5"  id="editor" name="textolongo">
      <?=$noticia['textolongo']?>
    </textarea>
    <script>
      ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .then( editor => {
          console.log( editor );
        } )
        .catch( error => {
          console.error( error );
        } );
    </script>
  </div>
  <div class="form-group">
  	<button type="submit" class="btn btn-default pull-right">Atualizar</button>
  </div>
</form>
