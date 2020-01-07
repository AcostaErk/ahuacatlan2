<?php include '..\Controllers\metodosDB\tabla_dependencia.php'; ?>
			<div class="nav-collapse collapse">
         		<div class="menu-menu-principal-container">
							  <ul id="menu-menu-principal-2" class="nav">

                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-170">
                      <a href="indexOficialia.php">
                        Inicio
                      </a>
                    </li>

										<li class="menu-item menu-item-type-post_type menu-item-object-page dropdown menu-item-385" >
											<a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="">
												Usuarios
												<strong class="caret"></strong>
											</a>
											<ul class="dropdown-menu">
												<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children ">
													<a href="../Views/registrarNuevoUsuario.php">
														Registrar nuevo usuario
													</a>
												</li>
												<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  menu-item-1005">
													<a  href="../Views/verUsuario.php?Depa=3">
														Oficial&iacute;a
													</a>
												</li>

												<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  menu-item-1005">
													<a  href="../Views/verUsuario.php?Depa=2">
														Secretar&iacute;a
													</a>
												</li>

												<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown-submenu menu-item-1009">
													<a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="">
														Departamentos
													</a>

														<ul class="dropdown-menu">
													<?php
														$resultado=dependencia_mostrarTodo();
													foreach ($resultado as $row) {
														$id_Dependencia=$row['idDependencia'];
															$nombre_Dependencia= $row['nombre'];

													 ?>

														<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-397">
															<a href="../Views/verUsuario.php?Depa=<?php echo $id_Dependencia ?>">
																<?php echo $nombre_Dependencia ?>
															</a>
														</li>
													<?php
													}
													 ?>

													</ul>
													</li>


											</ul>
										</li>

										<li class="menu-item menu-item-type-post_type menu-item-object-page dropdown menu-item-385" >
											<a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="">
												Solicitudes
												<strong class="caret"></strong>
											</a>
											<ul class="dropdown-menu">
												<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children ">
													<a href="../Views/solicitudesVistaGeneral.php">
														Vista general
													</a>
												</li>
												<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  menu-item-1005">
													<a href="../Views/solicitudesDepartamentos.php">
														Oficial&iacute;a
													</a>
												</li>

												<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  menu-item-1009">
													<a href="../Views/solicitudesDepartamentos.php">
														Secretar&iacute;a
													</a>
												</li>

												<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown-submenu menu-item-1009">
													<a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="">
														Departamentos
													</a>
													<ul class="dropdown-menu">
												<?php
												$resultado=dependencia_mostrarTodo();dependencia_mostrarTodo();
												foreach ($resultado as $row) {
														$nombre_Dependencia= $row['nombre'];

												 ?>

													<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-397">
														<a href="../Views/solicitudesDepartamentos.php">
															<?php echo $nombre_Dependencia ?>
														</a>
													</li>
												<?php
												}
												 ?>

												</ul>
												</li>


										</ul>
										</li>

										<li class="menu-item menu-item-type-post_type menu-item-object-page dropdown menu-item-385" >
											<a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="">
												Departamentos
												<strong class="caret"></strong>
											</a>
											<ul class="dropdown-menu">
												<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children ">
													<a href="../Views/registrarNuevoDepartamento.php">
														Registrar nuevo departamento
													</a>
												</li>

												<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown-submenu menu-item-1005">
													<a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="">
														Ver departamentos
													</a>
													<ul class="dropdown-menu">
												<?php
												$resultado=dependencia_mostrarTodo();
												foreach ($resultado as $row) {
														$id_Dependencia=$row['idDependencia'];
														$nombre_Dependencia= $row['nombre'];

												 ?>

													<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-397">
														<a href="../Views/verDepartamento.php?Depa=<?php echo  $id_Dependencia?>">
															<?php echo $nombre_Dependencia ?>
														</a>
													</li>
												<?php
												}
												 ?>

												</ul>
												</li>


										</ul>
										</li>

										<li class="menu-item menu-item-type-post_type menu-item-object-page dropdown menu-item-385" >
											<a href="../Views/perfil.php" title="">
												Perfil
											</a>
										</li>

										<li class="menu-item menu-item-type-post_type menu-item-object-page dropdown menu-item-385" >
											<a href="../Controllers/metodosSesion/cerrarSesion.php" title="">
												Cerrar sesi&oacute;n
											</a>
										</li>


                  </ul>
                </div>
              </div>
