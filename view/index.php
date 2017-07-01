<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema Voltagem circuito Eletrico</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">	
	<link rel="stylesheet" type="text/css" href="css/fonts.css">	
	<link rel="stylesheet" type="text/css" href="css/definitions.css">
	<link rel="stylesheet" type="text/css" href="css/carousel_settings.css">
	
	<link rel="icon" href="imagens/favicon.ico">
</head>
<body>
	<?php
		session_start();
		$_SESSION['navbarSelected'] = "inserirComodos.php";
		$_SESSION['paginaAnterior'] = "inserirComodos.php";
	?>
	<!-- Carousel
    ================================================== -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="first-slide" src="imagens/carousel/carousel_1.jpg" alt="First slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>Cálculo de pontos de iluminação e tomadas de residências.</h1>
						<p>Calcule quantidades de tomadas necessárias em uma residência, e potência de iluminação através da área e perímetro.</p>
						<p><a class="btn btn-lg btn-primary" href="gerenciadorView.php" role="button">Abrir Sistema agora</a>
						</p>
					</div>
				</div>
			</div>
			<div class="item">
				<img class="second-slide" src="imagens/carousel/carousel_2.jpg" alt="Second slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>Sobre o sistema</h1>
						<p>Nosso sistema pode ser usado por indústrias comércios e residências ele consegue suprir a necessidade de todos.</p>
						<!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
					</div>
				</div>
			</div>
			<div class="item">
				<img class="third-slide" src="imagens/carousel/carousel_3.jpg" alt="Third slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>Uso Responsavel.</h1>
						<p>Com ajuda de nosso sistema será usado apenas o necessário evitando o desperdício de material e energia elétrica.</p>
						<!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a>-->
						</p>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Anterior</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Próximo</span>
		</a>
	</div>
	<!-- /.carousel -->


	<!-- Marketing messaging and featurettes
    ================================================== -->
	<!-- Wrap the rest of the page in another container to center all the content. -->

	<div class="container marketing">

		<!-- START THE FEATURETTES -->

		<hr class="featurette-divider">

		<div class="row featurette">
			<div class="col-md-7">
				<h2 class="featurette-heading">Quem somos. <span class="text-muted">As pessoas por trás de tudo.</span></h2>
				<p class="lead">Somos uma pequena equipe que trabalha no desenvolvimento de aplicações em web para auxiliar no trabalho de pessoas em certos momentos.</p>
			</div>
			<div class="col-md-5">
				<img class="featurette-image img-responsive center-block" src="imagens/tutorial/grupo.jpg" alt="Generic placeholder image">
			</div>
		</div>

		<hr class="featurette-divider">

		<div class="row featurette">
			<div class="col-md-5">
				<img class="featurette-image img-responsive center-block" src="imagens/tutorial/inicio.jpg" alt="Generic placeholder image">
			</div><br/>
			<div class="col-md-7">
				<h2 class="featurette-heading">Como usar a aplicação. <span class="text-muted">Guia Passo a Passo.</span></h2>
				<p class="lead">Inicialmente, ao abrir o sistema, você estará em uma tela de inserção de comodos, podendo mudar de abas livremente enquanto utiliza o mesmo sistema.</p>
			</div>
		</div>

		<div class="row featurette">
			<div class="col-md-12">
				<img class="featurette-image img-responsive center-block" src="imagens/tutorial/Inserir Comodo-Tutorial.png" alt="Generic placeholder image">
			</div>
			<div class="col-md-12">
				<p class="lead">Na aba de Inserção de Comodos, você irá inserir os dados correspondentes aos comodos que deseja inserir, como seu tipo, tamanho, e tomadas especificas.</p>
			</div>
			<div class="col-md-12">
				<img class="featurette-image img-responsive center-block" src="imagens/tutorial/comodos inseridos-Tutorial.png" alt="Generic placeholder image">
			</div>
				<div class="col-md-12">
				<p class="lead">Na aba de Comodos inseridos, você terá acesso a todos os comodos já inseridos, podendo removê-los, ou editá-los, como bem entender.</p>
			</div>
		</div>

		<hr class="featurette-divider">

		<div class="row featurette">
			<div class="col-md-5">
				<h2 class="featurette-heading">Abrir Sistema. <span class="text-muted">Acessando o sistema.</span></h2>
				<a href = "gerenciadorView.php"><button type="button" class="btn btn-secondary btn-lg btn-block">Usar Sistema</button></a>
				<p class="lead">Clique agora, utilize nosso sistema, e tenha seu resultado de forma imediata</p>
			</div>
			<div class="col-md-7">
				<img class="featurette-image img-responsive center-block" src="imagens/tutorial/Resultados - Tutorial.png" alt="Generic placeholder image">
			</div>
		</div>

		<hr class="featurette-divider">

		<!-- /END THE FEATURETTES -->


		<!-- FOOTER -->
		<footer>
			<p class="pull-right"><a href="#">Back to top</a>
			</p>
		</footer>

	</div>
	<!-- /.container -->


	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>