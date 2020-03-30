<html>
    <head><title>
        Our shop
        </title></head>
        <body>
            <font size="5" color="pink">
                <?php
                    $today = date('l,F d, Y');
                    print "welcome to $today our huge blowout sale!</font>";
                    $month = date('m');
                    $year = date('Y');
                    $dayofyear=date('z');
                    if($month==12 && $year==2019){
                        $dayleft = (365 - $dayofyear + 10);
                        print "<br>There are $dayleft sales days left";
                    }elseif($month==01 && year==2020){
                        if($dayofyear<10){
                            $dayleft=10 - $dayofyear;
                            print "<br>There are $dayleft sales days left";
                        }else{
                            print "<br>Sorry, our sale is over";
                        }
                    }else{
                        print "<br>Sorry, our sale is over";
                    }
                    print "<br>Our sale ends January 10, 2020";
                ?>
            </font>
            
        </body>
</html>

