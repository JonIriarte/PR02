function validacionForm() {
    //Bucle FOR/OF para poner los elementos en rojo. ¿Por qué un For /of? Porque es absurdamente rápido y fácil de usar para iterar un array. 
    var inputs = document.getElementsByClassName('dato');
    for (const element of inputs) {
        if (element.value == "") {
            element.style.borderColor = "red";
            document.getElementById("message").innerHTML = "Rellena los campos que faltan";
        } else {
            element.style.borderColor = "initial";
        }
    }


}