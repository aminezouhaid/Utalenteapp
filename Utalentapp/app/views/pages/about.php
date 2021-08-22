
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" href="<?php echo URLROOT; ?>/img/aa.png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About Us</title>
    <style>
        .titleabout {
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: cursive;
            margin-top: 30px;
            cursor: pointer;

         
        }
        .titleabout:hover {
            color: #16a0c5;
        }

        .partie {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-top:  30px;

        }


        .partie1 {
            width: 45%;
            height: 80%;
        
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;


        }

        .partie2 {
            width: 45%;
            height: 80%;
       
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;

        }
        .titlep2{
            color: #16a0c5;
         font-family: sans-serif; 
        }
        .titlep2:hover{
            color: #134865;
            cursor: pointer;
        }
        .titlep1{
            color: black;
         font-family: sans-serif; 
        }
        .titlep1:hover{
            color: goldenrod;
            cursor: pointer;
        }

        .imgeprfile {
            width: 20%;
            height: 20%;
            border: solid 1px;
            margin-bottom: 10px;
            border-radius: 70px;
            box-shadow: 10px 5px 5px #464848;
        }
        .imgeprfile:hover {
        opacity: 50%;
       

        }
        .paragraphe{
            width: 60%;

        }
       
    </style>
</head>

<body>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

    <div class="titleabout">
        <h1>ABOUT US </h1>
    </div>
    <div class="partie">
        <div class="partie1"><img class="imgeprfile" src="<?php echo URLROOT ?>/img/ana.jpg" alt="">
        <h4 class="titlep1">AMINE ZOUHAID</h4> 
        <p  style="color:goldenrod">Fondateur de Utalenapp</p>
            <p class="paragraphe"> AMINE ZOUHAID 24 ans née en 22/007/1997 Origine de  Youssofia 
                apprenant a Youcode Youssofia   et le fendateur de l'application Utalent app </p>
        </div>
        <div class="partie2"><img class="imgeprfile" src="<?php echo URLROOT ?>/img/aa.png" alt="">
            <h3 class="titlep2">Utalentapp Application</h3>
            <p class="paragraphe"> Utalentapp c'est une application
                 que son gere les talente de sport au maroc , toot
                sequi sport Footbaal , basketteball , Tenis , natation judo Etc.. </p>
        </div>
    </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
</body>

</html>
