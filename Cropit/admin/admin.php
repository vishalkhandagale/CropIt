<?php  ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../img/urllogo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FrontendGang | Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Archivo:wght@300&family=Orbitron:wght@500&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        .admin{
    height:100%;
    width:100%;
    display:flex;
    text-align:center;
    vertical-align:center;
    justify-content:center;
}

.inneradmin{
    padding:100px 30px 30px 30px;
}

@media screen and (max-width: 800px) {
    .inneradmin{
    padding:130px 30px 30px 30px;
}
}

.input-field {
  max-width: 380px;
  width: 100%;
  margin: 10px ;
  height: 35px;
  border-radius: 0px;  
  grid-template-columns: 15% 85%;
  padding: 0 0.4rem;
  position: relative;
}
.input-field input::placeholder {
  color: #aaa;
  font-weight: bold;
}

.input-field {
    max-width: 380px;
    width: 100%;
    margin: 10px 0;
    height: 35px;
    border-radius: 0px;
    grid-template-columns: 15% 85%;
    padding: 0 0.4rem;
    position: relative;
    font-weight: bold;
}
.forum-btn{
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
}


.forum-btn.btn-f{
  background-color:#6c63ff;
  color: white;
  width: 100px;
  
  transition: ease-in-out 1s !important;
}

.forum-btn.btn-f:hover{
  background-color:#6c63ff;
  color: white;
 
  text-decoration: none;
  
}
    </style>
</head>
<body>    
    <?php
    
    if(isset($_GET['error'])){
        $err = $_GET['error'];
        echo'
        <div style="margin-bottom: 0rem;" class="alert alert-warning alert-dismissible fade show" role="alert">
        
         <strong><b>'. $err .'</b></strong>
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
         
        </div>
  
  
      ';
      }
      ?>
    <div class="admin">        
        <div class="inneradmin">
            <div class="head" style="padding-bottom:50px;">
                <h3 style="font-family: 'Orbitron', sans-serif;color: #8888A0;">Hi Admin, Setup your account!</h3>
            </div>
            <form action="<?php $_SERVER["REQUEST_URI"]?>" method="post">
                <div class="mb-3">                    
                    <center> <input name="signupEmail" placeholder="Email" type="email" class="form-control input-field" id="exampleInputEmail1" aria-describedby="emailHelp" required></center>
                </div>
                <div class="mb-3">
                    <center> <input name="userName" placeholder="Username" type="text" class="form-control input-field" id="exampleInputEmail1" aria-describedby="emailHelp" required></center>
                </div>
                <div class="mb-3">
                    <center><input name="signupPassword" placeholder="Password" type="password" class="form-control input-field" id="exampleInputPassword1" required></center>
                </div>
                <div class="mb-3">
                    <center><input name="signupcPassword" placeholder="Confirm password" type="password" class="form-control input-field" id="exampleInputPassword1" required></center>
                </div>

                <div style="padding-top:30px;"><button style="background:#2e6e56db" type="submit" name="submit" class="forum-btn btn-f">Submit</button></div>                
            </form>
        </div>
    </div>

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
<?php 
$method = $_SERVER['REQUEST_METHOD'];
if (isset($_POST['submit'])) {
    if($method=='POST'){
    include '../partials/dbconnect.php';
    $user_email = $_POST['signupEmail'];
    $user_name = $_POST['userName'];
    $pass = $_POST['signupPassword'];
    $cpass = $_POST['signupcPassword'];
    

    //Check whether the email is already exist in the database
    $existsql = "select * from `users` where user_email = '$user_email'";
    $result = mysqli_query($conn, $existsql);
    $numRows = mysqli_num_rows($result);

    $existsql1 = "select * from `users` where user_name = '$user_name'";
    $result1 = mysqli_query($conn, $existsql1);
    $numRows1 = mysqli_num_rows($result1);

    
   

    if($numRows>0){
        $showError = "Email already exist!";                

    }
    elseif ($numRows1>0) {
        $showError = "Username already exist!";
      }
    else{
        if($pass==$cpass){
            $hash = password_hash($pass, PASSWORD_DEFAULT);  
            $sql = "INSERT INTO `users` (`sno`, `user_email`, `user_name`, `user_pass`, `timestamp`) VALUES (NULL, '$user_email', '$user_name', '$hash', current_timestamp());";
            $result = mysqli_query($conn, $sql);
            
            if($result){               
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['useremail'] = $user_email;
                header("Location: https://crop-it.herokuapp.com/admin/index.php?signupsuccess=true");
                exit();                      
            }
        }
        else{
            $showError = "Password Does not match !";
        }    
    }
    echo "<script>window.location.href='https://crop-it.herokuapp.com/admin/index.php?signupsuccess=false&error=$showError';</script>";
    exit;
}
}
?>
