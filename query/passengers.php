<?

class PassengerQuery{
    private $query;


    public function __construct(){

    }

    public function addPassenger($surname,$firstname,$email,$flightnum,$phone,$home,$dept,$dest){
    
        $this->query = "INSERT INTO passenger (SURNAME,FIRSTNAME,EMAIL,BOOKDATE,FLIGHTNUM,PHONE,HOME_ADD,DEPARTURE,DESTINATION) VALUES('$surname', '$firstname','$email',NOW(),'$flightnum','$phone','$home','$dept','$dest')";

        return $this->query;
    }

    #get account
    public function getPassengerInfo($id){
        $this->query  = "SELECT * FROM `passenger` WHERE id = `$id`";
        return $this->query;
    }

    public function getFlights(){
        $this->query = "SELECT * FROM `flight_info`";
        return $this->query;
    }

    public function deletePassenger($id){
        $this->query = "DELETE FROM `passenger` WHERE id=`$id`";
        return $this->query;
    }
}

?>