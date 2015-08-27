<h1>Cotações</h1>

<div class="cotacao index">
	<table>
		<thead>
			<tr>
				<th><?= $this->Paginator->sort('id')?></th>
				<th><?= $this->Paginator->sort('codCidadeOrigem')?></th>
				<th><?= $this->Paginator->sort('codCidadeDestino')?></th>
				<th><?= $this->Paginator->sort('valorCarga')?></th>
				<th><?= $this->Paginator->sort('Ações')?></th>
			</tr>
		</thead>
		<tbody>
		<?= $this->Html->link('Adicionar', ['action' => 'adicionar'])?>
		<?php foreach ($cotacoes as $cotacao){ ?>
			<tr>
				<td><?= $cotacao->id      ?></td>
				<td><?= $this->Html->link($cotacao->codCidadeOrigem, ['controller' => 'Cotacoes', 'action' => 'view', $cotacao->id])   ?></td>
				<td><?= $cotacao->codCidadeDestino ?></td>
				<td><?= $cotacao->valorCarga   ?></td>
				<td><?= $this->Html->link('Editar', ['action' => 'editar',$cotacao->id] ). ' | '.$this->Html->link('Deletar', ['action' => 'deletar',$cotacao->id])?></td>
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
