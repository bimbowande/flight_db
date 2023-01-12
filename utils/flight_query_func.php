<?php
   
     include(dirname(__DIR__).'/utils/ConnectInfo.php');
    //require_once('../../utils/ConnectInfo.php');
    include(dirname(__DIR__).'/query/manageflights.php');
    //require_once('../../query/manageflights.php');



    class FlightQueryFunc{
        private $query;
        private $processQuery;
        private $update;

        #
        public function __construct(){
            $this->queryClass = new FlightQuery();
            $testConn = new ConnectInfo();
            $this->connDB = $testConn->connect();
        }

        public function insertQueryData($query){
            $this->updates = array();
            $this->result  = mysqli_query($this->connDB, $query);
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

        public function getAllFlights(){
            $this->query = $this->queryClass->getAllFlight();
            $this->processQuery = $this->getQueryData($this->query);
            return $this->processQuery;
        }

        public function addNewflight($flight_num,$dept,$dest,$num_of_passenger){
    
            $this->query = $this->queryClass-> addFlights($flight_num,$dept,$dest,$num_of_passenger);
           
            $this->processData = $this->insertQueryData($this->query);
           
            if(!$this->processData) return "Error in upload try again later:". mysqli_error($this->connDB);
     
            else return true; 
        }

        public function deleteFlightCol($id){
            $this->result = mysqli_query($this->connDB, $this->queryClass->deleteFlight($id));
            if(!$this->result) return 'error few mins'. mysqli_error($this->connDB);
            else return "succesful";
        }
    }
?>