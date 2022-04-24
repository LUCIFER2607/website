<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding :0;
            margin : 0;
        }
        h2,h1{
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 2rem;
        }
        body{
            font-family: 'Barlow Condensed', sans-serif;
        }
        p , span{
            font-size: 1.4rem;
        }
        .product{
            display: inline-block;
            width: 29%;
            height: 50vh;
            margin: 1.5rem;
            box-shadow:1px 1px 10px 1px grey;
            padding: 1.1rem;
        }
        .product:hover{
            box-shadow: 2px 2px 14px 3px grey;
        }
        .img{
            width: 100%;
            height: 60%;
        }
        #main-product{
            margin:auto;
        }

    </style>
</head>
<body>
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
            echo "<img class='img' src='$r'>";
            ?>
            <h2 class="text-center">
                <?php echo $row['HEADING'];?>
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
</body>
</html>