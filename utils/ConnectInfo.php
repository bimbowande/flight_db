<?php

include('conn.php');

class ConnectInfo implements ConnInfo{
    private $host = ConnInfo::DBHOST;
    private $dbuser = ConnInfo::DBUSER;
    private $dbpass = ConnInfo::DBPASS;
    public $dbname = ConnInfo::DBNAME; 


    public function connect(){
        $this->conn = new mysqli($this->host, $this->dbuser, $this->dbpass,$this->dbname);
        
        /**  Check if the connection is succesful*/
        $error = $this->conn->connect_error ? 'Error in connection'  : $this->conn;
        
        return $error;
    }
}
