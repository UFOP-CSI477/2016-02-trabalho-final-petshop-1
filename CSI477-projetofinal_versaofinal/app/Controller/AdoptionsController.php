<?php

class AdoptionsController extends AppController {

  public $helpers = array('Html', 'Form');
  public $components = array('Flash');

  var $animals;


  public function solicita_adoption(){
    $this->set('animals', $this->Adoption->Animal->find('all', array('order' => array('Animal.nome'))));
  }

  public function exclui_adoption(){
    $this->set('animals', $this->Adoption->Animal->find('all', array('order' => array('Animal.nome'))));
  }
  public function adoptions_solicitadas() {
    $id = $this->Session->read('User');
    $this->set('animals', $this->Adoption->Animal->find('all',array('conditions'=> array('User.id' => $id[0]['User']['id']), 'order' => array('Animal.data','Animal.nome' )),
    array('recursive' => 2)));
  }

  public function salva_solicitacao($id){
    $coduser = $this->Session->read('User');
      if (empty($this->request->data)) {
        $animals = $this->Adoption->Animal->findById($id);
        $this->set('animal', $animals);
      }
      else{
        $this->request->data['Adoption']['animal_id'] = $id;
        $this->request->data['Adoption']['user_id'] = $codusero[0]['User']['id'] ;

        if ($this->Adoption->save($this->request->data)) {
        $this->Flash->set('Adoção gravada com Sucesso !');
        $this->redirect(array('action' => 'adoptions_solicitadas'));
        }
      }

  }
  public function lista_adoptions(){
    $this->set('adoptions', $this->Adoption->find('all', array('order' => array('Adoption.data DESC'), array('recursive' => 2))));
  }


  public function crud_adoptions(){
      $this->set('adoptions', $this->Adoption->find('all', array('order' => array('Adoption.data DESC'), array('recursive' => 2))));
  }


    public function delet($id){
      $this->Adoption->delete($id);
      $this->Flash->set('Adocão excluída com Sucesso !');
      $this->redirect(array('controller' => 'adoptions', 'action' => 'crud_adoptions'));

    }

}
?>
