<?PHP

class Player{

    private string $_playerName;
    private int $_birthdayDate;
    private Country $_country;
    private array $_team;

    public function __construct(string $playerName, Country $country, int $birthdayDate){
        $this->_playerName = $playerName;
        $this->_birthdayDate = $birthdayDate;
        $this->_country = $country;
        $this->_team= [];
    }

    public function getPlayerName() :string{
        return $this->_playerName;
    }    
    public function setPlayerName($playerName){
        $this->_playerName = $playerName;
    }

    public function getBirthdayDate() :int{
        return $this->_birthdayDate;
    }    
    public function setBirthdayDate($birthdayDate){
        $this->_birthdayDate = $birthdayDate;
    }

    public function getcountry() :Country{
        return $this->_country;
    }    
    public function setcountry(Country $country){
        $this->_country = $country;
    }

    public function addTeam(Team $team){
        $this->_team[] = $team;
    }

    public function displayTeam(){
        foreach($this->_team as $team){
            return $team;
        }
    }

    public function __toString(){
        return $this->_playerName;
    }
}