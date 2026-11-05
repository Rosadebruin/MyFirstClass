<?php
  include "stoel.php";

// Shows a text in the terminal that asks for the startheight
$startHoogte = readline("Wat is de beginzithoogte zijn?(cm) ");
// Shows a text in the terminal that asks for the final height
$nieuweHoogte = readline("Wat is de zithoogte na de verstelling?(cm) ");

// Shows the word result above the final answer
echo "\n--- Resultaat ---\n";

// Shows what color the chair is in the terminal
  $rodeStoel = new Stoel("Blauw", (int)$startHoogte);

// Shows what the user chose as startheight in the terminal
  $rodeStoel->echoZithoogte();
  
// Shows what the user chose as final height in the terminal
  $rodeStoel->verstel((int)$nieuweHoogte);

?>
