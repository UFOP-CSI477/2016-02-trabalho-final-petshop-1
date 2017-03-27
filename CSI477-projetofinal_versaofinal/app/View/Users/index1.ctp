<?php echo $this->Html->script('jquery-3.1.1', false); ?>
<?php echo $this->Html->script('jquery.validate', false); ?>


</br>
<div class="container">
  <div class="row">
    <div class="col-sm-6">
<div class="panel panel-primary">
    <div class="panel-heading clearfix">
        <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Seja bem vindo(a)!</br>Siga as instruções para finalizar sua adoção. </h4>
    </div>
    <div class="panel-body">
    <center><a href="<?php echo Router::url(array('controller' => 'animals', 'action' => 'index')); ?>"
                class="list-group-item"><strong>Escolher animalzinho!<strong></a>
        <a href="<?php echo Router::url(array('controller' => 'adoptions', 'action' => 'lista_adoptions')); ?>"
                class="list-group-item"><strong>Adoções Solicitadas</strong></a>
   </br>
    </div>






<div class="col-sm-8 col-sm-offset-2" id="conteudo">
<div class="col-sm-10">

<br>

<form name="cadastro" id="cadastro" method="post" action="regAdoption">

			<table class="table table-striped table-bordered">

				<?php $contador = 0; ?>
				<?php foreach ($animals as $p): ?>


					<td class="text-center">
						<?php echo $p['Animal']['nome'] ;?>
						</br>
						<?php echo $this->Html->image($p['Animal']['imagem'], array(
														'alt' => 'imagem' . $p['Animal']['id'],
														'width' => '300',
														'height' => '300',
														'style' => 'padding-top:5px;'
												));?>
							</br>
							</br>

								<input type="submit" value="Confirmar Adoção" class="btn btn-primary">

								</br>
								</br>
						</br>
					</td>
				<?php $contador++; ?>
				<?php endforeach; ?>
			</table>
			<br>
		</form>
		</div>
	</div>
</div>
</div>
</div>
</div>
