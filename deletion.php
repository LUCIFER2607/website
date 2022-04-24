<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
     <style>
        @import url('https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@200&family=Poppins:wght@300;400;600&family=Ubuntu:wght@300&display=swap');

        body{
         background-color: #002366;
         text-align:center;
         }
         div{
             color: white;
         }
     
table{
    color:black;
    background-color:whitesmoke;
    margin-left:auto;
    margin-right:auto;
    text-align:left;
    }
    
      .col-md-6{
        /* border: 2px  solid salmon; */
        display: flex;
      }
      nav{
        display: flex;
        background-color: whitesmoke;
        font-family: 'Barlow Condensed', sans-serif;
        font-size: 1.5rem;
        height: 10vh;
        margin-bottom: 8px;
      }
      ul{
        margin-left: 60vw;
        display: flex;
        list-style: none;
        text-decoration: none;
      }
      ul li:hover{
        border-bottom: 4px solid red;
        color: black;
      }
      li{
        padding: 0.8rem;
      }
      p{
        font-size: 2.2rem;
        font-weight: bolder;

      }
      a{
       text-decoration: none; 
       color: black;
      }
      tr{
          border-bottom:1px solid black;
          font-weight:bolder;
      }
      td{
          border:1px solid black;
      }
      h1{
    font-size:50px;
    color:yellow;
    background-color:red;
      }
      .del{
          color:white;
          background-color:crimson;
      }
      .del:hover{
         
          font-weight:bold;
          background-color:red;
      }
      h5{
          color:white;
      }
      button:hover{
          border:3px solid grey;
          background-color:white;
      }
   
</style>
<body>

<nav>
       <p>
         Royal<font color="red">Collections</font> 
        </p>
        <ul>
          <li>
            <a href="Clothingstore.html"class="link-dark">
              Home
            </a>
          </li>
          <li>
            <a href="Category.html"class="link-dark">
              Category
            </a>
          </li>
          <li>
            <a href="PersonalDetails.html"class="link-dark">
              Contact
            </a>
          </li>
        </ul>
      </nav>
      <h1>DELETE PRODUCT</h1>
      <br><br>
      <h5>Select the Product from the dropdown list to Delete it</h5>
<br><br>


<table>

    <form action="deletion.php" method="POST">
        <?php
        $connection=mysqli_connect("localhost", "root", "", "product" );
        $result=mysqli_query($connection,"select heading from insertion");
        ?>
        <!-- <tr>
            <td>Selection the Product to Delete</td>
        </tr> -->
    <select name="delete" id="">
        <?php
        while($row = mysqli_fetch_array($result))
        {
            $ab=($row[0]);
            echo "<option value='$ab'>$row[0]</option>";
        }
        ?>
    </select>
    <input type="submit" class="del" value="delete" name="delete2">
    </form>
    <?php
    if(isset($_REQUEST["delete2"])){
        $headings = $_REQUEST["delete"];
        echo "$headings<br>";
        $connection=mysqli_connect("localhost","root","","product");
        $result=mysqli_query($connection,"delete from insertion where heading='$headings'");
        $r = "succesfully deleted";
    }
    else{
        $r="not deleted";
    }
    ?>
    </table>
    <br>
    <button class="insert"><a href="insertproduct.php" class="link-success">INSERT</a></button>
    <button class="delete"><a href="deletion.php" class="link-danger">DELETE</a></button>
    <button class="edit"><a href="edit.php"class="link-secondary">EDIT</a></button>
</body>
</html>