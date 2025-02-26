<?php
    include('reusables/head.php');
    include('reusables/nav.php');
?>

<main>
    <div class="container-fluid">
    <div class=container>

        <div class="row">
            <div class="col">
                <h1 class="display-5">All Schools</h1>
            </div>
        </div>
        <div class="row">
        <?php
        $query = 'SELECT * FROM schools';
        $schools = mysqli_query($connect,$query);
        if ($schools) {
        // Fetch all rows as an associative array
        $schools_data = mysqli_fetch_all($schools, MYSQLI_ASSOC);


    } else {
        echo 'Query failed: ' . mysqli_error($connect);
    }


        foreach($schools_data as $school){
        echo '<div class="col-md-4"> 
        <div class="card mb-4" style="">
        <div class="card-body">
            <h5 class="card-title"> '.$school['board'] . '</h5>
            <span class="badge bg-primary">'.$school['school_type'].'</span>
            <span class="badge bg-success">'.$school['language'].'</span>
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
    include('reusables/footer.php');
?>