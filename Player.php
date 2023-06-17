<?PHP

class Player{

    private string $_playerName;
    private int $_birthdayDate;
    private Country $_country;
    private array $_play;

    public function __construct(string $playerName, Country $country, int $birthdayDate){
        $this->_playerName = $playerName;
        $this->_birthdayDate = $birthdayDate;
        $this->_country = $country;
        $this->_play= [];
    }

    public function getPlayerName() :string{
        return $this->_playerName;
    }    
    public function setPlayerName(string $playerName){
        $this->_playerName = $playerName;
    }

    public function getBirthdayDate() :int{
        return $this->_birthdayDate;
    }    
    public function setBirthdayDate(int $birthdayDate){
        $this->_birthdayDate = $birthdayDate;
    }

    public function getcountry() :Country{
        return $this->_country;
    }    
    public function setcountry(Country $country){
        $this->_country = $country;
    }

    public function addPlay(Play $play){
        $this->_play[] = $play;
    }
    
    public function displayPlay(){
        $arrayTeam= [];

        foreach($this->_play as $play){
            $arrayTeam[] = $play->getTeam().'('.$play->getEngagementDate().')';
        }
        return $arrayTeam;
    }

    public function __toString(){
        return $this->_playerName;
    }
}
