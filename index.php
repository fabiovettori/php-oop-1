<?php

    class Movie {
        public $title;
        public $year;

        public function overTwentys ($year) {
            if ($year > 2000) {
                echo 'movie over twenty';
            } else {
                echo 'movie under twenty';
            }
        }

        function __construct($title){
            $this->title = $title;
        }
    }

    $titanic = new Movie('Unknown');
    $titanic->title = 'Titanic';
    $titanic->year = 1997;

    $titanic->overTwentys (2001);

    // echo $titanic;
    // var_dump($titanic);
    echo $titanic->title;

    $wows = new Movie('Unknown');
    // $wows->title = 'The Wolf of Wall Street';
    $wows->year = 2013;

    // $wows->overTwentys ('2000-01-01');

    // echo $wows;
    // var_dump($wows);
    echo $wows->title;

 ?>
