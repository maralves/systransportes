<?php

namespace Model\Entity;

use Cake\ORM\Entity;

class Usuario extends  Entity{

	protected $_acessible =[
	   'titulo' => true,
	   'body' => true
	]
	
}