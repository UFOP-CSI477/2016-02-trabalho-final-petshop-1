<?php


class UsersController extends AppController{

	public $helpers = array('Html', 'Form', 'Time');
	public $components = array('Flash');

	public function afterFilter(){

		if(
			!($this->params['controller'] == 'pages' && $this->action == 'display') &&
			!($this->params['controller'] == 'animals' && $this->action == 'index') &&
			!($this->params['controller'] == 'users' && $this->action == 'cadastro')&&
			!($this->params['controller'] == 'administrators' && $this->action == 'index')

		){

			if($this->action != 'index_login'){
				$this->autenticar();
			}

		}

	}

	public function autenticar(){

		 if(!$this->Session->check('User')){
			$this->redirect(array('controller' => 'users', 'action' => 'index_login'));
		 	exit();
		 }

	}

	public function index(){

		if($this->Session->read('User')[0]['User']['type'] == 1){
			//redireciona para index1
			$this->redirect(array('action'=> 'index1'));
		}
		else if($this->Session->read('User')[0]['User']['type'] == 2){
			//redireciona para index2
			$this->redirect(array('action'=> 'index2'));
		}
		else if($this->Session->read('User')[0]['User']['type'] == 3){
			//redireciona para index3
			$this->redirect(array('action'=> 'index3'));
		}

	}

	public function index_user(){
		$this->redirect(array('action'=> 'index1'));
	}

	public function reg_adoption(){

	}

public function lista_users(){

	}

	public function index_adm(){

		if($this->Session->read('User')[0]['User']['type'] == 2 || $this->Session->read('User')[0]['User']['type'] == 3){
			$this->index();
		}
		else{
			$this->Flash->set('Acesso restrito a administradores!');
			$this->redirect('/');
		}
	}

	public function index2(){
		if($this->Session->read('User')[0]['User']['type'] != 2){
			$this->Flash->set('Acesso restrito!');
			$this->redirect('/');
		}

		$this->loadModel('Animal');
		$this->set('animals', $this->Animal->find('all', array('order' => 'nome ASC')));

		$this->paginate = array('limit' => 3);
		$this->set('animals', $this->paginate('Animal'));

	}

	public function index3(){
		if($this->Session->read('User')[0]['User']['type'] != 3){
			$this->Flash->set('Acesso restrito!');
			$this->redirect('/');
		}

		$this->loadModel('Animal');
		$this->set('animals', $this->Animal->find('all', array('order' => 'nome ASC')));

		$this->paginate = array('limit' => 3);
		$this->set('animals', $this->paginate('Animal'));
	}

	public function perfil(){

		if(empty($this->request->data)){
			//carregar campos para edição
			$this->request->data= $this->User->findById($this->Session->read('User')[0]['User']['id']);
		}
		else{
			//Salvar os dados
			if($this->User->save($this->request->data)){
				$this->Flash->set('Perfil atualizado com sucesso!');
				$this->redirect(array('action' => 'index1'));
			}
		}
	}

	public function removeCarrinho($id = null){
		$carrinho =  $this->Session->read('Carrinho');
		$newCarrinho = array();
		foreach($carrinho as $c){
		 	if( $c != $id ){
				array_push($newCarrinho, $c);
		 	}
		}
		$this->Session->write('Carrinho', $newCarrinho);
		$this->redirect(array('action' => 'index1'));
	}

	public function regAdoption(){
		$this->loadModel('Adoption');
		$cont = 0;
			$this->request->data['Adoption']['user_id'] = $this->Session->read('User')[0]['User']['id'];
        	$this->request->data['Adoption']['animal_id'] = $this->Session->read('Carrinho')[$cont]; $cont++;
        	$this->request->data['Adoption']['data'] = date("Y-m-d h:i:s");
        	$this->Adoption->create();
        	$this->Adoption->save($this->request->data);

		//destruir o carrinho
		$this->Session->delete('Carrinho');
		$this->Flash->set('Adoção cadastrada com sucesso!');
	//$this->redirect(array('action' => 'historico'));
	}


	public function index1(){

		$this->loadModel('Animal');
		$carrinho = $this->Session->read('Carrinho'); //recupera o array de produtos no carrinho

		//chamar os produtos selecionados e mandar para view
		$pCarrinho = $this->Animal->find('all', array(
			'conditions' => array(
				"id" => $carrinho
			)
		));
		$this->set('animals', $pCarrinho);
	}

	public function addCarrinho(){
		if($this->request->data['Animal']['id'] != null){

			$carrinho = $this->Session->read('Carrinho'); //recupera o array de produtos no carrinho
			$i = count( $this->Session->read('Carrinho')); //incrementa o contador

			$repetido = false;
			foreach($carrinho as $c) {
				if($this->request->data['Animal']['id'] == $c){
					$repetido = true;
				}
			}

			if($repetido == false){
				$carrinho[$i] = $this->request->data['Animal']['id']; //adiciona o novo produto no array
				$this->Session->write('Carrinho', $carrinho); //salva o array no sessao de carrinho
				/*$this->Flash->set('Animal '. $this->request->data['Animal']['id'] .' adicionado');*/
			}
		}

		$this->redirect(array("controller" => "users", "action" => "index_login"));

	}

