<div class="form-top container top-content form-top row">
  <div class="row">
    <br/>
    <div class="col-md-7 col-sm-offset-1">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <center><h3 class="panel-title">Adoção: <?php echo $animals[0]['Animal']['id'] ?></h3></center>
        </div>
        <div class="panel-body">
          <h4><strong><center>Dados:</center></strong></h4><br/>
          <table class="table table-hover table-condensed">
            <thead>
              <tr>
                <th width= "10%"></th>
                <th>id</th>
                <th>Nome</th>
              </tr>
            </thead>
            <tbody>
              <?php echo $this->Form->create('Adoption');?>
              <tr>
                <td>
                    <br/><center><?php echo $this->Form->submit('Excluir', array('class' => 'btn btn-primary') );?></center>
                </td>
                <td>
                  <br/><center><?php echo $animals[0]['Animal']['id'] ?></center><br/>
                </td>
                <td>
                  <br/><?php echo $animals[0]['Animal']['nome'] ?>
                </td>
            </tbody>
          </table>
          <br/><center><a href="<?php echo Router::url(array('controller' => 'adoptions', 'action' => 'crud_adoptions')); ?>">VOLTAR</a></center>
          <br/>
          <br/><center><?php echo $this->Html->link('Deletar Adoção',
                                      array('controller' => 'animals', 'action' => 'delet', $animals[0]['Animal']['id'] ),
                                      array('confirm' => 'Deseja mesmo deletar esse Adoção?'));?>
           </center>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
