<!DOCTYPE html>
<html>
<head>
    <title>Impresión numeros desde php</title>
</head>
<body>
    <section style="background-color: lightblue;">


<?php

echo "Los números pares son: <br>";
for($n=1; $n<=50; $n++)
{
    echo "<br>".($n*2);
}
echo "<br>La suma de todos los números es: ".((100*$n++)/2);
?>

       
        
    </section>
    

</body>
</html>