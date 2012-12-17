<h1>Edit Cliente</h1>
<?php
    echo $this->Form->create('Cliente', array('action' => 'edit'));
    echo $this->Form->input('nome');
    echo $this->Form->input('endereco', array('rows' => '3'));
    echo $this->Form->input('telefone');
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Editar');