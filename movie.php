<?php

class Movie {
    public $title;
    public $director;
    public $category;

    public function __construct($title, $director, $category) 
    {
        $this->title = $title;
        $this->director = $director;
        $this->category = $category;
    }

    public function getMovie() {
        echo 'Il film si intitola: ' . $this->title . '<br>';
        echo 'Il regista si chiama: ' . $this->director . '<br>';
        echo 'Appartiene alla categoria: ' . $this->category . '<br>';
    }
}