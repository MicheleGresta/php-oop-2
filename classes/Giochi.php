<?php   
require_once __DIR__ . "/prodotti.php";

class Giochi extends Prodotto {

    public function __construct(string $nome, string $descrizione, $prezzo, string $immagine, string $categoria)
    {   parent::__construct($categoria);
        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        
    }
}