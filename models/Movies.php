<?php

// CREO LA CLASSE (OGGETTO),
class Movies
{
    public $nome;
    public $descrizione;
    public $lingua_originale;
    public $attori;

    //FUNZIONE PER SPECIFICARE LE VARIABILI TRA LE () DELL'OGGETTO/CLASSE'
    public function __construct($nome, $descrizione, $lingua, $attori)
    {
        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->lingua_originale = $lingua;
        $this->attori = $attori;
    }

    // Funzione per stampare in pagina tutti i dati

    public function stampaTutto()
    {
        echo "<li> Il film: " . $this->nome . "</li>";
        echo "<li> La descrizione: " . $this->descrizione . "</li>";
        echo "<li> Gli attori: " . $this->attori . "</li>";
        echo "<li> La ligua originale: " . $this->lingua_originale . "</li>";
    }
}
