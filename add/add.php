<?php
    include '../header.php';
    include '../connect.php';
?>

<main>
    <h1>Thêm Tài Khoản</h1>
    <form action="process-add-user.php" method="post">
        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">Your Name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name">
            </div>
        </div>
        <div class="row mb-3">
            <label for="user_name" class="col-sm-2 col-form-label">User name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="user_name" name="user_name">
            </div>
        </div>
        <div class="row mb-3">
            <label for="pass_word" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="pass_word" name="pass_word">
            </div>
        </div>
        <div class="row mb-3">
            <label for="date_of_birth" class="col-sm-2 col-form-label">Date of Birth</label>
            <div class="col-sm-10">
            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Are You Sure?</button> 
            </div>
        </div>
    </form>
</main>

<?php
    include '../footer.php';
?>