<html>
    <head><title>Results</title></head>
    <body>
        <?php
            $description = $_POST["description"];
            $code = $_POST[code];
            $product = array('AB01' => '25-Pound Sledgehammer',
                             'AB02' => 'Extra Strong Nais',
                             'AB03' => 'Super Adjustable Wench',
                             'AB04' => '3-speed Electronic Screwdriver');
            if(ereg('boat|plane', $description)){
                print 'Sorry we do not sell boats or planes anymore';
            }
            elseif(ereg('^AB', $code)){
                if(isset($product["$code"])){
                    print "Code $code Description : $product[$code]";
                }else{
                    print 'Sorry product code not found';
                }
            }else{
                print 'Sorry all our product codes start with "AB"';
            }
        ?>
    </body>
</html>
