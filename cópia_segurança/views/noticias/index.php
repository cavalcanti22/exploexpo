
<table class="table table-striped">
	<tr>
		<th>#</th>
		<th>NOME</th>
		<th>TÍTULO</th>
		<th>IMAGEM</th>
		<th>HORÁRIO</th>
		<th>AÇÃO</th>
		<th>
		</th>
	</tr>

<?php foreach ($noticias as $n): ?>
	<tr>
		<td><?=$n['id']?></td>
		<td><?=$n['nome']?></td>
		<td><?=$n['titulo']?></td>
		<td><img class="imgExpand" src="<?=site_url().$n['imagem']?>" alt=""></td>
		<td><?=$n['horario']?></td>
		
		<td>
			<a style="color: red;" href="<?=site_url()?>Noticias/remove/<?=$n['id']?>"><i class="icon-pencil3"></i> Remover</a>
			<a href="<?=site_url()?>Noticias/edit/<?=$n['id']?>"><i class="icon-spell-check"></i> Editar</a>
		</td>
	</tr>
<?php endforeach ?>
	
</table>