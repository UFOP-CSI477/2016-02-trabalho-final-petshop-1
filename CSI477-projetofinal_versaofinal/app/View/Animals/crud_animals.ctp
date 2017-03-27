
  <br/><center><p class="lead">ÁREA ADMINISTRATIVA. </center></br></p>
  <center><div class="form-top container top-content form-top row">
  <div class="row">
    <br/>
    <div class="col-md-6 col-sm-offset-1">
      <div class="panel panel-info">
        <div class="panel-heading">
          <center><h3 class="panel-title">INCLUIR NOVO ANIMAL</h3></center>
        </div>
        <div class="panel-body">
          <p><center>
            <div class="form-bottom">
              <?php echo $this->Form->create('Animal', array('url' => 'crud_animals' ));?>

              <div class="form-group">
                <br/><p>Nome do animal:</p>
                <?php echo $this->Form->input('nome', array('placeholder' => '', 'required' => true , 'class' => 'form-text form-control', 'label' => '')); ?>
              </div>
              <div class="form-group">
                <br/><p>Imagem do animal:</p>
                <?php echo $this->Form->input('imagem', array('placeholder' => '', 'required' => true , 'class' => 'form-text form-control', 'label' => ''));?>
              </div>
              <br/><?php echo $this->Form->submit('Cadastrar', array('class' => 'btn btn-success')); ?>
            </div>
          </center></p>
        </div>
      </div>
      <div class="panel panel-info">
        <div class="panel-heading">
          <center><h3 class="panel-title">EDITAR OU EXCLUIR ANIMAIS</h3></center>
        </div>
        <div class="panel-body">
          <p><center><table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th></th>
                <th>ID</th>
                <th>NOME</th>
                <th>VALOR</th>
              </tr>
            </thead>
            <tbody>

      <?php foreach ($animals as $a): ?>
        <tr>
          <td><center><a href=" <?php echo Router::url(array('controller' => 'animals', 'action' => 'altera_animal', $a['Animal']['id'])); ?>" >Editar</a></center></td>
          <td><?php echo $a['Animal']['id']; ?></td>
          <td>
            <?php echo $a['Animal']['nome']; ?>
          </td>
          <td>
            <?php echo $a['Animal']['imagem']; ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>-
    </table></center></p>
        </div>
      </div>
    </div>
  </div>
</center>
</div>
</div>
</div>
</div>
</div>
</boby>
