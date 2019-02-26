<?php

    function luas_kubus ($sisi){
        return 6 * $sisi * $sisi; 
    }
    function volume_kubus ($sisi){
        return $sisi * $sisi * $sisi; 
    }
    $s = $_POST["sisi"];
    if(isset($_POST["submit"])){
        echo "Hasil luas kubus dengan sisi $s = " ;
        echo luas_kubus($s);
        echo " Hasil volume kubus dengan sisi $s ="; 
        echo volume_kubus($s);
    }
   

?>
<html>
    <head>
        <title>Kubus</title>
    </head>
    <body>
    <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="sisi">
        <input type="submit" name="submit" value="submit">
    </form>
    </body>
</html>
            