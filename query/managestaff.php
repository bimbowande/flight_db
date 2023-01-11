<?php


class StaffQuery{

    private $query;
    
    public function __construct(){
       
    }

    public function addStaffType($staff_type_name){
        $query = "INSERT INTO `staff_type` (staff_type_name) VALUES ($staff_type_name)";
        return $query;
    }

    /** Return all staff list */

    public function getAllStaff(){
        $query = "SELECT * FROM staff";
        return $query;
    }

    /** Return a specific staff */

    public function getAStaff($id){
        $query = "SELECT * FROM staff WHERE  id =`$id`";
        return $query;
    }

    /** Add Staff to table */

    public function addStaffQuery($surname,$firstname,$email,$houseAddress,$phone,$salary,$job_role){
        $query = "INSERT INTO staff (SURNAME, FIRST_NAME,EMAIL,HOUSE_ADDRESS,PHONE,SALARY,JOB_ROLE) VALUES('$surname', '$firstname','$email','$houseAddress','$phone', '$salary','$job_role')";
        
        return $query;
    }

    public function getJobList($job_role){
        $query = "SELECT SURNAME, FIRST_NAME FROM staff WHERE JOB_ROLE='$job_role'";
        return $query;
    }

    /** Delete a user */
    public function deletUser($id){
        $query = "DELETE FROM staff WHERE EMPNUM =`$id`";
        return $query;
    }

}

?>