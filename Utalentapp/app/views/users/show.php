<!-- 
// class Users extends controller {

// public function __construct(){
//     $this->userModel = $this->model('User');
// }
// public function index(){
//     $this->view('Users/register');
      
//     }

    
// public function register(){
// if($_SERVER['REQUEST_METHOD']=='POST'){
//     $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
//    $data =[
//         'NAME_USERTALENT'=>$_POST['username'],
//         'EMAIL_USERTALENT'=>$_POST['useremail'],
//         'PASSWORD_USERTALENT'=>$_POST['userpassword'],
//         'AGE_USERTALENT'=>$_POST['userage'],
//         'CATEGORIE'=>$_POST['usercategorie'],
//         'VILLE_USERTALENT'=>$_POST['userville'],
//         'TELEPHON_USERTALENT'=>$_POST['userphone'],
//         'NATIONALITE_USERTALENT'=>$_POST['userpays'],
//         'ADRESS_USERTALENT'=>$_POST['useradress']
//         // 'name_err'=>'',
//         // 'email_err'=>'',
//         // 'password_err'=>'',
        
//     ];
//     if(empty($data['NAME_USERTALENT'])) $data['name_err']='please fill your name ';
//     if(empty($data['EMAIL_USERTALENT'])) $data['email_err']='please fill your email ';
//     if(empty($data['PASSWORD_USERTALENT'])) $data['password_err']='please fill your password';
   
//     if(empty($data['AGE_USERTALENT'])) $data['age_err']='please fill your age ';
//     if(empty($data['CATEGORIE'])) $data['categorie_err']='please fill your categorie ';
//     if(empty($data['VILLE_USERTALENT'])) $data['ville_err']='please fill your country';
   
//     if(empty($data['TELEPHON_USERTALENT'])) $data['phone_err']='please fill your phone ';
//     if(empty($data['NATIONALITE_USERTALENT'])) $data['pays_err']='please fill your pays ';
//     if(empty($data['ADRESS_USERTALENT'])) $data['adress_err']='please fill your adress';

//     if(empty($data['name_err']) &&   empty($data['email_err']) &&  empty($data['password_err'])   
//     && empty($data['age_err'])  && empty($data['categorie_err'])  && empty($data['ville_err']) &&  empty($data['pays_err']) &&  empty($data['adress_err'])  && empty($data['phone_err'])   ){
//         if($this->userModel->add($data)){

//                 $this->view('Users/login', $data);
            
//             }else{
              
//                 $this->view('Users/register', $data);
            
//             }
//     } 


// }
// else {
//     $data =[
//                 'NAME_USERTALENT'=>'',
//                 'EMAIL_USERTALENT'=>'',
//                 'PASSWORD_USERTALENT'=>'',
//                 'AGE_USERTALENT'=>'',
//                 'VILLE_USERTALENT'=>'',
//                 'TELEPHON_USERTALENT'=>'',
//                 'NATIONALITE_USERTALENT'=>'',
//                 'CATEGORIE'=>'',
//                 'ADRESS_USERTALENT'=>''
        
        
        
        
        
        
        
//                 // 'name_err'=>'',
//                 // 'email_err'=>'',
//                 // 'password_err'=>'',
                
//             ];
//     $this->view('Users/register');
// }
// }} -->

