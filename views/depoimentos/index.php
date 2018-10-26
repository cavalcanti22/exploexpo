<table class="table table-striped">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Nome</th>
			<th scope="col">Depoimento</th>
			<th scope="col">AÇÃO</th>
		</tr>
	</thead>

	<?php foreach ($depoimentos as $depoimento): ?>
		<tbody>
			<tr>
				<td><?=$depoimento['id']?></td>
				<td><?=$depoimento['nome']?></td>
				<td><?=$depoimento['texto']?></td>
				<td>
					<a style="color:red;" href="<?=site_url()?>Depoimentos/remove/<?=$depoimento['id']?>"><i class="icon-pencil3"></i> Remover</a>
					<a href="<?=site_url()?>Depoimentos/edit/<?=$depoimento['id']?>"> <i class="icon-spell-check"></i> Editar</a>
				</td>
			</tr>
		</tbody>
	<?php endforeach ?>

</table>
<?php

if (isset($_SESSION['feedback']) && $_SESSION['feedback']) {
	echo $_SESSION['feedback'];
}

unset($_SESSION['feedback']);

?>