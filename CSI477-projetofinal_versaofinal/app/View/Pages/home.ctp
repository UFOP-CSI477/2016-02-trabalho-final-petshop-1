<head>
  <link rel="shortcut icon" href="favicon.ico">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="Bootstrap Thumbnail First" src="app/webroot/img/amigo.png" "height="500px" width="400px"">
						<div class="caption">
							<h3>
								Adote essa ideia!
							</h3>
							<p>
								Existem diversos cachorros e gatos em busca de um cantinho pra morar, um amigo pra brincar e amar.
                Seja você o próximo a <b>adotar!</b>
							</p>
							<p>
								<a class="btn btn-success" href="<?php echo Router::url(array('controller' => 'animals', 'action' => 'index')); ?>"
                    class="btn btn-primary btn-lg">Ver Animais</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="Bootstrap Thumbnail Second" src="app/webroot/img/cadastre1.png" "height="500px" width="440px"">
						<div class="caption">
							<h3>
								Cadastre para Adotar!
							</h3>
							<p>
								Para adotar um amiguinho, é simples. <b>Faça seu cadastro </b> e escolha quem você quer levar pra casa!
							</p>
							<p>
                <a class="btn btn-primary" href="<?php echo Router::url(array('controller' => 'users', 'action' => 'cadastro')); ?>"
                    class="btn btn-primary btn-lg">Cadastre-se</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="Bootstrap Thumbnail Third" src="app/webroot/img/dica1.png" "height="300px" width="185px"">
						<div class="caption">
							<h3>
								Aprenda Conosco!
							</h3>
							<p>
								Temos um cantinho reservado para informações que ajudam a cuidar de seus amiguinhos.
                Aqui você encontra <b>dicas </b> para auxiliar nos cuidados com seu Pet.
                Aprenda sobre alimentação adequada, vacinas importantes e muito mais.
                Além disso divulgamos campanhas e eventos dos abrigos de proteção aos animais.
							</p>
							<p>
                <p>
                  <a class="btn btn-danger" href="<?php echo Router::url(array('controller' => 'dicas', 'action' => 'index')); ?>"
                      class="btn btn-primary btn-lg">Veja Aqui</a>
  							</p>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
<div class="row">
<div class="col-sm-12">
      <img src="app/webroot/img/patinhaazul.png" align="right" "height="120px" width="150px"">
      <img src="app/webroot/img/patinhaazul1.png" align="left" "height="120px" width="150px"">
      <center><img src=" app/webroot/img/bloco.jpg" height="300" width="800"></center>
  </div>
  </div>
  </div>
</br>
</br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<div class="carousel slide" id="carousel-118412">
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#carousel-118412">
					</li>
					<li data-slide-to="1" data-target="#carousel-118412">
					</li>
					<li data-slide-to="2" data-target="#carousel-118412">
					</li>
          <li data-slide-to="3" data-target="#carousel-118412">
					</li>
          <li data-slide-to="4" data-target="#carousel-118412">
					</li>
				</ol>
				<div class="carousel-inner well">
					<div class="item active">
						<img alt="Carousel Bootstrap First" src="app/webroot/img/banner55.png" width="460" height="345">
					</div>
					<div class="item">
						<img alt="Carousel Bootstrap Second" src="app/webroot/img/banner11.jpg" width="500" height="400">
					</div>
          <div class="item">
						<img alt="Carousel Bootstrap Second" src="app/webroot/img/banner22.jpg" width="460" height="345">
					</div>
          <div class="item">
						<img alt="Carousel Bootstrap Second" src="app/webroot/img/banner33.jpg" width="460" height="345">
					</div>
          <div class="item">
						<img alt="Carousel Bootstrap Second" src="app/webroot/img/banner44.jpg" width="460" height="320">
					</div>
					</div>
				</div> <a class="left carousel-control" href="#carousel-118412" data-slide="prev"><span class="glyphicon glyphicon-chevron-left">
        </span></a> <a class="right carousel-control" href="#carousel-118412" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
      <div class="col-md-8">
        <div class="col-md-4">
          <img src="app/webroot/img/patinhaazul1.png" align="right" "height="120px" width="150px"">
        </div>
        <img src="app/webroot/img/adote4p.png" align="right" "height="500px" width="600px"">
      </div>
		</div>
	</div>
</div>
