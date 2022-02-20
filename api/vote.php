<?php
session_start();
include('connect.php');
$votes = $_POST['gvotes'];
$total_votes = $votes+1;
$gid = $_POST['gid'];
$uid = $_SESSION['detaildata']['id'];

$update_votes = mysqli_query($connect,"UPDATE detail SET votes='$total_votes' WHERE id='$gid' ");
$update_user_status = mysqli_query($connect, "UPDATE detail SET status=1 WHERE id='$uid'");

if($update_votes and $update_user_status)
{
    $candidate = mysqli_query($connect,"SELECT * FROM detail WHERE role=2");
    $candidatedata = mysqli_fetch_all($candidate ,MYSQLI_ASSOC);
    $_SESSION['detaildata']['status']= 1;
    $_SESSION['candidatedata']=$candidatedata;

    echo '
    <script>
    alert("Voting Successfull!!");
    window.location ="../routes/dashboard.php";
    </script>
    ';

}
else{
    echo '
    <script>
    alert("some error occured!!");
    window.location ="../routes/dashboard.php";
    </script>
    ';
}
?>