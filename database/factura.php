<?php
// clase carrito
class factura{
    public $db=null;
    public function __construct(DBcontroller $db){
        if(!isset($db->con)) return null;
        $this->db=$db;

    }
    //insertar valores en la tabla factura
    public function insertarenfactura($params=null, $table='factura'){
        if($this->db->con != null){
            if($params != null){
                //insertar dentro de la tabla carrito obteniendo las columnas 
                $columns=implode(',', array_keys($params));
                //print_r($columns);
                $values=implode(',', array_values($params));
                //print_r($values);
                //cadena sql 
                $query_string=sprintf("INSERT INTO %s(%s) VALUES(%s)",$table,$columns,$values);
                //echo $query_string;
                $result=$this->db->con->query($query_string);
                return $result;
            }
        }
    }

    //obtner los datos desde las tablas de usaurios y producto
    public function addfactura($usuarioid, $usuarionombre){
        if(isset($usuarioid) && isset($usuarionombre)){
            $params=array(
                "usuario_id"=> $usuarioid,
                "usuario_nombre"=>$usuarionombre,
                
            );
            $result=$this->insertarenfactura($params);
            if($result){

                header("Location: ".$_SERVER['PHP_SELF']);
            }
        }
    }


    

    


    
     


}


?>