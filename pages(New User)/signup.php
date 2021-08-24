<!-- Modal for SignUp -->
<div class="modal fade" id="signup" tabindex="-1" aria-labelledby="signup" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Here</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-user" type="button" role="tab" aria-controls="pills-home" aria-selected="true">User</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-chef-tab" data-bs-toggle="pill" data-bs-target="#pills-chef" type="button" role="tab" aria-controls="pills-chef" aria-selected="false">Chef</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link bg-warning" id="pills-google-tab" data-bs-toggle="pill" data-bs-target="#pills-google" type="button" role="tab" aria-controls="pills-google" aria-selected="false">Sign-In with Google</button>
          </li>
          
        
        </ul>





        <!-- USer -->
        <div class="tab-content" id="pills-tabContent">
            
          <div class="tab-pane fade show active" id="pills-user" role="tabpanel" aria-labelledby="pills-user-tab">
         <form action="<?php echo htmlspecialchars("../includes/signup.inc.php"); ?>" method="post">
            <div class="mt-3">
            <label>Personal Details</label>
                <input type="text" name="user_name" class="form-control form-control-sm " required  placeholder="Full name...">
            </div>
            <div class="mt-3">
            <label>Email</label>
              <input type="text" name="user_email" class="form-control form-control-sm " required  placeholder="example@gmail.com ">
          </div>
          <div class="mt-3">
                <input type="text" name="username" class="form-control form-control-sm " required  placeholder="Username...">
            </div>
            <div class="mt-3">
                <input type="password" name="user_password" class="form-control form-control-sm " required  placeholder="Password..">
            </div>
            <div class="mt-3">
                <input type="password" name="user_pwdr" class="form-control form-control-sm " required  placeholder="Confirm password...">
            </div>
            <div class="mt-3">
            <label>Gender</label>
              <select class="form-control form-control-sm" name="user_gender" >
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
              </select >
          </div>
          
          <div class="mt-3">
          <label>Phone Number</label>
              <input type="tel" name="user_telephone" class="form-control form-control-sm " required placeholder="Mobile Number">
          </div>
          <div class="mt-3">
          <div class="mt-3">
                <label>DOB</label>
              <input type="date" name="user_date" class="form-control form-control-sm " required >
          </div>
          
          <div class="mt-3 d-grid">
              <button type="submit" name="submit" class="btn btn-sm btn-success">SignUp</button>
          </div>

        </form>
        <?php
    if(isset($_GET["error"])){
      if($_GET["error"] == "emptyinput"){
        echo "<p>Fill in all fields!</p>";
      }else if($_GET["error"] == "invaliduid"){
        echo "<p>Choose a proper username</p>";
      }else if($_GET["error"] == "invalidemail"){
        echo "<p>Invalid Email</p>";
      }else if($_GET["error"] == "unmatchpasswords"){
        echo "<p>Passwords Dont Match</p>";
      }else if($_GET["error"] == "stmtfailed"){
        echo "<p>Something went wrong! Try Again!</p>";
      }else if($_GET["error"] == "usernametaken"){
        echo "<p>Username Already Taken</p>";
      }else if($_GET["error"] == "none"){
        echo '<script>alert("Successfully Signed In! Login to Continue");</script>';
      }
    }
   ?>
          </div></div>

       <!-- Chef -->
          <div class="tab-pane fade" id="pills-chef" role="tabpanel" aria-labelledby="pills-chef-tab">
         <form action="" method="POST">
            <div class="mt-3">
                <input type="text" name="" class="form-control form-control-sm " required  placeholder="Username name ">
            </div>
            <div class="mt-3">
              <input type="text" name="" class="form-control form-control-sm " required  placeholder="Email ">
          </div>
          <div class="mt-3">
              <input type="tel" name="" class="form-control form-control-sm " required placeholder="Phone">
          </div>
          <div class="mt-3">
              <select class="form-control form-control-sm" name="gender">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
              </select>
          </div>
          <div class="mt-3 d-grid">
              <button type="submit" name="submit" class="btn btn-sm btn-success">Submit</button>
          </div>
        </form>
          </div>

          <!-- GOOGLE -->
          <div class="tab-pane fade" id="pills-google" role="tabpanel" aria-labelledby="pills-google-tab">
         <form action="" method="POST">
            <div class="mt-3">
                <input type="text" name="" class="form-control form-control-sm " required  placeholder="Username ">
            </div>
            <div class="mt-3">
              <input type="password" name="pass" class="form-control form-control-sm " required  placeholder="Password">
          </div>
          <div class="mt-3 d-grid">
              <button type="submit" name="submit" class="btn btn-sm btn-success">Submit</button>
          </div>
        </form>
          </div>

        </div>
       
      </div>
    </div>
  </div>
</div>

