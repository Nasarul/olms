
<?php

// class Database
// {
// private $host = 'localhost';
// private $username = 'root';
// private $password = '';
// private $database = 'napd_olms';
// protected $conn;

// public function _construct(){

//   try{
//   $dsn="sysql:host={$this->host}; database={$this->database}; charset=uft8";
//   $options=array(PDO::ATTR_AUTOCOMMIT);
//   $this->conn=new PDO($dsn,$this->username, $this->password,$options);
//   }catch(PDOException $e){
//     echo "connection error".$e->getMessage();
//   }
// }

// }


$host = 'localhost';
$username = 'root';
$password = '';
$database = 'napd_olms';

$conn = mysqli_connect("$host","$username","$password","$database");

    // Check connection
    if (!$conn) 
    {
      header("Location: ../errors/db.php");
      die();
    } 

//     if ($con)
// {
//         echo "Database connected!";
//     }

?>
