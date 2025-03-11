<?php
    include('components/head.php');
    include('components/nav.php');
?>

<main>
    <div class=container>
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-5">Movie Details</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-8 col-xs-12">

                <?php
                
                $movie_id = isset($_GET['id']) ? (int)$_GET['id'] : 1;
                $sql = "SELECT * FROM movies WHERE id = $movie_id";
                $result = $connect->query($sql);
                
                $movie = null;
                if ($result->num_rows > 0) {
                    $movie = $result->fetch_assoc();
                } else {
                    echo "Movie not found";
                }

                if ($movie): ?>
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="assets/images/<?php echo $movie['poster_url']; ?>" alt="<?php echo $movie['title']; ?> Poster" class="movie-poster" width="200">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $movie['title']; ?></h5>
                                <p><strong>Genre:</strong> <?php echo $movie['genre']; ?></p>
                                <p><strong>Release Date:</strong> <?php echo date('F j, Y', strtotime($movie['release_date'])); ?></p>
                                <p><strong>Rating:</strong> <?php echo $movie['rating']; ?></p>
                            </div>
                            </div>
                        </div>
                    </div>
                    <?php else: ?>
                        <p>Movie not found!</p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="<?=$base_url; ?>" class="btn btn-danger">Back</a>
            </div>
        </div>
    </div>
</main>

<?php include('components/footer.php'); ?>