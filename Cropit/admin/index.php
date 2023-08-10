<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    .ov h4{
    font-family: 'Raleway', sans-serif;
    color:white;
    font-weight:100;
}
.blog-info {
    background: #fff;
    padding: 30px;
    margin-top: -1em;
    position: absolute;
    left: 6%;
    right: 6%;
    top: 200px;
    box-shadow: 0 3px 5px -1px rgb(0 0 0 / 8%), 0 5px 8px 0 rgb(0 0 0 / 12%), 0 1px 14px 0 rgb(0 0 0 / 6%);
}

.marcol{
    margin-bottom: 2cm;
}
@media(max-width:768px){
    .marcol{
        margin-bottom:3cm;
    }
}

.marcol a{
    font-family: 'Raleway', sans-serif;
    font-weight:300;
    color:black;
    text-decoration:none;
}

.marcol a:hover{
    font-family: 'Raleway', sans-serif;
    color:black;
    text-decoration:none;
}


.blog-info h4{font-weight: 600;}
</style>
</head>
<body>
    <?php include 'header.admin.php';?>
    
    <div style="padding-top:70px;">
        <div class="container" style="padding:70px;">
        <center>
        <h1 style="font-family: 'Raleway', sans-serif;">Hi, Admin!</h1>
        </center>       
        </div>
    </div>
    <div class="container">
        <div class="row blog-grids">
			<div class="marcol col-lg-6 col-md-6 blog-left mb-lg-0 mb-sm-5 pb-lg-0 pb-5">
				<img src="../img/bg.jpg" class="img-fluid" alt="" />
				<a href="business_records.php">
					<div class="blog-info">
						<h4>Business</h4>
						<p class="mt-2">To view all records click here</p>
					</div>
				</a>
			</div>
			<div class="marcol col-lg-6 col-md-6 blog-middle mb-lg-0 mb-sm-5 pb-lg-0 pb-md-5">
				<img src="../img/bg.jpg"  class="img-fluid" alt="" />
				<a href="consumers_records.php">
					<div class="blog-info">
						<h4>Consumer</h4>
						<p class="mt-2">To view all records click here</p>
					</div>
				</a>
			</div>
        </div> 
    </div>
    <script src="../script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
    <?php include '../partials/footer.php'; ?>
</body>
</html>
<?php }
else{
    include 'login.php';
}?>