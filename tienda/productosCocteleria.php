<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Bootshop online Shopping cart</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
							<img src="themes/images/ico-cart.png" alt="cart">3 Items in your cart
							<span class="badge badge-warning pull-right">$155.00</span>
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
						<li class="active">Cocteleria</li>
					</ul>
					<h3> Costeleria
						<small class="pull-right"> 10 Disponible a lo largo de todo Chile </small>
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
										<a href="product_details.html">
											<img src="../img/productos/Cocteleria/canape_especial_36_unidades.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Canape Especial</h5>
											<p>
												36 Unidades
											</p>
											<h4 style="text-align:center">
												<a class="btn" href="#">añadir al carro
													<i class="icon-shopping-cart"></i>
												</a>
												<a class="btn btn-primary" href="#">$8.000</a>
											</h4>
										</div>
									</div>
								</li>	
								<li class="span3">
									<div class="thumbnail">
										<a href="product_details.html">
											<img src="../img/productos/Cocteleria/canape_fino_34_unidades.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Canape Fino</h5>
											<p>
												34 Unidades
											</p>
											<h4 style="text-align:center">
												<a class="btn" href="#">añadir al carro
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
											<img src="../img/productos/Cocteleria/empanaditas_12_unidades.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Empanaditas</h5>
											<p>
												12 Unidades
											</p>
											<h4 style="text-align:center">
												<a class="btn" href="#">añadir al carro
													<i class="icon-shopping-cart"></i>
												</a>
												<a class="btn btn-primary" href="#">$7.500</a>
											</h4>
										</div>
									</div>
								</li>	
								<li class="span3">
									<div class="thumbnail">
										<a href="product_details.html">
											<img src="../img/productos/Cocteleria/mini_miga_32_unidades.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Mini miga</h5>
											<p>
												32 Unidades
											</p>
											<h4 style="text-align:center">
												<a class="btn" href="#">añadir al carro
													<i class="icon-shopping-cart"></i>
												</a>
												<a class="btn btn-primary" href="#">$9.000</a>
											</h4>
										</div>
									</div>
								</li>	
								<li class="span3">
									<div class="thumbnail">
										<a href="product_details.html">
											<img src="../img/productos/Cocteleria/pizza_coctel_15_unidades.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Pizzas coctel</h5>
											<p>
												Masa deliciosa
											</p>
											<h4 style="text-align:center">
												<a class="btn" href="#">añadir al carro
													<i class="icon-shopping-cart"></i>
												</a>
												<a class="btn btn-primary" href="#">$6.000</a>
											</h4>
										</div>
									</div>
								</li>
								<li class="span3">
									<div class="thumbnail">
										<a href="product_details.html">
											<img src="../img/productos/Cocteleria/tapadito_copihue_16_unidades.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Tapaditos</h5>
											<p>
											Varieades de tapaditos 15 unidades
											</p>
											<h4 style="text-align:center">
												<a class="btn" href="#">añadir al carro
													<i class="icon-shopping-cart"></i>
												</a>
												<a class="btn btn-primary" href="#">$12.000</a>
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