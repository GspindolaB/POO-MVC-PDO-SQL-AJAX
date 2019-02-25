/** VALIDAR REGISTRO */

function validarIngreso(){
    var usuario = document.querySelector("#usuarioIngreso").value;
    var password = document.querySelector("#passwordIngreso").value;

    //Validacr usuario
    if(usuario != ""){
        var caracteres = usuario.length;
        var expresion = /^[a-zA-Z0-9]*$/;
        if(caracteres > 10){
            document.querySelector("label[for='usuarioIngreso']").innerHTML += "<br> Escriba máximo 10 caracteres"
            return false;
        }

        if(!expresion.test(usuario)){
            document.querySelector("label[for='usuarioIngreso']").innerHTML += "<br> No se permiten caracteres especiales"
            return false;
        }
    }

    //Validar password
    if(password != ""){
        var caracteres = password.length;
        var expresion = /^[a-zA-Z0-9]*$/;
        if(caracteres < 8){
            document.querySelector("label[for='passwordIngreso']").innerHTML += "<br> Escriba mínimo 8 caracteres"
            return false;
        }

        if(!expresion.test(password)){
            document.querySelector("label[for='passwordIngreso']").innerHTML += "<br> No se permiten caracteres especiales"
            return false;
        }
    }

    return true;
}

/**FIN VALIDAR REGISTRO */