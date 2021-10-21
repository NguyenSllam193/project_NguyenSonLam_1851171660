<?php
    include '../header.php';
    include '../connect.php';
?>

<main>
    <h1>Edit Medicine</h1>
    <form action="process-edit-user.php" method="POST" class="form"> 
        <label>Tên thuốc: <input type="text" value="<?php echo $row['name']; ?>" name="name"></label><br />
        <label>Loại thuốc: <input type="text" value="<?php echo $row['type']; ?>" name="type"></label><br />
        <label>Mã vạch: <input type="text" value="<?php echo $row['barcode']; ?>" name="barcode"></label><br />
        <label>Liều lượng: <input type="text" value="<?php echo $row['dose']; ?>" name="dose"></label><br />
        <label>Mã: <input type="text" value="<?php echo $row['code']; ?>" name="code"></label><br />
        <label>Giá nhập: <input type="text" value="<?php echo $row['cost_price']; ?>" name="cost_price"></label><br />
        <label>Giá bán: <input type="text" value="<?php echo $row['selling_price']; ?>" name="selling_price"></label><br />
        <label>Trạng thái Hạn sử dụng: <input type="text" value="<?php echo $row['expiry']; ?>" name="expiry"></label><br />
        <label>Công ty: <input type="text" value="<?php echo $row['company_name']; ?>" name="company_name"></label><br />
        <label>Ngày sản xuất: <input type="date" value="<?php echo $row['production_date']; ?>" name="production_date"></label><br />
        <label>Ngày hết hạn: <input type="date" value="<?php echo $row['expiration_date']; ?>" name="expiration_date"></label><br />
        <label>Nơi sản xuất: <input type="text" value="<?php echo $row['place']; ?>" name="place"></label><br />
        <label>Số lượng: <input type="text" value="<?php echo $row['quantity']; ?>" name="quantity"></label><br />
        <input type="submit" value="Update" name="update_user">
</main>

<?php
    include '../footer.php';
?>