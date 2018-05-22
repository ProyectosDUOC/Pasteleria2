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
						<li class="active">Galletas</li>
					</ul>
					<h3> Galletas
						<small class="pull-right"> 12 Disponible a lo largo de todo Chile </small>
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
											<img src="../img/productos/Galletas/castano_250.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Galleta de Castaño</h5>
											<p>
												Rica masa de galletas de castaño
											</p>
											<h4 style="text-align:center">
												<a class="btn" href="#">añadir al carro
													<i class="icon-shopping-cart"></i>
												</a>
												<a class="btn btn-primary" href="#">$500 c/u</a>
											</h4>
										</div>
									</div>
								</li>	
								<li class="span3">
									<div class="thumbnail">
										<a href="product_details.html">
											<img src="../img/productos/Galletas/cocadas.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Cocadas blancas</h5>
											<p>
												Deliciosas  blancas de huevo de campo
											</p>
											<h4 style="text-align:center">
												<a class="btn" href="#">añadir al carro
													<i class="icon-shopping-cart"></i>
												</a>
												<a class="btn btn-primary" href="#">$300 c/u</a>
											</h4>
										</div>
									</div>
								</li>	
								<li class="span3">
									<div class="thumbnail">
										<a href="product_details.html">
											<img src="../img/productos/Galletas/danesa.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Galletas de Danesa</h5>
											<p>
												Rica masa de galletas de danesa
											</p>
											<h4 style="text-align:center">
												<a class="btn" href="#">añadir al carro
													<i class="icon-shopping-cart"></i>
												</a>
												<a class="btn btn-primary" href="#">$600 c/u</a>
											</h4>
										</div>
									</div>
								</li>	
								<li class="span3">
									<div class="thumbnail">
										<a href="product_details.html">
											<img src="../img/productos/Galletas/galletas_finas.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>galletas Finas</h5>
											<p>
												Surtidos de las mas deliciosas galletas
											</p>
											<h4 style="text-align:center">
												<a class="btn" href="#">añadir al carro
													<i class="icon-shopping-cart"></i>
												</a>
												<a class="btn btn-primary" href="#">$140 c/u</a>
											</h4>
										</div>
									</div>
								</li>	
								<li class="span3">
									<div class="thumbnail">
										<a href="product_details.html">
											<img src="../img/productos/Galletas/mini_brownie.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>Mini Brownie</h5>
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
											<img src="../img/productos/Galletas/mini_muffin.jpg" alt="" />
										</a>
										<div class="caption">
											<h5>mini muffin</h5>
											<p>
												mini muffin
											</p>
											<h4 style="text-align:center">
												<a class="btn" href="#">añadir al carro
													<i class="icon-shopping-cart"></i>
												</a>
												<a class="btn btn-primary" href="#">$700</a>
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