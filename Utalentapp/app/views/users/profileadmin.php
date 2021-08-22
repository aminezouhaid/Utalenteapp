<?php require APPROOT . '/views/inc/navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="<?php echo URLROOT; ?>/img/aa.png">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <style>*
    .container{
        display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;

    }
    .imgprfle1{
        display: flex;
        justify-content: center;
        margin: 20px 0px 20px 0px;
        
    }
    .imgeprfile{
            width: 10%;
            height: 10%;
            border: solid 1px ;
            margin-bottom: 10px   ;
            border-radius:70px ;
            box-shadow: 10px 5px 5px #464848;
        }
        .imgeprfile:hover{
         opacity: 60%;
         cursor: pointer;
        }

        .toot{
            border: solid 1px;
            border-radius: 20px;
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            box-shadow: 10px 5px 5px #464848;
    }
    h5{
        font-family: cursive;
        
  
    }
        
    </style>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2 style="font-family: cursive; margin-top:30px;">WELLCOOME IN PROFILE </h2>
    <div class="imgprfle1" >
<img class="imgeprfile" src="<?php echo URLROOT ?>/img/ana.jpg" alt="">
</div>
    <div  class="toot">
        <div>
      
<h5> Name :  <?php echo$data['user_name'] ; ?></h5>
<h5> Age :  <?php echo$data['user_age'] ; ?>  ans </h5>
<h5>Ville :  <?php echo$data['user_ville'] ; ?></h5>
<h5> Phone :  <?php echo$data['user_phone'] ; ?></h5> 
<h5>Adress :  <?php echo$data['user_adress'] ; ?></h5>
<h5> Pays : <?php echo$data['user_pays'] ; ?></h5>
<h5> categorie :  <?php echo$data['user_categorie'] ; ?></h5>
</div>
    </div>
    <div style="margin:20px;">
   <a href="<?php echo URLROOT ?>/pages/adminpage/"> <button type="button" class="btn btn-secondary">Back</button></a>
  <a href="<?php echo URLROOT   ?>/users/updateprflaadmin/"><button type="button"  class="btn btn-success">Update</button></a>
  </div>
</div>

</body>
</html>



<?php require APPROOT . '/views/inc/footer.php'; ?>