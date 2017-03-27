<?php

class AnimalsController extends AppController{

	public $helpers = array('Html', 'Form');
	public $components = array('Flash');


	public function index(){
    $this->set('animals', $this->Animal->find('all', array('order' => array('Animal.id'))));
	}
	public function lista(){
		$this->set('animals', $this->Animal->find('all', array('order' => array('Animal.id'))));
	}
	public function incluir_animal() {

	}
	public function crud_animals() {

	}
	public function incluirAnimal(){
		  $this->loadModel('Animal');
		if($this->Animal->save($this->request->data)){
			$this->Flash->set('Animal cadastrado com sucesso!');
			$this->redirect(array('action' => 'incluir_animal'));
		}

	}

	public function delet($id){
		$this->Animal->delete($id);
		$this->Flash->set('Adocão excluída com Sucesso !');
		$this->redirect(array('action' => 'crud_adoptions'));

	}
 public function add(){
        // if the HTTP method is POST
        if($this->request->is('post')){
            $this->Animal->create();
            if (!empty($this->request->data['Animal']['file']['name'])){
                $file = $this->request->data['Animal']['file'];

                // Strip path information
                move_uploaded_file(
                    $file['tmp_name'],
                    WWW_ROOT . DS . 'img' . DS . $file['name']
                );
                $this->request->data['Animal']['imagem'] =  $file['name'];
            }

            // Set the file-name only to save in the database
            if($this->Animal->save($this->request->data)){
                $this->Flash->success(__('Animal cadastrado com sucesso!'));
                return $this->redirect(array('controller' => 'administradores', 'action' => 'index'));
            }
            $this->Flash->error(__('Animal não foi cadastrado'));
        }
    }



}
