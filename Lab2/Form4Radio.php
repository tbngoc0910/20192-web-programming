<HTML>
    <HEAD>
        <TITLE>Email form </TITLE>
    </HEAD>
    <BODY>
        <FORM action="email.php" method="POST">
            <BR>
            Email address: <INPUT type="text" size="14" maxlength="255" name="email"/>
            <BR></BR>
            May we contact you? 
            Yes <INPUT type="radio" name="contact" value="yes">
            No <INPUT type="radio" name="contact" value="no">
            <BR></BR>
            <INPUT type="submit" value="Submit">
        </FORM>
    </BODY>
</HTML>