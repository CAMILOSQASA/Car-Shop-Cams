/* global alertify */

function validar_login() {

    var txtuser;
    var txtpassword;
    
    txtuser = document.getElementById('username').value;
    txtpassword = document.getElementById('password').value;

    if (txtuser.length > 8) {
        alertify.error('El usuario debe tener minimo 8 caracteres');
        return false;
    }

    if (txtuser.length => 16) {
        alertify.error('El usuario debe tener maximo 16 caracteres');
        return false;
    }

    if (txtpassword.length < 8) {
        alertify.error('La contraseña debe tener minimo 8 caracteres');
        return false;
    }

    if (txtpassword.length => 16) {
        alertify.error('La contraseña debe tener maximo 16 caracteres');
        return false;
    }
}

