<?php 

    session_start();
?>


<div class="bg-light border-right" id="sidebar-contenedor">
        
        <div></div>
        <div class="list-group list-group-flush">
            <img src="img/logoUTT.jpg" alt="" class="logoUTT">
            <div class="sidebar-heading">HISTORIA CLINICA</div>
            <div class="sidebar-heading"><i class="fa fa-user"></i><?php echo $_SESSION['user']?></div>
            <a href="seguimiento-alumno.php" class="list-group-item list-group-item-action bg-light" id="seguimiento"><i class="icon-eye1"></i>SEGUIMIENTO DEL ALUMNO</a>
            <a href="historia-clinica-identi.php" class="list-group-item list-group-item-action bg-light" id="informe-general"><i class="icon-address-card"></i>INFORMACIÓN GENERAL</a>
            <a href="#" class="list-group-item list-group-item-action bg-light" id="adicciones"><i class="icon-futbol-o"></i>HABITOS</a>
            <a href="clinica-antecedentes.php" class="list-group-item list-group-item-action bg-light" id="ante-personales"><i class="icon-smile2"></i>ANTECEDENTES PERSONALES</a>
            <a href="#" class="list-group-item list-group-item-action bg-light" id="heredofamilia"><i class="icon-man-woman"></i>ANTECEDENTES HEREDOFAMILIARES</a>
            <a href="clinica-enfermedades.php" class="list-group-item list-group-item-action bg-light" id="enfermedad"><i class="icon-sad2"></i>ENFERMEDADES</a>
            <a href="clinica-ginecobs.php" class="list-group-item list-group-item-action bg-light" id="antece-gineco"><i class="icon-woman"></i>ANTECEDENTES GINECOBSTÉTRICOS</a>
            <a href="clinica-tratamiento.php" class="list-group-item list-group-item-action bg-light" id="tratamiento"><i class="icon-aid-kit"></i>TRATAMIENTO</a>
            <a href="#" class="list-group-item list-group-item-action bg-light" id="contacto-urgencia"><i class="icon-phone1"></i>CONTACTO DE URGENCIA</a>
            <a href="cerrar-sesion.php" class="list-group-item list-group-item-action bg-light"><i class="icon-sign-out"></i>SALIR</a>

            <!--Inputs invisbles que sirven para ayuda del programador-->
            <input type="text" id="sexo_user" value="<?php echo $_SESSION['sexo']?>">
            <input type="text" id="cve_tipo_persona" value="<?php echo $_SESSION['tipo_persona']?>">

        </div>
    </div>