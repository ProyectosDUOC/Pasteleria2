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
						<li class="active">Dulceria</li>
					</ul>
					<h3> Dulceria
						<small class="pull-right"> 20 Disponible a lo largo de todo Chile </small>
					</h3>
					<hr class="soft" />
					<p>
						Pasteleria Doña Rosa hace las mejores masas de chile, productos de fina calidad y alta gama en alimentación.	
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
										<a href="#">
											<img src="../img/productos/Dulceria/aranda_.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Queque Marihuana</h5>
											<p>
												Queque marihuana
											</p>
											<h4 style="text-align:center">
												<a class="btn" href="#">añadir al carro
													<i class="icon-shopping-cart"></i>
												</a>
												<a class="btn btn-primary" href="#">$1.000 c/u</a>
											</h4>
										</div>
									</div>
								</li>	
								<li class="span3">
									<div class="thumbnail">
										<a href="#">
											<img src="../img/productos/Dulceria/berlin.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Berlin</h5>
											<p>
												Berlin frito con crema pastelera
											</p>
											<h4 style="text-align:center">
												<a class="btn" href="#">añadir al carro
													<i class="icon-shopping-cart"></i>
												</a>
												<a class="btn btn-primary" href="#">$1.000 c/u</a>
											</h4>
										</div>
									</div>
								</li>	
								<li class="span3">
									<div class="thumbnail">
										<a href="#">
											<img src="../img/productos/Dulceria/brownie.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Brownie</h5>
											<p>
												Brownie sabor a chocolate
											</p>
											<h4 style="text-align:center">
												<a class="btn" href="#">añadir al carro
													<i class="icon-shopping-cart"></i>
												</a>
												<a class="btn btn-primary" href="#">$1.000 c/u</a>
											</h4>
										</div>
									</div>
								</li>	
								<li class="span3">
									<div class="thumbnail">
										<a href="#">
											<img src="../img/productos/Dulceria/canela_rosquilla_caja_.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Rosquillas de canela</h5>
											<p>
												Masa de canela
											</p>
											<h4 style="text-align:center">
												<a class="btn" href="#">añadir al carro
													<i class="icon-shopping-cart"></i>
												</a>
												<a class="btn btn-primary" href="#">$1.000 c/u</a>
											</h4>
										</div>
									</div>
								</li>	
								<li class="span3">
									<div class="thumbnail">
										<a href="#">
											<img src="../img/productos/Dulceria/canolo.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Cubierto de manjar</h5>
											<p>
												Masa deliciosa
											</p>
											<h4 style="text-align:center">
												<a class="btn" href="#">añadir al carro
													<i class="icon-shopping-cart"></i>
												</a>
												<a class="btn btn-primary" href="#">$1.000</a>
											</h4>
										</div>
									</div>
								</li>
								<li class="span3">
									<div class="thumbnail">
										<a href="#">
											<img src="../img/productos/Dulceria/cocado.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Chilenito</h5>
											<p>
												Chilenito
											</p>
											<h4 style="text-align:center">
												<a class="btn" href="#">añadir al carro
													<i class="icon-shopping-cart"></i>
												</a>
												<a class="btn btn-primary" href="#">$1.000</a>
											</h4>
										</div>
									</div>
								</li>
								<li class="span3">
									<div class="thumbnail">
										<a href="#">
											<img src="../img/productos/Dulceria/delicia.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Delicias</h5>
											<p>
												Delicias
											</p>
											<h4 style="text-align:center">
												<a class="btn" href="#">añadir al carro
													<i class="icon-shopping-cart"></i>
												</a>
												<a class="btn btn-primary" href="#">$1.000</a>
											</h4>
										</div>
									</div>
								</li>
								<li class="span3">
									<div class="thumbnail">
										<a href="#">
											<img src="../img/productos/Dulceria/donuts.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Donuts</h5>
											<p>
												Donuts
											</p>
											<h4 style="text-align:center">
												<a class="btn" href="#">añadir al carro
													<i class="icon-shopping-cart"></i>
												</a>
												<a class="btn btn-primary" href="#">$1.000</a>
											</h4>
										</div>
									</div>
								</li>								
								<li class="span3">
									<div class="thumbnail">
										<a href="#">
											<img src="../img/productos/Dulceria/media.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Media luna</h5>
											<p>
												Media luna rellana de manjar
											</p>
											<h4 style="text-align:center">
												<a class="btn" href="#">añadir al carro
													<i class="icon-shopping-cart"></i>
												</a>
												<a class="btn btn-primary" href="#">$1.000</a>
											</h4>
										</div>
									</div>
								</li>								
																								
							</ul>
							<hr class="soft" />
							<ul class="thumbnails">
								<li class="span3">
									<div class="thumbnail">
										<a href="#">
											<img src="../img/productos/Dulceria/mendocino.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Mendocino</h5>
											<p>
												Mendocino
											</p>
											<h4 style="text-align:center">
												<a class="btn" href="#">añadir al carro
													<i class="icon-shopping-cart"></i>
												</a>
												<a class="btn btn-primary" href="#">$1.000 c/u</a>
											</h4>
										</div>
									</div>
								</li>
								<li class="span3">
									<div class="thumbnail">
										<a href="#">
											<img src="../img/productos/Dulceria/negrito.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Negrito</h5>
											<p>
												Negrito cubierto de chocolate
											</p>
											<h4 style="text-align:center">
												<a class="btn" href="#">añadir al carro
													<i class="icon-shopping-cart"></i>
												</a>
												<a class="btn btn-primary" href="#">$1.000 c/u</a>
											</h4>
										</div>
									</div>
								</li>
								<li class="span3">
									<div class="thumbnail">
										<a href="#">
											<img src="../img/productos/Dulceria/pan_de_miel.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Pan de miel</h5>
											<p>
												pan de miel
											</p>
											<h4 style="text-align:center">
												<a class="btn" href="#">añadir al carro
													<i class="icon-shopping-cart"></i>
												</a>
												<a class="btn btn-primary" href="#">$1.000 c/u</a>
											</h4>
										</div>
									</div>
								</li>	
								<li class="span3">
									<div class="thumbnail">
										<a href="#">
											<img src="../img/productos/Dulceria/rollo.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Dulce de rollo</h5>
											<p>
												Sabor a mermelada de pera
											</p>
											<h4 style="text-align:center">
												<a class="btn" href="#">añadir al carro
													<i class="icon-shopping-cart"></i>
												</a>
												<a class="btn btn-primary" href="#">$1.000 c/u</a>
											</h4>
										</div>
									</div>
								</li>															
							</ul>
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