
<?php
session_start();
if(!isset($_SESSION['detailsdata']))
{
    header("location: ../");
}

?>

<html>
    <head>
        <title>Online Voting System</title>
        <link rel="stylesheeet" href="../css/style.css">
    </head>
    <body>
        <div id="headerSection">   

        <button id="backbtn">Back</button>
        <button id="logoutbtn" >Logout</button>

        <h1>Online Voting System</h1>
        <hr>
        <div id="Profile"></div>
        <div id="Candidate">

        </div>



        </div>
       
    </body>
</html>
