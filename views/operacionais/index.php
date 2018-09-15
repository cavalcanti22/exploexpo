
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

<?php foreach ($operacionais as $o): ?>
	<tr>
		<td><?=$o['id']?></td>
		<td><?=$o['nome']?></td>
		<td><?=$o['titulo']?></td>
		<td><?=$o['link']?></td>
		<td><img class="imgExpand" src="<?=site_url().$o['imagem']?>" alt=""></td>

		<td>
			<a style="color: red;" href="<?=site_url()?>Operacionais/remove/<?=$o['id']?>"><i class="icon-pencil3"></i> Remover</a>
			<a href="<?=site_url()?>Operacionais/edit/<?=$o['id']?>"><i class="icon-spell-check"></i> Editar</a>
		</td>
	</tr>
<?php endforeach ?>
	
</table>