<?php
session_start();

include("connect.php");
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$check =mysqli_query($connect,"SELECT * FROM detail WHERE username='$username' AND password='$password' AND role='$role' ");
if(mysqli_num_rows($check)>0)
{


$detaildata =mysqli_fetch_array($check);
$candidate =mysqli_query($connect,"SELECT * FROM detail WHERE role=2");
$candidatedata =mysqli_fetch_all($candidate,MYSQLI_ASSOC);

$_SESSION['detaildata'] = $detaildata;
$_SESSION['candidatedata'] = $candidatedata;

echo '
    <script>
    
    window.location ="../routes/dashboard.php";
    </script>
    ';
}
else{
    echo '
    <script>
    alert("USER NOT FOUND ");
    window.location ="../";
    </script>
    ';
}

?>