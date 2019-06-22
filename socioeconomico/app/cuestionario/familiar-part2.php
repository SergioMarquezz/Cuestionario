<?php

    include("../php/preguntas.php");
    include("../php/respuestas.php");
    include("../php/reactivos.php");
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entorno Familiar:::UTEC</title>

    <link rel="icon" href="../img/logoHalcon.jpg">

    <link rel="stylesheet" href="../bootstrap/bootstrap.css" />
    <link rel="stylesheet" href="../bootstrap/mdb.css" />
    <link rel="stylesheet" href="../plugins/css/confirm-alert.css">
    <link rel="stylesheet" href="../plugins/css/lobibox.css">
    <link rel="stylesheet" href="../icons.css">
    <link rel="stylesheet" href="../css/styles.css" />

</head>


<body background="../img/logo-utec-nuevo.png" onload="noRegresar()">

    <script type="text/javascript" src="../bootstrap/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../js/verificar-sesion.js"></script>

<header>
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="cyan darken-3 p-4">
            <h4 class="text-white">SISTEMA DE GESTIÓN ESCOLAR</h4>
            <span class="text-white">Universidad Tecnológica de Tulancingo</span>
            <div class="mt-4">
            <a class="text-white " href="#"><?php echo $_SESSION['user'] . " ". $_SESSION['pa']?></a>
            <a class="text-white ml-5" href="../php/cerrar-sesion.php" id="salir">SALIR</a>
            </div>

            </div>
        </div>
        <nav class="navbar navbar-dark cyan darken-3">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>
</header>

<input type="hidden" id="cve_aspirante" name="clave_aspi" value="<?php echo $_SESSION['clave_aspirante']?>">
<input type="hidden" id="aceptado" value="<?php echo $_SESSION['aceptar']?>">
<input type="hidden" id="seccion-familiar" value="4">

<div class="row justify-content-center">
    <div class="col-lg-6">
        <img src="../img/Log0.png" alt="logo" class="img-fluid">
    </div>
</div>

