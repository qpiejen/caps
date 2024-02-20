<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>


</head>
<body>
    <div class="navigation" style="margin-buttom: 20px; font-size:20px;">
       <a href="addproducts.php">Add Products</a> | <a href="view_products.php">View Products</a>
    </div>
    
    <h1>Add Products</h1>

    <form action="process.php" method="POST" enctype="multipart/form-data">

        
        <input type="file" name="fileToUpload" id="fileToUpload"></p>

        <label>Picture</label> </br>
        <input type="file" name="pic" required accept=".gif, .jpg, .png, .webp, .jfif"> </p>

        <label>Product Name</label> </br>
        <input type="text" name="pn" required> </p>

        <label>Price</label> </br>
        <input type="text" name="price" required> </p>

        <input type="submit" name="add_products" value="ADD">



    </form>
    
</body>
</html>