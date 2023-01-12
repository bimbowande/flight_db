<?php
 include(dirname(__DIR__).'/utils/ConnectInfo.php');

 include(dirname(__DIR__).'/query/managemachine.php');


 class MachineQueryFunc{
    private $query;
    private $processQuery;
    private $update;

    #
    public function __construct(){
        $this->queryClass = new MachineQuery();
        $testConn = new ConnectInfo();
        $this->connDB = $testConn->connect();
    }

    public function addNewMachine($model,$manu){
    
        $this->query = $this->queryClass->addMachine($model,$manu);
       
        $this->processData = $this->insertQueryData($this->query);
       
        if(!$this->processData) return "Error in upload try again later:". mysqli_error($this->connDB);
 
        else return true; 
    }
    #
    public function insertQueryData($query){
        $this->updates = array();
        $this->result = mysqli_query($this->connDB, $query);
        return $this->result;
    }

    public function deleteQuery($query){
        $this->result = mysqli_query($this->connDB, $query);
        return $this->result;
    }


    #
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

    public function getAllMachinesList(){
        $this->query = $this->queryClass->getAllMachines();
        $this->processQuery = $this->getQueryData($this->query);
        return $this->processQuery;
    }

    public function deleteMachineItem($id){
        $this->result = mysqli_query($this->connDB, $this->queryClass->deleteMachine($id));
        return $this->result;
    }

 }
?>