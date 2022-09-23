<?php
if(isset($_POST['submit']))//isset  is used to check whether our variable is set or not
{
    $file = $_FILES['file'];
    $name = $_FILES['file']['name'];//find file name
    $tmp_name = $_FILES['file']['tmp_name'];//temp location
    $size = $_FILES['file']['size'];//find file size
    $name= $_FILES['file']['errors'];//find errors




    $tempExtension = explode('.',$name);

    $fileExtension = strtolower(end($tempExtension));


    //allowed extensions
    $isAllowed = array('jpg', 'png', 'gif', 'pdf' );
    if(in_array($fileExtension,$isAllowed)){
        if($error ===0){

            if($size <300)
            {
                $newFilename = uniqid('',true).".".$fileExtension;
                $fileDestination="upload/". $newFileName;
                move_uploaded_file($tmp_name,$filedestination);
                header("location:file.php?uploaded sucess");

            }
            else{
                echo"file size to big";
            }
            
        }else{
            echo"There was an error try it again";
        }
    }
    else{
        echo"Sorry,your file is not accepted";
    }


}
?>