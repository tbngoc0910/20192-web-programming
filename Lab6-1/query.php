<html>
    <head>
        <title>Show table</title>
        <style>
            table td {
                border: 1px solid black;
            }
        </style>
    </head>

    <body>
        <table>
            <?php
            $server = 'localhost';
            $user = 'root';
            $pass = '123';
            $mydb = 'mydatabase';
            $table_name = 'Products';
            $connect = mysqli_connect($server, $user, $pass, $mydb);
            if (!$connect) {
                die("cannot connect");
            } else {
                $sqlcmd = "Select * from $table_name";
                $results = mysqli_query($connect, $sqlcmd);
                if (!$results) {
                    print "Fail to fetch data from table $table_name";
                } else {
                    print "<tr>
                <td>No.</td>
                <td>Product</td>
                <td>Cost</td>
                <td>Weight</td>
                <td>Count</td>
                    </tr>";
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
            ?>  
        </table>
    </body>
</html>
