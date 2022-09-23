<html>
    <head>
        <meta charset="UTF-8" />
        <title>exersices</title>
        <body>
            <?php
            $countries = array("Kenya"=>"Nairobi", "Tanzania"=>"Dodoma","Uganda"=>"Kampala","Egypt"=>"Cairo", "Ghana"=>"accra");

            foreach($countries as $key => $value)//country is a key and each key has  a value
            {
                echo "The capital city of " . $key . " is " . $value."<br>";
            }



            ?>
        </body>
    </head>
</html>