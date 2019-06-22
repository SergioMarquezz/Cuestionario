
//Codigo que sirve para no regresar a la pagina anterior
function noRegresar() {
    
    window.location.hash = "no-back-button";

    window.location.hash = "Again-No-back-button" //chrome

    window.onhashchange = function () { window.location.hash = "no-back-button"; }
    
}

