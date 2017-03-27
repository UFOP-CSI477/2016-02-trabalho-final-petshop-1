<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev','Pet Shop - Adote um Amigo!');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())

?>
<!DOCTYPE html>
<html>
<head>

	<?php echo $this->Html->charset(); ?>

	<?php

	echo $this->Html->css('bootstrap.css');
	echo $this->Html->script('jquery-1.12.3.js');
	echo $this->Html->script('jquery.validate.js');
	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>
</head>

</br>

<img src="<?php echo $this->webroot; ?>/app/webroot/img/logoprincipal.jpg" align="left" class="img-circle" "height="170px" width="200px"">
<img src="<?php echo $this->webroot; ?>/app/webroot/img/patinhaazul1.png" align="left" "height="130px" width="150px"">
<img src="<?php echo $this->webroot; ?>/app/webroot/img/animaispt.png" align="left" "height="160px" width="200px"">
<img src="<?php echo $this->webroot; ?>/app/webroot/img/patinhaazul.png" align="left" "height="130px" width="150px"">
<img src="<?php echo $this->webroot; ?>/app/webroot/img/patinhaazul.png" align="right" "height="120px" width="150px"">
<img src="<?php echo $this->webroot; ?>/app/webroot/img/adotetp.png" align="right" "height="500px" width="400px"">
<img src="<?php echo $this->webroot; ?>/app/webroot/img/patinhaazul1.png" align="right" "height="120px" width="150px"">

<body><nav class="navbar navbar">
	<div class="btn-group btn-group-justified" role="group" aria-label="...">

     <div class="btn-group" role="group">
				<li class="active">
            <center><p><a href="<?php echo Router::url(array('controller' => 'pages', 'action' => 'index')); ?>"
                class="btn btn-primary btn-lg">Home</a></p></center>
        </li>
     </div>

     <div class="btn-group" role="group">
				<li class="active">
            <center><p><a href="<?php echo Router::url(array('controller' => 'institucional', 'action' => 'index')); ?>"
                class="btn btn-primary btn-lg">Institucional</a></p></center>
              </li>
     </div>

    <div class="btn-group" role="group">
      <li class="active">
					 <center><p><a href="<?php echo Router::url(array('controller' => 'animals', 'action' => 'index')); ?>"
							 class="btn btn-primary btn-lg">Cães e Gatos</a></p></center>
			 </li>
    </div>

		<div class="btn-group" role="group">
			<li class="active">
					<center><p><a href="<?php echo Router::url(array('controller' => 'users', 'action' => 'index_login')); ?>"
							class="btn btn-primary btn-lg">Área do Usuário</a></p></center>
			</li>
		</div>

	 <div class="btn-group" role="group">
		 <li class="active">
				 <center><p><a href="<?php echo Router::url(array('controller' => 'dicas', 'action' => 'index')); ?>"
						 class="btn btn-primary btn-lg">Dicas</a></p></center>
		 </li>
	 </div>

	 <div class="btn-group" role="group">
		 <li class="active">
				 <center><p><a href="<?php echo Router::url(array('controller' => 'contatos', 'action' => 'index')); ?>"
						 class="btn btn-primary btn-lg">Contato</a></p></center>
		 </li>
	 </div>
	 <div class="btn-group" role="group">
		 <li class="active">
				 <center><p><a href="<?php echo Router::url(array('controller' => 'administrators', 'action' => 'index_login')); ?>"
						 class="btn btn-primary btn-lg">Área Administrativa</a></p></center>
		 </li>
	 </div>
  </div>


<body background="<?php echo $this->webroot; ?>/app/webroot/img/fundoazul.jpg" bgproperties="fixed" width=100% height=100% >

<div class="footer navbar-fixed-top text-center" >
	<ul class="nav text-center nav-pills">
      <li class="active">
						<ul class="nav navbar-position-top-left"><?php if($this->Session->check('User')){ ?>	<p><a href=" <?php echo Router::url('/users/logout'); ?>"<button class='btn btn-default'>SAIR</button></a> <?php } ?>
						</ul>
			</li>
  </ul>
						<ul class="footer navbar-fixed-top text-center">
								<p><?php echo $this->Flash->render(); ?></p>
						</ul>
</div>


<div class="container-fluid">
	  <div class="row">
			<?php echo $this->fetch('content'); ?>
			</br>
		</div>
</div>



<style type="text/css">
<!--
body {
    background-color: #CEF6F5;
}
-->
</style>

<div id="footer">
        <div id="footer-left">
            <div id="link" style="text-align: center; "> <b>@Todos direitos reservados a Pet Shop - Adote um Amigo!</b>
            </div>
        </div>
    </div>


</body>
</html>
