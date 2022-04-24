<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:regular,italic,700,700italic" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:regular,italic,700,700italic" rel="stylesheet" />


    <style>
        .displayed-item {
            /* border: 2px solid red; */
            margin: 0.5rem;
            padding: 0.4rem;

        }

        h1 {
            color:#333;
            font-family: futura-pt-bold, Futura, Trebuchet MS, Arial, sans-serif;
            line-height: 1.3
        }

        body {
            font-family: 'Cormorant Garamond', serif;

        }

        #details-img {
            /* display: flex;
            justify-content: center;
            border: 2px solid pink;
            margin: auto;
            height: 50vh;
            width: 45vw; */
            height: 100%;

            box-shadow: 2px 2px 7px 1px;
        }

        #details-img:hover {
            box-shadow: 3px 3px 8px 2px;

        }
        #detail-description{
            /* border: 2px solid yellowgreen; */
            margin: 0.6rem;
            width: 80%;
        }

        .mynavbar {
            background-color: black !important;
        }

        a {
            color: white !important;

        }

        .col-sm-6 {
            /* border: 2px solid green; */
            height: 60vh;
        }

        .row {
            /* border: 2px solid yellow; */
        }

        .container {
            /* border: 2px solid orange */
        }
        #detail-cost{
            font-size: 1.5rem !important;
            /* border: 2px solid pink; */
            width: 80%;
            margin: 0.6rem;
        }
        button{
            /* display: inline-block; */
            /* width: 80%; */
            /* margin: auto !important; */
            /* border: 2px solid orange !important; */
            display: block;
            width: 80%;
            
        }
        #buttonCart{
            /* border: 2px solid yellow !important; */
            margin-left: 2rem;
        }
        main{
            padding-top: 3.8rem ;
           
        }
        #add-to-cart{
            /* border: 2px solid red; */
             
        }
        body{
            /* border: 2px solid orange; */
        }
        .tagline{
            /* border: 2px solid orange; */
            margin: 0.8rem;
            width: 80%;
            padding: 0.5rem;
            padding-left: 1.3rem;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light  mynavbar">
        <div class="container-fluid">
            <!-- <nav class="navbar navbar-light bg-light">
                 <img src="./images/logo2.jpg" id="logo" alt=""> -->
            <!-- </nav> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Clothingstore.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./blog.html">Admin-section</a>
                    </li>



                </ul>

            </div>
        </div>
    </nav>


    <div class="container">


        <?php


        $connection = mysqli_connect("localhost", "root", "", "product");
        $req = $_REQUEST['a'];
        // echo "<br> $req";
        $result = mysqli_query($connection, "select * from insertion where heading='$req'");

        while ($row = mysqli_fetch_array($result)) {
            echo "<br>";
            // echo $row[0];
            $p = $row['IMAGE'];
            $r = "./uploadedphotos/$p";
            ?>
         <main>
                
                <div class="row">
                    <!-- <section class="displayed-item"> -->
                        <div class='col-sm-6'>
                            
                        <?php
                    echo "<img class='img-responsive' id='details-img' src='$r'>";
                    ?>
                    
                        </div>
                <div class="col-sm-6">
                    <?php echo "<h1 class='text-center'> $row[2] </h1>"; ?>
                    <div id='detail-cost' class='container'>
                        
                        <?php echo $row['COST'];
                        echo "$" ?>
                    </div>
                    <div class="tagline">
                        from <a href="#" style="color: black !important;">royalcollections.com</a>
                    </div>
                    
                    <div id='detail-description' class='container'>
                        <?php echo $row['DESCRIPTION'] ?>
                        
                    </div> 
                    <div class='container' id="add-to-cart"> 
                        <?php
                        //  $user_id=$_REQUEST['id']; 
                        // echo "<a href=cart.php?product_id=$row[4]&user_id=$user_id" ?>

                            <button class="btn  btn-primary" id="butttonCart" name="dance" value="mad"> Add To cart</button>
                        </a>
                    </div>
                </div>
                
                <!-- </section> -->
                 </div>
             </div>
    </main>
<?php
        }
?>
</body>

</html>