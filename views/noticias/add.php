<form class="col-md-6" method="POST" enctype="multipart/form-data">
  <div class="form-group col-md-6">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" >
  </div>
  <div class="form-group col-md-6">
    <label for="titulo">Titulo</label>
    <input type="text" class="form-control" id="titulo" name="titulo" >
  </div>
  <div class="form-group col-md-6">
    <label for="imagem">Imagem</label>
    <input type="file" class="form-control" id="imagem" name="imagem" >
  </div>
   <div class="form-group col-md-6">
    <label for="link">Link</label>
    <input type="text" class="form-control" id="link" name="link" >
  </div>
    <div class="form-group col-md-12">
    <label for="textolongo ">Texto </label>
    <textarea type="text" class="form-control" rows="5"  id="editor" name="textolongo"></textarea>
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
  	<button type="submit" class="btn btn-default pull-right">Cadastrar</button>
  </div>
</form>
