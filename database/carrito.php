<?php
// clase carrito
class carrito{
    public $db=null;
    public function __construct(DBcontroller $db){
        if(!isset($db->con)) return null;
        $this->db=$db;

    }
    //insertar valores en la tabla carrito
    public function insertarencarrito($params=null, $table='carrito'){
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
    public function addcarrito($usuarioid, $itemid){
        if(isset($usuarioid) && isset($itemid)){
            $params=array(
                "usuario_id"=> $usuarioid,
                "item_id"=>$itemid
            );
            $result=$this->insertarencarrito($params);
            if($result){

                header("Location: ".$_SERVER['PHP_SELF']);
            }
        }
    }


    //borrar items 
    public function borrarcarrito($item_id=null, $table='carrito'){
        if($item_id != null){
            $result=$this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");
            if($result){
                header("Location: ".$_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

    //calcular la cantidad de items
    public function getsum($arr){
        if(isset($arr)){
            $sum=0;
            foreach ($arr as $item){
                $sum += floatval($item[0]);
            }
            return sprintf('%.2f' , $sum);
        }
    }


    // obtener el id para evitar duplicados
    public function getcarritoid($carritoArray = null, $llave="item_id"){
        if($carritoArray != null ){
            $cart_id=array_map(function($value) use($llave){
                return $value[$llave];

            },$carritoArray);
            return $cart_id;
        }
    }


    //lista de deseos
    public function deseo($item_id=null,$deseo_table="lista_compra",$fromtable="carrito"){
        if($item_id!=null){
            $query="INSERT INTO {$deseo_table} SELECT * FROM {$fromtable} WHERE item_id={$item_id};";
            $query.="DELETE FROM {$fromtable} WHERE item_id={$item_id};";
            $result=$this->db->con->multi_query($query);
            if($result){

                header("Location: ".$_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

     //borrar items de la lista de deseo
     public function borrardeseo($item_id=null, $table='lista_compra'){
        if($item_id != null){
            $result=$this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");
            if($result){
                header("Location: ".$_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }
}


?>