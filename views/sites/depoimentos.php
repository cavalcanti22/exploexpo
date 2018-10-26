
    <!-- Page Content -->
    <div class="container">

      <!-- Introduction Row -->
     <center>
     	 <h1 class="my-4"><?=$titulo;?>
      </h1>
     </center>
      <p></p>

      <!-- Team Members Row -->
      <div class="row">
        <div class="col-lg-12">
        </div>
      <?php foreach ($depoimentos as $depoimento ): ?>
      	  <div class="col-lg-4 col-sm-6 text-center mb-4">
          <h3><?=$depoimento['nome'];?>
          </h3>
          <p>"<?=$depoimento['texto'];?>"</p>
        </div>
      <?php endforeach ?>
      </div>
    </div>
    <!-- /.container -->
