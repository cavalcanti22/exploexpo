

<!-- Post Content -->
<article >
  <div class="container" style="background-color: #fff;">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <!--     <blockquote class="blockquote">The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten.</blockquote> -->
        <?php foreach ($noticias as $noticia ): ?>

          <div class="post-heading text-center">

            <h1 id="<?=$noticia['id']?>"><?=$noticia['titulo']?></h1>

            <span class="meta">Postado por Explo Expo</span>
          </br>

          <i class="fa fa-calendar" aria-hidden="true"></i> <?=$noticia['horario']?></p>

          <img  class="img-fluid " src="<?=site_url().$noticia['imagem']?>" alt="" >
          <span class="caption text-muted"><?=$noticia['link']?></span>
          <p><?=$noticia['textolongo']?></span>
<div class="sharethis-inline-share-buttons"></div>
          </div>
<hr>

        <?php endforeach ?>
      </div>
    </div>
  </div>
</article>


