<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registro | Pasteleria Doña Rosa</title>
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
						<li class="active">Registro</li>
					</ul>
					<h3> Registro</h3>
					<div class="well">
						<form class="form-horizontal">
							<h4>Información de Usuario</h4>
							<div class="control-group">
								<label class="control-label" for="inputFname1">Usuario
									<sup>*</sup>
								</label>
								<div class="controls">
									<input type="text" id="inputFname1" placeholder="Usuario">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="inputFname1">Contraseña
									<sup>*</sup>
								</label>
								<div class="controls">
									<input type="password" id="inputFname1" placeholder="Contraseña">
								</div>
							</div>
							<h4>Tu Información Personal</h4>
							<div class="control-group">
								<label class="control-label" for="inputLnam">Nombres
									<sup>*</sup>
								</label>
								<div class="controls">
									<input type="text" id="inputLnam" placeholder="Nombres">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="inputLnam">Apellidos
									<sup>*</sup>
								</label>
								<div class="controls">
									<input type="text" id="inputLnam" placeholder="Apellidos">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Fecha de cumpleaños
									<sup>*</sup>
								</label>
								<div class="controls">
									<select class="span1" name="days">
										<option value="">Dia</option>									
										<option value="1">1</option>										
										<option value="2">2</option>										
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>										
										<option value="9">9</option>										
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>										
										<option value="14">14</option>										
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>										
										<option value="21">21</option>										
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>										
										<option value="26">26</option>										
										<option value="27">27</option>
										<option value="28">28</option>
										<option value="29">29</option>
										<option value="30">30</option>
										<option value="31">31</option>
									</select>
									<select class="span1" name="days">
										<option value="">Mes</option>										
										<option value="1">Enero</option>										
										<option value="2">Febrero</option>										
										<option value="3">Marzo</option>
										<option value="4">Abril</option>
										<option value="5">Mayo</option>
										<option value="6">Junio</option>
										<option value="7">Julio</option>
										<option value="8">Agosto</option>										
										<option value="9">Septiembre </option>										
										<option value="10">Octubre</option>
										<option value="11">Noviembre</option>
										<option value="12">Diciembre </option>
									</select>
									<select class="span1" name="days">
										<option value="">Año</option>
										<option value="1">2000</option>										
										<option value="2">1999</option>										
										<option value="3">1998</option>
										<option value="4">1997</option>
										<option value="5">1996</option>
										<option value="6">1995</option>
										<option value="7">1994</option>
									</select>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input_email">Email
									<sup>*</sup>
								</label>
								<div class="controls">
									<input type="text" id="input_email" placeholder="Email">
								</div>
							</div>	

							<h4>Tu dirección</h4>
							<div class="control-group">
								<label class="control-label" for="inputFname">Nombres
									<sup>*</sup>
								</label>
								<div class="controls">
									<input type="text" id="inputFname" placeholder="Nombres">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="inputLname">Apellidos
									<sup>*</sup>
								</label>
								<div class="controls">
									<input type="text" id="inputLname" placeholder="Apellidos" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="direccion">Dirección
									<sup>*</sup>
								</label>
								<div class="controls">
									<input type="text" id="direccion" placeholder="Dirección" />
									<span>nombre calle</span>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="ciudad">Ciudad
									<sup>*</sup>
								</label>
								<div class="controls">
									<input type="text" id="city" placeholder="ciudad" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="postal">Zip / Codigo postal
									<sup>*</sup>
								</label>
								<div class="controls">
									<input type="text" id="postal" placeholder="Zip / Codigo postal" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="pais">Pais
									<sup>*</sup>
								</label>
								<div class="controls">
									<input type="text" id="postal" placeholder="Pais" value="Chile" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="aditionalInfo">Información Adicional</label>
								<div class="controls">
									<textarea name="aditionalInfo" id="aditionalInfo" cols="26" rows="3">Información Adicional</textarea>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="phone">Telefono
									<sup>*</sup>
								</label>
								<div class="controls">
									<input type="text" name="phone" id="phone" placeholder="Telefono" />
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="mobile">Celular</label>
								<div class="controls">
									<input type="text" name="mobile" id="mobile" placeholder="Celular" />
								</div>
							</div>
							<p>
								<sup>*</sup> Requerido</p>
							<div class="control-group">
								<div class="controls">
									<input class="btn btn-large btn-success" type="submit" value="Registrar" />
								</div>
							</div>
						</form>
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