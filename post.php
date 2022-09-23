<html>
    <head>
        <meta charset="UTF-8" />
        <title>CONSTANTS IN PHP</title>
    </head>
    <body>
        <?php

      /*  $x=8;
        $y=9;

        function add()
        {
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        }
        add();

        echo $z;

        */
        //$_POST -used to collect data from the htlm form[invisible]
        if(isset($_POST))
        {
            echo $_POST['name'] . " your form is submitted"."<br>";
            echo  "your age is " .$_POST['age']."<br>";
        }

        print_r($_POST);//$_POST is type of  an array
        

        ?>

        <form action ="post.php" method ="post">
            <input type ="text" name ="name">
            <input type ="text" name ="age">
            <button  type = "submit">SUBMIT</button>
            
        </form>
        </body>
        </html>


