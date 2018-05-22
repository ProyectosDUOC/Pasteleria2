<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Bootshop online Shopping cart</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen" />
	<link href="themes/css/base.css" rel="stylesheet" media="screen" />
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet" />
	<link rel="shortcut icon" href="themes/images/ico/favicon.ico">
</head>

<body>
	<?php require_once("componentes/header.php") ?>
	<div id="mainBody">
		<div class="container">
			<div class="row">
				<div id="sidebar" class="span3">
					<div class="well well-small">
						<a id="myCart" href="carrito.php">
						<img src="themes/images/ico-cart.png" alt="cart">1 Items en el carrito
							<span class="badge badge-warning pull-right">$1.000</span>
						</a>
					</div>
					<?php require_once("componentes/items.php") ?>
					<br/>
				</div>
				<div class="span9">
					<ul class="breadcrumb">
						<li>
							<a href="index.php">Home</a>
							<span class="divider">/</span>
						</li>
						<li class="active">Tortas</li>
					</ul>
					<h3> Tortas
						<small class="pull-right"> 10 Productos disponible a lo largo de todo Chile </small>
					</h3>
					<hr class="soft" />
					<p>
						Pasteleria Doña Rosa tiene las mejores tortas de Chile. Sus variedades de sabores hace que todo se mas agradable para el paladar	
					</p>
					<hr class="soft" />
					<form class="form-horizontal span6">
						<div class="control-group">
							<label class="control-label alignL">Buscar por </label>
							<select>
								<option>A - Z</option>
								<option>Z - A</option>
								<option>Precios mas altos</option>
								<option>Precios mas bajos</option>
							</select>
						</div>
					</form>
					<br class="clr" />
					<div class="tab-content">
						<div class="tab-pane  active" id="blockView">
							<ul class="thumbnails">
								<li class="span3">
									<div class="thumbnail">
										<a href="product_details.html">
											<img src="../img/productos/Tortas/tor_brazo_reina.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Brazo de Reina</h5>
											<p>
												Masa esponjoda rellanda de manjar
											</p>
											<h4 style="text-align:center">
												<a class="btn" href="#">Añadir al carrito
													<i class="icon-shopping-cart"></i>
												</a>
												<a class="btn btn-primary" href="#">$10.000</a>
											</h4>
										</div>
									</div>
								</li>	
								<li class="span3">
									<div class="thumbnail">
										<a href="product_details.html">
											<img src="../img/productos/Tortas/tor_castano.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Torta de castaña</h5>
											<p>
												Torta de sabor a castaño
											</p>
											<h4 style="text-align:center">
												<a class="btn" href="#">añadir al carro
													<i class="icon-shopping-cart"></i>
												</a>
												<a class="btn btn-primary" href="#">$25.000</a>
											</h4>
										</div>
									</div>
								</li>	
								<li class="span3">
									<div class="thumbnail">
										<a href="product_details.html">
											<img src="../img/productos/Tortas/tor_kuchen_quesillo.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Kuchen de mermelada de frutilla</h5>
											<p>
												Deliciosa masa de mermelada de frutilla
											</p>
											<h4 style="text-align:center">
												<a class="btn" href="#">añadir al carro
													<i class="icon-shopping-cart"></i>
												</a>
												<a class="btn btn-primary" href="#">$15.000</a>
											</h4>
										</div>
									</div>
								</li>	
								<li class="span3">
									<div class="thumbnail">
										<a href="product_details.html">
											<img src="../img/productos/Tortas/tor_mazapan_chocolate.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Torta de Chocolate</h5>
											<p>
												Para 20,30,50 Personas
											</p>
											<h4 style="text-align:center">
												<div class="control-group">
												<div class="controls">
													<select id="select01">
														<option class="disabled">Cantidad de personas</option>
														<option>20 Personas</option>
														<option>30 Personas</option>
														<option>50 Personas</option>
													</select>
												</div>
												<a class="btn" href="#">añadir al carro
													<i class="icon-shopping-cart"></i>
												</a>
											</div>
												<a class="btn btn-primary" href="#">$20.000 min</a>
											</h4>
										</div>
									</div>
								</li>	
								<li class="span3">
									<div class="thumbnail">
										<a href="product_details.html">
											<img src="../img/productos/Tortas/tor_mil_hojas.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Torta Mil Hoja</h5>
											<p>
												Masa deliciosa
											</p>
											<h4 style="text-align:center">		
											<div class="control-group">
												<div class="controls">
													<select id="select01">
														<option class="disabled">Cantidad de personas</option>
														<option>20 Personas</option>
														<option>30 Personas</option>
														<option>50 Personas</option>
													</select>
												</div>
												<a class="btn" href="#">añadir al carro
													<i class="icon-shopping-cart"></i>
												</a>
											</div>
											<a class="btn btn-primary" href="#">$25.000 min</a>
											</h4>
										</div>
									</div>
								</li>
								<li class="span3">
									<div class="thumbnail">
										<a href="product_details.html">
											<img src="../img/productos/Tortas/tor_mix_pasteles.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Mini tortas</h5>
											<p>
												Tortas de todos los sabores
											</p>
											<h4 style="text-align:center">		
											<div class="control-group">
												<div class="controls">
													<select id="select01">
														<option class="disabled">Cantidad</option>
														<option>20 Cantidad</option>
														<option>30 Cantidad</option>
														<option>50 Cantidad</option>
													</select>
												</div>
												<a class="btn" href="#">añadir al carro
													<i class="icon-shopping-cart"></i>
												</a>
											</div>
											<a class="btn btn-primary" href="#">$500 c/u</a>
											</h4>
										</div>
									</div>
								</li>
								<li class="span3">
									<div class="thumbnail">
										<a href="product_details.html">
											<img src="../img/productos/Tortas/tor_panqueque.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Torta de panqueque Frambuesa</h5>
											<p>
												Torta sabor a panqueque frambuesa
											</p>
											<h4 style="text-align:center">		
											<div class="control-group">
												<div class="controls">
													<select id="select01">
														<option class="disabled">Cantidad de personas</option>
														<option>20 Personas</option>
														<option>30 Personas</option>
														<option>50 Personas</option>
													</select>
												</div>
												<a class="btn" href="#">añadir al carro
													<i class="icon-shopping-cart"></i>
												</a>
											</div>
											<a class="btn btn-primary" href="#">$22.000 min</a>
											</h4>
										</div>
									</div>
								</li>	
								<li class="span3">
									<div class="thumbnail">
										<a href="product_details.html">
											<img src="../img/productos/Tortas/tor_tres_leches.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Torta de tres leche</h5>
											<p>
												Tortas de todos los sabores
											</p>
											<h4 style="text-align:center">		
											<div class="control-group">
												<div class="controls">
													<select id="select01">
														<option class="disabled">Cantidad de personas</option>
														<option>20 Personas</option>
														<option>30 Personas</option>
														<option>50 Personas</option>
													</select>
												</div>
												<a class="btn" href="#">añadir al carro
													<i class="icon-shopping-cart"></i>
												</a>
											</div>
											<a class="btn btn-primary" href="#">$15.000 c/u</a>
											</h4>
										</div>
									</div>
								</li>								
							</ul>
							<hr class="soft" />
						</div>
					</div>

					<div class="pagination">
						<ul>
							<li>
								<a href="#">&lsaquo;</a>
							</li>
							<li>
								<a href="#">1</a>
							</li>
							<li>
								<a href="#">2</a>
							</li>
							<li>
								<a href="#">3</a>
							</li>
							<li>
								<a href="#">4</a>
							</li>
							<li>
								<a href="#">...</a>
							</li>
							<li>
								<a href="#">&rsaquo;</a>
							</li>
						</ul>
					</div>
					<br class="clr" />
				</div>
			</div>
		</div>
	</div>
	<?php require_once("componentes/footer.php") ?>
	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>
	<script src="themes/js/bootshop.js"></script>
	<script src="themes/js/jquery.lightbox-0.5.js"></script>
</body>
</html>