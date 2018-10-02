<html>
    <head>
        <link rel="icon" href="resources/icono.ico" type="image/x-icon">
        <link rel="shortcut icon" href="resources/icono.ico" type="image/x-icon">
        <link href="resources/css/login/login.css" rel="stylesheet" type="text/css"/>
        <script src="resources/alertifyjs/alertify.min.js" type="text/javascript"></script>
        <link href="resources/alertifyjs/css/alertify.min.css" rel="stylesheet" type="text/css"/>
        <link href="resources/alertifyjs/css/themes/default.min.css" rel="stylesheet" type="text/css"/>
        <link href="resources/alertifyjs/css/themes/semantic.min.css" rel="stylesheet" type="text/css"/>
        <link href="resources/alertifyjs/css/themes/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!--<script src="resources/js/login/campos_login_validacion.js" type="text/javascript"></script>-->
        <title>Login Car Shop Cams</title>
    </head>
    <body>
        <div class="login-page">
            <div class="form">
                <h3> Bienvenido a Car Shop Cams</h3>
                <img src="resources/images/LOGO-LOGIN.png" alt=""/>
                <p> </p>
                <form class="login-form" onsubmit="return validar_login()" action="">
                    <input type="text" placeholder="Ingrese su usuario" id="username" required=""/>
                    <input type="password" placeholder="Ingrese su contraseña" id="password" required=""/>
                    <button type="submit" value="Submit">Ingresar</button>
                    <p class="message">¿No estas registrado? <a href="#">Crea tu cuenta aquí.</a></p>
                </form>
            </div>
        </div>  
    </body>
    <script>
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
    </script>
</html>

