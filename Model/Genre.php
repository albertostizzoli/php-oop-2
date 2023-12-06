<?php

class Genre
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function drawGenre()
    {
        return "<span class='badge text-bg-secondary'>$this->name</span>";
    }

    public static function fetchAll()
    {
        $genreString = file_get_contents(__DIR__ . "/genre_db.json");
        $genreList = json_decode($genreString, true);
        $genres = []; // Corretto il nome della variabile da $genre a $genres

        foreach ($genreList as $item) {
            $genres[] = new Genre($item);
        }
        return $genres;
    }
}
?>
