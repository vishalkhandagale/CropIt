<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="styles/header.css">
    <link rel="stylesheet" type="text/css" href="styles/index.css">
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
        #home{
    height: 100vh;
    width: 100%;
    background: url(img/bg.jpg)  no-repeat;
    background-size: cover;
    transition: all ease-in-out 2s ;
}
@media screen and (max-width: 500px) {
    #home{
        height: 100vh;
    width: 100%;
    background: url(img/bg.jpg)  no-repeat;
    background-size: cover;
    transition: all ease-in-out 2s ;
    }
}
.container{
    height: 100%;
    width:100%;
}

.inner{
    position: relative;
    
    
}
.ov{
    align:center;
    background: rgba(255,255,255,0.0);
    height: auto;
    position: absolute;
    top: 250px;
    left: 27%;
    border: 0px white solid;
    border-radius: 20px;
    padding-right:20px;
}
@media(max-width:768px){
    .ov{
    align:center;
    background: rgba(255,255,255,0.0);
    height: auto;
    position: absolute;
    top: 250px;
    left: auto;
    border: 0px white solid;
    border-radius: 20px;
    padding-right:20px;
}
}


.ov1{
    float: right;
    height: auto;
    width: auto;
    right: 0px;
    padding-top: 30px;
}
.ov h1{font-family: 'Raleway', sans-serif;}

.ov h4{
    font-family: 'Raleway', sans-serif;
    color:white;
    font-weight:100;
}
.blog-info {
    background: #fff;
    padding: 30px;
    margin-top: -2em;
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
        margin-bottom:5cm;
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
    <?php include 'partials/header.php'; ?>
    <div id="home" style="padding-top:70px;padding:0,margin:0">
        <div class="inner" > 
            <center>
                <div class="ov text-center"  >
                    <div style="height:auto;width:auto;">
                    <div class="container text-center">
								<h1 style="font-size:60px;color:white;font-family: 'DM Serif Display', serif;">CROPIT</h1>
								<h4 ><b>Get informed decisions about your farming strategy.</b></h4>
														
							</div>
                    </div>
                                       
                </div>     
            </center>                               
        </div>                    
    </div>
    <div class="container py-5">
	<div class="container py-md-5">
		<h1 class="heading mb-sm-5 mb-4 text-center" style="font-family: 'Raleway', sans-serif;"> Our Services</h1>
		<div class="row blog-grids">
			<div class="marcol col-lg-4 col-md-6 blog-left mb-lg-0 mb-sm-5 pb-lg-0 pb-5">
				<img src="img/bg.jpg" class="img-fluid" alt="" />
				<a href="farmers.php">
					<div class="blog-info">

						<h4>Farmer</h4>

						<p class="mt-2"> Recommendation about the type of crops to be cultivated which is best suited
							for the respective conditions</p>
					</div>
				</a>
			</div>
			<div class="marcol col-lg-4 col-md-6 blog-middle mb-lg-0 mb-sm-5 pb-lg-0 pb-md-5">
				<img src="img/bg.jpg"  class="img-fluid" alt="" />
				<a href="business.php">
					<div class="blog-info">
						<h4>Business</h4>
						<p class="mt-2">Recommendation about the type of fertilizer best suited for the particular soil
							and the recommended crop</p>
					</div>
				</a>
			</div>
			<div class="marcol col-lg-4 col-md-6 blog-right mt-lg-0 mt-5 pt-lg-0 pt-md-5">
				<img src="img/bg.jpg"  class="img-fluid" alt="">
				<!-- <img src="images/s4.jpg" class="img-fliud" alt="" /> -->
				<a href="consumer.php">
					<div class="blog-info">
						<h4>Consumer</h4>
						<p class="mt-2">Predicting the name and causes of crop disease and suggestions to cure it</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>

    <script src="script.js"></script>
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
    <?php include 'partials/footer.php'; ?>
</body>
</html>