<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;
//use Cake\ORM\Table;

class UsuariosController extends AppController
{

	public function index()
    { 	 
    	$this->set('usuario', $this->paginate());
    }

    public function view($id = null){
    	$usuario = $this->Usuario->get($id);
    	$this->set('usuario', $usuario);
    }
    public function adicionar(){
    	if($this->request->is("post")){

			$usuariosTable = TableRegistry::get('Usuarios');
			$usuario = $usuariosTable->newEntity();

			$usuario->nome = $_POST['nome'];
			$usuario->razao_social    = $_POST['razaoSocial'];
			$usuario->fantasia    = $_POST['fantasia'];
			$usuario->cpfcnpj    = $_POST['cpfcnpj'];
			$usuario->email    = $_POST['email'];
			$usuario->telefone1    = $_POST['telefone1'];
			$usuario->telefone2    = $_POST['telefone2'];
			$usuario->logradouro    = $_POST['logradouro'];
			$usuario->bairro    = $_POST['bairro'];
			$usuario->cidade    = $_POST['cidade'];
			$usuario->cep    = $_POST['cep'];
			$usuario->uf    = $_POST['uf'];
			$usuario->pais    = $_POST['pais'];
			
			$usuario->login = 	$_POST['login'];
			$usuario->senha   = $_POST['senha'];

			if ($usuariosTable->save($usuario)) {
			    $this->Flash->success(__('Usuário Adicionado com Sucesso!'));
			    $id = $usuario->id;
			}

    	}
    }
    public function editar($id = null){
    	$usuario = $this->Usuarios->get($id);
	    if ($this->request->is(['post', 'put'])) {
	        $this->Usuarios->patchEntity($usuario, $this->request->data);
	        if ($this->Usuarios->save($usuario)) {
	            $this->Flash->success(__('Usuário Alterado com Sucesso!'));
	            return $this->redirect(['action' => 'index']);
	        }
	        $this->Flash->error(__('Erro ao Alterar o Usuário'));
	    }

    	$this->set('usuario', $usuario);
    }
    public function deletar($id){
    	
	    $usuario = $this->Usuarios->get($id);
	    if ($this->Usuarios->delete($usuario)) {
	        $this->Flash->success(__('O Usuário de id: {0} foi Removido.', h($id)));
	        return $this->redirect(['action' => 'index']);
	    }
	
    }



   
}
?>