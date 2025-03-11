<?php
    include('components/head.php');
    include('components/nav.php');
?>

<main>
    <div class="container-fluid">
    <div class=container>

        <div class="row">
            <div class="col">
                <h1 class="display-5">All Movies</h1>
            </div>
        </div>
        <div class="row">
        <?php
        $query = 'SELECT * FROM movies';
        $movies = mysqli_query($connect,$query);
        if ($movies) {
        $movies_data = mysqli_fetch_all($movies, MYSQLI_ASSOC);
    } else {
        echo 'Query failed: ' . mysqli_error($connect);
    }

        foreach($movies_data as $movie){
        echo '<div class="col-md-3"> 
        <div class="card mb-4" style="">
        <div class="image-box">
            <img class="card-img-top" src="assets/images/'.$movie['poster_url'].'" alt="'.$movie['title'].'">
        </div>
        <div class="card-body">
            <h5 class="card-title"><a href="'.$base_url.'movie_details.php?id='.$movie['id'].'"> '.$movie['title'].'</a></h5>
            <span class="badge bg-primary">'.$movie['genre'].'</span>
            <span class="badge bg-success">'.$movie['rating'].'</span>
        </div>
        </div>
        </div>';
        }
        ?>
        </div>

    </div>
    </div>
</main>

<?php
    include('components/footer.php');
?>