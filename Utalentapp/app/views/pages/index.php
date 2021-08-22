<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css ?>">
   <link rel="shortcut icon" href="<?php echo URLROOT; ?>/img/aa.png">
    
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>   UtalentApp</title>
    <style>
      h5{
        display: flex;
        justify-content: center;
     color: black;
  
      }
      .row{
        display: flex;
        justify-content: center;
        border-radius: 20px;
        border: solid 0.5px;
      }
      .photo{
        height: 60%;
        width: 60%;
        display: flex;
        justify-content: center;
        align-items: center;
      }
.card{
      position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    align-items: center;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
}
 .card a{
  text-decoration: none;
}
.card-text{
  display: flex;
  justify-content: center;
  width: 80%;
  font-size: 13px;
}


    </style>
</head>
<body>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
<div style="color:#16a0c5; margin-top:10px; font-family: cursive;" class="d-flex justify-content-center align-items-end"><h2>Welcoome To Utalentapp </h2></div>
    <div    style="background-image: url('<?php echo URLROOT; ?>/img/13095.jpg'); height: 600px;  background-size:100% 100%;"> 
 <div class="d-flex justify-content-end">
 <a href="<?php echo URLROOT ?>/users/register ?>"><button type="button" class="btn btn-primary btn-lg" style="margin:60px;">Inscrire Toi</button></a>
 <a href="<?php echo URLROOT ?>/users/login ?>" style="margin:60px"><button type="button"    class="btn btn-danger btn-lg">Login</button></a>

</div>
</div> 
<div style="height:200px;font-family: cursive;" class="d-flex justify-content-center  align-items-center "> <h1>Chose Your Talente</h1> </div>

<div class="container mt-2" >
<!--   <div class="card card-block mb-2">
    <h4 class="card-title">Card 1</h4>
    <p class="card-text">Welcom to bootstrap card styles</p>
    <a href="#" class="btn btn-primary">Submit</a>
  </div>   -->
  <div id="categorie" class="row" >
    
    <div class="col-md-3 col-sm-6 item">
      <div class="card item-card card-block">
   
    <a href="<?php echo URLROOT ?>/users/login ?>"><img src="  <?php echo URLROOT; ?>/img/mg.jpg" alt="Photo of sunset"></a>
     <a href="<?php echo URLROOT ?>/users/login ?>">  <h5 class="card-title  mt-3 mb-3">BasqetteBall</h5></a> 
        <p class="card-text">This is a company that builds websites, web .</p> 
  </div>
    </div>
    <div class="col-md-3 col-sm-6 item">
      <div class="card item-card card-block">

   <a href="<?php echo URLROOT ?>/users/login ?>"><img src="<?php echo URLROOT; ?>/img/football.jpg" alt="Photo of sunset"></a> 
      <a href="<?php echo URLROOT ?>/users/login ?>"> <h5 class="card-title  mt-3 mb-3">FootBall</h5></a> 
        <p class="card-text">This is a company that builds websites, web .</p> 
  </div>
    </div>
  
    <div class="col-md-3 col-sm-6 item">
      <div class="card item-card card-block">
      
   <a href="<?php echo URLROOT ?>/users/login ?>"><img src="<?php echo URLROOT; ?>/img/60158.jpg" alt="Photo of sunset"></a> 
      <a href="<?php echo URLROOT ?>/users/login ?>">  <h5 class="card-title  mt-3 mb-3">Tenis</h5></a>
        <p class="card-text">This is a company that builds websites, web apps and e-commerce solutions.</p> 
  </div>
    </div>*
    <br>
    <div class="col-md-3 col-sm-6 item">
      <div class="card item-card card-block">
    <a href="<?php echo URLROOT ?>/users/login ?>"><img src="<?php echo URLROOT; ?>/img/handball.jpg" alt="Photo of sunset"></a>
     <a href="<?php echo URLROOT ?>/users/login ?>"><h5 class="card-title  mt-3 mb-3">Handball</h5></a>   
        <p class="card-text">This is a company that builds websites, web apps and e-commerce solutions.</p> 
  </div>
    </div>    
    <div class="col-md-3 col-sm-6 item">
      <div class="card item-card card-block">
   <a href="<?php echo URLROOT ?>/users/login ?>"> <img src="<?php echo URLROOT; ?>/img/natationa.jpg" alt="Photo of sunset"></a>
      <a href="<?php echo URLROOT ?>/users/login ?>"> <h5 class="card-title  mt-3 mb-3">Swiming</h5></a> 
        <p class="card-text">This is a company that builds websites, web apps and e-commerce solutions.</p> 
  </div>
    </div>

    <div class="col-md-3 col-sm-6 item">
      <div class="card item-card card-block ">
   <a class="photo" href="<?php echo URLROOT ?>/users/login ?>"> <img src="<?php echo URLROOT; ?>/img/karatee.jpg" alt="Photo of sunset"></a>
      <a href="<?php echo URLROOT ?>/users/login ?>"> <h5 class="card-title  mt-3 mb-3">karate</h5></a> 
        <p class="card-text">This is a company that builds websites, web apps and e-commerce solutions.</p> 
  </div>
    </div>


  </div>
  
</div>

<div class="d-flex justify-content-center">
 <a href="<?php echo URLROOT ?>/users/register ?>"><button type="button" class="btn btn-primary btn-lg" style="margin:60px;">Inscrire Toi</button></a>

</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>
</body>
</html>