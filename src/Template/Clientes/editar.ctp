<h1> Editar Cliente </h1>

<?php echo $this->Form->create($cliente),
           $this->Form->input('nome'),
           $this->Form->input('usuario'),
           $this->Form->input('senha'),
           $this->Form->button('Alterar'),
           $this->Form->end();
?>