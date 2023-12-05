<?php

class Games 
{
    private string $name;
    private string $img_icon_url;

    public function __construct($title, $image,)
    {
        $this->name = $title;
        $this->img_icon_url = $image;
    }

    public function printGame()
    {
        $title = $this->name;
        $image = $this->img_icon_url;
        include __DIR__ . '/../Views/play.php';
    }
}

$gameString = file_get_contents(__DIR__ . "/steam_db.json");
$gameList = json_decode($gameString, true);

$games = [];
foreach ($gameList as $item) {
    $games[] = new Games($item['name'], $item['img_icon_url']);
}
?>