<?php
 include(dirname(__DIR__).'/utils/ConnectInfo.php');

 include(dirname(__DIR__).'/query/passengers.php');

 class PassengerQueryFunc{
    private $query;
    private $processQuery;
    private $update;

    public function __construct(){
        $this->queryClass = new PassengerQuery();
        $testConn = new ConnectInfo();
        $this->connDB = $testConn->connect();
    }

    public function insertQueryData($query){
        $this->updates = array();
        $this->result = mysqli_query($this->connDB, $query);
        return $this->result;
    }
    public function getQueryData($query){

        $this->updates = array();

        $this->result = mysqli_query($this->connDB, $query);

        if(!$this->result) return "Error description: " . mysqli_error($this->connDB);

        elseif($this->result->num_rows > 0){

            while($this->row = $this->result->fetch_assoc()){
                $this->updates[] = $this->row;
            }
        }
        return $this->updates;
    }

    public function addBookings($surname,$first_name,$email,$flight_num,$phone,$home,$dept,$dest){
    
        $this->query = $this->queryClass->addPassenger($surname, $first_name,$email,$flight_num,$phone,$home,$dept,$dest);
       
        $this->processData = $this->insertQueryData($this->query);
       
        if(!$this->processData) return "Error in upload try again later:". mysqli_error($this->connDB);
 
        else return true; 
    }

    public function getAllFlights(){
        $this->query = $this->queryClass->getFlights();
        $this->processQuery = $this->getQueryData($this->query);
        return $this->processQuery;
    }
 }

 ?>