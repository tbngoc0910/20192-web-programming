<html>
    <head>
        <title>
            Convert degree to radian
        </title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            Enter a number :
            <input type="text" name ="number">
            <br>
            <input type="radio" name="function" value="degToRad" checked> Degree to Radian
            <input type="radio" name="function" value="radToDeg"> Radian to Degree
            <br>
            <input type="submit" value="Submit">
            <?php
                if(!empty($_GET["number"] && !empty($_GET["function"]))){
                    $number = $_GET["number"];
                    if(is_numeric($number)){
                        $function = $_GET["function"];
                        $result = 0;
                        if(strcmp($function, "degToRad")==0){
                            $result = round(degToRad($number),2);
                        }else{
                            $result = round(radToDeg($number),2);
                        }
                        print "<br>Result = $result";
                    }else{
                        print "<br>Wrong number format!";
                    }
                }
            ?>
        </form>
        <?php
                function degToRad($number){
                    return $number * M_PI / 180;
                }
                function radToDeg($number){
                    return $number * 180 / M_PI;
                }
        ?>
    </body>
</html>

