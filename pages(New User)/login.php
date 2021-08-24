<div class="modal fade" id="login" tabindex="-1" aria-labelledby="login" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../includes/login.inc.php" method="post">
          <div class="row justify-content-center">
           
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="username" placeholder="name@example.com/username" required>
            <label for="floatingInput" >Email address or Username</label>
          </div>
          <div class="form-floating">
            <input type="password" name="user_password" class="form-control" id="floatingPassword" placeholder="Password" required>
            <label for="floatingPassword" >Password</label>
          </div>
      
          <div class="checkbox mb-3">
            <label >
              <input type="checkbox" value="remember-me"> Remind me
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit" >Log in</button>
          <p class="mt-5 mb-3 text-muted">© 2021–2025</p>
        </form>
      </div>
      <?php
    if(isset($_GET["error"])){
      if($_GET["error"] == "emptyinput"){
        echo "<div class=' bg-dark'><center><p style='color:white; font-size: 30px;'>Fill in all fields!</p></center></div>";
      }else if($_GET["error"] == "wronglogin"){
        echo "<div class=' bg-dark'><center><p style='color:white; font-size: 30px;'>Wrong Details!</p></center></div>";
      }
    }
   ?>
    </div>
  </div>
</div>