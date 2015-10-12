<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <form action="kalkulator.php" method="POST">
            <input type="text" name="a" />
            
            
             <select name="operacija">
                <option></option>
                <option value="+"> + </option>
                <option value="-"> - </option>
                <option value="*"> * </option>
                <option value="/"> / </option>
            </select>
              <input type="text" name="b"  />
            <br/> <input type="submit" value="izracunaj">
            <br/> 
        </form>
    </body>
</html>


<?php

if (!empty($_POST['a']) & !empty($_POST['operacija']) & !empty($_POST['b'])) {
    $a=$_POST['a'];
    $b=$_POST['b'];
    $op=$_POST['operacija'];
    
    if(!is_numeric($a) || !is_numeric($b)) {
        echo "uneli ste los karakter!";
    
        die ();
    }
    
    if($op == '+'){
        $c=$a+$b;
    } else if($op == '-'){
        $c=$a-$b;
    } else if($op == '*'){
        $c=$a*$b;        
    } else if($op == '/') {
        $c=$a/$b;
    }
    echo  $a.' '.$op.' '.$b.' = '.$c;
}


?>
