<html>
    <style>
        .h1{
            text-align:center;
        }
        .tbody{
            border-style:double;
            text-align:center;
            margin-left:30%;
            margin-right:30%;
            background-color:white;
        }
      
    </style>
    <h1 class = "h1">Vowel</h1>
<body>
    <div class = "tbody">
<?php

    $name = 'Reggel Campanilla';
    $len = strlen($name);
    $upper = strtoupper($name);
  //  $arrName=(str_split($upper));
 
    $vowel = 0;


    for($i = 0;$i<$len;$i++){
            if($upper[$i]== 'A' || $upper[$i]== 'E' || $upper[$i]== 'I' || $upper[$i]== 'O' || 
            $upper[$i] == 'U')
         $vowel++;
         echo $upper[$i];
        }
       
        echo "<br>";
        echo "Number of vowel:".$vowel;
?>
</div>
</body>
</html>