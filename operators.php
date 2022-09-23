<html>
    <head>
       <meta charset="UTF-8" />
       <title>OPERATORS IN PHP</title> 
    </head>
    <body>
        
        <?php
        //ASSIGNMENT OPERATORS IN PHP
        /*
        +=Add and Assign
        -=Subtract and Assign
        *=multiply and assign
        /=Divide and assign
        .=concat and assign
        
        $x=5;
        $x+=5;
        echo $x;
        */
        //COMPARISON OPERATORS IN PHP
        //=== indentical operators
        //Spaceship operator <=>
       // 2<=>2;
        //if the value on the left is less than the value on the right,the system will return a -1.
        //if the value on the left is greater than the value on the right the system will return a 1.
        //if the value on the left is equal to thr value on the right, the system will return a value of 0.
        $x=5;
        $y=10;
        if($x>$y){
            echo"This is true";
        }
        else{
            echo "This is false";
        }
         ?>


    </body>
</html>