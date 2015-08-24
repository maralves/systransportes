<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;
//use Cake\ORM\Table;

class ClientesController extends AppController
{

	public function index()
    { 	 
    	$this->set('clientes', $this->paginate());
    }

    public function view($id = null){
    	$clientes = $this->Clientes->get($id);
    	$this->set('clientes', $clientes);
    }
    public function adicionar(){
    	if($this->request->is("post")){

			$clientesTable = TableRegistry::get('Clientes');
			$cliente = $clientesTable->newEntity();

			$cliente->nome    = $_POST['nome'];
			$cliente->usuario = $_POST['usuario'];
			$cliente->senha   = $_POST['senha'];

			if ($clientesTable->save($cliente)) {
			    $this->Flash->success(__('Cliente Adicionado com Sucesso!'));
			    $id = $cliente->id;
			}

    	}
    }
    public function editar($id = null){
    	$cliente = $this->Clientes->get($id);
	    if ($this->request->is(['post', 'put'])) {
	        $this->Clientes->patchEntity($cliente, $this->request->data);
	        if ($this->Clientes->save($cliente)) {
	            $this->Flash->success(__('Cliente Alterado com Sucesso!'));
	            return $this->redirect(['action' => 'index']);
	        }
	        $this->Flash->error(__('Erro ao Alterar Cliente'));
	    }

    	$this->set('cliente', $cliente);
    }
    public function deletar($id){
    	
    	//$this->request->allowMethod(['cliente', 'delete']);

	    $cliente = $this->Clientes->get($id);
	    if ($this->Clientes->delete($cliente)) {
	        $this->Flash->success(__('O Cliente de id: {0} foi Removido.', h($id)));
	        return $this->redirect(['action' => 'index']);
	    }
	
    }



   
}
?>