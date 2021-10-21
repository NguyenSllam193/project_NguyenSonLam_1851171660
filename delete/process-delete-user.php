<?php
include_once('../connect.php');
if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
$id=$_GET['id'];
$sql = "DELETE FROM medicine WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    header("Location:../index.php");
} else {
echo "Error updating record: " . $conn->error;
}



$conn->close();
}
?>