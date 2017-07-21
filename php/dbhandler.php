<?php 
class dbhandler {
    var $username;
    var $passwd;
    var $dburl;
    var $db;
    var $con;
    var $status;
    var $table;
    var $tableSpcl;
    
    function __construct(){
        $this->username = "admin";
        $this->passwd = "Opentext123$";
        $this->dburl = "sroy1lwfq12";
        $this->db = "testdocs";
        $this->table = "testlinks";
        $this->tableSpcl = "speciallinks";
    }
    
    function connect(){
        try{
            $this->con = new PDO('mysql:host='.$this->dburl.';dbname='.$this->db, $this->username, $this->passwd,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $this->status = 1;
        }
        catch(PDOException $ex){
            $this->status = 0;
            //echo "<br>".$ex ."<br>";
            //die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
        }
    }
    
    function searchTable(){
        //echo "searching for table";
        if ($result = $this->con->query("SHOW TABLES LIKE '".$this->table."'")) {
            if($result->rowCount() == 1) {
                //echo "Table exists";
                return 1;
            } else {
                //echo "Table does not exist";
                return 0;
            }
        }
        else {
            echo "Table does not exist";
            return 0;
        }
    }
    
    function createTable(){
        //echo "creating table";
        $stmt = "CREATE TABLE ".$this->table." (ID int NOT NULL AUTO_INCREMENT, Category varchar(255) NOT NULL, Type varchar(255), Link varchar(255) NOT NULL, PRIMARY KEY (ID));";
        if($this->con->query($stmt))
        {
            //echo "Table Created";
            return 1;
        }
        else 
        {
            ///echo "Table Creation failed";
            return 0;
        }
    }
    
    function createTableS(){
        $stmt = "CREATE TABLE ".$this->tableSpcl." (ID int NOT NULL AUTO_INCREMENT, Category varchar(255) NOT NULL, Type varchar(255), Link varchar(255) NOT NULL, PRIMARY KEY (ID));";
        if($this->con->query($stmt))
        {
            //echo "Table Created";
            return 1;
        }
        else
        {
            ///echo "Table Creation failed";
            return 0;
        }
    }
    
    function write($Category, $Type, $Link){
        $stmt = "INSERT INTO ".$this->table."(`Category`, `Type`, `Link`) VALUES (".$Category.",".$Type.",".$Link.")";
        if($this->con->query($stmt))
        {
            //echo "Row added";
            return 1;
        }
        else
        {
            //echo "Row adding failed";
            return 0;
        }
    }
    
    function update($Row, $Update, $Where){
        
    }
    
    function delete($Row){
        
    }
    
}
?>