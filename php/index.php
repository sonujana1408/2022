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
        $var="foo";
        $foo="hello <br>";
        echo $foo;
        echo $$var;
        echo ${$var};
        function add($a,$b){
                return $a+$b;
        }
        $function="add";
        echo $function(2,3);
        ?>

</body>
</html>