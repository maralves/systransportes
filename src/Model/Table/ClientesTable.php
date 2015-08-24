<?php

namespace  App\Model\Table;

use Cake\ORM\Table;

class ClienteTable extends Table{

	public function initialize(array $config){
		$this->addBehavior('Timestamp');
		$this->displayField('title');
	}
	
}

?>