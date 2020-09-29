<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<link rel="stylesheet" href="css/header.css"> 
<body>
<?php include"layout/header.php"?>
    
    <div class="title">
        <center>
        <h3>Product</h3>
        </center>
      </div>
		<div class="container text-center update-form">
      
			<div class="errorMessage">
				<!-- Show Error Message -->
					<p style="color: red;">
            <?php
							if(isset($_SESSION['error']))
							{
								echo $_SESSION['error'];

								//tidak menunjukan error lagi
								unset($_SESSION['error']);
							}
						?> 
          </p>
			</div>
			<form class="form-horizontal" method="POST" action="./controller/insertproductcontroller.php" enctype="multipart/form-data">
      <input type="hidden" name="csrf" value="<?php echo $csrf?>">
			<input type="hidden" name="id"> <!-- id from selected product -->
            <div class="form-group">
              <label class="control-label col-sm-2" for="productname">Product Name:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="productname" name="productname" placeholder="Enter Product Name">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="brand">Brand:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="brand" name="brand" placeholder="Enter Brand">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="category">Category:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="category" name="category" placeholder="Enter Category">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="stock">stock:</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="stock" name="stock" min= "1" placeholder="Enter Stock">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="description">Description:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="price">Price:</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="price" name="price" min = "1"placeholder="Enter Price">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="image">Image:</label>
              <div class="col-sm-10">
                <input type="file" id="image" name="image">
              </div>
            <div>
            <div>
            <button type = "submit" name="upload">Upload</button>
            </div>
            <?php
            if(isset($_SESSION['error'])){
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            }
            ?>
          </form>
		</div>
    </div>
</body>
</html>