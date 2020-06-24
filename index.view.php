<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario contacto</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre:" value="">
            <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo:" value="">
            <textarea name="mensaje" class="form-control" id="mensaje" placeholder="mensaje:"></textarea>
            <input type="submit" name="submit" class="btn btn-primary" value="Enviar correo">
        </form>
    </div>
</body>
</html>