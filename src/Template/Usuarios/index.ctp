<h1>Usuários</h1>

<div class="usuario index">
	<table>
		<thead>
			<tr>
				<th><?= $this->Paginator->sort('id')?></th>
				<th><?= $this->Paginator->sort('Nome')?></th>
				<th><?= $this->Paginator->sort('Razão Social')?></th>
				<th><?= $this->Paginator->sort('CPF/CNPJ')?></th>
				<th><?= $this->Paginator->sort('Telefone')?></th>
				<th><?= $this->Paginator->sort('Email')?></th>
				<th><?= $this->Paginator->sort('CEP')?></th>
				<th><?= $this->Paginator->sort('login')?></th>
				<th><?= $this->Paginator->sort('senha')?></th>
				<th><?= $this->Paginator->sort('Ações')?></th>
			</tr>
		</thead>
		<tbody>
		<?= $this->Html->link('Adicionar', ['action' => 'adicionar'])?>
		<?php foreach ($usuario as $usuario){ ?>
			<tr>
				<td><?= $usuario->id ?>
				<td><?= $this->Html->link($usuario->nome, ['controller' => 'Usuario', 'action' => 'view', $usuario->id])   ?></td>
				<td><?= $usuario->razao_social ?></td>
				<td><?= $usuario->cpfcnpj ?></td>
				<td><?= $usuario->telefone1 ?></td>
				<td><?= $usuario->email ?></td>
				<td><?= $usuario->cep ?></td>
				<td><?= $usuario->login ?></td>
				<td><?= $usuario->senha   ?></td>
				<td><?= $this->Html->link('Editar', ['action' => 'editar',$usuario->id] ). ' | '.$this->Html->link('Deletar', ['action' => 'deletar',$usuario->id])?></td>
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
