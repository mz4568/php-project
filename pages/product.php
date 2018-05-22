<?php

include_once '/../lib/config.php';
include_once '/../lib/database.php';
//include_once 'Helper.php';

class Product {

    private $db;
    private $helpObj;
   

    public function __construct() {

        $this->db = new Database();
       // $this->helpObj = new Helper();
    }

    public function getProductData(){
        $query = 'SELECT * from product';
        $stmt = $this->db->select($query);
        $rows=array();
        if($stmt->num_rows>0){
            while( $row=$stmt->fetch_assoc()) {
                  $rows[]=$row;
            }
         return $rows;
        }


    }
    public function getProductPriceQty($id){
        $query = 'SELECT * from product where product_id="$id"';
        $stmt  = $this->db->select($query);
        if($stmt->num_rows==1){
            $row=$stmt->fetch_assoc();
                  
            }
        return $row;
     }

    
}
