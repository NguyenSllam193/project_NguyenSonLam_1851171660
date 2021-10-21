<?php
include "header.php";
?>

<table class="table table-dark table-striped">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Stt</th>
            <th scope="col">Tên Thuốc</th>
            <th scope="col">Loại Thuốc </th>
            <th scope="col">Mã Vạch</th>
            <th scope="col">Liều Lượng (mc2 or gram)</th>
            <th scope="col">Mã Thuốc</th>
            <th scope="col">Giá Nhập</th>
            <th scope="col">Giá Bán</th>
            <th scope="col">Trạng Thái Sử Dụng</th>
            <th scope="col">Công ty</th>
            <th scope="col">Ngày sản xuất</th>
            <th scope="col">Ngày Hết Hạn</th>
            <th scope="col">Nơi sản xuất</th>
            <th scope="col">Số Lượng</th>
        </tr>
    </thead>

    <tbody>
        <?php
                // b1: kết nối cơ sở dữ liệu
                include 'connect.php';
                // b2: truy vấn sql
                $sql = "SELECT * FROM medicine";
                $query = mysqli_query($conn, $sql); // lưu kết quả vào biến query
                // b3: đếm kết quả trả về(sủ lý kết quả)
                $total_row = mysqli_num_rows($query);

                if ($total_row > 0){
                    while($row = mysqli_fetch_assoc($query)){
                        echo '<tr>';
                        echo     '<th scope="row">'.$row['id'].'</th>';
                        echo     '<td>'.$row['name'].'</td>';
                        echo     '<td>'.$row['type'].'</td>';
                        echo     '<td>'.$row['barcode'].'</td>';
                        echo     '<td>'.$row['dose'].'</td>';
                        echo     '<td>'.$row['code'].'</td>';
                        echo     '<td>'.$row['cost_price'].'</td>';
                        echo     '<td>'.$row['selling_price'].'</td>';
                        echo     '<td>'.$row['expiry'].'</td>';
                        echo     '<td>'.$row['company_name'].'</td>';
                        echo     '<td>'.$row['production_date'].'</td>';
                        echo     '<td>'.$row['expiration_date'].'</td>';
                        echo     '<td>'.$row['place'].'</td>';
                        echo     '<td>'.$row['quantity'].'</td>';
                        echo '<td><a href="./update/update.php?id='.$row['id'].'">
                        <i class="fas fa-user-edit"></i>
                        </a></td>';
                        echo '<td><a href="./delete/process-delete-user.php?id='.$row['id'].'">
                        <i class="fas fa-user-times"></i>
                        </a></td>';
                        echo '</tr>';
                    }
                }
                // b4: đóng kết nối
                mysqli_close($conn);
            ?>
    </tbody>
</table>

<a href="./add/add.php" class="btn btn-success">Add Medicine</a>


<?php
include "footer.php"
?>