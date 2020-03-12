<?php
include_once 'partials/db.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>Product Add</title>
</head>
<body>
    
<form action="" method="POST">

<div class="container">
    <header class="underline">
      <h1>Product Add</h1>
      <a><button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Save</button></a>
    </header>
</div>
 
    <div class="container">
        <div class="row p15 pt25">
                <h3 class="labels">SKU</h3><input type="text" name="sku">
        </div>
        <div class="row p15 pt25">
                <h3 class="labels">Name</h3><input type="text" name="name">
        </div>
        <div class="row p15 pt25">
                <h3 class="labels">Price</h3><input type="text" name="price">
        </div>
        <div class="row p15 pt75">
                <h3 class="label">Type Switcher</h3>
                <select>
                    <option value="cd">CD</option>
                    <option value="book">Book</option>
                    <option value="chair">Chair</option>
                </select>
    </div>

    <div class="container cd box">
        <div class="row pt25">
            <h3 class="labels">Size</h3><input type="text" name="size"><br>
            <p class="p55 pt25">Please specify storage capacity in MB.</p>
        </div>
    </div>

    <div class="container book box">
      <div class="row pt25">
          <h3 class="labels">Weight</h3><input type="text" name="weight"><br>
          <p class="p55 pt25">Please specify item weight in KG.</p>
      </div>
  </div>

  <div class="container chair box">
    <div class="row pt25">
        <h3 class="labels">Height</h3><input type="text" name="height"><br><br>
        <h3 class="labels">Width</h3><input type="text" name="width"><br><br>
        <h3 class="labels">Lenght</h3><input  type="text" name="lenght"><br><br>
        <p class="p55 pt25">Please provide dimensions in HxWxL format.</p>
    </div>
</div>

</form>

<?php

if(isset($_POST['submit'])){
    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $size = $_POST['size'];

    if(empty($sku) or empty($name) or empty($price) or empty($size)) {
        echo "Please fill all fields!";
    }
    else{
        echo "Product added succesfully!";
    }
    die();
};

if(isset($_POST['submit'])){
    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $size = $_POST['weight'];

    if(empty($sku) or empty($name) or empty($price) or empty($weight)) {
        echo "Please fill all fields!";
    }
    else{
        echo "Product added succesfully!";
    }
    die();
};

if(isset($_POST['submit'])){
    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $height = $_POST['height'];
    $width = $_POST['width'];
    $lenght = $_POST['lenght'];

    if(empty($sku) or empty($name) or empty($price) or empty($height) or empty($width) or empty($lenght)) {
        echo "Please fill all fields!";
    }
    else{
        echo "Product added succesfully!";
    }
    die();
};

?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>