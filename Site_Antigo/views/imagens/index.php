
<table class="table table-striped">
	<tr>
		<th>#</th>
		<th>NOME</th>
		<th>TÍTULO</th>
		<th>IMAGEM</th>
		<th>AÇÃO</th>
		<th>
		</th>
	</tr>

<?php foreach ($imagens as $i): ?>
	<tr>
		<td><?=$i['id']?></td>
		<td><?=$i['nome']?></td>
		<td><?=$i['titulo']?></td>
		<td><?=$i['imagem']?></td>
		<td>
			<a style="color: red;" href="<?=site_url()?>Imagens/edit/<?=$i['id']?>"><i class="icon-pencil3"></i> Remover</a>
			<a href="<?=site_url()?>Imagens/remove/<?=$i['id']?>"><i class="icon-spell-check"></i> Editar</a>
		</td>
	</tr>
<?php endforeach ?>
	
</table>