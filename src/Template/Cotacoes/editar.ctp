<h1> Editar Cotação </h1>

<?php echo $this->Form->create($cotacao),           
		   $this->Form->input('idUsuario'),
		   $this->Form->input('codCidadeOrigem'),
		   $this->Form->input('codCidadeDestino'),
		   $this->Form->input('valorCarga'),
		   $this->Form->input('valorFrete'),
		   $this->Form->input('altura'),
		   $this->Form->input('largura'),
		   $this->Form->input('peso'),
		   $this->Form->input('comprimento'),
		   $this->Form->input('prazo'),
		   $this->Form->input('quantidadeCaixa'),
		   $this->Form->input('descricao'),
		   $this->Form->input('aprovadoCliente'),
		   $this->Form->input('aprovadoAtendente'),
		   $this->Form->input('status'), 
		   
           $this->Form->button('Alterar'),
           $this->Form->end();
?>