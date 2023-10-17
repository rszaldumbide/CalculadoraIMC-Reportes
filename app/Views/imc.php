<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="RicardoZ">
    <title>Registro IMC</title>

    <!-- owl carousel -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendors/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendors/owl-carousel/css/owl.theme.default.css">
    <link rel="icon" type="image/x-icon" href="https://i.postimg.cc/JhCznM0R/logo-rsz.png" />
    <!-- Bootstrap + Ollie main styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/ollie.css">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40">

    <nav id="scrollspy" class="navbar navbar-light bg-light navbar-expand-lg fixed-top" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="navbar-brand" href=""><img src="https://i.postimg.cc/JhCznM0R/logo-rsz.png" alt="" class="brand-img"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/') ?>">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo base_url('index.php/ingreso') ?>">Registro IMC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('index.php/reporte') ?>">Reportes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- color fondo header -->
    <section class="section bg-overlay"></section>

    <!-- Body -->
    <section class="section" style="background:white;">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <span href="" class="card border-0 text-dark p-3 " style="background:#F1FAFB;">
                        <h6 style="font-size: x-large;">Calculadora IMC</h6>
                        <form>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Peso: </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Peso" name="peso" id="peso">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Altura:</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Altura" name="altura" id="altura">
                            </div>
                            <div class="input-group mb-3">

                                <label name="IMC" id="IMC"></label>

                            </div>
                            <button type="button" class="btn btn-dark" id="calculoDeIMC">Calcular IMC</button>
                        </form>
                    </span>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4 ">
                    <span href="" class="card border-0 text-dark p-3 " style="background:#F1FAFB;">
                        <div>
                            <h6 style="font-size: x-large;">Buscar Paciente</h6>
                            <div class="input-group mb-5">
                                <input class="form-control" id="txtDatos" name="txtDatos" type="txtDatos" placeholder="Cedula">
                                <div class="input-group-append">
                                    <button id="search" class="btn btn-dark" type="submit">🔍</button>
                                    <button id="ocultar" class="btn btn-dark" type="submit">👀</button>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2"></div>
                        <div>
                            <h6 style="font-size: x-large;">Agregar Paciente</h6>
                            <button id="agregarPaciente" class="btn btn-dark" type="submit">➕</button>
                        </div>
                    </span>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
        <div class="container mt-5" id="datosCrearPaciente" style="display:none;">
            <div class="row text-center">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <span href="" class="card border-0 text-dark p-3 " style="background:#F1FAFB;">
                        <h6 style="font-size: x-large;">Ingresar nuevo Paciente</h6>
                        <form action="<?php echo base_url('/index.php/crearPaciente') ?>" method="POST">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Numero:</span>
                                </div>
                                <input type="text" required disabled class="form-control">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Cedula:</span>
                                </div>
                                <input type="text" required id="pac_ced" name="pac_ced" class="form-control">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Nombre:</span>
                                </div>
                                <input type="text" required class="form-control" id="pac_nombre" name="pac_nombre">
                            </div>
                            <div class=" input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Apellido:</span>
                                </div>
                                <input type="text" required class="form-control" id="pac_ape" name="pac_ape">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Genero:</span>
                                </div>
                                <select class="form-control" required name="pac_genero" id="pac_genero">
                                    <option value="0"></option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Edad:</span>
                                </div>
                                <input type="number" required class="form-control" id="pac_edad" name="pac_edad">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Rango IMC:</span>
                                </div>
                                <select class="form-control" required name="pac_rangoimc" id="pac_rangoimc">
                                    <option value="0"></option>
                                    <option value="Peso bajo">Peso bajo</option>
                                    <option value="Peso normal">Peso normal</option>
                                    <option value="Sobrepeso">Sobrepeso</option>
                                    <option value="Obesidad grado 1">Obesidad grado 1</option>
                                    <option value="Obesidad grado 2">Obesidad grado 2</option>
                                    <option value="Obesidad grado 3">Obesidad grado 3</option>
                                    <option value="Obesidad grado 4">Obesidad grado 4</option>
                                </select>
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Valor IMC:</span>
                                </div>
                                <input type="text" class="form-control" required id="pac_valorimc" name="pac_valorimc">
                            </div>
                            <input type="submit" class="btn btn-dark" value="Ingresar Paciente" ></input>
                        </form>
                    </span>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
        
            <div class="container usuariobox" id="miras" style="display:none;"></div>
    </section>

    <section class="section" style="background:white;"></section>

    <!-- FOOTER -->
    <section class="section bg-overlay">
        <div class="container">
            <h3 class="section-title">Redes Sociales</h3>
            <footer class="footer border-top">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6 text-center text-md-left">
                        <p class="mb-0 text-light">Copyright <script>
                                document.write(new Date().getFullYear())
                            </script>
                            &copy; <a class="mb-0 text-light" target="_blank" href="https://github.com/rszaldumbide">RZaldumbide</a></p>
                    </div>
                    <div class="col-md-6 text-center text-md-right">
                        <div class="social">
                            <a class="mx-2" href="https://www.facebook.com/profile.php?id=100075704684299"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-2" href="https://wa.me/987715772"><i class="fab fa-whatsapp"></i></a>
                            <a class="mx-2" href="https://www.instagram.com/ricardoo.9/"><i class="fab fa-instagram"></i></a>
                            <a class="mx-2" href="https://github.com/rszaldumbide"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </section>

    <!-- core  -->
    <script src="<?php echo base_url(); ?>/assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="<?php echo base_url(); ?>/assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Owl carousel  -->
    <script src="<?php echo base_url(); ?>/assets/vendors/owl-carousel/js/owl.carousel.js"></script>

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <script src="<?php echo base_url(); ?>/assets/js/script.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
        let mensaje = '<?php echo $mensaje ?>';

        if (mensaje == '1') {
            swal('😁 ¡Registro con exito! 😁', 'Paciente ingresado con exito', 'success');
        } else if (mensaje == '0') {
            swal('🤨 ¡Hubo un problema! 😓', 'Hubo un error de ingreso, revisa los datos!', 'error');
        } else if (mensaje == '2') {
            swal('🤨 ¡Hubo un problema! 😓', 'No pudimos actualizar los datos, intentalo mas tarde!', 'error');
        } else if (mensaje == '3') {
            swal('😁 ¡Actualizacion con exito! 😁', 'Paciente actualizado con exito', 'success');
        }
    </script>

</body>

</html>