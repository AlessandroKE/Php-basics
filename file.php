<html>
    <head>
        <meta charset = "utf-8" />
        <title>Documet</title>
    </head>
    <body>
        <?php

        //$_FILES
        //1.upload it to the root
        //2.upload it directly to the database
        

        //UPLOADING TO THE ROOT
        //enctyp = multipart/form-data
        //Specifies how the form data should be encode
        echo $name= $_FILES['file']['name']."<br>";//shows the name of the file
        echo $type= $_FILES['file']['type']."<br>";//shows the type of the file
        echo $tmp_location= $_FILES['file']['tmp_name']."<br>";//shows the location




        ?>
        <form action ="upload.php" method ="post" enctype = "multipart/form-data">
        <input type = "file" name = "file">
        <button type = "submit">SUBMIT</button> 
</form>
    </body>
</html>