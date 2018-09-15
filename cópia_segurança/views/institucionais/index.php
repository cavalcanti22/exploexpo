
<table class="table table-striped">
	<tr>
		<th>#</th>
		<th>NOME</th>
		<th>TÍTULO</th>
		<th>LINK</th>
		<th>IMAGEM</th>
		<th>AÇÃO</th>
		<th>
		</th>
	</tr>

<?php foreach ($institucionais as $i): ?>
	<tr>
		<td><?=$i['id']?></td>
		<td><?=$i['nome']?></td>
		<td><?=$i['titulo']?></td>
		<td><?=$i['link']?></td>
		<td><img class="imgExpand" src="<?=site_url().$i['imagem']?>" alt=""></td>
		<td>
			<a style="color: red;" href="<?=site_url()?>Institucionais/remove/<?=$i['id']?>"><i class="icon-pencil3"></i> Remover</a>
			<a href="<?=site_url()?>Institucionais/edit/<?=$i['id']?>"><i class="icon-spell-check"></i> Editar</a>
		</td>
	</tr>
<?php endforeach ?>
	
</table>