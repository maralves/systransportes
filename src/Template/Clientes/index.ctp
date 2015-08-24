<h1>Clientes</h1>

<div class="cliente index">
	<table>
		<thead>
			<tr>
				<th><?= $this->Paginator->sort('id')?></th>
				<th><?= $this->Paginator->sort('nome')?></th>
				<th><?= $this->Paginator->sort('usuario')?></th>
				<th><?= $this->Paginator->sort('senha')?></th>
				<th><?= $this->Paginator->sort('Ações')?></th>
			</tr>
		</thead>
		<tbody>
		<?= $this->Html->link('Adicionar', ['action' => 'adicionar'])?>
		<?php foreach ($clientes as $cliente){ ?>
			<tr>
				<td><?= $cliente->id      ?></td>
				<td><?= $this->Html->link($cliente->nome, ['controller' => 'Clientes', 'action' => 'view', $cliente->id])   ?></td>
				<td><?= $cliente->usuario ?></td>
				<td><?= $cliente->senha   ?></td>
				<td><?= $this->Html->link('Editar', ['action' => 'editar',$cliente->id] ). ' | '.$this->Html->link('Deletar', ['action' => 'deletar',$cliente->id])?></td>
		    </tr>
	    <?php } ?>
	    </tbody>
	</table>
</div>
<div class="paginator">
	<ul  class="pagination">
		<?php
			echo $this->Paginator->prev("< Anterior");
			echo $this->Paginator->numbers();
            echo $this->Paginator->next("Próxima >");
