<html>
    <head>
        <title></title>
        <style>
            table td {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <font size="5" color="blue">Inventory search</font>
        <form action="Search.php" method="POST">
            Enter product to search for: 
            <input type="text" name="key">
            <br> <br>
            <input type="submit" value="Click to submit">
            <input type="reset" value="Clear">
        </form>
        <?php
        if (isset($_POST["key"])) {
            $kw = $_POST["key"];
            $host = 'localhost';
            $user = 'root';
            $pass = '123';
            $database = 'mydatabase';
            $table_name = 'Products';
            $connect = mysqli_connect($host, $user, $pass, $database);
            if (!$connect) {
                die("cannot connect");
            } else {
                $sqlcmd = "select * from $table_name where (`Product_desc` = '$kw')";
                $results = mysqli_query($connect, $sqlcmd);
                if (!$results) {
                    print "Fail to fetch data from table $table_name";
                } else {
                    print "<br><font size =\"5\" color = \"red\">Result</font>";
                    print "<br><table>";
                    print "<tr><td>No.</td><td>Product</td><td>Cost</td><td>Weight</td><td>Count</td></tr>";
                    while ($row = mysqli_fetch_row($results)) {
                        print "<tr>";
                        foreach ($row as $field) {
                            print "<td>$field</td>";
                        }
                        print "</tr>";
                    }
                }
                mysqli_close($connect);
            }
        }
        ?>
    </body>
</html>