<?php
include __DIR__ . '/Views/header.php';
include __DIR__ . '/Model/Games.php';
$games = Games::fetchAll();

?>

<section class="container mt-2">
    <h2>GAMES</h2>
    <div class="row gy-4">
        <?php
        foreach ($games as $game) {
            $game->printGame($game->formatGames());
        }
        ?>
    </div>
</section>

<?php
include __DIR__ . '/Views/footer.php';
?>