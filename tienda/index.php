<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tienda Online | Pasteleria Doña Rosa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen" />
	<link rel="stylesheet" href="../FrWork/bootstrap/css/style.css" media="screen" />
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
					<div class="well well-small">
						<h4>Productos Destacados
							<small class="pull-right">Los mejores productos de Chile</small>
						</h4>
						<div class="row-fluid">
							<div id="featured" class="carousel slide">
								<div class="carousel-inner">
									<div class="item active">
										<ul class="thumbnails">
											<li class="span3">
												<div class="thumbnail">
													<i class="tag"></i>
													<a href="#">
														<img src="../img/productos/Masas/pollo_empanada.jpg" alt="">
													</a>
													<div class="caption">
														<h5>Empanada de Pollo</h5>
														<h4>
															<a class="btn" href="#">Comprar</a>
															<span class="pull-right">$1.200.-</span>
														</h4>
													</div>
												</div>
											</li>
											<li class="span3">
												<div class="thumbnail">
													<i class="tag"></i>
													<a href="#">
														<img src="../img/productos/Masas/pino.jpg" alt="">
													</a>
													<div class="caption">
														<h5>Empanada puro pino!!</h5>
														<h4>
															<a class="btn" href="#">Comprar</a>
															<span class="pull-right">$1.100.-</span>
														</h4>
													</div>
												</div>
											</li>
											<li class="span3">
												<div class="thumbnail">
													<i class="tag"></i>
													<a href="#">
														<img src="../img/productos/Masas/chaparrita.jpg" alt="">
													</a>
													<div class="caption">
														<h5>Chaparritas al Horno</h5>
														<h4>
															<a class="btn" href="#">Comprar</a>
															<span class="pull-right">$1.000.-</span>
														</h4>
													</div>
												</div>
											</li>
											<li class="span3">
												<div class="thumbnail">
													<i class="tag"></i>
													<a href="#">
														<img src="../img/productos/Masas/hoja.jpg" alt="">
													</a>
													<div class="caption">
														<h5>Empanada de mil hoja</h5>
														<h4>
															<a class="btn" href="#">Comprar</a>
															<span class="pull-right">$1.000.-</span>
														</h4>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails">
												<li class="span3">
														<div class="thumbnail">
															<i class="tag"></i>
															<a href="#">
																<img src="../img/productos/Masas/pino.jpg" alt="">
															</a>
															<div class="caption">
																<h5>Empanada Chilena!</h5>
																<h4>
																	<a class="btn" href="#">Comprar</a>
																	<span class="pull-right">$1.000.-</span>
																</h4>
															</div>
														</div>
													</li>
													<li class="span3">
															<div class="thumbnail">
																<i class="tag"></i>
																<a href="#">
																	<img src="../img/productos/Masas/pizza.jpg" alt="">
																</a>
																<div class="caption">
																	<h5>Pizza</h5>
																	<h4>
																		<a class="btn" href="#">Comprar</a>
																		<span class="pull-right">$2.000.-</span>
																	</h4>
																</div>
															</div>
														</li>
														<li class="span3">
															<div class="thumbnail">
																<i class="tag"></i>
																<a href="#">
																	<img src="../img/productos/Masas/pascualina.jpg" alt="">
																</a>
																<div class="caption">
																	<h5>Pascualina</h5>
																	<h4>
																		<a class="btn" href="#">Comprar</a>
																			<span class="pull-right">$2.000.-</span>
																	</h4>
																</div>
															</div>
														</li>	
										</ul>
									</div>
								</div>
								<a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
								<a class="right carousel-control" href="#featured" data-slide="next">›</a>
							</div>
						</div>
					</div>
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