
<table class="table table-striped">
	<tr>
		<th>#</th>
		<th>IMAGEM</th>
		<th>
		</th>
	</tr>

<?php foreach ($fotos as $foto): ?>
	<tr>
		<td><?=$foto['id']?></td>
		<td><img class="imgExpand" src="<?=site_url().$foto['imagem']?>" alt=""></td>

		<td>
			<a style="color: red;" href="<?=site_url()?>Fotos/remove/<?=$foto['id']?>"><i class="icon-pencil3"></i> Remover</a>
			<a href="<?=site_url()?>Fotos/edit/<?=$foto['id']?>"><i class="icon-spell-check"></i> Editar</a>
		</td>
	</tr>
<?php endforeach ?>
	
</table>