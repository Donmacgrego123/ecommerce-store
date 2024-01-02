<?php   

class DBcontroller{
    // conexion a la base de datos
    protected $host='localhost';
    protected $user='root';
    protected $password='';
    protected $database='tienda';

    //conexion a la base 
    public $con=null;
    //contructor 
     public function __construct(){
        $this->con=mysqli_connect($this->host,$this->user,$this->password,$this->database);
        if($this->con->connect_error){
            echo "falla".$this->con->connect_error;
        }
       //echo 'conexion exitosa ';
     }

     
     public function __destruct()
     {
         $this->closeConnection();
     }
 
//apagar la conexion 
protected function closeConnection(){
    if($this->con != null){
        $this->con->close();
        $this->con=null;
    }
}
}
