
<img src="<?php echo $this->webroot; ?>/app/webroot/img/patinhaazul.png" align="right" "height="130px" width="150px"">
  <center><div class="container col-sm-12">
<div class="col-sm-6">
<div class="panel panel-primary">
      <div class="panel-heading clearfix">
        <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Incluir novo animal para ser adotado</h4>
    </div>

  <div class="panel-body">
  		<?php echo $this->Form->create('Animal', array('controller' => 'animals', 'url' => 'incluirAnimal')); ?>
            <div class="form-group">
                <?php
                    echo $this->Form->input('nome',array(
                        'class'=>'form-control',
                        'placeholder'=>'Nome do animal (texto carinhoso)'
                    ));
                ?>
            </div>
              <div class="input-group form-group">
              <label for="AnimalImagem">Imagem</label>
                <span class="input-group">
                  <label for="AnimalFile" class="btn btn-primary"
                        <?php
                            echo $this->Form->input('Realizar Upload de imagem',array(
                                'type' => 'file',
                                'multiple',
                                'style' => 'display:none',
                                'accept' => '.png,.jpg'
                            ));
                        ?></span></label>
            </div>

            <div class="form-group">
                  <center>  <?php echo $this->Form->submit('Enviar',array('class'=>'btn btn-primary'))?>  </center>
              </div>
      </div>

          <?php echo $this->Form->end(); ?>

  	</div>
</div>
</div>
</center>

<div class="container">
  <div class="row">
<div class="col-sm-12">
  <img src="<?php echo $this->webroot; ?>/app/webroot/img/patinhaazul.png" align="right" "height="130px" width="150px"">
  <img src="<?php echo $this->webroot; ?>/app/webroot/img/patinhaazul1.png" align="left" "height="130px" width="150px"">
  </div>
  </div>
  </div>
