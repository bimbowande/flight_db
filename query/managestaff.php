<?


class StaffQuery{

    /** Return all staff list */

    public function getAllStaff(){
        $query = "SELECT * FROM staff";

        return $query;
    }

    ** Return a specific staff */

    public function getAStaff(id){
        $query = "SELECT * FROM staff WHERE  id =`$id`";

        return $query
    }


    public function addStaff(surname,firstname,houseAdress,phone,salary){
        $query = "INSERT INTO staff (SURNAME, FIRST_NAME,HOUSE_ADDRESS,PHONE,SALARY) VALUES ($surname, $firstname,$houseAdress,$phone, $salary)";

        return $query;
    }

    public function deletUser(id){
        $query = "DELETE FROM staff WHERE EMPNUM =`$id`";
        return $query;
    }

}


/
?>