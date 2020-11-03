function validacionForm() {

    var email=document.getElementById('nombre').value;

    var password=document.getElementById('password').value;

    var message=document.getElementById('message').value;

    if (nombre=='' &&function validacionForm() {

        var email=document.getElementById('nombre').value;
    
        var password=document.getElementById('password').value;
    
        var message=document.getElementById('message').value;
    
        if (nombre=='' && password=='') {
            document.getElementById("message").innerHTML = "Inténtalo de nuevo.";
            document.getElementsByTagName("label")[0].style.color = "red";
            document.getElementsByTagName("label")[1].style.color = "red";
            document.getElementById("email").style.borderColor = "red";
            document.getElementById("passwd").style.borderColor = "red";
    
        } else if (nombre=='') {
            document.getElementById("message").innerHTML = "Email del usuario";
            document.getElementsByTagName("label")[0].style.color = "red";
            document.getElementsByTagName("label")[1].style.color = "black";
            document.getElementById("email").style.borderColor = "red";
            document.getElementById("passwd").style.borderColor = "white";
        } else if (password=='') {
            document.getElementById("message").innerHTML = "El password está vacio";
            document.getElementsByTagName("label")[0].style.color = "black";
            document.getElementsByTagName("label")[1].style.color = "red";
            document.getElementById("passwd").style.borderColor = "red";
            document.getElementById("email").style.borderColor = "white";
        } else {
            return true;
        }
        document.getElementById("submit").style.color = "red";
        document.getElementById("submit").style.backgroundColor = "#FFB0AE";
        return false;
    } password=='') {
        document.getElementById("message").innerHTML = "Inténtalo de nuevo.";
        document.getElementsByTagName("label")[0].style.color = "red";
        document.getElementsByTagName("label")[1].style.color = "red";
        document.getElementById("email").style.borderColor = "red";
        document.getElementById("passwd").style.borderColor = "red";

    } else if (nombre=='') {
        document.getElementById("message").innerHTML = "Email del usuario";
        document.getElementsByTagName("label")[0].style.color = "red";
        document.getElementsByTagName("label")[1].style.color = "black";
        document.getElementById("email").style.borderColor = "red";
        document.getElementById("passwd").style.borderColor = "white";
    } else if (password=='') {
        document.getElementById("message").innerHTML = "El password está vacio";
        document.getElementsByTagName("label")[0].style.color = "black";
        document.getElementsByTagName("label")[1].style.color = "red";
        document.getElementById("passwd").style.borderColor = "red";
        document.getElementById("email").style.borderColor = "white";
    } else {
        return true;
    }
    document.getElementById("submit").style.color = "red";
    document.getElementById("submit").style.backgroundColor = "#FFB0AE";
    return false;
}