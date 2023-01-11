<?

class MachineQuery{
    private $query;

    public function __construct(){

    }

    #add a new machine
    public function addMachine($serialNum, $manufacturer, $model){
        $this->query = "INSERT INTO `Airplane` (NUMUSER, MODEL, MANUFACTURER) VALUES
        ($serialNum, $manufacturer, $model)
        ";
        return $this->query;
    }

    #get all machines
    public function getAllMachines(){
        $this->query = "SELECT * FROM `Airplane`";
        return $this->query;
    }

    #get a machine
    public function getAMachine($id){
        $this->query = "SELECT * FROM `Airplane` WHERE id=`$id`";
        return $this->query;
    }

    public function updateMachine($id){

    }

    public function deletMachine($id){
        $query = "DELETE FROM `Airplane` WHERE id =`$id`";
        return $this->query;
    }
}

?>