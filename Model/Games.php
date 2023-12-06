<?php
include __DIR__."/Product.php";
include __DIR__."/../Traits/DrawGames.php";
class Games extends Product {
    use DrawGames;
    private string $name;
    private string $img_icon_url;

    public function __construct($title, $image, $quantity, $price) {
        parent::__construct($price, $quantity);
        $this->name = $title;
        $this->img_icon_url = $image;
    }

    public function formatGames() {
        $cardGames = [
            'title' => $this->name,
            'image' => $this->img_icon_url,
            'quantity' => $this->quantity,
            'price' => $this->price,
        ];
        return $cardGames;
    }

    public static function fetchAll() 
    {
        $gameString = file_get_contents(__DIR__."/steam_db.json");
        $gameList = json_decode($gameString, true);
        $games = [];
        foreach($gameList as $item) {
            $quantity = rand(0, 100);
            $price = rand(40, 80);
            $games[] = new Games($item['name'], $item['img_icon_url'], $quantity, $price);
        }
        return $games;
    }
}
Games::fetchAll();

?>