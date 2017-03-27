
<div class="container">
  <div class="row">
    <div class="col-sm-6">

<div class="panel panel-primary">
    <div class="panel-heading clearfix">
        <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Acesso exclusivo do Administrador!</h4>
    </div>
    <div class="panel-body">
      <center> <a href="<?php echo Router::url(array('controller' => 'animals', 'action' => 'incluir_animal')); ?>"class="list-group-item">Incluir Animal</a></center>
      <center>  <a href="<?php echo Router::url(array('controller' => 'adoptions', 'action' => 'crud_adoptions')); ?>" class="list-group-item">Adoções Solicitadas</a></center>
      <center> <a href="<?php echo Router::url(array('controller' => 'adoptions', 'action' => 'lista_adoptions')); ?>" class="list-group-item">Adoções Agendadas</a></center>

    </div>
 </div>
</div>
</div>
</div>
