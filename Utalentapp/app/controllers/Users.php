<?php
class Users extends controller {

public function __construct(){
    $this->userModel = $this->model('User');
}
public function index(){
    $this->view('pages/index');
      
    }


    public function categorie($id_cat){

       $cat_users = $this->userModel->selectcategorie($id_cat);



        $data = [
            'cat_users' => $cat_users,
            'img' => $_SESSION['img'],
            'user_categorie' =>  $_SESSION['user_categorie'],
           ];
          
    
        $this->view('users/categorie',$data);
          
        }

        
    


    public function profile(){
        $data = [
            'user_id' => $_SESSION['user_id'],
            'user_name' => $_SESSION['user_name'],
            'img' => $_SESSION['img'],
            'user_profile' =>  $_SESSION['user_profile'],
            'user_age' =>  $_SESSION['user_age'],
            'user_adress' =>  $_SESSION['user_adress'],
            'user_pays' =>  $_SESSION['user_pays'],
            'user_phone' =>  $_SESSION['user_phone'],
            'user_ville' =>  $_SESSION['user_ville'],
            'user_categorie' =>  $_SESSION['user_categorie'],
         
          
        ];

        $this->view('users/profile', $data);
    }

    public function update(){
        $data=[
            
          'NAME_USERTALENT' => $_POST['name'],
          'AGE_USERTALENT' => $_POST['age'],
          'ADRESS_USERTALENT' => $_POST['adress'],
          'VILLE_USERTALENT' => $_POST['ville'],
          'NATIONALITE_USERTALENT' => $_POST['pays'],
          'CATEGORIE' => $_POST['categorie'],
          'TELEPHON_USERTALENT' => $_POST['phone'],
        
          'user_id' => $_SESSION['user_id'],
            'user_name' => $_SESSION['user_name'],
            'img' =>  $_SESSION['img'],
            'user_age' =>  $_SESSION['user_age'],
            'user_adress' =>  $_SESSION['user_adress'],
            'user_pays' =>  $_SESSION['user_pays'],
            'user_phone' =>  $_SESSION['user_phone'],
            'user_ville' =>  $_SESSION['user_ville'],
            'user_categorie' =>  $_SESSION['user_categorie'],
         
        ];
      if($this->userModel->update($data)){
  redirect('pages/home',$data);
      }else{
        $this->view('users/updateprfl');
      }
  $this->view('users/updateprfl',$data);
      }


    public function about(){
        $this->view('pages/about');
          
        }




        public function adminpage(){
            $data = [
                'user_id' => $_SESSION['user_id'],
                'user_name' => $_SESSION['user_name'],
                'user_profile' =>  $_SESSION['user_profile'],
          
            ];
    
            $this->view('pages/adminpage', $data);
        }

        public function profileadmin(){
            $data = [
                'user_id' => $_SESSION['user_id'],
                'user_name' => $_SESSION['user_name'],
            
                'user_profile' =>  $_SESSION['user_profile'],
                'user_age' =>  $_SESSION['user_age'],
                'user_adress' =>  $_SESSION['user_adress'],
                'user_pays' =>  $_SESSION['user_pays'],
                'user_phone' =>  $_SESSION['user_phone'],
                'user_ville' =>  $_SESSION['user_ville'],
                'user_categorie' =>  $_SESSION['user_categorie'],
             
              
            ];
            $this->view('users/profileadmin', $data);
        }

        
    
    public function home(){

       
   
        $data = [
            'user_id' => $_SESSION['user_id'],
            'user_name' => $_SESSION['user_name'],
            'user_profile' =>  $_SESSION['user_profile'],
            'img' => $_SESSION['img'],
      
        ];
        $pub = $this->userModel->getpubl();



    
        $this->view('pages/home', $data,$pub);
    }

    
    public function show(){
        $data = [
            'user_id' => $_SESSION['user_id'],
            'user_name' => $_SESSION['user_name'],
            'user_profile' =>  $_SESSION['user_profile'],
            'img' => $_SESSION['img'],
      
        ];

        $this->view('pages/home', $data);
    }


    

    // add publication
    public function addpublication(){
        $data=[
          'nameart' => $_POST['textpub'],
          'art'=>$_POST['art'],
          'description'=>$_POST['description'],
  
        ];
        $this->userModel->addblog($data);
        redirect('Pages/user');
          }
     public function delete($id){
       $this->userModel->deleteblog($id);
       redirect('pages/user');
        }


