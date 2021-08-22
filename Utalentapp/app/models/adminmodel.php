<?php
 

 class adminmodel
 {
private $db;
public function  __construct(){

    $this->db = new Database ;

}

public function getpubl(){

    $this->db->query("SELECT * FROM `publication1`  INNER JOIN usertalent ON usertalent.ID_USERTALENT  = publication1.id_user");
    $pub= $this->db->resultSet();
    if($pub) return $pub;
    else return false;
   
    
 
}


public function select(){
    $this->db->query("SELECT * FROM `publication1` ");

    return $this->db->resultSet();

}

public function addPost($pub){
    $this->db->query("INSERT INTO `publication1`( `text_pub`,`id_user`,`img`) VALUES (:text_pub,:id_user,:img)");
    $this->db->bind(':text_pub',  $pub['text_pub']); 
    $this->db->bind(':id_user',  $pub['id_user']); 
    $this->db->bind(':img',  $pub['img']); 
   if($this->db->execute())  return true;
     
       else return false;

       
   
   

}

 }