<?php
if (isset($_POST['update_medicine'])){
$id=$_GET['id'];
$name = $_POST['name'];
$type = $_POST['type'];
$barcode = $_POST['barcode'];
$dose = $_POST['dose'];
$code = $_POST['code'];
$cost_price = $_POST['cost_price'];
$selling_price = $_POST['selling_price'];
$expiry = $_POST['expiry'];
$company_name = $_POST['company_name'];
$production_date = $_POST['production_date'];
$expiration_date = $_POST['expiration_date'];
$place = $_POST['place'];
$quantity = $_POST['quantity'];

// Create connection
$conn = new mysqli("localhost", "root", "", "data");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE `medicine` SET `name`='$name', type='$type', barcode='$barcode', dose="$dose", 
code="$code", cost_price="$cost_price", selling_price="$selling_price", expiry="$expiry",
company_name="$company_name", production_date= "$production_date", expiration_date="$expiration_date",
place= "$place", quantity = "$quantity"
WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
echo "Record updated successfully";
} else {
echo "Error updating record: " . $conn->error;
}

$conn->close();
}
?>