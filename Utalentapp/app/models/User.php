<?php
 

 class User 
 {
private $db;
public function  __construct(){

    $this->db = new Database ;
}

public function getUserByEmail($email){

    $this->db->query(" SELECT * from usertalent WHERE  EMAIL_USERTALENT=:email");
    $this->db->bind(':email', $email);
    $this->db->execute();
if($this->db->rowCount()) return true;
else return false ;

}

public function getpubl(){

    $this->db->query("SELECT * FROM `publication1`  INNER JOIN usertalent ON usertalent.ID_USERTALENT  = publication1.id_user");
    $pub= $this->db->resultSet();
    if($pub) return $pub;
    else return false;
   
    
 
}
public function login($data){
    $this->db->query('SELECT * FROM usertalent WHERE EMAIL_USERTALENT = :email AND PASSWORD_USERTALENT=:password');
    $this->db->bind(':email', $data['EMAIL_USERTALENT']);
    $this->db->bind(':password', $data['PASSWORD_USERTALENT']);

   return $this->db->single();

 
  }
  public function  selectcategorie ($id_cat){
    $this->db->query('SELECT * FROM usertalent WHERE 	CATEGORIE = :cat');
    $this->db->bind(':cat',  $id_cat);
   return $this->db->resultSet();

 
  }



//   public function photoprf($data){
//       $this->db->query("INSERT INTO `usertalent` (`IMAGEPROFILE` ) VALUES (:image)");
//       $this->db->bind(':image', $data['IMAGEPROFILE']);
//       $this->db->execute();

//   }
  public function getUserbyId($id) {
      $this->db->query("SELECT * FROM `usertalent` WHERE  ID_USERTALENT = :id");
      $this->db->bind(":id", $id);
      $this->db->execute();
  }


 

//   add publication model

// public function addblog($data){
//     $this->db->query('INSERT INTO `publication`(`TEXT_PUB`) VALUES (:nameart)');
//    $this->db->bind(':nameart',$data['nameart']);
  
//     $this->db->execute();
//   }
  




//  public function register($data){
// $this->db->query("INSERT INTO `usertalent`(`NAME_USERTALENT`, `EMAIL_USERTALENT`, `PASSWORD_USERTALENT`, `AGE_USERTALENT`, `TELEPHON_USERTALENT`, `ADRESS_USERTALENT`, `VILLE_USERTALENT`, `NATIONALITE_USERTALENT`, `CATEGORIE`)
//  VALUES (:name, :email, :password, :age, :phone, :adress, :ville, :pays, :categorie) ");
// $this->db->bind( ':name', $data['name']);
// $this->db->bind( ':email', $data['email']);
// $this->db->bind( ':password', $data['password']);
// $this->db->bind( ':age', $data['age']);
// $this->db->bind( ':phone', $data['phone']);
// $this->db->bind( ':adress',  $data['adress']);
// $this->db->bind( ':ville', $data['ville']);
// $this->db->bind( ':pays',  $data['pays']);
// $this->db->bind( ':categorie', $data['categorie']);
// $this->db->bind( ':ID_ADMIN ', 1);



// $this->db->execute() ;
public function addPost($pub){
    $this->db->query("INSERT INTO `publication1`( `text_pub`,`id_user`,`img`) VALUES (:text_pub,:id_user,:img)");
    $this->db->bind(':text_pub',  $pub['text_pub']); 
    $this->db->bind(':id_user',  $pub['id_user']); 
    $this->db->bind(':img',  $pub['img']); 
   if($this->db->execute())  return true;
     
       else return false;

       
   
   

}

// public function addprofile($data){
//     $this->db->query("INSERT INTO `usertal`( `IMAGEPROFILE`) VALUES (:img)");
//     $this->db->bind(':img',  $data['img']); 
//     $this->db->execute();
   

// }


 public  function add($data)
 {
     $this->db->query("INSERT INTO `usertalent` (`ID_ADMIN`, `NAME_USERTALENT`, `EMAIL_USERTALENT`, `PASSWORD_USERTALENT`, `AGE_USERTALENT`, `TELEPHON_USERTALENT`, `ADRESS_USERTALENT`, `VILLE_USERTALENT`, `NATIONALITE_USERTALENT`, `CATEGORIE`,`role_id`, `IMAGEPROFILE`)
      VALUES (:id_admin, :name, :email, :password, :age, :phone, :adresse, :ville, :pays, :categorie ,:role_id,:img)");
      $this->db->bind(':id_admin', 1);
      $this->db->bind(':name',  $data['NAME_USERTALENT']); 
      $this->db->bind (':email', $data['EMAIL_USERTALENT']);
      $this->db->bind (':password', $data['PASSWORD_USERTALENT']);
      $this->db->bind (':age', $data['AGE_USERTALENT']);
      $this->db->bind (':phone', $data['TELEPHON_USERTALENT']);
      $this->db->bind (':adresse', $data['ADRESS_USERTALENT']);
      $this->db->bind (':ville', $data['VILLE_USERTALENT']);
      $this->db->bind (':pays' ,$data['NATIONALITE_USERTALENT']);
      $this->db->bind (':categorie' ,$data['CATEGORIE']);
      $this->db->bind(':role_id', 1);
      $this->db->bind (':img' ,$data['IMAGEPROFILE']);
      $this->db->execute();

    

 }

 public function update($data){
    $this->db->query('UPDATE `usertalent` SET NAME_USERTALENT=:NAME_USERTALENT, AGE_USERTALENT=:AGE_USERTALENT,ADRESS_USERTALENT=:ADRESS_USERTALENT,VILLE_USERTALENT=:VILLE_USERTALENT,TELEPHON_USERTALENT=:TELEPHON_USERTALENT, NATIONALITE_USERTALENT=:NATIONALITE_USERTALENT,CATEGORIE=:CATEGORIE WHERE ID_USERTALENT=:id  ');
    $this->db->bind(':id',$data['user_id']);
    $this->db->bind(':NAME_USERTALENT',$data['NAME_USERTALENT']);
    $this->db->bind(':AGE_USERTALENT',$data['AGE_USERTALENT']);
    $this->db->bind(':ADRESS_USERTALENT',$data['ADRESS_USERTALENT']);
    $this->db->bind(':VILLE_USERTALENT',$data['VILLE_USERTALENT']);
    $this->db->bind(':TELEPHON_USERTALENT',$data['TELEPHON_USERTALENT']);
    $this->db->bind(':NATIONALITE_USERTALENT',$data['NATIONALITE_USERTALENT']);
    $this->db->bind(':CATEGORIE',$data['CATEGORIE']);
    if($this->db->execute()){
      return true;
    }else{
      return false;
    }
  }
  


 }


 