<?php
    require 'Page.php';
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET" >
            <table>
                <tr>
                    <td>Title</td>
                    <td>
                        <input type="text" name="title">
                    </td>
                </tr>
                <tr>
                    <td>Year</td>
                    <td><input type="text" name="year"></td>
                </tr>
                <tr>
                    <td>Copy right</td>
                    <td><input type="text" name="copyright" ></td>
                </tr>
                <tr>
                    <td>Content</td>
                    <td><textarea rows="5" cols="20" name="content"></textarea>></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Submit"></td>
                    <td><input type="reset" value="Clear"></td>
                </tr>
            </table>
            <?php
                if(isset($_GET["title"])){
                    $title = $_GET["title"];
                    $year = $_GET["year"];
                    $copyright = $_GET["copyright"];
                    $content = $_GET["content"];
                    $page = new Page($title, $year, $copyright);
                    $page->addContent($content);
                    print $page->get();
                }
            ?>
        </form>
    </body>
</html>