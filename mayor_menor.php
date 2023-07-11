<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CDN BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/general.css">
    <title>Mayor o menor de edad</title>
</head>

<body>
    <a href="index.html#section-respuestas">
    <img class="home" src="img/hogar.png" alt="Icono de hogar">
    </a>
    <div class="main-frame-cal">
        <form action="" method="POST">
        
            <div class="form-group">
                <label for="exampleFormControlInput1">Digite su edad:</label> <br><br>
                <input type="number" name="edad" class="form-control" id="exampleFormControlInput1" placeholder="Edad">
            </div>
            <button type="submit" name="verificar" class="btn btn-outline-info">Operar</button>
        </form>

        <?php

        $edad = 0;
        $edad_125 = 125;
        #const contaste_18 = 18;
        const constaste_18 = 18;
        define("constante 0","0");   
       

        if (isset($_POST['verificar'])) {
            $edad = $_POST['edad'];

            if ($edad >= constaste_18) {
                echo "<h1> Es mayor de edad </h1>";
            } else if (  $edad < 18  &&  $edad > 0) {
                echo "<h2> Es menor de edad </h2>";
            }else {
                echo "<h2>No es valido</h2>";
            }
        
             }

             
    

             
        ?>

</body>

</html>