<?php

include("connect.php");
 

    $name = $_POST['name'];
    $emailid = $_POST['emailid'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
     $mobile = $_POST['mobile'];
    $role = $_POST['role'];

 

if($password==$cpassword)
{
    $insert = mysqli_query($connect,"INSERT INTO client
     (name,emailid,username,password,cpassword,gender,address,mobile,role,status,votes) 
    VALUES('$name','$emailid','$username','$password','$cpassword',
    '$gender','$address','$mobile','$role',0,0)");
    

    {
        if($insert)
        {
            echo '
    <script>
    alert("REGISTRATION SUCCESSFULL");
    window.location ="../";
    </script>
    ';
        }
        else{
            echo "fail";
        }

    }
}
else{
    echo '
    <script>
    alert("PASSWORD DOSENT MATCH WITH COMFIRM PASSWORD ");
    window.location ="../routes/register.html";
    </script>
    ';
}

?>