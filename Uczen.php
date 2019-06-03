<?php


class Uczen
{

    private $numer_w_dzienniku;
    private $imie;
    private $nazwisko;
    private $klasa;

    public function __construct($numer_w_dzienniku, $imie, $nazwisko, $klasa)
    {
        $this->numer_w_dzienniku=$numer_w_dzienniku;
        $this->imie=$imie;
        $this->nazwisko=$nazwisko;
        $this->klasa=$klasa;

    }

    /**
     * @return mixed
     */
    public function getNumerWDzienniku()
    {
        return $this->numer_w_dzienniku;
    }

    /**
     * @return mixed
     */
    public function getImie()
    {
        return $this->imie;
    }

    /**
     * @return mixed
     */
    public function getNazwisko()
    {
        return $this->nazwisko;
    }

    /**
     * @return mixed
     */
    public function getKlasa()
    {
        return $this->klasa;
    }

}