<html>
    <head>
        <meta charset="UTF-8" />
        <title>Document</title>
    </head>
    <body>
        <?php
//used to collect data from html form when it is submitted
//data will be visible in the url
//dont use get method when submitting passwords
        ?>
        <form action ="get.php" method ="get">
            <input type ="text" name ="name">
            <input type ="password" name ="password">
            <button type ="submit">SUBMIT</button>
</form>

    </body>
</html>