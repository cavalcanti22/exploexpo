<!-- //services -->
<div class="portfolio-agileinfo" id="portfolio">
<div class="container">
	<div class="wthree_head_section">
		<center>
			<h3 class="agile_tittle"><i class="fa fa-camera-retro" aria-hidden="true" style="color: #000;"></i> <span>Galeria</span>Explo Expo 2018</h3>

		</center>
	</div>
</div>
<div class="agile_wthree_inner_grids">
	<div class="agile_port_w3ls_info">
		<div class="portfolio-grids_main">
			<?php foreach ($fotos as $foto): ?>
				<div class="col-md-4 portfolio-grids" data-aos="zoom-in">

					<a href="<?=site_url().$foto['imagem']?>" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1" style="padding: 10px;">
						<center>
							<img src="<?=site_url().$foto['imagem']?>" class="img-responsive" alt="w3ls" style="padding: 2px;" />
						</center>

						<div class="b-wrapper two">
							<i class="fa fa-magic" aria-hidden="true"></i>
							
						</div>
					</a>
				</div>
			<?php endforeach ?>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
 <center>
 	<!-- <img src="<?=site_url()?>resources/site/images/colmeia.jpg" style="width: 65%;height: auto;" > -->
 </center>
</div>
<!--// Gallery -->