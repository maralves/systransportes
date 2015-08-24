<?php

namespace Model\Entity;

use Cake\ORM\Entity;

class Cliente extends  Entity{

	protected $_acessible =[
	   'titulo' => true,
	   'body' => true
	]
	
}