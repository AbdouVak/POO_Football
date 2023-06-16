<?PHP

class Team{

    private string $_teamName;
    private int $_creationDate;
    private Country $_country;
    private array $_player;

    public function __construct(string $teamName, int $creationDate, Country $country){
        $this->_teamName = $teamName;
        $this->_creationDate = $creationDate;
        $this->_country = $country;
        $this->_player = [];
    }

    // Setter Getter 
    public function getTeamName() :string{
        return $this->_teamName;
    }    
    public function setTeamName($teamName){
        $this->_teamName = $teamName;
    }

    public function getCreationDate() :int{
        return $this->_creationDate;
    }    
    public function setCreationDate($creationDate){
        $this->_creationDate = $creationDate;
    }

    public function getCountry() :Country{
        return $this->_country;
    }    
    public function setcountry(country $country){
        $this->_country = $country;
    }

    public function addPlayer(Play $play){
        $this->_player = $play;
    }

    public function displayPlayer(){
        foreach($this->_player as $player){
            return $player;
        }
    }

    public function __toString(){
        return $this->_teamName;
    }
}