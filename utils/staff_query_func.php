<?php

include_once('../utils/ConnectInfo.php');
include_once('../query/managestaff.php');
session_start();

class StaffQueryFunc{
    private $query;
    private $processQuery;


    public function __construct(){
        $this->queryClass = new StaffQuery();
        $testConn = new ConnectInfo();
        $this->connDB =  $testConn->connect();
    }

    #get query data
    public function getQueryData($query){
        $this->updates = array();
        $this->result  = mysqli_query($this->connDB, $query);
        return $this->result;
    }

    #update staff
    public function addToStaff($surname,$firstname,$email,$houseAddress,$phone, $salary){

        $this->query = $this->queryClass->addStaffQuery($surname,$firstname,$email,$houseAddress,$phone,$salary);

       $this->processData = $this->getQueryData($this->query);
       
       if(!$this->processData) return "Error in upload try again later";

       else return "New Staff added"; 
    }
}