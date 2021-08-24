<?php
include "../includes/counter.inc.php";
?>
<header>
        <nav class="navbar navbar-dark navbar-expand-lg fixed-top new-bg">
            
                        <a href="HomePage.html" class="pull-left visible-md visible-lg"> 
                            <div id="logo-img" alt="Logo"></div>
                        </a>

            <a href="#" class="navbar-brand">
                <h1 id="innnk">INNNK Chef </h1>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-expands="false" aria-label="Toggler navigation" aria-controls="navbarNav">
            <span class="navbar-toggler-icon"></span>

            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

<ul class="navbar-nav ">
    <li class="nav-item">
        <a href="index.php" class="nav-link" aria-current="page">Home</a>
    </li>
    <li class="nav-item">
        <a href="about.php" class="nav-link " >About</a>
    </li>
    <li class="nav-item">
        <a href="services.php" class="nav-link ">Services</a>
    </li>
    <li class="nav-item">
        <a href="menu.php" class="nav-link " >Menu</a>
    </li>
    <li class="nav-item">
        <a href="blog.php" class="nav-link " >Blog</a>
    </li>
    <li class="nav-item">
        <a href="contact.php" class="nav-link" >Contact</a>
    </li>
</ul>
<form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
    <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
  </form>
</div>

<?php
 if(isset($_SESSION["uid"])||isset($_SESSION["username"])){
    //  include "signup.inc.php";
    //  echo `$username`;
     echo "
     <div style='width: fit-content; height:auto; color:white;' class='ml-4'>
      <a href='../includes/logout.inc.php'> <i class='bi bi-person-square'></i></a>
    </div> " ;
 } else {


       echo "<div class='col-md-3 text-end justify-content-end'>
                <button type='button' data-bs-toggle='modal' data-bs-target='#login' class='btn btn-outline-success me-2'>Login</button>
                <button type='button' class='btn btn-success' data-bs-toggle='modal'  data-bs-target='#signup' >Sign-up</button>
              </div> ";
 
             


            } 

            ?>
                         <a href='cart.php'>
              <button id="added" type='button' class='btn btn-secondary' style=''>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-cart4' viewBox='0 0 16 16' style=''>
  <path d='M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z'></path>
</svg><span class='badge bg-secondary'><?php 
            echo $cartUnit;

?></span></button></a> 
        </nav> 
    </header>