     // admin session method
     public function createUserSession($user) {
        $_SESSION['user_id'] = $user->ID_USERTALENT ;
        $_SESSION['user_name'] = $user->NAME_USERTALENT;
        $_SESSION['user_profile'] = $user->IMAGEPROFILE;
        $_SESSION['user_age'] = $user->AGE_USERTALENT;
        $_SESSION['user_ville'] = $user->VILLE_USERTALENT;
        $_SESSION['user_adress'] = $user->ADRESS_USERTALENT;
        $_SESSION['user_phone'] = $user->TELEPHON_USERTALENT;
        $_SESSION['user_pays'] = $user->NATIONALITE_USERTALENT;
        $_SESSION['user_categorie'] = $user->CATEGORIE;
        $_SESSION['img']= $user->IMAGEPROFILE;
        if($user->role_id==1){
        redirect('pages/home');
    }else{
        redirect('pages/adminpage');
    }
      
        
    } 
//     public function addprofile(){
        
//         if($_SERVER['REQUEST_METHOD'] == 'POST'){
//             // Sanitize POST array
//             $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
//             $image_base64 = base64_encode(file_get_contents($_FILES['img']['tmp_name']) );
    
//             // $image_base64 = base64_encode(file_get_contents($_FILES['img']['tmp_name']) );
//             // Insert record
           
  
          
      
         

//         $data=[
           
//             'img' => $image_base64,
           
          
//         ];
       
        
//         // var_dump($_SESSION['user_id']);
//      $this->userModel->addprofile($data);
  
    
     
          
        
    

// }
// $this->view('users/photoprfl');
// }

  

public function post(){
        
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $image_base64= base64_encode(file_get_contents($_FILES['img']['tmp_name']) );

        // $image_base64 = base64_encode(file_get_contents($_FILES['img']['tmp_name']) );
        // Insert record
       

      
  
     

    $pub=[
        'text_pub'=>trim($_POST['text_pub']),
        'id_user'=>trim( $_SESSION['user_id']) ,
        'img' => $image_base64,
       
      
    ];
   
    
    // var_dump($_SESSION['user_id']);
if( $this->userModel->addPost($pub)){
  redirect('pages/home',$pub);
}else{
  die("semting error ");
}

       
    
    
 
      

}
$this->view('pages/home');
}

    public function getpub(){



       $pub = $this->userModel->getpubl();



       $this->view('pages/home',$pub);
  

     
}



     
 


   
    public function login(){

        // Check for POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      
        // Init data
        $data =[
          'EMAIL_USERTALENT' => trim($_POST['email']),
          'PASSWORD_USERTALENT' => trim($_POST['password']),
          'email_err' => '',
          'password_err' => '',   
               
           
        ];


if( $this->userModel->login($data)){
    $loggedInUser = $this->userModel->login($data);
    $this->createUserSession($loggedInUser);
        
}else{
    $this->view('Users/login',$data);
}
      }  
       $this->view('Users/login');
   
    }

   


        // public function photoprfl(){

        // // Check for POST
        // if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //     // Process form
        //     // Sanitize POST data
        //     $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
        //     $data =[
        //         'IMAGEPROFILE' => trim($_POST['image']),

        //         'image_err' => '',
                
        //       ];

        //       if( $this->userModel->photoprfl($data)){

        //         redirect('users/login');
             
        //      }else{
        //          $this->view('Users/photoprfl');
        //      }

           
        
        // }
    
    //  $this->view('users/photoprfl');
    //     }

    public function updateprfl(){

        $data = [
            'user_id' => $_SESSION['user_id'],
            'user_name' => $_SESSION['user_name'],
            'img' =>  $_SESSION['img'],
            'user_age' =>  $_SESSION['user_age'],
            'user_adress' =>  $_SESSION['user_adress'],
            'user_pays' =>  $_SESSION['user_pays'],
            'user_phone' =>  $_SESSION['user_phone'],
            'user_ville' =>  $_SESSION['user_ville'],
            'user_categorie' =>  $_SESSION['user_categorie'],
         
          
        ];


 $this->view('users/updateprfl',$data);
    }
        
    public function updateprflaadmin(){

        $data = [
            'user_id' => $_SESSION['user_id'],
            'user_name' => $_SESSION['user_name'],
            'img' => $_SESSION['img'],
            'user_profile' =>  $_SESSION['user_profile'],
            'user_age' =>  $_SESSION['user_age'],
            'user_adress' =>  $_SESSION['user_adress'],
            'user_pays' =>  $_SESSION['user_pays'],
            'user_phone' =>  $_SESSION['user_phone'],
            'user_ville' =>  $_SESSION['user_ville'],
            'user_categorie' =>  $_SESSION['user_categorie'],
         
          
        ];


 $this->view('users/updateprflaadmin',$data);
    }




  public function register(){


     if($_SERVER['REQUEST_METHOD']=='POST') {
          $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          $image_base64= base64_encode(file_get_contents($_FILES['img']['tmp_name']) );
       $data =[
        'NAME_USERTALENT'=>$_POST['username'],
        'EMAIL_USERTALENT'=>$_POST['useremail'],
        'PASSWORD_USERTALENT'=>$_POST['userpassword'],
        'AGE_USERTALENT'=>$_POST['userage'],
        'CATEGORIE'=>$_POST['usercategorie'],
        'VILLE_USERTALENT'=>$_POST['userville'],
        'TELEPHON_USERTALENT'=>$_POST['userphone'],
        'NATIONALITE_USERTALENT'=>$_POST['userpays'],
        'ADRESS_USERTALENT'=>$_POST['useradress'],
        'IMAGEPROFILE' => $image_base64,
        

        
        

        'name_err'=>'',
        'email_err'=>'',
        'password_err'=>'',
        'age_err'=>'',
        'categorie_err'=>'',
        'ville_err'=>'',
        'phone_err'=>'',
        'pays_err'=>'',
        'adress_err'=>'',
        'img_err'=>'',

        // validation seccess

        'name_secc'=>'',
        'email_secc'=>'',
        'password_secc'=>'',
        'age_secc'=>'',
        'pays_secc'=>'',
        'adress_secc'=>'',
        'ville_secc'=>'',
        'phone_secc'=>'',
        'categorie_secc'=>'',
        'img_secc'=>'',
  
     ];
   
   
     if(empty($data['NAME_USERTALENT'])) $data['name_err']='please fill your name ';
     if(empty($data['EMAIL_USERTALENT'])) $data['email_err']='please fill your email ';
     if(empty($data['PASSWORD_USERTALENT'])) $data['password_err']='please fill your password';
    
     if(empty($data['AGE_USERTALENT'])) $data['age_err']='please fill your age ';
     if(empty($data['CATEGORIE'])) $data['categorie_err']='please fill your categorie ';
     if(empty($data['VILLE_USERTALENT'])) $data['ville_err']='please fill your country';
    
     if(empty($data['TELEPHON_USERTALENT'])) $data['phone_err']='please fill your phone ';
     if(empty($data['NATIONALITE_USERTALENT'])) $data['pays_err']='please fill your pays ';
     if(empty($data['ADRESS_USERTALENT'])) $data['adress_err']='please fill your adress';
     if(empty($data['IMAGEPROFILE'])) $data['img_err']='please fill your image';  
    

     if(!empty($data['NAME_USERTALENT'])) $data['name_secc']='name seccess ';
     if(!empty($data['EMAIL_USERTALENT'])) $data['email_secc']='email seccess ';
     if(!empty($data['PASSWORD_USERTALENT'])) $data['password_secc']='password seccess';
    
     if(!empty($data['AGE_USERTALENT'])) $data['age_secc']=' age seccess ';
     if(!empty($data['CATEGORIE'])) $data['categorie_secc']=' categorie  seccess  ';
     if(!empty($data['VILLE_USERTALENT'])) $data['ville_secc']=' country   seccess ';
    
     if(!empty($data['TELEPHON_USERTALENT'])) $data['phone_secc']=' phone   seccess ';
     if(!empty($data['NATIONALITE_USERTALENT'])) $data['pays_secc']=' pays  seccess  ';
     if(!empty($data['ADRESS_USERTALENT'])) $data['adress_secc']=' adress  seccess ';
     if(empty($data['IMAGEPROFILE'])) $data['img_secc']='please fill your image';  


    

 
     if(empty($data['name_err']) &&   empty($data['email_err']) &&  empty($data['password_err'])   
   
     && empty($data['age_err'])  && empty($data['categorie_err'])  && empty($data['ville_err'])    &&   empty($data['pays_err']) &&  empty($data['adress_err'])  && empty($data['phone_err'])   &&  empty($data['img_err'])  ){
    
  
        $this->userModel->add($data);   
           redirect('users/login',$data);

       
      } else{
        $this->view('Users/register',$data);

      
       }

  



     
       }
       
       
       else{
       $data =[
                'NAME_USERTALENT'=>'',
                'EMAIL_USERTALENT'=>'',
                'PASSWORD_USERTALENT'=>'',
                'AGE_USERTALENT'=>'',
                'VILLE_USERTALENT'=>'',
                'TELEPHON_USERTALENT'=>'',
                'NATIONALITE_USERTALENT'=>'',
                'CATEGORIE'=>'',
                'ADRESS_USERTALENT'=>'',
                'IMAGEPROFILE'=>"",
        
        
                'name_err'=>'',
                'email_err'=>'',
                'password_err'=>'',
                'age_err'=>'',
                'categorie_err'=>'',
                'ville_err'=>'',
                'phone_err'=>'',
                'pays_err'=>'',
                'adress_err'=>'',
                'img_err'=>'',
        
        
        
                'name_secc'=>'',
                'email_secc'=>'',
                'password_secc'=>'',
                'age_secc'=>'',
                'pays_secc'=>'',
                'adress_secc'=>'',
                'ville_secc'=>'',
                'phone_secc'=>'',
                'categorie_secc'=>'',
                'img_secc'=>'',
          
        
                // 'name_err'=>'',
                // 'email_err'=>'',
                // 'password_err'=>'',
                
            


            ];
          
        }    
         $this->view('Users/register',$data);
            
    }     




    public function logout(){
        unset($_SESSION['user_id']);
        unset($_SESSION['user_age']);
        unset($_SESSION['user_name']);
        session_destroy();
        redirect('users/login');
      }
    
 }

