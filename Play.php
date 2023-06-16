<?PHP

class Play{

    private int $_engagementDate;
    private Team $_team;
    private Player $_player;

    public function __construct(int $engagementDate, Team $team, Player $player){
        $this->_engagementDate = $engagementDate;
        $this->_team = $team;
        $this->_player = $player;

        $this->_team->addPlayer($this);
    }

    public function getEngagementDate() :int{
        return $this->_engagementDate;
    }    
    public function setEngagementDate(int $engagementDate){
        $this->_engagementDate = $engagementDate;
    }

    public function getPlayer() :Player{
        return $this->_player;
    }    
    public function SetPlayer(Player $player){
        $this->_player = $player;
    }

    public function getTeam() :Team{
        return $this->_team;
    }    
    public function SetTeam(Team $team){
        $this->_team = $team;
    }

}