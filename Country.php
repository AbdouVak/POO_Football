<?PHP

class Country{
    private string $_contryName;

    public function __construct(string $contryName){
        $this->_contryName = $contryName;

    }

    public function getContryName() :string{
        return $this->_contryName;
    }    
    public function setContryName($contryName){
        $this->_contryName = $contryName;
    }

    public function __toString(){
        return $this->_contryName;
    }
}