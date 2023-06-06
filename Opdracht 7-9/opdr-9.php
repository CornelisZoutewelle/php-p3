<?php

// Onderdeel 1: Film
class Movie
{
    public $name;
    public $genre;
    public $seen;

    public function __construct($name, $genre, $seen)
    {
        $this->name = $name;
        $this->genre = $genre;
        $this->seen = $seen;
    }

    public function getName()
    {
        return $this->name;
    }
}

$movie1 = new Movie(name:'4', genre:"fantasy", seen:5);

echo $movie1->getName();

var_dump($movie1);



// Onderdeel 2: Muziek
class Music
{
    public $name;
    public $genre;
    public $listen;

    public function __construct($name, $genre, $listen)
    {
        $this->name = $name;
        $this->genre = $genre;
        $this->listen = $listen;
    }

    public function getName()
    {
        return $this->name;
    }
}

$music1 = new Music (name: 'Bach', genre:'Klassiek', listen: 3);
    
echo $music1->getName()."<br><br>";

var_dump($music1);
?>