<?php

include "Uczen.php";
include "Nauczyciel.php";

$uczen1 = new Uczen(30, "Wacek", "Waclawski", "2b");
$nauczeciel1 = new Nauczyciel("Franca", "Glupia", "matematyka", "2b");


echo "Najlepszy uczeń to " .$uczen1->getImie();
echo "<br>";

echo "Najgorszy nauczyciel to " . $nauczeciel1->getNazwisko() . " " . $nauczeciel1->getImie();