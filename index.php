<?php

class Movie {
    public $id;
    public $title;
    public $duration;

    function __construct($id, $title, $duration) {
        $this->id = $id;
        $this->title = $title;
        $this->duration = $duration;

    }

    public function renderMovie() {
        return $this->id . " - " . $this->title ." - " . $this->duration . "<br>";
    }
}


$movie1 = new Movie("01", "che bella giornata", "92");

$movie2 = new Movie("02", "sole a catinelle", "90");

echo($movie1-> renderMovie());
echo($movie2-> renderMovie());
