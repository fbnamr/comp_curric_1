<h1>Adicionando cliente</h1>
<?php
	echo $this->Form->create('Cliente');
	echo $this->Form->input('nome');
	echo $this->Form->input('endereco', array('rows' => 3));
	echo $this->Form->input('telefone');
	echo $this->Form->end("Salvar");