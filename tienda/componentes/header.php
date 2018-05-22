<div id="header">
		<div class="container">
			<div id="welcomeLine" class="row">
				<div class="span6">Bienvenido
					<strong> Benjamin</strong>
				</div>
				<div class="span6">
					<div class="pull-right">
						<a href="carrito.php">
							<span class="btn btn-mini btn-primary">
								<i class="icon-shopping-cart icon-white"></i> [ 1 ] Productos añadido al carrito </span>
						</a>
					</div>
				</div>
			</div>
			<div id="logoArea" class="navbar">
				<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<div class="navbar-inner">
					<a class="brand" href="index.php">
						<img src="../img/logo.png" alt="Bootsshop" height="100" width="70" />
					</a>
					<form class="form-inline navbar-search" method="post" action="carrito.php">
						<input id="srchFld" class="srchTxt" type="text" />
						<button type="submit" id="submitButton" class="btn btn-primary">Buscar</button>
					</form>
					<ul id="topMenu" class="nav pull-right">
						<li class="">
							<a href="#">Ofertas</a>
						</li>
						<li class="">
							<a href="#login" role="button" data-toggle="modal" style="padding-right:0">
								<span class="btn btn-large btn-success">Ingresar</span>
							</a>
							<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									<h3>Ingreso Cliente</h3>
								</div>
								<div class="modal-body">
									<form class="form-horizontal loginFrm">
										<div class="control-group">
											<input type="text" id="inputEmail" placeholder="Usuario">
										</div>
										<div class="control-group">
											<input type="password" id="inputPassword" placeholder="Contraseña">
										</div>
										<div class="control-group">
											<label class="checkbox">
												<input type="checkbox"> Recuerdameeeee
											</label>
										</div>
									</form>
									<button type="submit" class="btn btn-success">Ingresar</button>
									
									<button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
									
								</div>
								<a class="mb-2" href="registro.php">   Crear usuario</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>