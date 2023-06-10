$(document).ready(function() {

    cargar_especialidad();

});

function cargar_especialidad() {
    $("#contenedor_especialidad").load('./tabladinamica/index.php');
}
