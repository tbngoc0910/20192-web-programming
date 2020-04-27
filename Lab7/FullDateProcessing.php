<html>
    <head><title>Date</title></head>
    <body>
        <?php
            $date = $_POST["date"];
            $two = '[[:digit:]]{2}';
            $month = '[0-1][[:digit:]]';
            $day = '[0-3][[:digit:]]';
            $year = "2[[:digit:]]$two";
            if(preg_match("~^($month)/($day)/($year)$~", $date)){
                $arr = preg_split("/\//", $date);
                $m = $arr[0];
                $d = $arr[1];
                $y = $arr[2];
                if(checkdate($m, $d, $y)){
                    print "Valid date = $date <br>";
                }else{
                    print "Invalid date = $date";
                }
            }else{
                print "Invalid date = $date";
            }
        ?>
    </body>
    
</html>
