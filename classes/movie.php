<?php
class Movie {
    public $title;
    public $director;
    public $genre;
    public $nation;
    public $year;

    public $oscar = false;

    public function __construct($_title, $_director, $_year, $_oscar)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->oscar = $_oscar;

        if($this->oscar == true)
            $this->oscar = 'Best Film';
            else
                $this->oscar = 'No Oscar';
    }
}