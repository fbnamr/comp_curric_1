<!-- <pre>
	<?php print_r($clientes); ?>
</pre> -->
<div class="page-header">
	<h1>Listando as tabelas</h1>
</div>

<p>
	<i class="icon-plus-sign"></i>
	<?php echo $this->Html->link("Novo item", array('controller' => 'clientes', 'action' => 'add'),
		array('class' => 'btn btn-success')); ?>
</p>

<table class="table table-hover">
	<thead>
		<tr>
			<th>Código</th>
			<th>Nome</th>
			<th>Endereço</th>
			<th>Telefone</th>
			<th>Criado</th>
			<th>Atualizado em</th>
			<th colspan="3">Ações</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($clientes as $cliente): ?>
			<tr>
				<td><?php echo $cliente["Cliente"]["id"];?></td>
				<td><?php echo $cliente["Cliente"]["nome"];?></td>
				<td><?php echo $cliente["Cliente"]["endereco"];?></td>
				<td><?php echo $cliente["Cliente"]["telefone"];?></td>
				<td><?php echo $cliente["Cliente"]["created"];?></td>
				<td><?php echo $cliente["Cliente"]["modified"];?></td>
				<td>
					 <i class="icon-eye-open"></i>
					<?php echo $this->Html->link("Visualizar", array('controller' => 'clientes', 'action' => 'view',
						 $cliente["Cliente"]["id"]),  array('class' => 'btn'));?>
				</td>
        		<td>
        			<i class="icon-edit"></i>
        			<?php echo $this->Html->link('Editar', array('controller' => 'clientes', 'action' => 'edit',
						 $cliente["Cliente"]["id"]),  array('class' => 'btn btn-info'));?>
				</td>
				<td>
					<i class="icon-trash"></i>
					<?php echo $this->Form->postLink("Remover",	array('controller' => 'clientes', 'action' => 'delete', $cliente["Cliente"]["id"]), array('class' => 'btn btn-danger')); 
				?>
					
        		</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>

