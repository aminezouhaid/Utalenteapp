<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="<?php echo URLROOT; ?>/img/aa.png">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Dashbord</title>
</head>

<style>


* {
    box-sizing: border-box;
    

}


body{
    background-color: brown;
}

.all {
    overflow: hidden;
   
  
}

.all>.partieA {
    width: calc(19%);
    float: left;
    height: 100vh;
    border: solid 0.5px;
    margin: 20px;
    border-radius: 10px;
    position: fixed;
    left: 0;
    box-shadow: 1px -1px 10px  5px#464848;
    background-color:#f3f2ef;
 

}


.all>.partieB {
    width: calc(60%);
    float: left;
    height: auto;
    position: absolute;
    left: 20%;
 
}

.carde {
    width: 80%;
    height: 25vh;
    border: solid 1px;
    border-radius: 10px;
    margin-top: 20px;
    background-color: #ffff;
}

.imge {
    height: 60px;
    width: 60px;
    border-radius: 30px;
    border: solid 1px ;


}

.inptpub {
    height: 48px;
    width: 50%;
    border: solid 1px;
    border-radius: 20px;
    background-color: #f3f2ef;
    outline-style: none;

}



.all>.partieC {

    width: calc(19%);
    float: left;
    height: 100vh;
    border: solid 0.5px;
    margin: 20px;
    border-radius: 10px;
    position: fixed;
    right: 0;
    box-shadow: 1px -1px 10px  5px#464848;
 background-color: #f3f2ef;
}

.profile{
    width: 80%;
    height: 30%;
   background-color: white;
   border: solid 1px;
   border-radius: 10px;
    margin:60px 30px 30px 30px;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;

}
.imgeprfile{
    width: 46%;
    height: 50%;
    border: solid 1px ;
    margin-bottom: 10px   ;
    border-radius:70px ;
    box-shadow: 10px 5px 5px #464848;
    margin-top:10px;

}


/* css publicatio */


.timeline {
list-style-type: none;
margin: 0;
padding: 0;
position: relative
}

.timeline:before {
content: '';
position: absolute;
top: 5px;
bottom: 5px;
width: 5px;
background: #2d353c;
left: 20%;
margin-left: -2.5px
}

.timeline>li {
position: relative;
min-height: 50px;
padding: 20px 0
}

.timeline .timeline-time {
position: absolute;
left: 0;
width: 18%;
text-align: right;
top: 30px
}

.timeline .timeline-time .date,
.timeline .timeline-time .time {
display: block;
font-weight: 600
}

.timeline .timeline-time .date {
line-height: 16px;
font-size: 12px
}

.timeline .timeline-time .time {
line-height: 24px;
font-size: 20px;
color: #242a30
}

.timeline .timeline-icon {
left: 15%;
position: absolute;
width: 10%;
text-align: center;
top: 40px
}

.timeline .timeline-icon a {
text-decoration: none;
width: 20px;
height: 20px;
display: inline-block;
border-radius: 20px;
background: #d9e0e7;
line-height: 10px;
color: #fff;
font-size: 14px;
border: 5px solid #2d353c;
transition: border-color .2s linear
}
.timeline-body{
border:solid 1px;
padding: 30px;
width: 70%;
background-color: white;

}

.timeline .timeline-body {
margin-left: 23%;
margin-right: 17%;
background: #fff;
position: relative;
padding: 20px 25px;
border-radius: 6px;

}

.timeline .timeline-body:before {
content: '';
display: block;
position: absolute;
border: 10px solid transparent;
border-right-color: #fff;
left: -20px;
top: 20px
}

.timeline .timeline-body>div+div {
/* margin-top: 15px */
}

.timeline .timeline-body>div+div:last-child {
margin-bottom: -20px;
padding-bottom: 20px;
border-radius: 0 0 6px 6px
}

.timeline-header {
padding-bottom: 10px;
border-bottom: 1px solid #e2e7eb;
line-height: 30px
}

.timeline-header .userimage {
float: left;
width: 34px;
height: 34px;
border-radius: 40px;
overflow: hidden;
margin: -2px 10px -2px 0
}

.timeline-header .username {
font-size: 16px;
font-weight: 600
}

.timeline-header .username,
.timeline-header .username a {
color: #2d353c
}

.timeline img {
max-width: 100%;
display: block
}

.timeline-content {
letter-spacing: .25px;
line-height: 18px;
font-size: 13px
}

.timeline-content:after,
.timeline-content:before {
content: '';
display: table;
clear: both
}

.timeline-title {
margin-top: 0
}

.timeline-footer {
background: #fff;
border-top: 1px solid #e2e7ec;
padding-top: 15px
}

.timeline-footer a:not(.btn) {
color: #575d63
}

.timeline-footer a:not(.btn):focus,
.timeline-footer a:not(.btn):hover {
color: #2d353c
}

.timeline-likes {
color: #6d767f;
font-weight: 600;
font-size: 12px
}

.timeline-likes .stats-right {
float: right
}

.timeline-likes .stats-total {
display: inline-block;
line-height: 20px
}

.timeline-likes .stats-icon {
float: left;
margin-right: 5px;
font-size: 9px
}

.timeline-likes .stats-icon+.stats-icon {
margin-left: -2px
}

