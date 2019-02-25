/** VALIDAR REGISTRO */

function validarRegistro(){
    var usuario = document.querySelector("#usuarioRegistro").value;
    var password = document.querySelector("#passwordRegistro").value;
    var email = document.querySelector("#emailRegistro").value;
    var terminos = document.querySelector("#terminos").checked;

    //Validacr usuario
    if(usuario != ""){
        var caracteres = usuario.length;
        var expresion = /^[a-zA-Z0-9]*$/;
        if(caracteres > 10){
            document.querySelector("label[for='usuarioRegistro']").innerHTML += "<br> Escriba máximo 10 caracteres"
            return false;
        }

        if(!expresion.test(usuario)){
            document.querySelector("label[for='usuarioRegistro']").innerHTML += "<br> No se permiten caracteres especiales"
            return false;
        }
    }

    //Validar password
    if(password != ""){
        var caracteres = password.length;
        var expresion = /^[a-zA-Z0-9]*$/;
        if(caracteres < 8){
            document.querySelector("label[for='passwordRegistro']").innerHTML += "<br> Escriba mínimo 8 caracteres"
            return false;
        }

        if(!expresion.test(password)){
            document.querySelector("label[for='passwordRegistro']").innerHTML += "<br> No se permiten caracteres especiales"
            return false;
        }
    }

    //Validar email

    if(email != ""){
        var expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

        if(!expresion.test(email)){
            document.querySelector("label[for='emailRegistro']").innerHTML += "<br> Escriba un correo electronico valido"
            return false;
        }
    }

    //Validar terminos
    if(!terminos){
        document.querySelector("form").innerHTML += "<br> Tienes que aceptar los terminos y condiciones de la página.";
        document.querySelector("#usuarioRegistro").value = usuario;
        document.querySelector("#passwordRegistro").value = password;
        document.querySelector("#emailRegistro").value = email;
        return false;
    }

    return true;
}

/**FIN VALIDAR REGISTRO */