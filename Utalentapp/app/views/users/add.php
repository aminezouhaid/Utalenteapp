<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <form action="<?php echo URLROOT ?>/users/post  "   method="post" enctype="multipart/form-data">
                        <div class="d-flex align-items-center justify-content-evenly" style="margin-top:15px">
                              
                            
                            <input class="inptpub" type="textarea" name="text_pub"  rows="10" cols="20" placeholder="Commencer un post">
                            <input class="btn btn-warning fa fa-image"  type="file"  multiple id="img" name="img" accept="image/*">
                        </div> 
                       
                    
                      
                    
                            <input style="background-color:RGB(22, 160, 197);" type="submit" value="Publier" class="btn btn-secondary ">
                            
                    
                    </form>
       </div>
</body>
</html>