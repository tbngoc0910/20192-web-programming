<html>
    <head><title>Distance from Chicago!</title></head>
    <body>
        <font size="5" color="Blue">Welcome to the Distance calculation</font>
        <br> The page calculates the distances from Chicago!
        <br> Select a destination:
        <form action="CheckDistance.php" method="GET">
            <select name="destination[]" size=5 multiple >
                <option>Boston</option>
                <option>Dallas</option>
                <option>Miami</option>
                <option>Nashville</option>
                <option>Las Vegas</option>
                <option>Pittsburgh</option>
                <option>San Francisco</option>
                <option>Toronto</option>
                <option>Washington, DC</option>
            </select>
            <br>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
    </body>
</html>
