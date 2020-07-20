<!DOCTYPE>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
    
<body>
    <form action="gradosCtrl.php" method="post">
    
     <p>Ingresar temperatura: <input type="number" name="grados" required></p>
     <select name="grade">
        <option value="C">Celsius</option>
        <option value="F">Farenheit</option>
        
    </select>
    <p><input type="submit" value="Convertir"></p>
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