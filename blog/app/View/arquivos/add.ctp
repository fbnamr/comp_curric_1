<h1>Adicioar cliente</h1>
<?php
	echo $this->Form->create('Cliente');
	echo $this->Form->input('nome');
	echo $this->Form->input('endereco', array('rows' => 2));
	echo $this->Form->input('telefone');
	echo $this->Form->end("Salvar");