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

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <nav id="scrollspy" class="navbar navbar-light bg-light navbar-expand-lg fixed-top" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="navbar-brand" href=""><img src="https://i.postimg.cc/JhCznM0R/logo-rsz.png" alt="" class="brand-img"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="<?php echo base_url('/') ?>">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="<?php echo base_url('index.php/ingreso') ?>">Registro IMC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo base_url('index.php/reporte') ?>">Reportes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="section bg-overlay"></section>

    <!-- Body -->
    <section class="section" style="background:white;">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <span href="" class="card border-0 text-dark p-3 " style="background:#F1FAFB;">
                        <h6 style="font-size: x-large;">REPORTES DE LOS PACIENTES DE ACUERDO AL IMC</h6>
                        <div class="table-responsive">
                            <img src='https://i.postimg.cc/LsSKT054/IMC-escala.jpg' alt='IMC-escala' />
                        </div>
                        <div class="input-group mb-3 mt-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">CATEGORIA IMC</span>
                            </div>
                            <select onchange="showDiv(this)" class="form-control" name="categoriaIMC" id="categoriaIMC">
                                <option value="0">Todos</option>
                                <option value="1">Bajo peso</option>
                                <option value="2">Peso normal</option>
                                <option value="3">Sobrepeso</option>
                                <option value="4">Obesidad I</option>
                                <option value="5">Obesidad II</option>
                                <option value="6">Obesidad III</option>
                                <option value="7">Obesidad IV</option>
                            </select>
                        </div>
                    </span>
                </div>
            </div>
        </div>
  </section>
    <section class="mb-5 option" id="0" style=" background:white;">
    <h6 class="text-center option"  id="0" style="font-size: x-large;">Pacientes</h6>
        <div class="container">
            <div class="row text-center p-3">
                <div class="col-lg-12 table-responsive" style="background:#F1FAFB;">
                    <table class="table table-hover" id="tb2">
                        <thead class="text-center" style="background: #f06161; color: white;">
                            <!-- <th><label>Número</label></th> -->
                            <th><label>Nombre</label></th>
                            <th><label>Apellido</label></th>
                            <th><label>Género</label></th>
                            <th><label>Edad</label></th>
                            <th><label>Valor IMC</label></th>
                            <th><label>Rango IMC</label></th>
                        </thead>

                        <tbody class="text-center">
                            <?php
                            $array = json_decode((file_get_contents('http://localhost/apiexamen/servicios/apiUsuarios.php')), true);

                            foreach ($array as $key => $value) {
                                
                                    echo "<tr>";
                                    echo "<td>" . $value['u_nombre'] . "</td>";
                                    echo "<td>" . $value['u_apellido'] . "</td>";
                                    echo "<td>" . $value['u_genero'] . "</td>";
                                    echo "<td>" . $value['u_edad'] . "</td>";
                                    echo "<td>" . $value['u_valorimc'] . "</td>";
                                    echo "<td>" . $value['u_rangoimc'] . "</td>";
                                    echo "</tr>";
                               
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</section>

    <section class="section option" id="1" style="display:none">
        <h6 class="text-center" style="font-size: x-large;">Pacientes con Bajo Peso</h6>
        <div class="container">
            <div class="row text-center p-3">
                <div class="col-lg-12 table-responsive" style="background:#F1FAFB;">
                    <table class="table table-hover" id="tb2">
                        <thead class="text-center" style="background: #f06161; color: white;">
                            <!-- <th><label>Número</label></th> -->
                            <th><label>Nombre</label></th>
                            <th><label>Apellido</label></th>
                            <th><label>Género</label></th>
                            <th><label>Edad</label></th>
                            <th><label>Valor IMC</label></th>
                            <th><label>Rango IMC</label></th>
                        </thead>

                        <tbody class="text-center">
                            <?php
                            $array = json_decode((file_get_contents('http://localhost/apiexamen/servicios/apiUsuarios.php')), true);

                            foreach ($array as $key => $value) {
                                if ($value['u_rangoimc'] == "Peso bajo") {
                                    echo "<tr>";
                                    echo "<td>" . $value['u_nombre'] . "</td>";
                                    echo "<td>" . $value['u_apellido'] . "</td>";
                                    echo "<td>" . $value['u_genero'] . "</td>";
                                    echo "<td>" . $value['u_edad'] . "</td>";
                                    echo "<td>" . $value['u_valorimc'] . "</td>";
                                    echo "<td>" . $value['u_rangoimc'] . "</td>";
                                    echo "</tr>";
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section class="section option" id="2" style="display:none; background: white;">
        <h6 class="text-center" style="font-size: x-large;">Pacientes con Peso Normal</h6>
        <div class="container">
            <div class="row text-center p-3">
                <div class="col-lg-12 table-responsive" style="background:#F1FAFB;">
                    <table class="table table-hover" id="tb">
                        <thead class="text-center" style="background: #f06161; color: white;">
                            <!-- <th><label>Número</label></th> -->
                            <th><label>Nombre</label></th>
                            <th><label>Apellido</label></th>
                            <th><label>Género</label></th>
                            <th><label>Edad</label></th>
                            <th><label>Valor IMC</label></th>
                            <th><label>Rango IMC</label></th>
                        </thead>

                        <tbody class="text-center">
                            <?php
                            $array = json_decode((file_get_contents('http://localhost/apiexamen/servicios/apiUsuarios.php')), true);

                            foreach ($array as $key => $value) {
                                if ($value['u_rangoimc'] == "Peso normal") {
                                    echo "<tr>";
                                    echo "<td>" . $value['u_nombre'] . "</td>";
                                    echo "<td>" . $value['u_apellido'] . "</td>";
                                    echo "<td>" . $value['u_genero'] . "</td>";
                                    echo "<td>" . $value['u_edad'] . "</td>";
                                    echo "<td>" . $value['u_valorimc'] . "</td>";
                                    echo "<td>" . $value['u_rangoimc'] . "</td>";
                                    echo "</tr>";
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section class="section option" id="3" style="display:none; background: white;">
        <h6 class="text-center" style="font-size: x-large;">Pacientes con Sobrepeso</h6>
        <div class="container">
            <div class="row text-center p-3">
                <div class="col-lg-12 table-responsive" style="background:#F1FAFB;">
                    <table class="table table-hover" id="tb3">
                        <thead class="text-center" style="background: #f06161; color: white;">
                        <th><label>Nombre</label></th>
                            <th><label>Apellido</label></th>
                            <th><label>Género</label></th>
                            <th><label>Edad</label></th>
                            <th><label>Valor IMC</label></th>
                            <th><label>Rango IMC</label></th>
                        </thead>

                        <tbody class="text-center">
                            <?php
                            $array = json_decode((file_get_contents('http://localhost/apiexamen/servicios/apiUsuarios.php')), true);

                            foreach ($array as $key => $value) {
                                if ($value['u_rangoimc'] == "Sobrepeso") {
                                    echo "<tr>";
                                    echo "<td>" . $value['u_nombre'] . "</td>";
                                    echo "<td>" . $value['u_apellido'] . "</td>";
                                    echo "<td>" . $value['u_genero'] . "</td>";
                                    echo "<td>" . $value['u_edad'] . "</td>";
                                    echo "<td>" . $value['u_valorimc'] . "</td>";
                                    echo "<td>" . $value['u_rangoimc'] . "</td>";
                                    echo "</tr>";
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section class="section option" id="4" style="display:none; background: white;">
        <h6 class="text-center" style="font-size: x-large;">Pacientes con Obecidad grado I</h6>
        <div class="container">
            <div class="row text-center p-3">
                <div class="col-lg-12 table-responsive pt-3" style="background:#F1FAFB;">
                    <table class="table table-hover" id="tb4">
                        <thead class="text-center" style="background: #f06161; color: white;">
                        <th><label>Nombre</label></th>
                            <th><label>Apellido</label></th>
                            <th><label>Género</label></th>
                            <th><label>Edad</label></th>
                            <th><label>Valor IMC</label></th>
                            <th><label>Rango IMC</label></th>
                        </thead>

                        <tbody class="text-center">
                            <?php
                            $array = json_decode((file_get_contents('http://localhost/apiexamen/servicios/apiUsuarios.php')), true);

                            foreach ($array as $key => $value) {
                                if ($value['u_rangoimc'] == "Obesidad grado 1") {
                                    echo "<tr>";
                                    echo "<td>" . $value['u_nombre'] . "</td>";
                                    echo "<td>" . $value['u_apellido'] . "</td>";
                                    echo "<td>" . $value['u_genero'] . "</td>";
                                    echo "<td>" . $value['u_edad'] . "</td>";
                                    echo "<td>" . $value['u_valorimc'] . "</td>";
                                    echo "<td>" . $value['u_rangoimc'] . "</td>";
                                    echo "</tr>";
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section class="section option" id="5" style="display:none; background: white;">
        <h6 class="text-center" style="font-size: x-large;">Pacientes con Obecidad grado II</h6>
        <div class="container">
            <div class="row text-center p-3">
                <div class="col-lg-12 table-responsive" style="background:#F1FAFB;">
                    <table class="table table-hover" id="tb5">
                        <thead class="text-center" style="background: #f06161; color: white;">
                        <th><label>Nombre</label></th>
                            <th><label>Apellido</label></th>
                            <th><label>Género</label></th>
                            <th><label>Edad</label></th>
                            <th><label>Valor IMC</label></th>
                            <th><label>Rango IMC</label></th>
                        </thead>

                        <tbody class="text-center">
                            <?php
                            $array = json_decode((file_get_contents('http://localhost/apiexamen/servicios/apiUsuarios.php')), true);

                            foreach ($array as $key => $value) {
                                if ($value['u_rangoimc'] == "Obesidad grado 2") {
                                    echo "<tr>";
                                    echo "<td>" . $value['u_nombre'] . "</td>";
                                    echo "<td>" . $value['u_apellido'] . "</td>";
                                    echo "<td>" . $value['u_genero'] . "</td>";
                                    echo "<td>" . $value['u_edad'] . "</td>";
                                    echo "<td>" . $value['u_valorimc'] . "</td>";
                                    echo "<td>" . $value['u_rangoimc'] . "</td>";
                                    echo "</tr>";
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section class="section option" id="6" style="display:none; background: white;">
        <h6 class="text-center" style="font-size: x-large;">Pacientes con Obecidad grado III</h6>
        <div class="container">
            <div class="row text-center p-3">
                <div class="col-lg-12 table-responsive" style="background:#F1FAFB;">
                    <table class="table table-hover" id="tb6">
                        <thead class="text-center" style="background: #f06161; color: white;">
                        <th><label>Nombre</label></th>
                            <th><label>Apellido</label></th>
                            <th><label>Género</label></th>
                            <th><label>Edad</label></th>
                            <th><label>Valor IMC</label></th>
                            <th><label>Rango IMC</label></th>
                        </thead>

                        <tbody class="text-center">
                            <?php
                            $array = json_decode((file_get_contents('http://localhost/apiexamen/servicios/apiUsuarios.php')), true);

                            foreach ($array as $key => $value) {
                                if ($value['u_rangoimc'] == "Obesidad grado 3") {
                                    echo "<tr>";
                                    echo "<td>" . $value['u_nombre'] . "</td>";
                                    echo "<td>" . $value['u_apellido'] . "</td>";
                                    echo "<td>" . $value['u_genero'] . "</td>";
                                    echo "<td>" . $value['u_edad'] . "</td>";
                                    echo "<td>" . $value['u_valorimc'] . "</td>";
                                    echo "<td>" . $value['u_rangoimc'] . "</td>";
                                    echo "</tr>";
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section class="section option" id="7" style="display:none; background: white;">
        <h6 class="text-center" style="font-size: x-large;">Pacientes con Obecidad grado IV</h6>
        <div class="container">
            <div class="row text-center p-3">
                <div class="col-lg-12 table-responsive" style="background:#F1FAFB;">
                    <table class="table table-hover" id="tb7">
                        <thead class="text-center" style="background: #f06161; color: white;">
                        <th><label>Nombre</label></th>
                            <th><label>Apellido</label></th>
                            <th><label>Género</label></th>
                            <th><label>Edad</label></th>
                            <th><label>Valor IMC</label></th>
                            <th><label>Rango IMC</label></th>
                        </thead>

                        <tbody class="text-center">
                            <?php
                            $array = json_decode((file_get_contents('http://localhost/apiexamen/servicios/apiUsuarios.php')), true);

                            foreach ($array as $key => $value) {
                                if ($value['u_rangoimc'] == "Obesidad grado 4") {
                                    echo "<tr>";
                                    echo "<td>" . $value['u_nombre'] . "</td>";
                                    echo "<td>" . $value['u_apellido'] . "</td>";
                                    echo "<td>" . $value['u_genero'] . "</td>";
                                    echo "<td>" . $value['u_edad'] . "</td>";
                                    echo "<td>" . $value['u_valorimc'] . "</td>";
                                    echo "<td>" . $value['u_rangoimc'] . "</td>";
                                    echo "</tr>";
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

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

    <!--DataTables-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.13.1/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.13.1/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tb').DataTable();
            $('#tb2').DataTable();
            $('#tb3').DataTable();
            $('#tb4').DataTable();
            $('#tb5').DataTable();
            $('#tb6').DataTable();
            $('#tb7').DataTable();

        });
    </script>

</body>

</html>