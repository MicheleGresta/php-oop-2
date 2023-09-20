<?php  

class Categoria {
    protected $eta;
    protected $tipo;
    protected $icona;


     
    public function getIcona()
    {
        return $this->icona;
    }
    
    public function setIcona($icona)
    {
        $this->icona = $icona;

        return $this;
    }
}
