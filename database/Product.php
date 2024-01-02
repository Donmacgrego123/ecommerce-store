<?php

//enlace para unir los prodcutos
class Product{
    public $db=null;
    public function __construct(DBController $db){
        if(!isset($db->con)) return null;
        $this->db=$db;

    }    
    //enlaczar los prodcutos con getdata
    public function getData($table='producto'){
       $result= $this->db->con->query(query:"SELECT * FROM {$table}");
       $resultArray=array();
       while($item=mysqli_fetch_array($result,MYSQLI_ASSOC)){
        $resultArray[]=$item;

       }
       return $resultArray;
    }


    //obtener los productos usando el item id para el carrtito
    public function getProduct($item_id=null, $table='producto'){

        if(isset($item_id)){
            $result=$this->db->con->query("SELECT * FROM {$table} WHERE item_id={$item_id}");
            $resultArray=array();
            while($item=mysqli_fetch_array($result,MYSQLI_ASSOC)){
             $resultArray[]=$item;
     
            }
            return $resultArray;
            

        }
    }

}

?>