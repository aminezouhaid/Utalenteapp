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
    <title>Update</title>
</head>
<body>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
<form action="" method="post">
<div class="d-flex">
  <div class="partie1" style=width:50%;margin-top:30px>
   <div class="mb-3 d-flex flex-column  align-items-center " style=" margin:1em; "  >
  <label for="exampleFormControlInput1" class="form-label">Name </label>
  <input type="text"  name="nameart"  value="<?php echo $data['user_name'] ; ?>" class="form-control " style="width: 50%;" placeholder="Enter Name">
</div>
<div class="mb-3 d-flex flex-column  align-items-center " style=" margin:1em; "  >
  <label for="exampleFormControlInput1" class="form-label">Age</label>
  <input type="text"  name="nameart"  value="<?php echo $data['user_age'] ; ?>" class="form-control " style="width: 50%;" placeholder="Enter  Age">
</div>
<div class="mb-3 d-flex flex-column  align-items-center " style=" margin:1em; "  >
  <label for="exampleFormControlInput1" class="form-label">Ville</label>
  <input type="text"  name="nameart"  value="<?php echo $data['user_ville'] ; ?>" class="form-control " style="width: 50%;" placeholder="Enter Ville">
</div>
<div class="mb-3 d-flex flex-column  align-items-center " style=" margin:1em; "  >
  <label for="exampleFormControlInput1" class="form-label">Phone</label>
  <input type="text"  name="nameart"  value="<?php echo $data['user_phone'] ; ?>" class="form-control " style="width: 50%;" placeholder="Enter Phone">
</div>
</div>
<div  class="partie2" style=width:50%;margin-top:30px>
<div class="mb-3 d-flex flex-column  align-items-center " style=" margin:1em; "  >
  <label for="exampleFormControlInput1" class="form-label">Adress</label>
  <input type="text"  name="nameart"  value="<?php echo $data['user_adress'] ; ?>" class="form-control " style="width: 50%;" placeholder="Enter Adress">
</div>
<div class="mb-3 d-flex flex-column  align-items-center " style=" margin:1em; "  >
  <label for="exampleFormControlInput1" class="form-label">Pays</label>
  <input type="text"  name="nameart"  value="<?php echo $data['user_pays'] ; ?>" class="form-control " style="width: 50%;" placeholder="Enter Pays">
</div>
<div class="mb-3 d-flex flex-column  align-items-center " style=" margin:1em; "  >
  <label for="exampleFormControlInput1" class="form-label">Categorie</label>
  <input type="text"  name="nameart"  value="<?php echo $data['user_categorie'] ; ?>" class="form-control " style="width: 50%;" placeholder="Enter  Categorie">
</div>

</div>
  </div>
  </form>
  <div class="input-group-append d-flex justify-content-center">
   <a href="<?php echo URLROOT ?>/users/profileadmin?>"> <button class="btn btn-secondary"  style="margin:1em">Close</button></a>
  <a href="<?php echo URLROOT ?>/users/profileadmin?>"><button class="btn btn-success"  style="margin:1em">Update</button></a> 
  </div> 
  <?php require APPROOT . '/views/inc/footer.php'; ?>
</body>
</html>