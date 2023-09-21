<?php   
require_once __DIR__ . "/prodotti.php";

class Giochi extends Prodotto {
    use Sesso;
    public function __construct(string $nome, string $descrizione, $prezzo, string $immagine, string $categoria, string $sesso)
    {   parent::__construct($categoria, $sesso);
        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        
    }
}