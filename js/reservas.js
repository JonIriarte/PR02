function validacionForm() {
    var inputs = document.getElementsByClassName('dato');
    var definido = true;
    //Bucle FOR/OF para poner los elementos en rojo. ¿Por qué un For /of? 
    //Para aprender a usarlo y descubrir que es absurdamente rápido y fácil de usar para iterar un array.
    for (const element of inputs) {
        if (element.value == "") {
            definido = false;
            element.style.borderColor = "red";
            document.getElementById("message").innerHTML = "Rellena los campos que faltan";
        } else {
            element.style.borderColor = "initial";
        }
    }
    ComprobarFecha(definido);

    if (definido == false) {
        return false;
    }
}

//Función para comprobar que la reserva es posterior a l fecha corriente

function ComprobarFecha(definido) {
    var fecha = document.getElementById('dia').value;
    var hora = document.getElementById('hora').value;
    var now = (new Date().getTime()) / 1000;
    var reserva = ((Date.parse(fecha)) + (hora * 3600)) / 1000;
    if (now > reserva) {
        resultado = now - reserva;
        document.getElementById("message2").innerHTML = "Fecha incorrecta";
        definido = false;
    } else {
        document.getElementById("message2").innerHTML = "";
        definido = true;

    }
}