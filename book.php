<?php
include __DIR__ . '/Views/header.php';
include __DIR__ . '/Model/Book.php';

?>

<section class="container mt-2">
    <h2>BOOKS</h2>
    <div class="row gy-4">
        <?php
        foreach ($books as $book) {
            $book->printBook();
        }
        ?>
    </div>
</section>

<?php
include __DIR__ . '/Views/footer.php';
?>
