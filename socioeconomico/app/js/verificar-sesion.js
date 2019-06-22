verificar_sesion();

function verificar_sesion() {
    $.ajax({        
        url: "../php/verificar-sesion.php",
    }).done(function (info) {
        var json = JSON.parse(info);                
        if (json.sesion == false) {
            
            window.location.href = "../cuestionario/index.php"
        }
    });
}