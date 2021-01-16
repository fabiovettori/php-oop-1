<!-- ESERCIZIO
creaRe un file index.php in cui:
è definita una classe ‘Movie’
        => all'interno della classe sono dichiarate delle variabili d'istanza
        => all'interno della classe è definito un costruttore
        => all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php

class Movie {
    public $title;
    public $year;
    public function Language($lang){
        $this->lang = $lang;
    }

    function __construct($place_title, $place_year){
        $this->title = $place_title;
        $this->year = $place_year;
    }

    public function GetTitle(){
        return $this->title;
    }
};

$newMovie = new Movie('Unknown', 'Unknown');
$newMovie->title = 'pippo';
$newMovie->year = 'pluto';

var_dump($newMovie);

$newMovie->Language('ita');
var_dump($newMovie);
echo $newMovie->GetTitle();


$newMovie2 = new Movie('Unknown', 'Unknown');

var_dump($newMovie2);

?>
