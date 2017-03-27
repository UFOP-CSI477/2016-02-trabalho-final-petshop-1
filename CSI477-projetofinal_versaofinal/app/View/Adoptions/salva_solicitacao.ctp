<div class="form-top container top-content form-top row">
<div class="row">
  <br/>
  <div class="col-md-6 col-sm-offset-1">
    <div class="panel panel-primary">
      <div class="panel-body">
        <?php
        echo $animal['Animal']['nome'];?>
        &nbsp&nbsp&nbsp&nbsp
        R$<?php echo $animal['Animal']['preco'];
        echo $this->Form->create('Adoption');?>
        &nbsp&nbsp&nbsp&nbsp
        <?php  echo $this->Form->input('data', array('label' => 'Data para adoção:    ', 'rule' => 'notEmpty', 'required' => true ,'placeholder' => '', 'class' => 'form-text'));?>
        <?php
              $this->Form->hidden('user_id');
              $this->Form->hidden('animal_id'); ?>
        <br/><?php echo $this->Form->submit('Salvar',  array('class' => 'btn btn-success')); ?>
      </div>
    </div>
  </div>
</div>
  <br/><strong><a href="<?php echo Router::url(array('controller' => 'adoptions', 'action' => 'solicita_adoption')); ?>">VOLTAR</strong>
</div>
</body>
