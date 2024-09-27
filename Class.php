<?php

class CreateDB{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $charset;
    public $conn;
    public $pdo;

    //class constructor

    public function __construct(
        $dbname="Newdb", 
        $tablename ="Producttb", 
        $servername="localhost", 
        $username="root",
        $password ="",
        $charset = "utf8mb4"
    ){
          $this->dbname = $dbname;
          $this->tablename =$tablename; 
          $this->servername =$servername;
          $this->username = $username;
          $this->password = $password;
          $this->charset = $charset;

          //create connection
         
          
        
          $dsn = "mysql:host=".$servername.";dbname=".$dbname.";charset=".$charset;
            $options = [
            PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
            ];
            try {
                
                $this->conn = new PDO($dsn, $username, $password, $options);
              // echo "<script>alert('Connected successfully')</script>";
                //echo "<script>window.location='index.php'</script>";
                $this->conn = null; 
            } catch (PDOException $e){
                //error_log($e->getMessage());
            echo "Connection failed: " . $e->getMessage(); //something a user can understand
            
            }

        //query
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

        try{
            $this->conn = new PDO($dsn,$username, $password, $options);
            //sql to create new table
            $sql = "CREATE TABLE IF NOT EXISTS $tablename
            
            (
            id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            name VARCHAR(25) NOT NULL,
            decsription VARCHAR(100) NOT NULL,
            price VARCHAR(100) NOT NULL,
            image VARCHAR(100) NOT NULL
            )";
            
            

        }catch (PDOException $e){
            //error_log($e->getMessage());
        echo "Connection failed: " . $e->getMessage(); //something a user can understand
        
        }
        
    }
    

    //get product from database
    public function getEvents(){
        $sql = "SELECT * FROM $this->tablename";
        
        $result =$this->conn->prepare($sql);
        $result->execute();
        
        if($result){
           return $result;
        }

       // return $result;
      
        
    }
    
    


}


?>