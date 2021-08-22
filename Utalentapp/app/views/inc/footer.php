<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
      footer{
        height:300px;
      }
body{
	line-height: 1.5;
	font-family: 'Poppins', sans-serif;
    
}
*{
	margin:0;
	padding:0;
	box-sizing: border-box;
}
.container{
	max-width: 1170px;
	margin:auto;
}
.row{
	display: flex;
	flex-wrap: wrap;
}
ul{
	list-style: none;
}
li{
	text-align: justify;
}
.footer{
	background-color: #02091a;
    padding: 70px 0;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
	font-size: 18px;
	color: #ffffff;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
} 
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 300;
	color: #bbbbbb;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover{
	color: #ffffff;
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(255,255,255,0.2);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #ffffff;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #24262b;
	background-color: #ffffff;
}

@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}





    </style>
</head>
<body>
    

<footer style="margin-top:40px;" class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>Sitesoch</h4>
  	 			<ul>
  	 				<li><a href="<?php echo URLROOT ?>/pages/index">Home</a></li>
  	 				<li><a href="<?php echo URLROOT ?>/pages/about">About</a></li>
  	 				<li><a href="#">Pricing</a></li>
  	 				<li><a href="#">Privacy Policy</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4 id="contact">Contact</h4>
  	 			<ul>
  	 			
  	 				<li><a href="#">Contact : <br> Phone : +21289429531 <br> Email : <br> Amine2020zouhaid@gmail.com </a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Address</h4>
  	 			<ul>
  	 				<li><a href="#">RUE MOLAY RACHID, N° 19 , SIDI AHMED YOUSSOUFIA CITY  MORROCO</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="https://www.linkedin.com/in/amine-zouhaid-90708420b/"><i class="fa fa-linkedin"></i></a>
  	 				<a href="https://facebook.com/amine.zouhaide.7"><i class="fa fa-facebook"></i></a>
  	 				<a href="https://www.instagram.com/amiine__exo/"><i class="fa fa-instagram"></i></a>
  	 				<a href="https://twitter.com/Aminezouhaid/"><i class="fa fa-twitter"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>

      <h6 class="d-flex justify-content-center " style="color:#ffffff;font-family: Verdana, Arial, sans-serif; opacity:60%">© Copyright 2021- 2021 Utalentapp.ma </h6> 
  </footer>


</body>

</html>