<html>
    <head><title>Tuna cafe</title></head>
    <body>
        <font size="5" color="Blue">Welcome to tune survey! </font>
        <form action="TunaResutls.php" method="GET">
            <?php 
                $menu = array('Tuna Casserole','Tuna Sandwich','Tuna Pie','Grilled Tuna','Tuna Surprise');
                $bestseller = 2;
                print "Please indicate all your favorite dishes.<br>";
                for($i=0; $i<count($menu); $i++){
                    print "<input type=\"checkbox\" name =\"prefer[]\" value=$i> $menu[$i]";
                    if($i==$bestseller){
                        print '<font color=red> Our best seller!!!</font>';
                    }
                    print "<br>";
                }
            ?>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
    </body>
</html>
