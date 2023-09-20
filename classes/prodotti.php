<?php


class Prodotto
{
    protected $nome;
    protected $descrizione;
    protected $prezzo;
    protected $immagine;
    protected $categoria;


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
