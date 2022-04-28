<?php

include("connect.php");
 
$name = $_POST['name'];
$image=$_FILES['name']['pic'];
$tmp_name=$_FILES['tmp_name']['pic'];



   
{
    $insert = mysqli_query($connect,"INSERT INTO doc
     (name,pic,aadhar,voterid,otherid) 
    VALUES('$identication','$age','$area','$eligible')");
    

    {
        if($insert)
        {
            echo '
    <script>
    alert("Document Submission Sucessfull");
    window.location ="../";
    </script>
    ';
        }
        else{
            echo "fail";
        }

    }
}


?>