<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" href="<?php echo URLROOT; ?>/img/aa.png">

  <meta charset="UTF-8">
  <link rel="stylesheet" href="<?php echo URLROOT ?>/css/cc.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <title>Document</title>
</head>

<body  >
<?php require APPROOT . '/views/inc/navbar.php'; ?>

  
<div>
    <div style="color:#16a0c5; font-family: cursive;margin:20px 0px 50px 0px; " class="d-flex justify-content-center align-items-center">
      <h2> Welcoome To Register Page</h2>
    </div>
    <div></div>
  </div>
  <div class="d-flex justify-content-around">
    <div class="d-flex justify-content-center align-items-center flex-column">


    </div >
    <div class="d-flex justify-content-around align-items-center" style="width:90%">
    <img style="height:300px; width:300px" src="<?php echo URLROOT ?>/img/ff.png" alt="">
    <div class="d-flex justify-content-center align-items-center flex-column" style="width:65%;   ">
      <h2 style="border-bottom:3px solid;font-family: cursive;">Register</h2>
      <form style="  width:100%;" class="d-flex justify-content-center " action="<?php echo URLROOT ?>/users/register " method="post"  enctype="multipart/form-data">
        <div
          style="border-radius: 20px;  border:solid; background-color:#f3f2ef; box-shadow: 10px 5px 5px #464848; margin:20px;  padding:20px; width:90%; "
          class="d-flex justify-content-around">
          <div class="partie1  " style=" width:45%">
            <div class="form-row">
              <div class="form-group col-md-8">
                <label for="inputNme4">Name</label>
                <input type="text" name="username"  placeholder="Enter Your Name" value="<?php  echo $data['NAME_USERTALENT'] ?>"
                 class="form-control <?php echo (!empty($data['name_err']) ? ' is-invalid ' : ' ' ) ?>   <?php echo (!empty($data['name_secc']) ? ' is-valid ' : ' ' ) ?>  ">
                <span class="invalid-feedback"> <?php  echo $data['name_err']?></span>
                <span  class="valid-feedback "> <?php  echo $data['name_secc']?></span>
              </div>
           
              <div class="form-group col-md-8">
                <label for="inputEmail4">Email</label>
                <input type="email"name="useremail"  placeholder=" Enter Your Email" value="<?php echo $data['EMAIL_USERTALENT'] ?>"   class="  form-control  <?php echo (!empty($data['email_err']) ? ' is-invalid ' : ' ' ) ?>  <?php echo (!empty($data['email_secc']) ? ' is-valid ' : ' ' ) ?>  "  >
                <span class="invalid-feedback"> <?php  echo $data['email_err']?></span>
                <span  class="valid-feedback "> <?php  echo $data['email_secc']?></span>
              </div>
              <div class="form-group col-md-8">
                <label for="inputPassword4">Password</label>
                <input type="password"name="userpassword"  placeholder=" Enter Your Password" value="<?php echo $data['PASSWORD_USERTALENT'] ?>"   class="  form-control  <?php echo (!empty($data['password_err']) ? ' is-invalid ' : ' ' ) ?>  <?php echo (!empty($data['password_secc']) ? ' is-valid ' : ' ' ) ?>  "  >
                <span class="invalid-feedback"> <?php  echo$data['password_err']?></span>
                <span class="valid-feedback"> <?php  echo$data['password_secc']?></span>
              </div>
            </div>
            <div class="form-group  col-md-8">
              <label for="inputAddress">Address</label>
              <input type="textarea" class="form-control  <?php echo (!empty($data['adress_err']) ? ' is-invalid ' : '' ) ?>    <?php echo (!empty($data['adress_secc']) ? ' is-valid ' : ' ' ) ?>   " name="useradress"value="<?php echo  $data['ADRESS_USERTALENT'] ?>"  placeholder=" Enter Your Adress">
              <span class="invalid-feedback"> <?php  echo $data['adress_err']?></span>
              <span class="valid-feedback"> <?php  echo$data['adress_secc']?></span>
            </div>
            <div class="form-group col-md-8">
              <label for="inputAddress2">Age</label>
              <input type="number" class="form-control  <?php echo (!empty($data['age_err']) ? ' is-invalid ' : '' ) ?>    <?php echo (!empty($data['age_secc']) ? ' is-valid ' : ' ' ) ?>   " name="userage"value="<?php echo  $data['AGE_USERTALENT'] ?>"  placeholder=" Enter Your Age">
              <span class="invalid-feedback"> <?php  echo $data['age_err']?></span>
              <span class="valid-feedback"> <?php  echo$data['age_secc']?></span>
            </div>
          </div>


          <div class="partie2" style="  width:45%">
            <div class="form-row">
              <div class="form-group col-md-8">
                <label for="inputPhone">Phone</label>
                <input type="text" class="form-control  <?php echo (!empty($data['phone_err']) ? ' is-invalid ' : '' ) ?>     <?php echo (!empty($data['phone_secc']) ? ' is-valid ' : ' ' ) ?>   " name="userphone" value="<?php echo $data['TELEPHON_USERTALENT'] ?>"  placeholder=" Enter Your Phone">
                <span class="invalid-feedback"> <?php  echo $data['phone_err']?></span>
                <span class="valid-feedback"> <?php  echo$data['phone_secc']?></span>
              </div>

              <div class="form-group col-md-8">
                <label for="inputPays">Pays</label>
                <input type="text" class="form-control  <?php echo (!empty($data['pays_err']) ? ' is-invalid ' : '' ) ?>    <?php echo (!empty($data['pays_secc']) ? ' is-valid ' : ' ' ) ?>   " name="userpays"value="<?php echo $data['NATIONALITE_USERTALENT'] ?>"  placeholder="@Exemple Morocco">
                <span class="invalid-feedback"> <?php  echo $data['pays_err']?></span>
                <span class="valid-feedback"> <?php  echo$data['pays_secc']?></span>
              </div>

              <div class="form-group col-md-8">
                <label for="inputPays">Ville</label>
                <input type="text" class="form-control  <?php echo (!empty($data['ville_err']) ? ' is-invalid ' : '' ) ?>    <?php echo (!empty($data['ville_secc']) ? ' is-valid ' : ' ' ) ?>   " name="userville" value="<?php  echo $data['VILLE_USERTALENT'] ?>"  placeholder="@Exemple Casablanca">
                <span class="invalid-feedback"> <?php  echo $data['ville_err']?></span>
                <span class="valid-feedback"> <?php  echo$data['ville_secc']?></span>
              </div>


              <div class="form-group col-md-8">
                <label for="inputState">Categorie</label>
                <select name="usercategorie" class="form-control  ">

                  <option value="football">Football</option>
                  <option value="tenis">Tenis</option>
                  <option value="basqetball">Basqetball</option>
                  <option value="handball">handball</option>
                  <option value="natation">natation</option>
                  <option value="karate">karate</option>
                  <option value="Autre">Autre</option>
                  <option vlaue="0" selected>Choose...</option>

                </select>
                <div   >
                <label for="inputState">Image Profile</label>
                  <input   class="form-control  " type="file"  accept="image/*"  id="img"  value="<?php echo $data['IMAGEPROFILE'] ?>"   name="img"></div>
              </div>
              <div style="margin-top:20px">
                <input type="submit" value="Registre " class="btn btn-primary">
              
                <a href="<?php echo URLROOT ?>/users/login ?>" style="margin:10px"><button type="button"
                    class="btn btn-danger">Login</button></a>
              </div>
            </div>
          </div>
        </div>
      </form>





    </div>

    </div>
    </div>
    <?php require APPROOT . '/views/inc/footer.php'; ?>
</body>

</html>