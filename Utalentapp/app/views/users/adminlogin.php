<?php require APPROOT . '/views/inc/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="<?php echo URLROOT; ?>/img/aa.png">

    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>User Login </title>
</head>
<body>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<div style="color:#5254cf; font-family: cursive;margin:10px 0px 0px 0px; " class="d-flex justify-content-center align-items-center">
      <h2> Welcoome To Register Page</h2>
    </div>

    <div  class="d-flex  justify-content-center align-items-center" >
      <div  style="width:40%;  height:540px;  background-image:url('<?php echo URLROOT ?>/img/aaaa.jpg');   background-size: 100% 100%;" >
        
      </div>
      <div  style="width:60%; height:540px"  class="d-flex justify-content-center flex-colmun  align-items-center" >
<form  class="d-flex justify-content-center  flex-column   block-example border border-right-0 border-dark "  style=" height:80%; box-shadow: 10px 5px 5px #464848; border-radius: 30px; " action="<?php echo URLROOT ?>/users/admin" method="post">
<h2 class="d-flex justify-content-center" style="border-bottom:solid #5254cf; font-family: cursive; margin:10px ">Login</h2>
<div style="margin:30px">
<div class="form-group"    style="margin-bottom:20px;">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input  type="password" class="form-control" name="password" placeholder=" Enter your Password">
  </div>
  <div class="form-check" style="margin-bottom:30px;">
    <input   type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
  
</div>
  
</form>
</div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
</body>
</html>