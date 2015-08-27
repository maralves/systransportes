<?php

namespace  App\Model\Table;

use Cake\ORM\Table;

class CotacaoTable extends Table{

	public function initialize(array $config){
		$this->addBehavior('Timestamp');
		$this->displayField('title');
	}
	
}

?>