<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo URLROOT; ?>/img/aa.png">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>Navbar</title>

    <style>
.navb{
  
    display: flex;
justify-content: center;
width: 100%;
height: 150px;

}
.bton:hover{
background-color: goldenrod;
color: black;
}
    </style>
</head>
<body>
<div class="navb">
<nav style="width: 100%;" class=" d-flex justify-content-around navbarbar navbar navbar-expand-lg navbar-light bg-light">
<div    style="margin:30px;  "class="d-flex justify-content-start align-items-center" >
<a href="<?php echo URLROOT ?>/pages/index ?>"> <img src="<?php echo URLROOT ?>/img/aa.png" alt=""
            style="width:100px; height:100px"></a>
        <a style=" text-decoration:none;" href="<?php echo URLROOT ?>/pages/index">
          <h5 style=" color:black;">UtalentApp</h5> </a>
    </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo URLROOT ?>/pages/index">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URLROOT ?>/pages/about">About As</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact As</a>
      </li>
    
    
    </ul>  
</div>
</div>
    <div>
    <form class=" d-flex justify-content-center ">
      <input class="form-control mr-sm-2" type="search" placeholder="Search categories" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form></div>
    <?php  if(isset($_SESSION['user_id'])) : ?>
<a href="<?= URLROOT?>/users/logout"><button class="  bton btn btn-dark">Log Out</button></a>
    
      <?php endif; ?>
    
</nav>
</div>
</body>
</html>