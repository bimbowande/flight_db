<?php

include_once('../utils/ConnectInfo.php');
include_once('../query/managestaff.php');
session_start();

class StaffQueryFunc{
    private $query;
    private $processQuery;
    private $updates;


    #
    public function __construct(){
        $this->queryClass = new StaffQuery();
        $testConn = new ConnectInfo();
        $this->connDB =  $testConn->connect();
    }


    #insert query data
    public function insertQueryData($query){
        $this->updates = array();
        $this->result  = mysqli_query($this->connDB, $query);
        return $this->result;
    }


    #insert 
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

    #update staff
    public function addToStaff($surname,$firstname,$email,$houseAddress,$phone, $salary,$jobrole){

        $this->query = $this->queryClass->addStaffQuery($surname,$firstname,$email,$houseAddress,$phone,$salary,$jobrole);

       $this->processData = $this->insertQueryData($this->query);
       
       if(!$this->processData) return "Error in upload try again later" . mysqli_error($this->connDB);

       else return "New Staff added"; 
    }

    public function getAllStaff(){
        $this->query = $this->queryClass->getAllStaff();
        $this->processQuery = $this->getQueryData($this->query);
        return $this->processQuery;
    }

    public function getFullJobList($role){
        $this->query = $this->queryClass->getJobList($role);

        $this->processQuery = $this->getQueryData($this->query);

        return $this->processQuery;
    }

    public function deleteStaff($id){
        $this->result = mysqli_query($this->connDB, $this->queryClass->deleteUser($id));
        if(!$this->result) return 'error few mins'. mysqli_error($this->connDB);
        else return "succesful";
    }
}