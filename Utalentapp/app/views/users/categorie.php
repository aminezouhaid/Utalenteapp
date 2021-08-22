<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="<?php echo URLROOT; ?>/img/aa.*">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Categories</title>
    <style>
.carde{
    border: solid 0.5px  ;
     width:30%; 
     margin:20px;
     display: flex;
     padding: 20px;
   flex-direction: column;
align-items: center;
background-color: #f3f2ef;
border-radius: 30px;
box-shadow: 10px 5px 5px #464848;

}
.title{
    color:#134865;

}
p{

    background-color: white;
    border: solid ;
    width: 50%;
    display: flex;
justify-content: center;
  
}
.hello{
display: flex;
justify-content: center;
width: 100%;
}

.imgeprfile{
            width: 30%;
            height: 30%;
            border: solid 1px ;
            margin-bottom: 10px   ;
            border-radius:70px ;
            box-shadow: 10px 5px 5px #464848;
        }

    </style>
</head>
<body>
<?php require APPROOT . '/views/inc/navbar.php'; ?>


<div style="margin-top:30px" class="d-flex  justify-content-center">
 <a href="<?php echo URLROOT ?>/pages/home/"> <button type="button" class="btn btn-secondary">Back</button></a>
 </div>
<div  class="d-flex justify-content-around flex-wrap ">
 <?php foreach ($data['cat_users']   as $user): ?>
  
    <div class="carde ">
      <img class="imgeprfile" src="data:image/*;base64,<?= $user->IMAGEPROFILE?>" alt="">
    <h1 class="title"> <?= $user->NAME_USERTALENT ?></h1>
  <div class="hello"> <p> <strong> Email   </strong>
  <p> <?= $user->EMAIL_USERTALENT ?></p>
</div> 
<div class="hello"> <p> <strong> Age </strong>
  <p> <?= $user->AGE_USERTALENT ?>  ans </p>
</div> 
<div class="hello"> <p> <strong>Adress  </strong> 
  <p> <?= $user->ADRESS_USERTALENT ?></p>
</div> 
<div class="hello"> <p><strong>Pays</strong> 
  <p> <?= $user->NATIONALITE_USERTALENT ?></p>
</div> 
<div class="hello"> <p> <strong>Ville </strong> 
  <p> <?= $user->VILLE_USERTALENT ?></p>
</div> 
<div class="hello"> <p><strong> Télephone</strong>
  <p> <?= $user->TELEPHON_USERTALENT ?></p>
</div> 
<div class="hello"> <p>    <strong>Sport</strong>
  <p> <?= $user->CATEGORIE ?></p>
</div> 

   

  
</div>


 <?php endforeach; ?>
 </div >

 <?php require APPROOT . '/views/inc/footer.php'; ?>
</body>
</html>