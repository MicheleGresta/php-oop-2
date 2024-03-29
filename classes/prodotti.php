<?php
require_once __DIR__ . "../../traits/Sesso.php";


class Prodotto
{
    use Sesso;
    protected $nome;
    protected $descrizione;
    protected $prezzo;
    protected $immagine;
    protected $categoria;

    public function __construct(string $categoria, string $sesso)
    {
        try {
            if ($categoria === "gatto") {
                $this->categoria = '<i class="fa-solid fa-cat"></i>';
            } else if ($categoria === "cane") {
                $this->categoria = '<i class="fa-solid fa-dog"></i>';
            } else {
                throw new Exception();
                // $this->categoria = "animale non specificato";
            }
        } catch (Exception $messaggio1) {
            $this->categoria = "animale non specificato";
        }


        try {
            if ($sesso === "maschio") {
                $this->sesso = '<i class="fa-solid fa-person"></i>';
            } else if ($sesso === "femmina") {
                $this->sesso = '<i class="fa-solid fa-person-dress"></i>';
            } else if ($sesso !== "maschio" ?? $sesso !== "femmina") {
                throw new Exception();
                // $this->sesso = "sesso non specificato";
            }
        } catch (Exception $messaggio2) {
            $this->sesso = "sesso non specificato";
        }
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getDescrizione()
    {
        return $this->descrizione;
    }

    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    public function getPrezzo()
    {
        return $this->prezzo;
    }

    public function setPrezzo($prezzo)
    {
        $this->prezzo = $prezzo;

        return $this;
    }

    public function getImmagine()
    {
        return $this->immagine;
    }

    public function setImmagine($immagine)
    {
        $this->immagine = $immagine;

        return $this;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }
}
