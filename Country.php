<?PHP

class Country{
    private string $_contryName;
    private array $_team;
    
    public function __construct(string $contryName){
        $this->_contryName = $contryName;
        $this->_team= [];
    }

    // $this->_team->getCountry()->addPlay($this);
    public function getContryName() :string{
        return $this->_contryName;
    }    
    public function setContryName($contryName){
        $this->_contryName = $contryName;
    }

    public function getTeam() :array{
        return $this->_team;
    } 
    public function addTeam(Team $team){
        $this->_team[] = $team;
    }

    public function displayTeam(){
        $arrayTeam= [];
        foreach($this->_team as $team){
            $arrayTeam[] = $team;
            
        }
        return $arrayTeam;
    }

    public function __toString(){
        return $this->_contryName;
    }
}