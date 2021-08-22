<?php
class admincontroller extends controller {

public function __construct(){
    $this->adminModel = $this->model('adminmodel');
     
}


// public function getpup(){



// //     $pub = $this->adminModel->getpubl();



// //     $this->view('pages/home',$pub);


  
// // }

public function index(){
    $publication=$this->adminModel->getpubl();

    $data=[
'publication'=>$publication,
    ];

    $this->view('pages/adminpage',$data);
}
// public function show(){
//     $this->adminModel->select();
//     header('location:' . URLROOT . '/admincontroller/index');
// }


public function postpub(){
        
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
if( $this->adminModel->addPost($pub)){
  redirect('pages/adminpage',$pub);
}else{
  die("semting error ");
}

       
    
    
 
      

}
$this->view('pages/adminepage');
}


}
