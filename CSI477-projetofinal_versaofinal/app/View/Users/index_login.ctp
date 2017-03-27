<?php echo $this->Html->script('jquery-3.1.1', false); ?>
<?php echo $this->Html->script('jquery.validate', false); ?>

<?php echo $this->Html->script('jquery-3.1.1', false); ?>
<?php echo $this->Html->script('jquery.validate', false); ?>


<div class="container">
  <div class="row">
    <div class="col-sm-6">
<div class="panel panel-primary">
    <div class="panel-heading clearfix">
        <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Efetue login para prosseguir!</h4>
    </div>
        <div class="panel-body">
						<?php echo $this->Form->create('User', array('controller' => 'users', 'url' => 'login')); ?>
            <div class="form-group">
                <?php
                    echo $this->Form->input('email',array(
                        'class'=>'form-control',
                        'placeholder'=>'Informe seu email'
                    ));
                ?>
            </div>
            <div class="form-group">
                <label for="UsuarioSenha">Senha</label>
                <?php
                    echo $this->Form->password('senha',array(
                        'class'=>'form-control',
                        'placeholder'=>'Informe sua senha'
                    ));
                ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->submit('Entrar',array('class'=>'btn btn-primary'))?>
                <?php echo $this->Form->end();?>
            </div>

            <div class="form-group">
                <?php
                    echo $this->Form->Html->link(
                        'Não possui conta? Clique aqui!',
                        array('controller' => 'users', 'action' => 'cadastro')
                    );
                ?>
            </div>
        </div>
</div>
</div>
</div>
</div>
