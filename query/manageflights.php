<?

Class FlightQuery{

    private $query;


    #add new flights
    public function addFlights($flight_num, $departure, $destination, $numofpassengers){

        $this->query = "INSERT INTO flight_info (FLIGHT_NUM,FLIGHT_DATE,ORIGIN,DEST, NUMBER_OF_PASSENGERS) VALUES ('$flight_num',NOW(),'$departure','$destination','$numofpassengers')";
        return $this->query;
    }

    #getallflights
    public function getAllFlight(){
        $this->query = "SELECT * FROM `flight_info`";
        return $this->query;
    }

    #get a flight info
    public function getAflightInfo($id){
        $this->query =  "SELECT * FROM `flight_info` WHERE id = `$id`";
        return $this->query;
    }

    #get 
    public function deleteFlight($id){
        $this->query = "DELETE FROM `flight_info` WHERE id='$id'";
        return $this->query;
    }

}

?>