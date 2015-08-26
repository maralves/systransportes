<h1> Adicionar Usuário </h1>

<?php echo $this->Form->create("usuario",array("action" => "adicionar")),
           
           $this->Form->input('nome'),
		   $this->Form->input('razao_social'),
		   $this->Form->input('fantasia'),
		   $this->Form->input('cpfcnpj'),
		   $this->Form->input('email'),
		   $this->Form->input('telefone1'),
		   $this->Form->input('telefone2'),
		   $this->Form->input('logradouro'),
		   $this->Form->input('bairro'),
		   $this->Form->input('cidade'),
		   $this->Form->input('cep'),
		   $this->Form->input('uf'),
	       $this->Form->input('pais'),
		   
           $this->Form->input('login'),
           $this->Form->input('senha',array("type" => "password")),
           $this->Form->button('Adicionar'),
           $this->Form->end();
?>