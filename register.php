<?php

include("connect.php");
 

    $firstname = $_POST['firstname'];
    $midname = $_POST['midname'];
    $lastname = $_POST['lastname'];
    $emailid = $_POST['emailid'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $voteridno = $_POST['voteridno'];
    $mobilenumber = $_POST['mobilenumber'];
    $role = $_POST['role'];

 

if($password==$confirmpassword)
{
    $insert = mysqli_query($connect,"INSERT INTO details
     (firstame,midname,lastname,emailid,username,password,confirmpassword,gender,address,voteridno,mobilenumber,role,status,votes) 
    VALUES('$firstname','$midname','$lastname','$emailid','$username','$password','$confirmpassword','$gender','$address','$voteridno','$mobilenumber','$role',0,0)");

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