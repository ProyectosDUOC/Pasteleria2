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
						<li class="active">Masas</li>
					</ul>
					<h3> Masas
						<small class="pull-right"> 40 Disponible a lo largo de todo Chile </small>
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
											<img src="../img/productos/Masas/chaparrita.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Chaparrita</h5>
											<p>
												Masa de queso orneada
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
										<a href="product_details.html">
											<img src="../img/productos/Masas/pascualina.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Pascualina</h5>
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
										<a href="product_details.html">
											<img src="../img/productos/Masas/hoja.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Empanada de mil hojas</h5>
											<p>
												Masa deliciosa con queso en su interior
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
										<a href="product_details.html">
											<img src="../img/productos/Masas/pollo_empanada.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Empanada de pollo</h5>
											<p>
												Empanada de pollo sabrosa
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
										<a href="product_details.html">
											<img src="../img/productos/Masas/pino.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Empanada de Pino</h5>
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
										<a href="product_details.html">
											<img src="../img/productos/Masas/pizza.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Pizza</h5>
											<p>
											Pizza de extraqueso, aceitunas, tomate, 12cm
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