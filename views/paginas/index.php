<table class="table table-striped">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Nome</th>
			<th scope="col">Imagem</th>
			<th scope="col">Ação</th>
		</tr>
	</thead>

	<?php foreach ($paginas as $p): ?>
		<tbody>
			<tr>
				<td><?=$p['id']?></td>
				<td><?=$p['nome']?></td>
				<td><img class="imgExpand" src="<?=site_url().$p['imagem']?>" alt=""></td>
				<td>
					<a href="<?=site_url()?>Paginas/edit/<?=$p['id']?>"><i class="icon-spell-check"></i> Editar</a>

				</td>
			</tr>
		</tbody>
	<?php endforeach ?>

</table>

