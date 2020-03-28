<!DOCTYPE html>
<html lang="en">
<head>
    <!-- contenido predeterminado del html5 -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAPYTECH</title>

    <!-- icono -->
    <link rel="shortcut icon" href="publicos/imagenes/favicon.ico" type="image/x-icon">

    <!-- llamados de css ---------------------------------------------------- -->
    <!-- css de bootstrap -->
    <link rel="stylesheet" href="librerias/bootstrap_4.4.1/css/bootstrap.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="librerias/fontawesome_5.13.0/css/fontawesome.css">

    <!-- llamados de js ----------------------------------------------------- -->
    <!-- jquery agregado antes del js de bootstrap para que presente compatibilidad -->
    <script src="librerias/jquery_3.4.1/jquery_3.4.1.js"></script>
    <!-- js de bootstrap -->
    <script src="librerias/bootstrap_4.4.1/js/bootstrap.js"></script>
    
</head>
<style>
    .container{
        margin-top: 60px;
    }
</style>
<body>
   <div class="container">
       <div class="form">
            <div class="card">
            <div class="card-header">Header</div>
            <div class="card-body">
                <form action="/action_page.php" class="was-validated">
                    <div class="form-group">
                        <label for="uname">NOMBRE:</label>
                        <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                        <div class="valid-feedback">LISTO.</div>
                        <div class="invalid-feedback">Porfavor llene el campo.</div>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
                        <div class="valid-feedback">LISTO.</div>
                        <div class="invalid-feedback">Porfavor llene el campo.</div>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember" required> Acepta los terminos y condiciones.
                        <div class="valid-feedback">LISTO.</div>
                        <div class="invalid-feedback">Porfavor llene este campo</div>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form></div>
            <div class="card-footer">Footer</div>
        </div>
            
       </div>
   </div>
</body>
</html>