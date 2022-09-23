<html>
    <head>
        <meta charset = "UTF-8" />
        <title>Document</title>
    </head>
    <body>
        <?php
//SESSION
//use to store user data and information
//difference is security,used when data being sent is sensitive
//session exists as along as the same browser is open

session_start();
//storing informatrion
$_SESSION["name"] = "Alessandro";
$_SESSION["email"] = "alessandro@gmail.com";

echo "Hello " .$_SESSION["name"];

session_destroy();//session will be destroyed whenever we close the browser
        ?>
    </body>
</html>