<div class="d-flex" id="contenedor">
        <!--Contenedor del formulario-->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-default mt-4">
                        <div class="card-header h5-responsive badge-default text-center">ENTORNO FAMILIAR</div>
                        <div class="card-body">
                            <blockquote class="blockquote">
                                <form method="POST" class="scroller" id="form-familiar-2">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-row">
                                                <div class="col-lg-6">
                                                <!--Pregunta 23-->
                                                <input type="hidden" name="pregunta-28" id="cve_pregunta-28" value="<?php echo $result_array_pre[27]["cve_pregunta"] ?>">
                                                    <h5 class="mt-4">28. <?php echo(utf8_encode($result_array_pre[27]["pregunta"]))?></h5>
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="personas" id="1-persona" type="radio" value="106" required/>
                                                                    <label class="custom-control-label grey-text" for="1-persona"><?php echo($result_array_res[105]["respuesta"])?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="personas" id="2-persona" type="radio" value="107" required/>
                                                                    <label class="custom-control-label grey-text" for="2-persona"><?php echo(utf8_encode($result_array_res[106]["respuesta"]))?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="personas" id="3-persona" type="radio" value="108" required/>
                                                                    <label class="custom-control-label grey-text" for="3-persona"><?php echo($result_array_res[107]["respuesta"])?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="personas" id="4-persona" type="radio" value="109" required/>
                                                                    <label class="custom-control-label grey-text" for="4-persona"><?php echo(utf8_encode($result_array_res[108]["respuesta"]))?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="personas" id="5-persona" type="radio" value="110" required/>
                                                                    <label class="custom-control-label grey-text"  for="5-persona"><?php echo(utf8_encode($result_array_res[109]["respuesta"]))?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="personas" id="6-mas-persona" type="radio" value="111" required/>
                                                                    <label class="custom-control-label grey-text" for="6-mas-persona"><?php echo(utf8_encode($result_array_res[110]["respuesta"]))?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                
                                                    <input type="hidden" name="pregunta-29" id="cve_pregunta-29" value="<?php echo $result_array_pre[28]["cve_pregunta"] ?>">
                                                    <h5 class="mt-5">29. <?php echo(utf8_encode($result_array_pre[28]["pregunta"]))?></h5>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <input type="hidden" name="rea-telefonia" id="cve-react-telefonia" value="<?php echo $result_array_re[99]["cve_reactivo"] ?>">
                                                                <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[99]["reactivo"]))?></label>
                                                                <div class="form-row">
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label>
                                                                                <input class="custom-control-input " name="telefonia" id="si-telefono" type="radio" value="112" required/>
                                                                                <label class="custom-control-label grey-text" for="si-telefono"><?php echo(utf8_encode($result_array_res[111]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label  >
                                                                                <input class="custom-control-input " name="telefonia" id="no-telefono" type="radio" value="113" required/>
                                                                                <label class="custom-control-label grey-text" for="no-telefono"><?php echo(utf8_encode($result_array_res[112]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <input type="hidden" name="rea-lavadora" id="cve-react-lavadora" value="<?php echo $result_array_re[100]["cve_reactivo"] ?>">
                                                                <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[100]["reactivo"]))?></label>
                                                                <div class="form-row">
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label  >
                                                                                <input class="custom-control-input " name="lavadora" id="si-lavadora" type="radio" value="112" required/>
                                                                                <label class="custom-control-label grey-text" for="si-lavadora"><?php echo(utf8_encode($result_array_res[111]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label  >
                                                                                <input class="custom-control-input " name="lavadora" id="no-lavadora" type="radio" value="113" required/>
                                                                                <label class="custom-control-label grey-text" for="no-lavadora"><?php echo(utf8_encode($result_array_res[112]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <input type="hidden" name="rea-refri" id="cve-react-refri" value="<?php echo $result_array_re[101]["cve_reactivo"] ?>">
                                                                <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[101]["reactivo"]))?></label>
                                                                <div class="form-row">
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label >
                                                                                <input class="custom-control-input " name="refri" id="si-refri" type="radio" value="112" required/>
                                                                                <label class="custom-control-label grey-text" for="si-refri"><?php echo(utf8_encode($result_array_res[111]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label  >
                                                                                <input class="custom-control-input " name="refri" id="no-refri" type="radio" value="113" required/>
                                                                                <label class="custom-control-label grey-text" for="no-refri"><?php echo(utf8_encode($result_array_res[112]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <input type="hidden" name="rea-horno" id="cve-react-horno" value="<?php echo $result_array_re[102]["cve_reactivo"] ?>">
                                                                <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[102]["reactivo"]))?></label>
                                                                <div class="form-row">
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label  >
                                                                                <input class="custom-control-input " name="horno" id="si-horno" type="radio" value="112" required/>
                                                                                <label class="custom-control-label grey-text" for="si-horno"><?php echo(utf8_encode($result_array_res[111]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label  >
                                                                                <input class="custom-control-input " name="horno" id="no-horno" type="radio" value="113" required/>
                                                                                <label class="custom-control-label grey-text" for="no-horno"><?php echo(utf8_encode($result_array_res[112]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <input type="hidden" name="rea-internet" id="cve-react-internet" value="<?php echo $result_array_re[103]["cve_reactivo"] ?>">
                                                                <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[103]["reactivo"]))?></label>
                                                                <div class="form-row">
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label  >
                                                                                <input class="custom-control-input " name="internet" id="si-internet" type="radio" value="112" required/>
                                                                                <label class="custom-control-label grey-text" for="si-internet"><?php echo(utf8_encode($result_array_res[111]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label  >
                                                                                <input class="custom-control-input " name="internet" id="no-internet" type="radio" value="113" required/>
                                                                                <label class="custom-control-label grey-text"  for="no-internet"><?php echo(utf8_encode($result_array_res[112]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <input type="hidden" name="rea-television" id="cve-react-television" value="<?php echo $result_array_re[104]["cve_reactivo"] ?>">
                                                                <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[104]["reactivo"]))?></label>
                                                                <div class="form-row">
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label  >
                                                                                <input class="custom-control-input " name="television" id="si-television" type="radio" value="112" required/>
                                                                                <label class="custom-control-label grey-text" for="si-television"><?php echo(utf8_encode($result_array_res[111]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label >
                                                                                <input class="custom-control-input " name="television" id="no-television" type="radio" value="113" required/>
                                                                                <label class="custom-control-label grey-text "  for="no-television"><?php echo(utf8_encode($result_array_res[112]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <input type="hidden" name="rea-tablet" id="cve-react-tablet" value="<?php echo $result_array_re[105]["cve_reactivo"] ?>">
                                                                <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[105]["reactivo"]))?></label>
                                                                <div class="form-row">
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label  >
                                                                                <input class="custom-control-input " name="tablet" id="si-tablet" type="radio" value="112" required/>
                                                                                <label class="custom-control-label grey-text" for="si-tablet"><?php echo(utf8_encode($result_array_res[111]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label  >
                                                                                <input class="custom-control-input " name="tablet" id="no-tablet" type="radio" value="113" required/>
                                                                                <label class="custom-control-label grey-text" for="no-tablet"><?php echo(utf8_encode($result_array_res[112]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="pregunta-30" id="cve_pregunta-30" value="<?php echo $result_array_pre[29]["cve_pregunta"] ?>">
                                                    <h5 class="mt-4">30. <?php echo(utf8_encode($result_array_pre[29]["pregunta"]))?></h5>
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="cuartos" id="1-cuarto" type="radio" value="114" required/>
                                                                    <label class="custom-control-label grey-text" for="1-cuarto"><?php echo($result_array_res[113]["respuesta"])?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="cuartos" id="2-cuartos" type="radio" value="115" required/>
                                                                    <label class="custom-control-label grey-text"  for="2-cuartos"><?php echo(utf8_encode($result_array_res[114]["respuesta"]))?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="cuartos" id="3-cuartos" type="radio" value="116" required/>
                                                                    <label class="custom-control-label grey-text" for="3-cuartos"><?php echo($result_array_res[115]["respuesta"])?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="cuartos" id="4-cuartos" type="radio" value="117" required/>
                                                                    <label class="custom-control-label grey-text" for="4-cuartos"><?php echo(utf8_encode($result_array_res[116]["respuesta"]))?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="cuartos" id="5-cuartos" type="radio" value="118" required/>
                                                                    <label class="custom-control-label grey-text" for="5-cuartos"><?php echo(utf8_encode($result_array_res[117]["respuesta"]))?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="cuartos" id="6-mas-cuartos" type="radio" value="119" required/>
                                                                    <label class="custom-control-label grey-text" for="6-mas-cuartos"><?php echo(utf8_encode($result_array_res[118]["respuesta"]))?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>    
                                                <div class="col-lg-6">
                                                    <input type="hidden" name="pregunta-31" id="cve_pregunta-31" value="<?php echo $result_array_pre[30]["cve_pregunta"] ?>">
                                                    <h5 class="mt-3">31. <?php echo(utf8_encode($result_array_pre[30]["pregunta"]))?></h5>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <input type="hidden" name="rea-computadora" id="cve-react-computadora" value="<?php echo $result_array_re[106]["cve_reactivo"] ?>">
                                                                <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[106]["reactivo"]))?></label>
                                                                <div class="form-row">
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label  >
                                                                                <input class="custom-control-input " name="computadora" id="ninguno-computadora" type="radio" value="140" required/>
                                                                                <label class="custom-control-label grey-text" for="ninguno-computadora"><?php echo(utf8_encode($result_array_res[139]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label  >
                                                                                <input class="custom-control-input " name="computadora" id="1-computadora" type="radio" value="120" required/>
                                                                                <label class="custom-control-label grey-text"  for="1-computadora"><?php echo(utf8_encode($result_array_res[119]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label >
                                                                                <input class="custom-control-input " name="computadora" id="2-computadora" type="radio" value="121" required/>
                                                                                <label class="custom-control-label grey-text"  for="2-computadora"><?php echo(utf8_encode($result_array_res[120]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label  >
                                                                                <input class="custom-control-input " name="computadora" id="3-computadora" type="radio" value="122" required/>
                                                                                <label class="custom-control-label grey-text" for="3-computadora"><?php echo(utf8_encode($result_array_res[121]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label  >
                                                                                <input class="custom-control-input " name="computadora" id="4-mas-computadora" type="radio" value="123" required/>
                                                                                <label class="custom-control-label grey-text "  for="4-mas-computadora"><?php echo(utf8_encode($result_array_res[122]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <input type="hidden" name="rea-tele" id="cve-react-tele" value="<?php echo $result_array_re[107]["cve_reactivo"] ?>">
                                                                <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[107]["reactivo"]))?></label>
                                                                <div class="form-row">
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label  >
                                                                                <input class="custom-control-input " name="tele" id="ninguno-tele" type="radio" value="140" required/>
                                                                                <label class="custom-control-label grey-text" for="ninguno-tele"><?php echo(utf8_encode($result_array_res[139]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label  >
                                                                                <input class="custom-control-input " name="tele" id="1-tele" type="radio" value="120" required/>
                                                                                <label class="custom-control-label grey-text" for="1-tele"><?php echo(utf8_encode($result_array_res[119]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label  >
                                                                                <input class="custom-control-input " name="tele" id="2-tele" type="radio" value="121" required/>
                                                                                <label class="custom-control-label grey-text" for="2-tele"><?php echo(utf8_encode($result_array_res[120]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label  >
                                                                                <input class="custom-control-input " name="tele" id="3-tele" type="radio" value="122" required/>
                                                                                <label class="custom-control-label grey-text" for="3-tele"><?php echo(utf8_encode($result_array_res[121]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label  >
                                                                                <input class="custom-control-input " name="tele" id="4-mas-tele" type="radio" value="123" required/>
                                                                                <label class="custom-control-label grey-text" for="4-mas-tele"><?php echo(utf8_encode($result_array_res[122]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <input type="hidden" name="rea-auto" id="cve-react-auto" value="<?php echo $result_array_re[108]["cve_reactivo"] ?>">
                                                                <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[108]["reactivo"]))?></label>
                                                                <div class="form-row">
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label  >
                                                                                <input class="custom-control-input " name="auto" id="ninguno-auto" type="radio" value="140" required/>
                                                                                <label class="custom-control-label grey-text" for="ninguno-auto"><?php echo(utf8_encode($result_array_res[139]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label>
                                                                                <input class="custom-control-input " name="auto" id="1-auto" type="radio" value="120" required/>
                                                                                <label class="custom-control-label grey-text" for="1-auto"><?php echo(utf8_encode($result_array_res[119]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label  >
                                                                                <input class="custom-control-input " name="auto" id="2-auto" type="radio" value="121" required/>
                                                                                <label class="custom-control-label grey-text" for="2-auto"><?php echo(utf8_encode($result_array_res[120]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label >
                                                                                <input class="custom-control-input " name="auto" id="3-auto" type="radio" value="122" required/>
                                                                                <label class="custom-control-label grey-text"  for="3-auto"><?php echo(utf8_encode($result_array_res[121]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label  >
                                                                                <input class="custom-control-input " name="auto" id="4-auto" type="radio" value="123" required/>
                                                                                <label class="custom-control-label grey-text" for="4-auto"><?php echo(utf8_encode($result_array_res[122]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <input type="hidden" name="rea-banos" id="cve-react-banos" value="<?php echo $result_array_re[109]["cve_reactivo"] ?>">
                                                                <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[109]["reactivo"]))?></label>
                                                                <div class="form-row">
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label  >
                                                                                <input class="custom-control-input " name="banos" id="ninguno-bano" type="radio" value="140" required/>
                                                                                <label class="custom-control-label grey-text" for="ninguno-bano"><?php echo(utf8_encode($result_array_res[139]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label  >
                                                                                <input class="custom-control-input " name="banos" id="1-bano" type="radio" value="120" required/>
                                                                                <label class="custom-control-label grey-text" for="1-bano"><?php echo(utf8_encode($result_array_res[119]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label  >
                                                                                <input class="custom-control-input " name="banos" id="2-bano" type="radio" value="121" required/>
                                                                                <label class="custom-control-label grey-text" for="2-bano"><?php echo(utf8_encode($result_array_res[120]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label  >
                                                                                <input class="custom-control-input " name="banos" id="3-bano" type="radio" value="122" required/>
                                                                                <label class="custom-control-label grey-text" for="3-bano"><?php echo(utf8_encode($result_array_res[121]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="custom-control custom-radio">
                                                                            <label  >
                                                                                <input class="custom-control-input " name="banos" id="4-mas-bano" type="radio" value="123" required/>
                                                                                <label class="custom-control-label grey-text" for="4-mas-bano"><?php echo(utf8_encode($result_array_res[122]["respuesta"]))?></label>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="pregunta-32" id="cve_pregunta-32" value="<?php echo $result_array_pre[31]["cve_pregunta"] ?>">
                                                    <h5 class="mt-4">32. <?php echo(utf8_encode($result_array_pre[31]["pregunta"]))?></h5>
                                                    <div class="form-row">
                                                        <div class="col-lg-3">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="vacaciones" id="ninguna-vacaciones" type="radio" value="141" required/>
                                                                    <label class="custom-control-label grey-text"  for="ninguna-vacaciones"><?php echo(utf8_encode($result_array_res[140]["respuesta"]))?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="vacaciones" id="1-vacaciones" type="radio" value="124" required/>
                                                                    <label class="custom-control-label grey-text" for="1-vacaciones"><?php echo(utf8_encode($result_array_res[123]["respuesta"]))?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="vacaciones" id="2-vacaciones" type="radio" value="125" required/>
                                                                    <label class="custom-control-label grey-text" for="2-vacaciones"><?php echo(utf8_encode($result_array_res[124]["respuesta"]))?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="vacaciones" id="2-vacaciones" type="radio" value="126" required/>
                                                                    <label class="custom-control-label grey-text" for="3-vacaciones"><?php echo(utf8_encode($result_array_res[125]["respuesta"]))?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="vacaciones" id="4-mas-vacaciones" type="radio" value="127" required/>
                                                                    <label class="custom-control-label grey-text" for="4-mas-vacaciones"><?php echo(utf8_encode($result_array_res[126]["respuesta"]))?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    <footer>
                                        <div class="container">
                                            <div class="row justify-content-around">
                                                <div class="col-lg-6 mt-4">
                                                    <button type="submit" class="btn btn-block w-75 bg-default mb-4" id="guardar-familiar2">
                                                        <i class="icon-checkmark1">  GUARDAR</i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </footer>
                                </form>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
</body>

<footer class="page-footer blue-grey darken-1">
    <div class="container">
        <div class="row">
          <div class="col-lg-6 mt-4">
            <h4 class="white-text">Departamento de Sistemas y Soporte Técnico</h4>
              <p class=" text-white">Sistema de Gestion Escolar, Utec 2019</p>
                  <p class=" text-white">Email: sergiomarquez@utectulancingo.edu.mx</p>
          </div>
          <div class="col-md-6 mt-4">  
              <b>Para un mejor funcionamiento del sitio <br>utiliza alguno de los siguientes navegadores.</b>
              <div class="row">
                  <div class="browsers container">
                      <a href="https://www.google.com/chrome/browser/desktop/index.html" target="_blank"><img src="../img/chrom.ico" alt="chrom" class="icon" title="Google Chrom"></a>
                      <a href="https://www.mozilla.org/es-MX/firefox/new/" target="_blank"><img src="../img/mozilla.ico" alt="mozilla" class="icon" title="Firefox Mozilla"></a>
                      <a href="https://www.microsoft.com/es-mx/windows/microsoft-edge" target="_blank"><img src="../img/edge.png" alt="edge" class="icon" title="Edge"></a>
                  </div> 
              </div>    
          </div>
        </div>
    </div>
      <div class="footer-copyright">
          <div class="container">
              <div class="row mt-4">
                  <div class="col-lg-6">
                    <p>©Copyright 2019 
                  </div>
                  <div class="col-lg-6">
                    <span class="right">Realizado por: <b class="text-white">Sergio Alberto Márquez Moreno</b></span>
                  </div>
              </div>
          </div>
      </div>
  </footer>


<script type="text/javascript" src="../bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="../bootstrap/mdb.min.js"></script>
<script type="text/javascript" src="../plugins/js/confirm-alert.js"></script>
<script type="text/javascript" src="../plugins/js/lobibox.js"></script>
<script type="text/javascript" src="../js/iniciar-session.js"></script>
<script type="text/javascript" src="../js/preguntas-familiar.js"></script>
<script type="text/javascript" src="../js/back.js"></script>
</html>