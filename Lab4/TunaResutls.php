<html>
    <head>
        <title>Tuna cafe</title>
    </head>
    <font color="blue" size="5">Tuna Cafe Results Received</font>
    <?php 
        $menu = array('Tuna Casserole','Tuna Sandwich','Tuna Pie','Grilled Tuna','Tuna Surprise');
        $prefer = $_GET[prefer];
        if(count($prefer)==0){
            print "<br>Please pick something";
        }
        else{
            print "<br> Your selections <ul>";
            foreach ($prefer as $item){
                print "<li>$menu[$item]</li>";
            }
            print "</ul>";
        }
    ?>
</html>
