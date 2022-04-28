
<?php
session_start();
if(!isset($_SESSION['clientdata']))
{
    header("location: ../");
}
$clientdata = $_SESSION['clientdata'];
$candidatedata = $_SESSION['candidatedata'];

if($_SESSION['clientdata']['status']==0){
    $status ='<b style="color:red">NOT VOTED</b>';

}
else{
    $status ='<b style="color:blue">VOTED</b>';
}

?>

<html>
    <head>
        <title>Online Voting System</title>
        <link rel="stylesheeet" href="../css/style.css">
    </head>
    <body>
    
     <style>

         
      #backbtn{
    color:black;
    font-size: 12px;
    font-weight: bold;
    margin: 20px 0;
    padding: 8px 15px;
    width: 5%;
    border-radius: 24px;
    border: 10;
    background-color:greenyellow;
    float: left;
      }

      #logoutbtn{
        color:black;
        font-size: 12px;
    font-weight: bold;
    margin: 20px 0;
    padding: 8px 15px;
    width: 5%;
    border-radius: 24px;
    border: 10;
    background-color:greenyellow;
    float: right;
 }

 #votebtn{
    color:black;
   font-size: 12px;
    font-weight: bold;
    margin: 20px 60;
    padding: 8px 15px;
    width: 50%;
    border-radius: 24px;
    border: 20;
    background-color:greenyellow;
    float: right;

 }

 #Profile{
    color:black;
        
    margin: 20px 0;
    padding: 8px 15px;
    width: 35%;
    border-radius: 24px;
    border: 50;
    background-color:greenyellow;
    float: left;


 }
          </style>
        <div id="mainSection">   
            <div id="headerSection"> 
            <a href="../">  <button id="backbtn">  Back</button>  </a>
            <a href="logout.php">  <button id="logoutbtn" >  Logout</button>  </a>
        <h1 align="center">Online Voting System</h1>

            </div>
             <hr>
        <div id="Profile">
        <table align="left">
          <tr> <td>
          <b>Name: <?php echo $clientdata['name']  ?>  <td> </b> <br></br> </td></tr>
    
          <tr> <td>
          <b>Mobile:  <?php echo $clientdata['mobile']  ?>   <td> </b> <br></br> </td></tr>
          <tr> <td>
          <b>Address:  <?php echo $clientdata['address']  ?>   <td></b> <br></br> </td></tr>

          <tr> <td>
          <b>Gender:  <?php echo $clientdata['gender']  ?>   <td></b> <br></br> </td></tr>
          <tr> <td>
          <b>Status:  <?php echo $status ?>   <td></b> <br></br> </td></tr>
          <tr> <td>
          <b>username:  <?php echo $clientdata['username']  ?>  <td></b> <br></br> </td></tr>
        </div>


        <div id="Group">
        <table align="right">
    <?php 
    if($_SESSION['candidatedata']){
        for($i=0; $i<count($candidatedata); $i++){
            ?>
           <div>
           <tr> <td>
           <b>Group Name:  <?php echo $candidatedata[$i]['name']  ?>  <td>  </b> <tr> <td>
           <tr> <td>
           <b>Votes:<?php echo $candidatedata[$i]['votes'] ?>  <td>  </b> </td></tr>
           <tr> <td>
           <form action="../api/vote.php" method="POST">
               <input type="hidden" name="gvotes" value="<?php echo $candidatedata[$i]['votes'] ?>"> 
               <input type="hidden" name="gid" value="<?php echo $candidatedata[$i]['id'] ?>"> 
               <?php
               if($_SESSION['clientdata']['status']==0){
                   ?>
                 <input type="submit" name="votebtn" value="vote" id="votebtn">  <td>  <tr> <td>
                     <?php
               }
               else{
                   ?>
                   <button disabled type="button" name="votebtn" value="vote" id="voted"> Voted </button>
                   <?php
               }

                 ?>
               
           </form>
            </div>
            <?php
        }
        

    }
    else{

    }

        ?>
    
    </div>
          </div>
       
    </body>
</html>