<html><head><title>Insert Results</title></head>
    <body> 
        <?php
        $host = 'localhost';
        $user = 'root';
        $passwd = '123';
        $database = 'mydatabase';
        $connect = mysqli_connect($server, $user, $pass, $mydb);
        $item = $_POST["Item"];
        $weight = $_POST["Weight"];
        $cost = $_POST["Cost"];
        $quantity = $_POST["Quantity"];
        $table_name = 'Products';
        $query = "INSERT INTO $table_name('Product_desc','Cost','Weight','numb') VALUES ($Item',$Cost,$Weight,$Quantity)";
        print "The Query is <i>$query</i><br>";
        print '<br><font size="4" color="blue">';
        if (mysqli_query($connect,$query)) {
            print "Insert into $database was successful!</font>";
        } else {
            print "Insert into $database failed!</font>";
        }
        mysqli_close($connect);
        ?>
    </body>
</html>
