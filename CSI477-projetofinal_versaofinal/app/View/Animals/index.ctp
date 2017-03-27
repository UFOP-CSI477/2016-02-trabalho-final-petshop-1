<div class="container">
  <div class="row">
<div class="col-sm-12">
  <img src="<?php echo $this->webroot; ?>/app/webroot/img/patinhaazul1.png" align="left" "height="130px" width="150px"">
  <img src="<?php echo $this->webroot; ?>/app/webroot/img/patinhaazul.png" align="right" "height="130px" width="150px"">
      <center><img src=" <?php echo $this->webroot; ?>/app/webroot/img/amigo3.png" height="200" width="700"></center>
      </br>
  </div>
  </div>
  </div>


<div class="panel panel-primary">
    <div class="panel-heading clearfix">
        <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Cães e Gatos para Adoção</h4>
    </div>

    <div class="panel-body">
        <?php foreach($animals as $a): ?>
                <div class="col-sm-6 col-md-4">
                    <div class="panel panel-info" align="center">
                      <p><?php
                          echo $this->Html->image($a['Animal']['imagem'], array(
                              'alt' => 'imagem' . $a['Animal']['id'],
                              'width' => '150',
                              'height' => '150',
                              'style' => 'padding-top:5px;'
                          ));
                      ?></p>
                      <p><?php echo $a['Animal']['nome']; ?></p>



<?php echo $this->Form->create('Animal', ['url' => ['controller' => 'users', 'action' => 'addCarrinho']]);?>
<?php echo $this->Form->input('id', array( 'default' => $a['Animal']['id']));?>
<?php echo $this->Form->button('Quero Adotar!', array('class' => 'btn-primary btn btn-md')); ?>
<?php echo $this->Form->end(); ?>


  <?php echo $this->Form->end(); ?>
</br>
                  </div>
                </div>
          <?php endforeach;  ?>
  </div>
</div>

<div class="container">
  <div class="row">
<div class="col-sm-12">
  <img src="<?php echo $this->webroot; ?>/app/webroot/img/patinhaazul1.png" align="left" "height="130px" width="150px"">
  <img src="<?php echo $this->webroot; ?>/app/webroot/img/patinhaazul.png" align="right" "height="130px" width="150px"">
      <center><img src=" <?php echo $this->webroot; ?>/app/webroot/img/abrace.png" height="400" width="700"></center>
      </br>
  </div>
  </div>
  </div>
