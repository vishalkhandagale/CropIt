<nav style="background: black">
    <div class="topnav" id="myTopnav">
        <!-- <a href="index.php" style="float:left;font-weight: 900;font-family: 'Raleway', sans-serif;">CROPIT</a> -->
        <img src="img\Cropit logo (1).jpg" class="img-fluid" alt="" />

        <a style="height: 60px;"></a>  
        <a  href="users.php">blog</a>
        <a  href="transaction.history.php">About</a>
        <a  href="index.php">Home</a>       

        <a href="javascript:void(0);" class="icon"  onclick="dk_open()">
           lll <i class="fa fa-bars"></i>
        </a>
    
    </div>
</nav>


<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="sidebar" style="display:none" id="mySidebar">
    <a href="javascript:void(0)" onclick="dk_close()" style="padding-top: 30px;font-size: 20px;">Close ×</a>
    <a  href="index.php" onclick="dk_close()">Home</a>      
    <a  href="users.php" onclick="dk_close()">About</a>
    <a  href="transaction.history.php" onclick="dk_close()">Blog</a>   
</nav>
