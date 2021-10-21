<?php
    include '../header.php';
    include '../connect.php';
?>

<main>
    <h1>Add Medicine</h1>
    <form action="process-add-user.php" method="post">
        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name">
            </div>
        </div>
        <div class="row mb-3">
            <label for="type" class="col-sm-2 col-form-label">Type</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="type" name="type">
            </div>
        </div>
        <div class="row mb-3">
            <label for="barcode" class="col-sm-2 col-form-label">Barcode</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="barcode" name="barcode">
            </div>
        </div>
        <div class="row mb-3">
            <label for="dose" class="col-sm-2 col-form-label">Dose</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="dose" name="dose">
            </div>
        </div>
        <div class="row mb-3">
            <label for="code" class="col-sm-2 col-form-label">Code</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="code" name="code">
            </div>
        </div>

        <div class="row mb-3">
            <label for="cost_price" class="col-sm-2 col-form-label">Cost_price</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="cost_price" name="cost_price">
            </div>
        </div>
        <div class="row mb-3">
            <label for="selling_price" class="col-sm-2 col-form-label">Selling_price</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="selling_price" name="selling_price">
            </div>
        </div>
        <div class="row mb-3">
            <label for="expiry" class="col-sm-2 col-form-label">Expiry</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="expiry" name="expiry">
            </div>
        </div>
        <div class="row mb-3">
            <label for="company_name" class="col-sm-2 col-form-label">Company_name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="company_name" name="company_name">
            </div>
        </div>
        <div class="row mb-3">
            <label for="production_date" class="col-sm-2 col-form-label">Production_date</label>
            <div class="col-sm-10">
            <input type="datetime" class="form-control" id="production_date" name="production_date">
            </div>
        </div>
        <div class="row mb-3">
            <label for="expiration_date" class="col-sm-2 col-form-label">Expiration_date</label>
            <div class="col-sm-10">
            <input type="datetime" class="form-control" id="expiration_date" name="expiration_date">
            </div>
        </div>
        <div class="row mb-3">
            <label for="place" class="col-sm-2 col-form-label">Place</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="place" name="place">
            </div>
        </div>

        <div class="row mb-3">
            <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="quantity" name="quantity">
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