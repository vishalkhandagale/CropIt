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

       
    $method = $_SERVER['REQUEST_METHOD'];
        if($method=='POST'){
            $res_id = $_POST['res_id'];
            
        
        $sql2 = "DELETE FROM `consumers` WHERE `id`=$res_id;";
        $result1 = mysqli_query($conn, $sql2); 
        if($result1){
            header("Location: Consumers_records.php?response_deleted=true"); 
        }
        else{
            echo'Error occured!';
        }
    }
    
    ?>
    <div style="padding-top:70px;">
        <div class="container" style="padding:50px;">
        <center>
        <h1 style="font-family: 'Raleway', sans-serif;">Consumer </h1>
        </center>       
        </div>
    </div>
    
     
    <div class="challenges container my-4"  >
        <div class="row " data-masonry='{"percentPosition": true }'>
        <?php
        $id = $_GET['id'];
        $sql = "SELECT * FROM `consumers` WHERE `id`=$id ";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            
            $id = $row['id'];           
            $name = $row['name'];
            $address = $row['city'];            
            $state = $row['state'];
            $country = $row['country'];
            $contact = $row['contact'];
            $resident_name = $row['resident_name'];
            $crop_requirment = $row['crop_requirment'];
            $current_problems= $row['current_problems'];
            $timestamp = $row['timestamp'];
        
            echo'
            <div  class="container">
                <div class="container" style="border:2px solid aliceblue;height:auto;overflow:auto;padding:40px;box-shadow: 0px 10px 20px -5px rgb(73 93 207 / 20%);" >
                    <h5 class="card-title" style=" line-height: 1.3; font-family: "Archivo", sans-serif;">Name : '.$name.'</h5>
                    <h5 class="card-title" style=" line-height: 1.3; font-family: "Archivo", sans-serif;">Address : '.$address.'</h5>                    
                    <h5 class="card-title" style=" line-height: 1.3; font-family: "Archivo", sans-serif;">State : '.$state.'</h5>
                    <h5 class="card-title" style=" line-height: 1.3; font-family: "Archivo", sans-serif;">Country : '.$country .'</h5>              
                    <h5 class="card-title" style=" line-height: 1.3; font-family: "Archivo", sans-serif;">contact : '.$contact .'</h5>    
                    <h5 class="card-title" style=" line-height: 1.3; font-family: "Archivo", sans-serif;">resident name : '.$resident_name .'</h5>              
                    <h5 class="card-title" style=" line-height: 1.3; font-family: "Archivo", sans-serif;">Crop requirmeent : '.$crop_requirment .'</h5> 
                    <h5 class="card-title" style=" line-height: 1.3; font-family: "Archivo", sans-serif;">Current Problems : '.$current_problems.'</h5>
                    <h5 class="card-title" style=" line-height: 1.3; font-family: "Archivo", sans-serif;">Time : '.$timestamp .'</h5>               
                    <form method="post" action="'.$_SERVER["REQUEST_URI"].'"  id="contact-form" method="post" style="text-align:center;">
                        <input type="hidden" value="'.$id.'" name="res_id" placeholder="'.$id.'" />
                        <div style="padding-top:20px;"><button type="submit" class="forum-btn btn-f">Delete</button></div> 
                    </form>           
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