<!DOCTYPE>
<html>
<head>
    <meta charset="UTF-8">
    <title>POO PHP</title>
</head>
    
<body>
    <form action="cantidadesCtrl.php" method="post">
    
    <input type="number" name="A" placeholder="captura Alimentación" required/><br>
    <input type="number" name="B" placeholder="captura Colegiatura" required/><br>
    <input type="number" name="C" placeholder="captura Transporte" required/><br>
    <input type="submit" value="Total"/><br>
    </form>
    <?php
    
    if(isset($cadena)){
        echo $cadena;
    }
    else{
        $cadena='';
    }
    
    ?>
    
    
    
</body>
</html>