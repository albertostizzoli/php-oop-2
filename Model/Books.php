<?php

class Books
{
    private int $id;
    private string $title;
    private int $pageCount;
    private string $thumbnailUrl;
    private string $longDescription;
    private string $authors;

    private function __construct($id, $title, $pages, $image, $plot, $authors)
    {
        $this->id = $id;
        $this->title = $title;
        $this->pageCount = $pages;
        $this->thumbnailUrl = $image;
        $this->longDescription = $plot;
        $this->authors = $authors;

    }

    public function printBook()
    {
        $image = $this->thumbnailUrl;
        $title = $this->title;
        $pages = $this->pageCount;
        $plot = $this->longDescription;
        $authors = $this->authors;  
    }
}

$bookString = file_get_contents(__DIR__ . "/books_db.json");
$bookList = json_decode($bookString, true);

$books = [];
foreach ($bookList as $item) {
    $books[] = new Books($item['id'], $item['title'], $item['pageCount'], $item['thumbnaiUrl'], $item['longDescription'], $item['authors']);
}


?>