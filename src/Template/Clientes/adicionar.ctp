<h1> Adicionar Cliente </h1>

<?php echo $this->Form->create("cliente",array("action" => "adicionar")),
           $this->Form->input('nome'),
           $this->Form->input('usuario'),
           $this->Form->input('senha',array("type" => "password")),
           $this->Form->button('Adicionar'),
           $this->Form->end();
?>