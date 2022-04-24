<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserting</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
    background-color:darkgreen;
      }
      .sub{
          color:white;
          background-color:darkgreen;
      }
      .sub:hover{
          font-weight:bold;
      }
      
      button:hover{
          border:3px solid grey;
          background-color:white;
      }
   
    </style>
</head>
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
      <h1>INSERT PRODUCT</h1>
      <table border='4'>

    <form action="insertion.php" method="POST" enctype="multipart/form-data">
      
        
        <tr>
            <td ><label for="heading for product"> Enter the product heading</label></td>
            <td style=width:500px;><input type="text" id="heading_for_product" name="heading" placeholder="Enter Product's Heading" style=width:500px; ></td>
        </tr>
        
        <tr>
            
            <td>
                
                <label for="description_for_product"> Enter the description of product</label>
            </td>
            <td>
                
                <textarea name="description" id="description_for_product" cols="30" rows="4" placeholder="Enter Description" style=width:500px;></textarea>
            </td>
            
        </tr>
        <tr>
<th>Product Type</th>
            <div class="labels">
                <label for=""></label>
                <td>
                    
                    <select name="category" id="cat" >
                        <option value="shirt">Shirt</option>
                        <option value="jeans">Jeans</option>
                    </select>
                </td>
            </div>
        </tr>

    <tr>
<td>

    <label for="image">Select the product image</label>
</td>
<td>
    <input type="file" name="image" id="image">
</td>
        
    </tr>

<tr>
<td>

    <label for="cost">Enter the cost of Product</label>
</td>
<td>

    <input type="number" id='cost' name="cost">
</td>
</tr>
    
<tr>
<td>

    <input type="submit" class="sub" value="submit" name="submit">
</td>
    
</tr>
</form>
    </table>

    <br>
    <button class="insert"><a href="insertproduct.php" class="link-success">INSERT</a></button>
    <button class="delete"><a href="deletion.php" class="link-danger">DELETE</a></button>
    <button class="edit"><a href="edit.php"class="link-secondary">EDIT</a></button>
</body>
</html>


