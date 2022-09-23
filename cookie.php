<html>
    <head>
        <meta charset = "utf-8" />
        <title>
            docoment
        </title>
    </head>
    <body>
        <?php
        //COOKIE
        // its is a small file that webserver stores on a clients computer
        //cookie can only be reached from domain it has been shared from
        

        //ARGUMENTS COOKIES
        //Name
        //Value
        //Expire
        //path- path on the server for which the cookie is available
        //Domain
        //Security
        
        $time= time() + 86400*30;

        setcookie("Name","Alessandro",$time);

        echo "<br>";

        print_r($_COOKIE);

        //echo $_COOKIE['name'];

        //echo"<br>";

       // echo $_COOKIE['name'];
        ?>
    </body>
</html>