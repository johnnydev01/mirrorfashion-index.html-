<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" name="viewport" content="width=device-width">

<title>Mirror Fashion</title>

<link rel="stylesheet" href="css/reset.css">
<!-- <link rel="stylesheet" href="css/estilos.css"> -->
<link rel="stylesheet/less" href="less/estilos.less">
<link rel="stylesheet" href="css/banner.css">
<link href='http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script'
	rel='stylesheet'>

</head>
<body>
	<?php include("cabecalho.php"); ?>
	
	
	
	<div class="container destaque">

		<section class="busca">
			<h2>Busca</h2>

			<form>
				<input type="search">
				<button>Buscar</button>
			</form>
		</section>
		<!-- fim .busca -->

		<section class="menu-departamentos">
			<h2>Departamentos</h2>

			<nav>
				<ul>
					<li><a href="#">Blusas e Camisas</a>
						<ul>
							<li><a href="#">Manga curta</a></li>
							<li><a href="#">Manga comprida</a></li>
							<li><a href="#">Camisa social</a></li>
							<li><a href="#">Camisa casual</a></li>
						</ul></li>
					<li><a href="#">Calças</a></li>
					<li><a href="#">Saias</a></li>
					<li><a href="#">Vestidos</a></li>
					<li><a href="#">Sapatos</a></li>
					<li><a href="#">Bolsas e Carteiras</a></li>
					<li><a href="#">Acessórios</a></li>
				</ul>

			</nav>
		</section>


		<!-- fim .menu-departamentos -->

		<section class="banner-destaque">
			<figure>
				<img src="img/destaque-home.jpg" alt="Promoção: Big City Night">
				<a href="#" class="pause"></a>

			</figure>
		</section>
		<!-- fim .banner-destaque -->
	</div>



	<!-- fim .container .destaque -->



	<div class="container paineis">
		<section class="painel novidades ">
			<h2>Novidades</h2>

			<ol>
				<!-- primeiro produto -->
				<li><a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura1.jpg" alt="miniatura1">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
				</a></li>
				<!-- fim do primeiro produto -->


				<!-- segundo produto -->
				<li><a href="">
						<figure>
							<img src="img/produtos/miniatura2.jpg" alt="miniatura2">
							<figcaption>Baby look por R$ 45,99</figcaption>
						</figure>
				</a></li>
				<!-- fim do segundo produto -->

				<!-- terceiro produto -->
				<li><a href="">
						<figure>
							<img src="img/produtos/miniatura3.jpg" alt="miniatura3">
							<figcaption>Manga longa por R$ 120,90</figcaption>
						</figure>
				</a></li>
				<!-- fim do terceiro produto -->


				<li><a href="">
						<figure>
							<img src="img/produtos/miniatura4.jpg" alt="miniatura4">
							<figcaption>Jaqueta por R$ 150,90</figcaption>
						</figure>
				</a></li>


				<li><a href="">
						<figure>
							<img src="img/produtos/miniatura5.jpg" alt="miniatura5">
							<figcaption>Regata por R$ 19,90</figcaption>
						</figure>
				</a></li>


				<li><a href="">
						<figure>
							<img src="img/produtos/miniatura6.jpg" alt="miniatura6">
							<figcaption>Regata por R$ 25,90</figcaption>
						</figure>
				</a></li>

			</ol>

			<button type="button">Mostrar mais</button>


		</section>


		<section class="painel mais-vendidos">
			<h2>Mais Vendidos</h2>
			<ol>
				<!-- setimo produto -->
				<li><a href="">
						<figure>
							<img src="img/produtos/miniatura7.jpg" alt="miniatura7">
							<figcaption>Jaqueta por R$ 150,90</figcaption>
						</figure>
				</a></li>


				<!--quinto produto -->
				<li><a href="">
						<figure>
							<img src="img/produtos/miniatura5.jpg" alt="miniatura5">
							<figcaption>Regata por R$ 19,90</figcaption>
						</figure>
				</a></li>
				<!-- fim do quinto produto -->


				<!-- sexto produto -->
				<li><a href="">
						<figure>
							<img src="img/produtos/miniatura6.jpg" alt="miniatura6">
							<figcaption>Regata por R$ 25,90</figcaption>
						</figure>
				</a></li>
				<!-- fim do sexto produto -->



				<!-- quarto produto -->
				<li><a href="">
						<figure>
							<img src="img/produtos/miniatura4.jpg" alt="miniatura4">
							<figcaption>Jaqueta por R$ 150,90</figcaption>
						</figure>
				</a></li>
				<!-- fim do quarto produto -->


				<!--quinto produto -->
				<li><a href="">
						<figure>
							<img src="img/produtos/miniatura5.jpg" alt="miniatura5">
							<figcaption>Regata por R$ 19,90</figcaption>
						</figure>
				</a></li>
				<!-- fim do quinto produto -->


				<!-- sexto produto -->
				<li><a href="">
						<figure>
							<img src="img/produtos/miniatura6.jpg" alt="miniatura6">
							<figcaption>Regata por R$ 25,90</figcaption>
						</figure>
				</a></li>
				<!-- fim do sexto produto -->

			</ol>
			<button type="button">Mostrar mais</button>

		</section>






		<?php include("rodape.php"); ?>



	</div>
	<!-- fim .container .paineis -->


	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/home.js"></script>
	<script type="text/javascript" src="js/banner.js"></script>
	<script src="js/less.js"></script>

</body>
</html>