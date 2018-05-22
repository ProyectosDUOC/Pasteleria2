<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Bootshop online Shopping cart</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen" />
	<link href="themes/css/base.css" rel="stylesheet" media="screen" />
	<!-- Bootstrap style responsive -->
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
	<!-- Google-code-prettify -->
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet" />
	<!-- fav and touch icons -->
	<link rel="shortcut icon" href="themes/images/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
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
						<li class="active"> CARRITOS DE COMPRAS </li>
					</ul>
					<h3> CARRITO DE COMPRAS [
						<small>1 producto(s) </small>]
						<a href="index.php" class="btn btn-large pull-right">
							<i class="icon-arrow-left"></i> Continuar la compra </a>
					</h3>
					<hr class="soft" />
					<table class="table table-bordered">
						<tr>
							<th>Ingresar</th>
						</tr>
						<tr>
							<td>
								<form class="form-horizontal">
									<div class="control-group">
										<label class="control-label" for="inputUsername">Usuario</label>
										<div class="controls">
											<input type="text" id="inputUsername" placeholder="Usuario">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="inputPassword1">Contraseña</label>
										<div class="controls">
											<input type="password" id="inputPassword1" placeholder="Contraseña">
										</div>
									</div>
									<div class="control-group">
										<div class="controls">
											<button type="submit" class="btn">Ingresar</button>
											<a href="registro.php" class="btn">Registrar Ahora!</a>
										</div>
									</div>
								</form>
							</td>
						</tr>
					</table>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Producto</th>
								<th>Descripción</th>
								<th>Cantidad/Actualizar</th>
								<th>Precio</th>
								<th>Descuento</th>
								<th>Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img width="200" src="../img/productos/Masas/pizza.jpg" alt="" />
								</td>
								<td>Pizza
									<br/>Pizza de extraqueso, aceitunas, tomate, 12cm</td>
								<td>
									<div class="input-append">
										<input class="span1" style="max-width:34px" placeholder="1" id="appendedInputButtons" size="16" type="text">
										<button class="btn" type="button">
											<i class="icon-minus"></i>
										</button>
										<button class="btn" type="button">
											<i class="icon-plus"></i>
										</button>
										<button class="btn btn-danger" type="button">
											<i class="icon-remove icon-white"></i>
										</button>
									</div>
								</td>
								<td>$1.000</td>
								<td>$0.0</td>
								<td>$1.000</td>
							</tr>
							<tr>
								<td colspan="5" style="text-align:right">Total Precio: </td>
								<td> $1.000</td>
							</tr>
							<tr>
								<td colspan="5" style="text-align:right">Total Descuento: </td>
								<td> $0.0</td>
							</tr>
							<tr>
								<td colspan="5" style="text-align:right">
									<strong>TOTAL ($1.000 - $0.0) =</strong>
								</td>
								<td class="label label-important" style="display:block">
									<strong> $1.000 </strong>
								</td>
							</tr>
						</tbody>
					</table>
					<table class="table table-bordered">
						<tr>
							<th>Tipo de Envio</th>
						</tr>
						<tr>
							<td>
								<form class="form-horizontal">
									<div class="control-group">
										<label class="control-label" for="inputCountry">Ciudad </label>
										<div class="controls">
											<input type="text" id="inputCountry" placeholder="Ciudad">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="inputPost">Codigo Postal </label>
										<div class="controls">
											<input type="text" id="inputPost" placeholder="Codigo Postal">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="inputPost">Dirección </label>
										<div class="controls">
											<input type="text" id="inputPost" placeholder="Dirección">
										</div>
									</div>
									<div class="control-group">
									<td class="label label-important" style="display:block">
											<strong> Costo de envio $10.000 </strong>
										</td>
									</div>
									<div class="control-group">
										<div class="controls">
											<button type="submit" class="btn">ESTIMATE </button>
										</div>
									</div>
								</form>
							</td>
						</tr>
					</table>
					<a href="productos.html" class="btn btn-large">
						<i class="icon-arrow-left"></i> Continuar con la compra</a>
					<a href="#login" class="btn btn-large pull-right">Comprar
						<i class="icon-arrow-right"></i>
					</a>

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