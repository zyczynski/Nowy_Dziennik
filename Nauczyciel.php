<?php



class Nauczyciel
{

    private $imie;
    private $nazwisko;
    private $przedmiot;
    private $wychowawstwo;

    public function __construct($imie, $nazwisko, $przedmiot, $wychowawstwo)
    {
        $this->imie=$imie;
        $this->nazwisko=$nazwisko;
        $this->przedmiot=$przedmiot;
        $this->wychowawstwo=$wychowawstwo;
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
    public function getPrzedmiot()
    {
        return $this->przedmiot;
    }

    /**
     * @return mixed
     */
    public function getWychowawstwo()
    {
        return $this->wychowawstwo;
    }

}