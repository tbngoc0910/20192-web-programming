<html>
    <head>
        <title>PHP String Variables</title>
    </head>
    <body>
        <?php
            $first_name = "Ngoc";
            $last_name = "Tran";
            $full_name1 = $first_name.$last_name;
            $full_name2 = "$first_name $last_name";
            print("Full\n name 1 = $full_name1 <br></br>");
            print("Full name 2 = $full_name2<br></br>");
            $len = strlen($full_name2);
            $lower = strtolower($full_name2);
            print("Lower case : $lower<br></br>");
            $upper = strtoupper($full_name2);
            print("Upper case : $upper<br></br>");
            print("Length = $len");
            
        ?>
    </body>
</html>


