<?php
include __DIR__ . '/Views/header.php';
include __DIR__ . '/Model/Movie.php';
$movies = Movie::fetchAll();
?>

<section class="container mt-2">
    <h2>MOVIES</h2>
    <div class="row gy-4">
        <?php
        foreach ($movies as $movie) {
            $movie->printCard($movie->formatCard());
        }
        ?>
    </div>
</section>

<?php
include __DIR__ . '/Views/footer.php';
?>