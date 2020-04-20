<html>
    <head><title>Product information request</title></head>
    <body>
        <form action="ProductProcess.php" method="POST">
            <h1>Happy harry's hardware product information</h1>
            <table>
                <tr>
                    <td>Product code (Use AB## format) : </td>
                    <td><input type="text" size="6" name="code"></td>
                </tr>
                <tr>
                    <td>Description : </td>
                    <td><input type="text" size="50" name="description"></td>
                </tr>
                <tr>
                    <td colspan="2" align='center'>
                        <input type="submit" value='Submit'>
                        <input type="reset" value='Reset'>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>

