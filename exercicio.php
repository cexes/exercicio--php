<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercico - php</title>
</head>
<body>

 <?php
   
     $numeros = array();
       while(count($numeros) <=5){

        $sorte = rand(0,60);
        if(!in_array($sorte,$numeros)){
            $numeros[] =$sorte;
        }
       }
      print_r($numeros);
 ?>
    
</body>
</html>
