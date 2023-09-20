<?php   

include_once __DIR__ . "../../categorie.php";

class Cane extends Categoria {
    
    public function __construct() {        
        // $this->eta = $_eta;
        // $this->tipo = $_tipo;
        $this->icona = '<i class="fa-solid fa-dog"></i>';
        
    }
}