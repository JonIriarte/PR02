function validacionForm() {

    var nombre = document.getElementById('nombre').value;

    var password = document.getElementById('password').value;

    var message = document.getElementById('message').value;

    if (nombre == '' && password == '') {
        document.getElementById("message").innerHTML = "Inténtalo de nuevo.";
        document.getElementsByTagName("label")[0].style.color = "red";
        document.getElementsByTagName("label")[1].style.color = "red";
        document.getElementById("nombre").style.borderColor = "red";
        document.getElementById("password").style.borderColor = "red";

    } else if (nombre == '') {
        document.getElementById("message").innerHTML = "El nombre del usuario está vacío";
        document.getElementsByTagName("label")[0].style.color = "red";
        document.getElementsByTagName("label")[1].style.color = "black";
        document.getElementById("nombre").style.borderColor = "red";
        document.getElementById("password").style.borderColor = "black";
    } else if (password == '') {
        document.getElementById("message").innerHTML = "La contraseña está vacía";
        document.getElementsByTagName("label")[0].style.color = "black";
        document.getElementsByTagName("label")[1].style.color = "red";
        document.getElementById("password").style.borderColor = "red";
        document.getElementById("nombre").style.borderColor = "black";
    } else {
        return true;
    }
    document.getElementById("submit").style.color = "red";
    document.getElementById("submit").style.backgroundColor = "#FFB0AE";
    return false;
}