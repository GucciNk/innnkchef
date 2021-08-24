<?php
require_once "../includes/dbh.inc.php";
$amount=0;

?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    
    <!-- <script>alert("All Prices go for 3 heads by default");</script> -->
</head>
<body style="background-color:goldenrod;">
<?php
      include "navigationbar.php";
    ?>
    
    
 <div style="height: 80px;"></div>
 <div class="container bg-dark mb-4">
 <!-- Header Row with MENU Label -->
     <div class="row justify-content-center" style="background-image: url(../images/STARTERS.png);" >
         <div class="col-lg-2 col-md-2 mt-2">
             <div>
                 <h1 style="align-content: center;">MENU</h1>
                
             </div>
             
         </div>

         </div>


<!-- STARTERS COLUMN -->
         <div class="row justify-content-center mt-3">

            <div class="col-sm-5 head_color">
                <div><h2>STARTERS</h2></div>
                    <?php
                    $query = 'SELECT * FROM starters';
                    $result = mysqli_query($conn,$query);
                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_array($result)){
                            
              
                ?>

            <!-- Iteration Table -->
                 
                 <form action="cart.php?action=add&id=<?php echo $row["id"]; ?>" method="post">
                

                 <!-- Food Details Column 1() -->
                 <div class="row">

                    <div class="col">
                        <h5><?php echo $row['starter']; ?></h5>
                    <p class="text-info"><?php echo $row['info']; ?></p>
                    </div>
                    <!-- Order Input and Buttons Column 2() -->

                    <div class="col">
                        <!-- This col has a row with two more columns (Double Column)-->
                    <div class="row"><!-- MAin ROw -->
                        <!-- Quantity Input Row -->
                            <div class="col-sm-5 ">
                            <input type="text" name="quantity" class="form-control form-control-lg" value=<?php echo $amount;?>>
                                <input type="hidden" name="hidden_name" value="<?php echo $row["starter"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                            </div>
                        <!-- Price Column -->
                            <div class="col-sm-7">
                            <button   type="submit" name="add" class="btn btn-primary">
                            Add <span class="badge bg-secondary"><?php echo "GHC "."". $row['price'] ?></span>
                          </button>
                            </div>
                            
                           


                            </div><!-- End of Main Row Tag -->
                           
                      
                          
                        </div><!-- End of Double Column -->
                        
                    </div><!-- End of Food Row-->
                    
               
                </form>  

                
                <?php
                if(mysqli_num_rows($result) === 1){
                    break;
                }
            }
            
       
        }
            ?>
            </div> 
            <!-- Desserts Column -->         
            
                <div class="col-sm-5 head_color">

                    <div>
                        <h2>DESSERTS</h2>
                    </div>
                    
                    <?php
                    $query = 'SELECT * FROM desserts';
                    $result = mysqli_query($conn,$query);
                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_array($result)){
                    
              
                ?>
                 <!-- cart.php?id= -->
                 <form action="cart.php?action=add_1&id=<?php echo $row["id"]; ?>" method='post'>
                
                 <div class="row">
                    <div class="col">
                        <h5><?php echo $row['dessert']; ?></h5>
                    <p class="text-info"><?php echo $row['info']; ?></p>
                    </div>
                    
                       <!-- Order Input and Buttons Column 2() -->

                    <div class="col">
                        <!-- This col has a row with two more columns (Double Column)-->
                    <div class="row"><!-- MAin ROw -->
                        <!-- Quantity Input Row -->
                            <div class="col-sm-5 ">
                            <input type="text" name="quantity" class="form-control form-control-lg" value=<?php echo $amount;?>>
                                <input type="hidden" name="hidden_name" value="<?php echo $row["dessert"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                            </div>
                        <!-- Price Column -->
                            <div class="col-sm-7">
                            <button type="submit" name="add_1" class="btn btn-primary" >
                            Add <span class="badge bg-secondary"><?php echo "GHC "."". $row['price'] ?></span>
                          </button>
                            </div>
                            
                           


                            </div><!-- End of Main Row Tag -->
                           
                      
                          
                        </div><!-- End of Double Column -->
                        
                          
                       
                        
                    
                    
                </div>
                </form>  
                <?php
            }}
            ?>

                </div><!-- Desserts Column -->   

        </div>



     
   <!-- Header Start -->
     <div class="row justify-content-center bg-success">

        <div class="col-lg- col-md-2 mt-2">
            <div>
                <h2 style="align-content: center;">EXCLUSIVES</h2>
            </div>

            
        </div>
    </div>
    
 <!-- Header End -->
 <div class="row justify-content-center mt-3">
 <div class="col-sm-5 head_color">

<div>
    <h2>GHANAIAN SPECIALITIES</h2>
</div>

