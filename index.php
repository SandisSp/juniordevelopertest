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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>Product List</title>
</head>
<body>



    <form id="form1" method="POST">
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent p0 underline">
        <a class="navbar-brand" href="#">Product Add</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <div class="form-inline my-2 my-lg-0">
              <div class="btn-group">
              <button type="button" class="btn btn-succes dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Mass Delete Action
              </button>
              <div class="dropdown-menu">
              <input type="checkbox" id="selectall">Select all</input>
              </div>
              </div>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="apply">Apply</button>
            </div>
        </div>
      </nav>
    </div>


    <div id="123" class="container">
        <div class="row pt25">
            <?php
                 $sql = "SELECT * FROM acmediscs";
                 $query = mysqli_query($conn, $sql);
                 $check_acmediscs = mysqli_num_rows($query) > 0;

                 if($check_acmediscs){

                 while($col = mysqli_fetch_array($query)){
            ?>
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body text-center">
                  <input type="checkbox" class="check">
                  <p class="card-text hidden"><?php echo $col['id']; ?></p>
                  <h5 class="card-title pt10"><?php echo $col['sku']; ?></h5>
                  <p class="card-text"><?php echo $col['name']; ?></p>
                  <p class="card-text"><?php echo $col['price']; ?></p>
                  <p class="card-text"><?php echo $col['size']; ?></p>
                </div>
              </div>
            </div>
    <?php 

      }
    }
    else
    {
        echo "No products found";
    }
    ?>
        </div>
    </div>

    <div id="123" class="container">
        <div class="row pt25">
            <?php
              $sql = "SELECT * FROM epicbooks";
              $query = mysqli_query($conn, $sql);
              $check_acmediscs = mysqli_num_rows($query) > 0;

              if($check_acmediscs){

              while($col = mysqli_fetch_array($query)){
            ?>
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body text-center">
                  <input type="checkbox" class="check">
                  <p class="card-text hidden"><?php echo $col['id']; ?></p>
                  <h5 class="card-title pt10"><?php echo $col['sku']; ?></h5>
                  <p class="card-text"><?php echo $col['name']; ?></p>
                  <p class="card-text"><?php echo $col['price']; ?></p>
                  <p class="card-text"><?php echo $col['weight']; ?></p>
                </div>
              </div>
            </div>
            <?php 
              }
             }
            else
             {
             echo "No products found";
             }
             ?>
        </div>
    </div>
    <div id="123" class="container">
        <div class="row pt25">
            <?php
            $sql = "SELECT * FROM woodchairs";
            $query = mysqli_query($conn, $sql);
            $check_acmediscs = mysqli_num_rows($query) > 0;
     
            if($check_acmediscs){
         
             while($col = mysqli_fetch_array($query)){
             ?>
             <div class="col-sm-3">
              <div class="card">
                <div class="card-body text-center">
                  <input type="checkbox" class="check">
                  <p class="card-text hidden"><?php echo $col['id']; ?></p>
                  <h5 class="card-title pt10"><?php echo $col['sku']; ?></h5>
                  <p class="card-text"><?php echo $col['name']; ?></p>
                  <p class="card-text"><?php echo $col['price']; ?></p>
                  <p class="card-text"><?php echo $col['dimensions']; ?></p>
                </div>
              </div>
              </div>
              <?php 
                 }
                }
                else
                {
                echo "No products found";
                }
                ?>
        </div>
    </div>
    </form>

    <script src="js/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>