	public function historico(){
		$this->loadModel('Adoption');
		$this->paginate = array(
		    'conditions' => array('Adoption.user_id' => $this->Session->read('User')[0]['User']['id']),
		    'joins' => array(
		        array(
		            'alias' => 'User',
		            'table' => 'users',
		            'type' => 'INNER',
		            'conditions' => '`User`.`id` = `Adoption`.`user_id`'
		        ),
		        array(
		            'alias' => 'Animal',
		            'table' => 'animals',
		            'type' => 'INNER',
		            'conditions' => '`Animal`.`id` = `Adoption`.`animal_id`'
		        )
		    ),
		    'limit' => 5
		);
		$this->set('registros', $this->paginate('Adoption'));
	}


	public function excluirAnimal($id){
		if($this->Session->read('User')[0]['User']['type'] != 2){
			$this->Flash->set('Acesso restrito!');
			$this->redirect('/');
		}

		$this->loadModel('Animal');
		$this->loadModel('Adoption');

		if(empty($this->Adoption->findAllByAnimalId($id))){

			if(!$id){
				throw new NotFoundException("Animal Inválido");
			}

			$this->Animal->id = $id;
	        if (!$this->Animal->exists()) {
	            throw new NotFoundException(__('Animal não encontrado.'));
	        }

			if($this->Animal->delete($id)){
			 	$this->Flash->set("Animal excluído com sucesso!");
			 	$this->redirect(array('action' => 'index2'));
			}
			$this->Flash->set('Erro: não foi possível excluir o registro.');
        	$this->redirect(array('action' => 'index2'));
		}
		else{
			$this->Flash->set('Não foi possível realizar a exclusão. O animal está sendo utilizado por outros registros.');
        	$this->redirect(array('action' => 'index2'));
		}

	}


	public function editarAnimal($id){
		if($this->Session->read('User')[0]['User']['type'] != 2){
			$this->Flash->set('Acesso restrito!');
			$this->redirect('/');
		}

		$this->loadModel('Animal');

		if(!$id){
			throw new NotFoundException("Animal Inválido");
		}

		if(empty($this->request->data)){
			//carregar campos para edição
			$this->request->data= $this->Animal->findById($id);
		}
		else{
			//Salvar os dados
			if($this->Animal->save($this->request->data)){
				$this->Flash->set('Animal atualizado com sucesso!');
				$this->redirect(array('action' => 'index2'));
			}
		}

	}

	public function editarAnimal2($id){
		if($this->Session->read('User')[0]['User']['type'] != 3){
			$this->Flash->set('Acesso restrito!');
			$this->redirect('/');
		}

		$this->loadModel('Animal');

		if(!$id){
			throw new NotFoundException("Animal Inválido");
		}

		if(empty($this->request->data)){
			//carregar campos para edição
			$this->request->data= $this->Animal->findById($id);
		}
		else{
			//Salvar os dados
			if($this->Animal->save($this->request->data)){
				$this->Flash->set('Animal atualizado com sucesso!');
				$this->redirect(array('action' => 'index3'));
			}
		}
	}

	public function cadastro(){

		// $this->request->data['password'] = md5($this->request->data['password']);

		if($this->User->save($this->request->data)){
			$this->Flash->set('Usuário cadastrado com sucesso!');
			$this->redirect(array('action' => 'index_login'));
		}

	}

	public function index_login(){

	}

	public function validar(){
		// $usuario = $this->User->findAllByNameAndPassword($this->data['User']['name'], md5($this->data['User']['password']));
		$user = $this->User->findAllByEmailAndSenha($this->data['User']['email'], $this->data['User']['senha']);
		if(!empty($user))
			return $user;
		else
			return false;
	}

	public function login(){
		//if(!empty($this->data['User']['name'])){  //Não funciona aqui, mesmo que no modelo do academico está igual
		if(isset($this->data['User']['email'])){
			$user = $this->validar();
			if($user != false){
				$this->Flash->set('Acesso realizado com sucesso!');
				$this->Session->write('User', $user);
				$this->redirect(array('action'=> 'index1'));
				exit();
			}
			else{
				$this->Flash->set('Usuario e/ou senha inválidos!');
				$this->redirect(array('action'=> 'index_login'));
				exit();
			}
		}
		else{
			$this->redirect(array('action'=> 'index_login'));
			exit();
		}
	}

	public function logout(){
		$this->Session->destroy();
		$this->Flash->set('Atividades encerradas com sucesso!');
      	$this->redirect(array('controller' => 'pages', 'action' => ''));
      	exit();
	}

}
