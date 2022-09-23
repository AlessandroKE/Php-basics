<html>
    <head>
        <meta charset="UTF-8" />
        <title>CONTROL STRUCTURES IN PHP</title>
    </head>
    <body>
        <?php
        //CONDITIONAL STATEMENT IN PHP
        //IF STATMENT IN PHP
        //ELSE STATEMENT IN PHP
        //ELSE IF STATEMENT IN PHP
        //SWITCH STATMENT IN PHP
        $age =21;
        if($age<18){
            echo"not an adult";
        }
        else{
            echo "adult";
            echo"<br>";
        }
        //SWITCH
        $role ="visitor";

        switch($role)
        {
            case "visitor":
                echo "welcome visitor";
        break;
        
            case "admin":
                echo "welcome admin";
        break;
        
            case "boss":
                echo "welcome boss";
                break;
                default:
                echo "user has no role assigned"."<br>";
        }
        
        //WHILE LOOP
        


        ?>
    </body>
</html>