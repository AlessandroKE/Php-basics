<html>
    <head>
        <meta charset="UTF-8" />
        <title>PHP AND HTML</title>
        <body>
            <?php
         /*   $name = "sandro";// creating a variable name
      echo "My name is  ".$name."<br>"; //can output more than one sentence   
        echo" I love programming ";
//echo is faster than print 
//advantange of using double quotes is that you can pass a variable inside the double quotes.*/
        /*  $name = "sandro";//valid
          $9name = "sandro";invalid_variable
         $_name = "sandro";//invalid_variable
          echo $_name;
          */
          /*//WORKING WITH ARRAYS
          $cars = array("SUBARU","MERCEDES","LANDCRUISER TXL","AUDI");
          echo $cars[3];
*/

/*$cars = array("AUDI"=>"50.500","SUBARU"=>"40.700","MERCEDES"=>"60.700");
print_r($cars);//use to output values of an array
*/
//multidimensional arrays
$cars = array(
    "expensive" => array("AUDI","MERCEDES","SUBARU"), 
     "Inexpensive" => array("FORD","TOYOTA","VOLVO")
    );
    echo $cars["expensive"][0];


            ?>
        </body>
    </head>
</html>