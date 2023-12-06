<?php
include __DIR__ ."/Product.php";
include __DIR__ ."/../Traits/DrawBook.php";
class Book extends Product
{
    use DrawBook;
    private int $_id;
    private string $title;
    private int $pageCount;
    private string $thumbnailUrl;
    private string $longDescription;
    private array $authors;

    public function __construct($id, $title, $pages, $image, $plot, $authors, $quantity, $price)
    {
        parent::__construct($price, $quantity);
        $this->_id = $id;
        $this->title = $title;
        $this->pageCount = $pages;
        $this->thumbnailUrl = $image;
        $this->longDescription = $plot;
        $this->authors = $authors;
    }

    public function formatBook()
    {
        $cardBook = [
             'image' => $this->thumbnailUrl,
             'title'=> $this->title,
             'pages' => $this->pageCount,
             'plot' => substr($this->longDescription, 0, 100) . '...',
             'authors' => $this->authors,
             'quantity' => $this->quantity,
             'price' => $this->price
        ];
       return $cardBook;
    }
}

$bookString = file_get_contents(__DIR__ . "/books_db.json");
$bookList = json_decode($bookString, true);

$books = [];
foreach ($bookList as $item) {
    $quantity = rand(0, 100);
    $price = rand(15, 30);
    $books[] = new Book($item['_id'], $item['title'], $item['pageCount'], $item['thumbnailUrl'], $item['longDescription'], $item['authors'] ,$quantity, $price);
}

?>
