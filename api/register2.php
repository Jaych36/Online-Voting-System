<?php

include("connect.php");
 

    $identification = $_POST['identification'];
    $age = $_POST['age'];
     $area = $_POST['area'];
     $eligible = $_POST['eligible'];
   
{
    $insert = mysqli_query($connect,"INSERT INTO data
     (identification,age,area,eligible) 
    VALUES('$identication','$age','$area','$eligible')");
    

    {
        if($insert)
        {
            echo '
    <script>
    alert("Verification Sucessfull");
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