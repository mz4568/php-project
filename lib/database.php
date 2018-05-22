
<?php
class Database{

public $host = DB_HOST;
public $user = DB_USER;
public $pass = DB_PASS;
public $name = DB_NAME;

public $link;
public $error;

public function __construct(){
   $this->connectionDB();
}
private function connectionDB(){
       $this->link = new mysqli($this->host,$this->user,$this->pass,$this->name);
       if(!$this->link){
       	$this->error="connection_fail".$this->link="connect error";
       	return false;
       }

}

  public function insert($query){
  	$result=$this->link->query($query);
  	if($result){
     $msg = "data Insert Successfully";
     return($msg);
    }
  }
   public function select($query){
    $result=$this->link->query($query);
    if($result->num_rows>0){
     return($result);
    }
  }



}






?>