.timeline-likes .stats-text {
line-height: 20px
}

.timeline-likes .stats-text+.stats-text {
margin-left: 15px
}

.timeline-comment-box {
background: #f2f3f4;
margin-top: 30px;

width:100%;
}

.timeline-comment-box .user {
float: left;
width: 34px;
height: 34px;
overflow: hidden;
border-radius: 30px
}

.timeline-comment-box .user img {
max-width: 100%;
max-height: 100%
}

.timeline-comment-box .user+.input {
margin-left: 44px
}

.lead {
margin-bottom: 20px;
font-size: 21px;
font-weight: 300;
line-height: 1.4;
}

.text-danger, .text-red {
color: #ff5b57!important;
}


a h6{
margin-top: 40px;
color: black;
width: 100%;

display: flex;
justify-content: center;
color: goldenrod;



}
a h6:hover{
color: black;
}
.acat{
text-decoration: none;

}
.tootpC{

margin-top: 20px;
color: black;
width:100%; 
padding:10px;
display: flex;
justify-content: center;
}
.tootpC:hover{
color:goldenrod
}

.allpub{
padding: 20px;
border: solid black 1px;
display: flex;
justify-content:center ;
background-color:#f3f2ef ;
}
.img1{
width: 100%;
height: 40%;
}

.container{
background-color: brown;
}
.username{
margin: 0px 10px 0px 10px;
}
</style>

<body>
    <?php require APPROOT . '/views/inc/navbar.php'; ?>

    <div class="all">



        <div class="part partieB">
            <div class="d-flex justify-content-center ">
                <div class="carde">
                    <form action="<?php echo URLROOT ?>/admincontroller/postpub" method="post" enctype="multipart/form-data">
                        <div class="d-flex align-items-center justify-content-evenly" style="margin-top:15px">
                            <img class="imge" src="<?php echo URLROOT ?>/img/ana.jpg" alt="vv">

                            <input class="inptpub" type="textarea" name="text_pub" rows="10" cols="20"
                                placeholder="Commencer un post">

                        </div>

                        <div style="height:5vh"></div>
                        <div class="d-flex justify-content-evenly align-items-center" style="height:10vh;">
                            <div> <label for="img">Select image:</label>
                                <input class="btn btn-warning fa fa-image" type="file" id="img" name="img"
                                    accept="image/*"></div>


                            <div></div>

                            <input style="background-color:RGB(22, 160, 197);" type="submit" value="Publier"
                                class="btn btn-secondary ">

                        </div>
                    </form>
                    <div style="border-bottom:solid 2px ;margin:70px 0px 20px 0px"></div>
                    <h6 class="d-flex justify-content-center">New publication it's here</h6>


                    <!-- publiaction add -->

                    <?php foreach($data['publication']   as $value): ?>
                    <div class="allpub">
                        <div class="timeline-body">
                            <div class="timeline-header">
                                <span><img class="imge" src="data:image/png;base64,<?php echo $value->IMAGEPROFILE ?>"
                                        alt="profile"></span>  <span class="username"><a style="text-decoration: none;" href="<?php echo URLROOT ?>/users/profile?>"> <small>  <?php echo $value->NAME_USERTALENT ?> </small></a></span>
                                <small> <i class="fad fa-globe-africa "></i></small>
                                <span class="pull-right text-muted"><?php echo $value->date_pub ?></span>
                            </div>
                            <div class="timeline-content">
                                <p>
                                    <?php echo $value->text_pub ?>
                                </p>
                            </div>

                            <img class="img1" src="data:image/*;base64,<?= $value->img?>" alt="omg">

                            <div class="timeline-footer">
                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i
                                        class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i
                                        class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a>
                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i
                                        class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
                            </div>
                            <div class="timeline-comment-box">
                                <div class="user"><img src="data:image/*;base64,<?php echo$data['img'] ; ?>"></div>
                                <div class="input">
                                    <form action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control rounded-corner"
                                                placeholder="Write a comment...">
                                            <span class="input-group-btn p-l-10">
                                                <button style="margin:0px 0px 0px 20px"
                                                    class="btn btn-primary f-s-12 rounded-corner"
                                                    type="button">Comment</button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                    <!-- publiaction add -->




                </div>

            </div>







        </div>

        <div class="part partieC">
            <div class="profile" class="d-flex flex-colmun align-items-center">
                <img class="imgeprfile" src="data:image/png;base64,<?php echo $value->IMAGEPROFILE?> " alt="">
                <div style="width:100%">
                    <h3 style="margin-top:10px;font-size:15px;color:RGB(22, 160, 197);"
                        class="d-flex justify-content-center"><?php echo $value->NAME_USERTALENT ?> </h3>
                </div>

                <a href="<?php echo URLROOT ?>/users/profileadmin?>"><button style="background-color:RGB(22, 160, 197);"
                        type="button" class="btn btn-secondary ">View prfile</button></a>
            </div>

            <a href="<?= URLROOT?>/users/allusers/  "> <button>View all Users</button></a>
            <a href="<?php echo URLROOT ?>/users/getpub"><input type="button" value="show"></a>

            <tr>

            </tr>


        </div>




    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script>
        $('#exampleModal').on('shown.bs.modal', function () {
            console.log('is clicked')
        })
    </script>

</body>

</html>