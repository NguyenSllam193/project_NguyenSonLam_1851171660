<?php
    $name = $_POST['name'];
    $user_name = $_POST['user_name'];
    $pass_word = $_POST['pass_word'];
    $date_of_birth = $_POST['date_of_birth'];

    include '../connect.php';
    $sql = "INSERT INTO user ('name', user_name, pass_word, date_of_birth) 
    VALUE ('$name', '$user_name', '$pass_word', '$date_of_birth')";

    $result = mysqli_query($conn, $sql);
    if($result > 0){
        header("Location:index.php");
    }else{
        echo "Lỗi";
    }

    mysqli_close($conn);
?>