<?php include("Database.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST ASSESMENT</title>
    <!--- Bootstrap CSS --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="header"style="margin-top:50px;">  
    <form action="delete_product.php" method="post">      
        <div class="alignButton" style="display:flex; justify-content:space-between">
            <a style="margin-left:30px;text-decoration:none;color:black;font-size:30px;" href="index.php">Product List</a>
            <div class="alignButtons" style="display:flex; justify-content:flex-end">
                <button  style="margin-right:50px;" id="add" type="button" class="btn btn-primary" name="add" onclick="window.location.href='product_add.php'">ADD</button>    
                <button   style="margin-right:50px;" id="delete-product-btn" type="submit" name="mass_delete" class="btn btn-danger">MASS DELETE</button>   
            </div>
           
        </div>
        <hr/>
    </div>

    <div  class="py-5">
        <div class="container">
        </div>
    </div>
</form>
</div>

      
<!--- Bootstrap JS --->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html> 