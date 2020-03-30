<html>
    <head>
        <title>Guess a number</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <?php
                $time = 0; $number = 0;
                srand((double) microtime()*10000000);
                $ranNumber = rand(0,100);
                print "Random number = $ranNumber";
            ?>
            <br>
            Enter a number between 0 and 100 :
            <input type="text" name="guess">
            <?php
                if(array_key_exists("guess", $_GET)){
                    if($time==0){
                        $number=$ranNumber;
                    }
                    $guess = $_GET["guess"];
                    print "Number : $number";
                    if(is_numeric($guess)){
                        if($guess<=100 && $guess>=0){
                            $time = $time+1;
                            if($guess < $number){
                                print "<br>Wrong. Please try a higher number. You have guessed $time time!";
                            }elseif($guess>$number){
                                print "<br>Wrong. Please try a lower number. You have guessed $time time!";
                            }else{
                                print "<br>Congratulations! Random number is : $number";
                            }
                        }else{
                            print "<br>Please enter a number between 0 and 100";
                        }
                    }else{
                        print "<br>You must enter a number!";
                    }
                }
            ?>
        </form>
    </body>
</html>