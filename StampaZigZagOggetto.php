<?php
class User {
    private $nome;
    private $cognome;
    private $eta;
    
    public function __construct( string $nome, string $cognome, int $eta){
    $this->nome = $nome;
    $this->cognome = $cognome;
    $this->eta = $eta;
    
    }
     /* public function setNome($nome){
        $this->nome=$nome;
    }*/
    public function setNome($nome){
        $this->nome=$nome;
    }
    public function setCognome($cognome){
        $this->cognome=$cognome;
    }
    public function setEta($eta){
        $this->eta=$eta;
    }
 
    public function getNome(){
        return $this->nome;
    }
    public function getCognome(){
        return $this->cognome;
    }
    public function getEta(){
      return $this->eta;
    }
}
function stampaZigZag() {
$arrayUtente=[];
$utente1= new User("Gianluca","Accardo",38);
array_push($arrayUtente,$utente1);
$utente2= new User("Francesco","Monacò",36);
array_push($arrayUtente,$utente2);
$utente3= new User("Girolamo","Monacò",30);
array_push($arrayUtente,$utente3);
$utente4= new User("Jessica","Lombardo",27);
array_push($arrayUtente,$utente4);
$utente5= new User("Enrico","De Guidi",18);
array_push($arrayUtente,$utente5);
$utente6= new User("Alessio","Monacò",25);
array_push($arrayUtente,$utente6);

$arrayZigZag=[];
$j=count($arrayUtente)-1;
$variabiledim=count($arrayUtente)/2;
$primivalori=0;
$ultimivalori=0;
 
    for ($i = 0; $i < $variabiledim; $i++, $j--) {
        $user=$arrayUtente[$i];
        $user2=$arrayUtente[$j];

        $primivalori=$user->getEta();
        $secondiValori= $user2->getEta();

        array_push($arrayZigZag,$primivalori);
        array_push($arrayZigZag,$secondiValori);
    }
   
  

    print_r($arrayZigZag);
    
    
}
stampaZigZag();

?>