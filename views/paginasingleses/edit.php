<form class="col-md-12" method="POST" enctype="multipart/form-data">

<div class="row">
  <div class="form-group col-md-6">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" value="<?=$paginaingles['nome']?>">
  </div>

  <div class="form-group col-md-6">
    <label for="titulo">Título</label>
    <input type="text" class="form-control" id="titulo" name="titulo" value="<?=$paginaingles['titulo']?>">
  </div>

  <div class="form-group col-md-6">
    <label for="subtitulo">Subtítulo</label>
    <input type="text" class="form-control" id="subtitulo" name="subtitulo" value="<?=$paginaingles['subtitulo']?>">
  </div>

  <div class="form-group col-md-6">
    <label for="imagem">Imagem</label>
    <input type="file" class="form-control" id="imagem" name="imagem" value="<?=$paginaingles['imagem']?>">
  </div>

  <div class="form-group col-md-6">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="<?=$paginaingles['email']?>">
  </div>

  <div class="form-group col-md-6">
    <label for="telefone">Telefone</label>
    <input type="text" class="form-control" id="telefone" name="telefone" value="<?=$paginaingles['telefone']?>">
  </div> 

   <div class="form-group col-md-6">
    <label for="telefone">WhatsApp</label>
    <input type="text" class="form-control" id="whats" name="whats" value="<?=$paginaingles['whats']?>">
  </div> 

   <div class="form-group col-md-6">
    <label for="telefone">Endereço</label>
    <input type="text" class="form-control" id="endereco" name="endereco" value="<?=$paginaingles['endereco']?>">
  </div>

  <div class="form-group col-md-6">
    <label for="facebook">Facebook</label>
    <input type="text" class="form-control" id="facebook" name="facebook" value="<?=$paginaingles['facebook']?>">
  </div>

  <div class="form-group col-md-6">
    <label for="instagram">instagram</label>
    <input type="text" class="form-control" id="instagram" name="instagram" value="<?=$paginaingles['instagram']?>">
  </div>

  <div class="form-group col-md-12">
    <label for="textolongo">Texto</label>
    <textarea type="text" class="form-control" rows="5" id="editor" name="textolongo"> 
      <?=$paginaingles['textolongo']?>
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
</div>

<div class="row">
  <div class="form-group col-md-12">
    <button type="submit" class="btn btn-default pull-right">Atualizar</button>
  </div>
</div>

</form>
