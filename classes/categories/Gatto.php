<?php   

include_once __DIR__ . "../../categorie.php";

class Gatto extends Categoria {
    
    public function __construct() {        
        // $this->eta = $_eta;
        // $this->tipo = $_tipo;
        $this->icona = '<i class="fa-solid fa-cat"></i>';
        
    }
}