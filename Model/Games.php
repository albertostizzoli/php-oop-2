<?php

class Games
{
    private string $name;
    private string $image_icon_url;

    private function __construct($title, $image)
    {
        $this->name = $title;
        $this->image_icon_url = $image;
    }

    private function printGame()
    {
        $title = $this->name;
        $image = $this->image_icon_url;
        include __DIR__ . '/../Views/play.php';
    }
}

$gameString = file_get_contents(__DIR__ . "/steam_db.json");
$gameList = json_decode($gameString, true);

$games = [];
foreach ($gameList as $item) {
    $games[] = new Games($item['name'], $item['image_icon_url']);
}
?>