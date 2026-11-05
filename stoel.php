<?php

  class Stoel {

    // Fields of the chair
   public $kleur;
   public $zithoogte;
    
    // Constructor, what is connected to what the answer
    public function __construct($ingevoerdeKleur, $ingevoerdeZithoogte) {
    
      $this->kleur = $ingevoerdeKleur;
      $this->zithoogte = $ingevoerdeZithoogte;

     // Function color of the chair
      echo "De stoel is:" . $this->kleur . "\n";
    }

    // Function startheight of the chair
    public function echoZithoogte() {
      echo "Zithoogte stoel: ".$this->zithoogte . " cm\n";
    }

    // Function final height of the chair
    public function verstel($nieuweHoogte) {
      $this->zithoogte = $nieuweHoogte;
      
      echo "Zithoogte na verstelling: " . $this->zithoogte . " cm\n";
      
    }

  }

?>