<html>
    <head>
        <title>Distance and time calculation</title>
        <style>
            table, td { border: 1px solid black; }
        </style>
    </head>
    <font color="blue" size="5">Tuna Cafe Results Received</font>
    <?php 
        $cities = array('Dallas'=>803,'Toronto'=>435,'Boston'=>848,
                        'Nashville'=>406,'Las Vegas'=>1526,
                        'San Francisco'=>1835, 'Washington, DC'=>595,
                        'Miami' => 1189, 'Pittsburgh'=>409);
        $destination = $_GET['destination'];
    ?>
    <table>
    <?php
        if(empty($destination)){
            print "<br>Sorry, do not have any destinations information";
        }else{
            $row = 1;
            print "<tr><td>No.</td><td>Destination</td><td>Distance</td><td>Driving time</td><td>Walking time</td></tr>";
            foreach ($destination as $key){
                if(isset($cities[$key])){
                    $value = $cities[$key];
                    $time = round($value/60,2);
                    $walktime = round($value/5,2);
                    print "<tr><td>$row</td><td>$key</td><td>$value</td><td>$time</td><td>$walktime</td></tr>";
                    $row++;
                }
            }
        }
    ?>
    </table>
</html>
