<?php

trait DrawGames
{
    public function printGame($item)
    {
        extract($item);
        include __DIR__ . '/../Views/play.php';
    }
}
?>