<?php
class Movie {
    public $title;
    public $director;
    public $genre;
    public $nation;
    public $year;

    public $oscar = false;

    public function __construct($_title, $_director, $_year)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
    }
}