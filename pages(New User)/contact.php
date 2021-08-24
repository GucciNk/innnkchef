<?php
 include "../includes/dbh.inc.php";
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Contact" ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body style="background-color: white;">
<?php
      include "navigationbar.php";
    ?>
    <div style="height:60px;"></div>
 
<div class="container-fluid ">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12">
            <section class="sec">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.065736823091!2d-0.11333258633170643!3d5.703643333735354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf83a1f118e0af%3A0xbb140ca191815670!2sAsembi%20Lounge!5e0!3m2!1sen!2sgh!4v1626180581514!5m2!1sen!2sgh" 
                width="100%" height="450" allowfullscreen="" loading="lazy" class="if"></iframe>
               
              </section>
        </div>
    
  </div>
</div>
<div class="container col-xl-12 col-xxl-12 px-4 py-5 bg-dark contact-offset">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-5" style="font-size: 40; color: white;">Get-in Touch</h1>
        <ul>
          <li  class="col-lg-10 fs-4" id="contact-text-size-list">Visit our head-0ffice at East-Legon.</li>
          <li  class="col-lg-10 fs-4" id="contact-text-size-list">Send us an Email.</li>
          <li  class="col-lg-10 fs-4" id="contact-text-size-list">Call our Customer Service to make enquires or report an issue.</li>
        </ul>
      </div>
      <div class="col-sm-5 mx-auto ">
      <div class="card" style="width: 18rem;">
  <img src="../images/INNNK white-logo.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Send Us a Message</h5>
    <form action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <textarea name="comment" id="" cols="30" rows="4"></textarea>
    <ul class="list-group list-group-flush">
    
    <li class="list-group-item"><button type="submit" class="btn btn-success btn-block" name="send">Send</button></li>

  </ul>
    </form>
    <?php
    if(isset($_POST['send'])){
     $comment = $_POST['comment'];
     
     $sql = "INSERT INTO comments (comment) VALUES ('$comment')";
     if(mysqli_query($conn,$sql)){
         echo "<script>
         alert('Message Successfully sent');
         </script>";
     }else{
         echo "Error:". $sql."<br>".mysqli_error($conn);
     }
   
        
    }
    
    ?>
  
  </div>
  
  <div class="card-body">
  <a href="mailto:joxxinton@gmail.com" class="card-link" >Send us an Email</a><br>
  <a href="tel:+233508042587">Contact our Customer Care</a>
    
  </div>
</div>
        <!-- <form class="p-4 p-md-5 border rounded-3 bg-light">
          <div class="form-floating mb-3">
            <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Username">
            <label for="floatingInput">Name</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" name="emai" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="tel" name="phone" class="form-control" id="floatingPassword" placeholder="+2335*******8">
            <label for="floatingInput">Phone Number</label>
          </div>
          <div><label>Comment</label></div>
          <div class="form-floating mb-3">
            <textarea name="comment" id="" cols="35" rows="4"></textarea>
          
           <input type="password" class="form-control" id="floatingPassword" placeholder="Password"> -->
            
          <!-- </div>
          <button class="w-100 btn btn-lg btn-primary" name="send" type="submit">Submit</button>
          <hr class="my-4">
          <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
        </form> --> 
      </div>
    </div>
  </div>
  

  <?php
      include "footer.php";
    ?>

<script src="interactivity.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>
</html>