<table class="table table-striped">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Nome</th>
			<th scope="col">Imagem</th>
			<th scope="col">Ação</th>
		</tr>
	</thead>

	<?php foreach ($paginasingleses as $pi): ?>
		<tbody>
			<tr>
				<td><?=$pi['id']?></td>
				<td><?=$pi['nome']?></td>
				<td><?=$pi['imagem']?></td>
				<td>
					<a href="<?=site_url()?>paginasingleses/edit/<?=$pi['id']?>"><i class="icon-spell-check"></i> Editar</a>

				</td>
			</tr>
		</tbody>
	<?php endforeach ?>

</table>

