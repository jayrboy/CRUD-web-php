<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n1=$_POST["number"];
        $n2=(($n1*$n1)-1)/2;
        $n3=(($n1*$n1)+1)/2;
        


        if($n1 % 2) {
            $n1*=2;
            $n2*=2;
            $n3*=2;

            echo "$n1, ";
            echo "$n2, ";
            echo "$n3 ==>";
        }

    ?>
    
</body>
</html>