<!DOCTYPE>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
    
<body>
    <form action="formularioCtrl.php" method="post">
    
     <p>Nombre de usuario: <input type="text" name="U" required></p>
     <p>correo: <input type="text" name="C" required></p>
  <p>Contraseña: <input type="password" name="P" required></p>
  <p><input type="submit" value="Enviar datos"></p>
    </form>
    <?php
    
    if(isset($cadena)){
        echo $cadena;
    }
    else{
        $cadena='';
        echo $cadena;
    }
    
    ?>
    
    
    
</body>
</html>