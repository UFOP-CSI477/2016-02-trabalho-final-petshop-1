<?php echo $this->Html->script('jquery-3.1.1', false); ?>
<?php echo $this->Html->script('jquery.validate', false); ?>

<div class="container">
  <div class="row">
    <div class="col-sm-6">
			<div class="panel panel-primary">
    <div class="panel-heading clearfix">
        <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Efetue seu Cadastro para prosseguir!</h4>
    </div>

			  <div class="panel-body">
          	<?php echo $this->Form->create('User', array('controller' => 'users', 'url' => 'cadastro', 'id' => 'cadastro')); ?>
            <div class="form-group">
	            <?php echo $this->Form->input('nome', array('class' => 'form-control', 'label' => 'Nome', 'id' => 'nome'));?>
	          </div>

	        <div class="form-group">
	             <?php echo $this->Form->input('telefone', array('class' => 'form-control', 'label' => 'Telefone', 'id' => 'telefone'));?>
	        </div>

			     <div class="form-group">
	             <?php echo $this->Form->input('endereco', array('class' => 'form-control', 'label' => 'Endereço', 'id' => 'endereco'));?>
	        </div>
          <div class="form-group">
              <?php echo $this->Form->input('email', array('class' => 'form-control', 'label' => 'Email', 'id' => 'email'));?>
         </div>
         <div class="form-group">
          <?php echo $this->Form->input('senha', array('class' => 'form-control', 'label' => 'Senha', 'id' => 'password'));?>
        </div>

			     <div class="form-group">
	           <?php echo $this->Form->input('csenha', array('class' => 'form-control', 'label' => 'Confirmação de senha', 'id' => 'cSenha', 'type' => 'password'));?>
	         </div>

			<br>
			<div class="col-sm-12 center-block">
                <?php echo $this->Form->submit('Cadastrar', array('class' => 'btn btn-primary')); ?>
            </div>

		<?php echo $this->Form->end(); ?>
  </div>
  </div>
  </div>
  <div class="col-md-6">
  </br>
  </br>
  </br>
  </br>
  </br>
  </br>
  </br>
  </br>
  <img src="<?php echo $this->webroot; ?>/app/webroot/img/patinhaazul.png" align="left" "height="130px" width="150px"">
  <img src="<?php echo $this->webroot; ?>/app/webroot/img/patinhaazul1.png" align="right" "height="130px" width="150px"">
        <center><img src="<?php echo $this->webroot; ?>/app/webroot/img/am.png" "height="200px" width="200px""></center>
    </div>
    <img src="<?php echo $this->webroot; ?>/app/webroot/img/patinhaazul1.png" align="left" "height="130px" width="150px"">
    <img src="<?php echo $this->webroot; ?>/app/webroot/img/patinhaazul.png" align="right" "height="130px" width="150px"">
  </div>
  </div>
