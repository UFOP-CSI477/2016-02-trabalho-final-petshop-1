<?php

class AdministratorsController extends AppController {

  public $helpers = array('Html', 'Form', 'Time');
	public $components = array('Flash');

  public function index() {

  }

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

		 if(!$this->Session->check('Administrator')){
			$this->redirect(array('controller' => 'administrators', 'action' => 'index_login'));
		 	exit();
		 }
	}

  public function index_login(){

	}

  public function validar(){
		$administrator = $this->Administrator->findAllByEmailAndSenha($this->data['Administrator']['email'], $this->data['Administrator']['senha']);
		if(!empty($administrator))
			return $administrator;
		else
			return false;
	}

	public function login(){
		if(isset($this->data['Administrator']['email'])){
			$administrator = $this->validar();
			if($administrator != false){
				$this->Flash->set('Acesso realizado com sucesso!');
				$this->Session->write('Administrator', $administrator);
				$this->redirect(array('action'=> 'index'));
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
      	$this->redirect(array('action' => 'index_login'));
      	exit();
	}




}

?>
