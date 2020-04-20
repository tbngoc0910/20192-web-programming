<html>
    <head><title>Product Update
            Results</title>
    </head>
    <body>
        <form action="Update.php" method="POST">
            Laptop: <input type="radio" name="Product" value="laptop">
            <br>
            Book: <input type="radio" name="Product" value="book">
            <br>
            TV: <input type="radio" name="Product" value="TV">
            <br>
            <input type="submit" value="Click to submit" >
            <input type="reset" value="Reset">
        </form>
        <?php
        $host = 'localhost';
        $user = 'root';
        $passwd = '123';
        $database = 'mydatabase';
        $connect = mysqli_connect($host, $user, $passwd, $database);
        $table_name = 'Products';
        $Product = $_POST["Product"];
        print '<font size="5" color="blue">';
        print "Update Results for Table$table_name</font><br>\n";
        $query = "UPDATE $table_name SET Numb = Numb-1 WHERE (Product_desc = '$Product')";
        print "The query is <i> $query </i> <br><br>\n";
        $results_id = mysqli_query($connect, $query);
        if ($results_id) {
            Show_all($connect, $database, $table_name);
        } else {

            print "Update=$query failed";
        }
        mysqli_close($connect);

        function Show_all($connect, $database, $table_name) {

            $query = "SELECT * from $table_name";

            $results_id = mysqli_query($connect, $query);

            print '<table border=1><th> Num </th>
                    <th>Product</th><th>Cost</th>
                    <th>Weight</th><th>Count</th>';

            while ($row = mysqli_fetch_row($results_id)) {

                print '<tr>';

                foreach ($row as $field) {

                    print "<td>$field</td> ";
                }

                print '</tr>';
            }
        }
        ?> 
    </body>
</html>