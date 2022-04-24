<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="pages.css">
    <link rel="stylesheet" href="pagesfooter.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<!-- <div class="heading">
    </div> -->
    <div class="container">

        <header>
            <div class="subbox">
                <div class="heading">
                    <h2>Royal<font>Collections</font></h2>
                <ol>
                    <li><a href="Clothingstore.html">Home</a></li>
                    <li><a href="category.html">Category</a>
                </li>
                <li><a href="PersonalDetails.html">Contact</a></li>
            </ol>
        </div>
    </header>
    
</div>
<div class="cover">
    <img src="Shop.jpg" alt="">
</div>

<?php
$connection=mysqli_connect("localhost", "root", "", "product" );
$result=mysqli_query($connection,"select *  from insertion where category='shirt'");
if(mysqli_num_rows($result)>0)
{
    ?>
    
    <section id="main-product">
 <?php
    $i=0;
    while($row=mysqli_fetch_array($result))
    {
        ?>
        <div class="row">
            
            <div class="product">
                <?php
            $p=$row['IMAGE'];
            $r="./uploadedphotos/$p";
            echo "<img class='IMAGE' src='$r'";?>
            <span class="text-center2"> 
                <p class="text-center2">
                    <?php echo $row['heading'];?>
                </p>
            </span>
            
            <span class="text-center"><a class="anchor" href="<?php echo "details.php?a=$row[2]" ?>" style="text-decoration:none"><sup><i class="fa fa-rupee" style="font-size:15px"></i></sup><?php echo $row['COST'];?></span></a>
            
            <p class="des">
                <?php echo $row ['DESCRIPTION']; ?>
            </div>
            </p>
        </div>
        <?php
        $i++;
    }
    ?>
</section>
</div>
<footer>
<div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3 class="company">Company</h3>
                        <ul class="companyul">
                            <li><a href="login.php">Login</a></li>
                            <li><a href="signup.php">Register</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3 class="about">About</h3>
                        <ul class="aboutul">
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Legacy</a></li>
                        </ul>
                    </div>
                   
                    <div class="col-lg-3 item social"><a href="#"><i class="fa fa-instagram"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-envelope"></i></a>
                        <p class="copyright">RoyalCollections © 2022</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    
    <!-- <p>&copy;RoyalCollections</p>
    <h1>Company</h1>
    <ul>
        <li><a href="login.php">Login</a></li>
        <li><a href="signup.php">Register</a></li> 
    </ul> -->
</footer>
<?php
}
else{
    echo "<h1>No result Found</h1>";
}
?>
</body>
</html>



