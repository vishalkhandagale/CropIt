<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==true){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../img/urllogo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FrontendGang | Users Challenges</title>
    <link rel="stylesheet" type="text/css" href="../styles/header.css">
    <link rel="stylesheet" type="text/css" href="../styles/index.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,200;1,600;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<style>
    .forum-btn {
    position: relative;
    border: 0px solid;
    border-radius: 0px;
    padding: 0rem 0rem;
    font-size: 1rem;
    font-weight: 500;
    letter-spacing: 0.25px;
    line-height: 3.5rem;
    cursor: pointer;
    overflow: hidden;
    width: 100px;
    font-family: 'Orbitron', sans-serif;
background:#2e6e56db;
color:white;
}
    .d-thread-search{
        padding-left:0px;
        padding-right:10px;
        padding-top:10px;
        padding-bottom:30px;
    }
    .thread-search{
         width:100%
    }
    .me-4 {
    margin-right: 0rem!important;
}
    @media only screen and (min-width: 800px) {
    .thread-search{
         width:600px;
         padding-left:40px;
    }
    .d-thread-search{
        
        padding-left:0px;
        padding-top:20px;
    }
}
.chalbg{
    background: url('../img/finalbgdone.png') no-repeat ;
    background-size: contain;
    background-repeat:repeat;
}
@media (min-width: 1200px){
.container, .container-lg, .container-md, .container-sm, .container-xl {
    max-width: 1240px;
}}

.card-title {
    font-family: 'Archivo', sans-serif !important;
}

</style>
</head>
<body>
    
    <?php
        include '../partials/dbconnect.php';
        include 'header.admin.php';
    ?>
    <div style="padding-top:70px;">
        <div class="container" style="padding:50px;">
        <center>
        <h1 style="font-family: 'Raleway', sans-serif;">Business records!</h1>
        </center>       
        </div>
    </div>
    
    
    <div class="challenges container my-4">
        <div class="row " data-masonry='{"percentPosition": true }'>
        <?php

        $sql = "SELECT * FROM `business` ORDER BY `timestamp` DESC ";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $noResult = false;
            $id = $row['id'];           
            $name = $row['name'];
            $address = $row['address'];            
            $state = $row['state'];
            $country = $row['country'];
            $contact = $row['contact'];
            $crop_requirment = $row['crop_requirment'];
            $timestamp = $row['timestamp'];
        
            echo'
        <div class="col-xs-12 col-sm-6 col-lg-4 my-3">
                    <div class="card" style="padding:0px;box-shadow: 0px 10px 20px -5px rgb(73 93 207 / 20%);">              
                        <div class="card-body chal-card-body" style="align-item:center; padding: 2.15rem;">
                            <h5 class="card-title" style=" line-height: 1.3; font-family: "Archivo", sans-serif;">Name : '.$name.'</h5>
                            <h5 class="card-title" style=" line-height: 1.3; font-family: "Archivo", sans-serif;">Crop requirment :'.$crop_requirment .' </h5>                    
                            
                            <div class="chall-but"><a href="business_records_expand.php?id='. $id .' " style="background:#2e6e56db;" class="btn btn-primary">View</a></div>
                        </div>
                    </div>
                </div>';
            }      
        
         ?>
<?php
}
    else{
    include 'admin.php';
}
?>

        </div>
    </div>
    <script>    
    function myFunction2() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  // Toggle between showing and hiding the sidebar when clicking the menu icon
  var mySidebar = document.getElementById("mySidebar");
  

  function dk_open() {
    
    if (mySidebar.style.display === "block") {
      mySidebar.style.display = "none";   
     
      
    } else {
      mySidebar.style.display = "block";
     
    }
  }
  
  // Close the sidebar with the close button
  function dk_close() {
      mySidebar.style.display = "none";
  }</script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>