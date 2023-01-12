<?

class PassengerQuery{
    private $query;


    public function __construct(){

    }

    public function addPassenger($surname,$firstname,$email,$flightnum,$phone,$home,$dept,$dest){
    
        $this->query = "INSERT INTO bookings (SURNAME,FIRSTNAME,EMAIL,BOOKDATE,FLIGHTNUM,PHONE,HOME_ADD,DEPARTURE,DESTINATION) VALUES('$surname', '$firstname','$email',NOW(),'$flightnum','$phone','$home','$dept','$dest')";

        return $this->query;
    }

    #get account
    public function getPassengerInfo($id){
        $this->query  = "SELECT * FROM `bookings` WHERE id = `$id`";
        return $this->query;
    }

    public function getAllBookings(){
       return $this->query = "SELECT * FROM `bookings`";
        
    }

    public function getFlights(){
        $this->query = "SELECT * FROM `flight_info`";
        return $this->query;
    }

    public function deletePassenger($id){
        $this->query = "DELETE FROM `bookings` WHERE id=$id";
        return $this->query;
    }
}

?>