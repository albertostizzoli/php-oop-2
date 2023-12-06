<?php

trait DrawBook
{
    public function printBook($item)
    {
        extract($item);
        include __DIR__ . '/../Views/read.php';
    }
}
?>