<?php
$query = 'SELECT * FROM ghanaian';
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_array($result)){


?>
<!-- cart.php?id= -->
<form action="cart.php?action=add_2&id=<?php echo $row["id"]; ?>" method='post'>

<div class="row">
<div class="col">
    <h5><?php echo $row['aduane']; ?></h5>
<p class="text-info"><?php echo $row['info']; ?></p>
</div>

   <!-- Order Input and Buttons Column 2() -->

<div class="col">
    <!-- This col has a row with two more columns (Double Column)-->
<div class="row"><!-- MAin ROw -->
    <!-- Quantity Input Row -->
        <div class="col-sm-5 ">
        <input type="text" name="quantity" class="form-control form-control-lg" value=<?php echo $amount;?>>
            <input type="hidden" name="hidden_name" value="<?php echo $row["aduane"]; ?>">
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
        </div>
    <!-- Price Column -->
        <div class="col-sm-7">
        <button type="submit" name="add_2" class="btn btn-primary" >
        Add <span class="badge bg-secondary"><?php echo "GHC "."". $row['price'] ?></span>
      </button>
        </div>
        
       


        </div><!-- End of Main Row Tag -->
       
  
      
    </div><!-- End of Double Column -->
    
      
   
    


</div>
</form>  
<?php
}}
?>

</div>

     <div class="col-sm-5 head_color">

<div>
    <h2>PASTA</h2>
</div>

<?php
$query = 'SELECT * FROM pasta';
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_array($result)){


?>
<!-- cart.php?id= -->
<form action="cart.php?action=add_3&id=<?php echo $row["id"]; ?>" method='post'>

<div class="row">
<div class="col">
    <h5><?php echo $row['pasta']; ?></h5>
<p class="text-info"><?php echo $row['info']; ?></p>
</div>

   <!-- Order Input and Buttons Column 2() -->

<div class="col">
    <!-- This col has a row with two more columns (Double Column)-->
<div class="row"><!-- MAin ROw -->
    <!-- Quantity Input Row -->
        <div class="col-sm-5 ">
        <input type="text" name="quantity" class="form-control form-control-lg" value=<?php echo $amount;?>>
            <input type="hidden" name="hidden_name" value="<?php echo $row["pasta"]; ?>">
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
        </div>
    <!-- Price Column -->
        <div class="col-sm-7">
        <button type="submit" name="add_3" class="btn btn-primary" >
        Add <span class="badge bg-secondary"><?php echo "GHC "."". $row['price'] ?></span>
      </button>
        </div>
        
       


        </div><!-- End of Main Row Tag -->
       
  
      
    </div><!-- End of Double Column -->
    
      
   
    


</div>
</form>  
<?php
}}
?>

</div>


 </div><!-- Row End -->


 <!-- LAST ROW -->
 <div class="row justify-content-center bg-success">

<div class="col-lg- col-md-2 mt-2">
    <div>
        <h2 style="align-content: center;">CONTINENTAL SPECILATIES</h2>
    </div>

    
</div>
</div>
<div class="row justify-content-center mt-3">
 <div class="col-sm-12 head_color">

<?php
$query = 'SELECT * FROM continentals';
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_array($result)){
  

?>
<!-- cart.php?id= -->
<form action="cart.php?action=add_4&id=<?php echo $row["id"]; ?>" method='post'>

<div class="row">
<div class="col">
    <h5><?php echo $row['continental']; ?></h5>
<p class="text-info"><?php echo $row['info']; ?></p>
</div>

   <!-- Order Input and Buttons Column 2() -->

<div class="col">
    <!-- This col has a row with two more columns (Double Column)-->
<div class="row"><!-- MAin ROw -->
    <!-- Quantity Input Row -->
        <div class="col-sm-5 ">
        <input type="text" name="quantity" class="form-control form-control-lg" value=<?php echo $amount;?>>
            <input type="hidden" name="hidden_name" value="<?php echo $row["continental"]; ?>">
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
        </div>
    <!-- Price Column -->
        <div class="col-sm-7">
        <button type="submit" name="add_4" class="btn btn-primary" >
        Add <span class="badge bg-secondary"><?php echo "GHC "."". $row['price'] ?></span>
      </button>
        </div>
        
       


        </div><!-- End of Main Row Tag -->
       
  
      
    </div><!-- End of Double Column -->
    
      
   
    


</div>
</form>  
<?php
}}
?>

</div></div>

<div class="row justify-content-center bg-success">

<div class="col-lg- col-md-2 mt-2">
    <div>
        <h2 style="align-content: center;">ADD-ONS</h2>
    </div>

    
</div>
</div>

<div class="row justify-content-center mt-3">
<div class="col-lg-12 col-md-12">
            <div>
                <h2>ADD-ONS</h2>
            </div>
        </div>

</div>
 
 </div></div>

<!-- Footer Start -->
<?php
      include "footer.php";
    ?>
<!-- Footer End -->
<script src="interactivity.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>
</html>
