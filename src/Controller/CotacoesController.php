<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;
//use Cake\ORM\Table;

class CotacoesController extends AppController
{

	public function index()
    { 	 
    	$this->set('cotacoes', $this->paginate());
    }

    public function view($id = null){
    	$cotacoes = $this->Cotacoes->get($id);
    	$this->set('cotacoes', $cotacoes);
    }
    public function adicionar(){
    	if($this->request->is("post")){

			$cotacoesTable = TableRegistry::get('Cotacoes');
			$cotacao = $cotacoesTable->newEntity();

			$cotacao->idUsuario    = $_POST['idUsuario'];
			$cotacao->codCidadeOrigem = $_POST['codCidadeOrigem'];
			$cotacao->codCidadeDestino   = $_POST['codCidadeDestino'];
			$cotacao->valorCarga   = $_POST['valorCarga'];
			$cotacao->valorFrete   = $_POST['valorFrete'];
			$cotacao->altura   = $_POST['altura'];
			$cotacao->largura   = $_POST['largura'];
			$cotacao->peso   = $_POST['peso'];
			$cotacao->comprimento   = $_POST['comprimento'];
			$cotacao->prazo   = $_POST['prazo'];
			$cotacao->quantidadeCaixa   = $_POST['quantidadeCaixa'];
			$cotacao->descricao   = $_POST['descricao'];
			$cotacao->aprovadoCliente   = $_POST['aprovadoCliente'];
			$cotacao->aprovadoAtendente   = $_POST['aprovadoAtendente'];
			$cotacao->status   = $_POST['status'];

			if ($cotacoesTable->save($cotacao)) {
			    $this->Flash->success(__('Cotacao Adicionado com Sucesso!'));
			    $id = $cotacao->id;
			}

    	}
    }
    public function editar($id = null){
    	$cotacao = $this->Cotacoes->get($id);
	    if ($this->request->is(['post', 'put'])) {
	        $this->Cotacoes->patchEntity($cotacao, $this->request->data);
	        if ($this->Cotacoes->save($cotacao)) {
	            $this->Flash->success(__('Cotacao Alterado com Sucesso!'));
	            return $this->redirect(['action' => 'index']);
	        }
	        $this->Flash->error(__('Erro ao Alterar Cotacao'));
	    }

    	$this->set('cotacao', $cotacao);
    }
    public function deletar($id){
    	
    	//$this->request->allowMethod(['cotacao', 'delete']);

	    $cotacao = $this->Cotacoes->get($id);
	    if ($this->Cotacoes->delete($cotacao)) {
	        $this->Flash->success(__('O Cotacao de id: {0} foi Removido.', h($id)));
	        return $this->redirect(['action' => 'index']);
	    }
	
    }



   
}
?>