<?php
    include('reusables/head.php');
    include('reusables/nav.php');
?>

<main>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-5"> Add a School</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form method="POST" action="addSchool.php">
                        <div class="mb-3">
                            <label for="boardname" class="form-label">Board Name</label>
                            <input type="text" class="form-control" id="boardname" name="boardname" aria-describedby="BoardName">                       
                        </div>
                        <div class="mb-3">
                            <label for="language" class="form-label">Language</label>
                            <input type="text" class="form-control" id="language" name="language" aria-describedby="Language">
                        </div>
                        <div class="mb-3">
                            <label for="schooltype" class="form-label">School Type</label>
                            <input type="text" class="form-control" id="schooltype" name="schooltype" aria-describedby="SchoolType">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    include('reusables/footer.php');
?>