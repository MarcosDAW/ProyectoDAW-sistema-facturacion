 <header class="main-header">
 	
	<!--.
	LOGOTIPO
	.=-->
    <a href="inicio" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b> F</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>S.</b> FACTURACIÓN</span>
    </a>

	<!--.
	BARRA DE NAVEGACIÓN
	.=-->
	<nav class="navbar navbar-static-top" role="navigation">
		
		
		<!-- Botón de navegación -->

	 	<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        	
        	<span class="sr-only">Toggle navigation</span>
      	
      	</a>

		<!-- perfil de usuario -->

		<div class="navbar-custom-menu">
				
			<ul class="nav navbar-nav">
				<li style="padding-top:15px;color:#fff;" >
				<strong> <?php echo date('Y-m-d');?></strong> / <strong><?php echo date('H:i:s'); ?></strong>
				
				</li>
				
				<li class="dropdown user user-menu">
					
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">

					<?php

					if($_SESSION["foto"] != ""){

						echo '<img src="'.$_SESSION["foto"].'" class="user-image">';

					}else{


						echo '<img src="vistas/img/usuarios/default/anonymous.png" class="user-image">';

					}


					?>
						
						<span class="hidden-xs"><?php  echo $_SESSION["nombre"]; ?></span>

					</a>

					<!-- Dropdown-toggle -->

					<ul class="dropdown-menu">
						
						<li class="user-body">
							
							<div class="pull-right">
								
								<a href="salir" class="btn btn-default btn-flat">Salir</a>

							</div>

						</li>

					</ul>

				</li>

			</ul>

		</div>

	</nav>

 </header>