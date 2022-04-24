<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="gallery.css">
   
    <style>
         *{
            padding :0;
            margin : 0;
        }
       
        body{
            font-family: 'Barlow Condensed', sans-serif;
        }
        p , span{
            font-size: 1.4rem;
        }
        .product{
            display: inline-block;
            width: 25%;
            height: 40vh;
            margin: 1.5rem;
            box-shadow:1px 1px 10px 1px grey;
            padding: 1.1rem;
        }
        .product:hover{
            box-shadow: 2px 2px 14px 3px grey;
        }
        .img-fluid{
            width: 10vw;
            height: 30vh;
        }
        #main-product{
            margin:auto;
        }

         h2{

        position: relative;
        font-family: 'Barlow Condensed', sans-serif;
        font-weight: bold;
        margin-bottom: 20vh;
        right: 23%;
        }
    </style>
</head>
<body>
    <header>
        <div class="subbox">
            <ol>
                <li><a href="Clothingstore.html">Home</a></li>
                <li><a href="">Category</a>
                <select name="shirt" id="">
                    <a href="shirt.php">
                        <option value="shirt">Shirts</option>
                    </a>
                    <a href="jeans.php">

                        <option value="jeans">Jeans</option>
                    </a>
                </select>
            </li>
                <li><a href="PersonalDetails.html">Contact</a></li>
            </ol>
        </div>
        <h2>Royal<font>Collections</font></h2>
    </header>   
<button class='btn btn-primary'>
 Buy now
</button>
    <?php
        $connection=mysqli_connect("localhost","root","","product");
        $result=mysqli_query($connection,"select * from insertion");
        if(mysqli_num_rows($result)>0)
        {
    ?>
    
    <?php
        $i=0;
        while($row=mysqli_fetch_array($result))
        {
            ?>
            <div class="product">
                <?php
                $p=$row['IMAGE'];
                $r="./uploadedphotos/$p";
                ?>
            <?php
            echo "<img class='img-fluid' src='$r'>";
            ?>
            <h2 class="text-center">
                <?php echo $row['heading'];?>
            </h2>
            <span class="text-center"> <?php echo $row['COST']; ?>Rs.</span>
            <p>
                <?php echo $row['DESCRIPTION']; ?>
            </p>
            
            </div>
            <?php
            $i++;
        }
        ?>
        </section>

        <?php
        }
        else{
            echo "<h1> no result found</h1>";
        }
    ?>

    <footer>
        <p>CopyRight &copy; royalcollections.com</p>
       </footer>

</body>
</html>