<?php
$connect = mysqli_connect('localhost', 'root', '', 'xshop');
$sql = 'SELECT * FROM `danhmuc`';
$cate = mysqli_query($connect, $sql);
?>
<div class="row">
    <div class="row frmtitle">
        <h1>Danh Sách Loại Hàng</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table border="1">
               <thead>
               <tr>
                    <th>Mã Loại</th>
                    <th>Tên Loại</th>
                    <th></th>
                </tr>
               </thead>
               <tbody>
                <?php
                $stt = 0;
                foreach ($cate as $items) {
                    $stt++;
                ?>
                    <tr>
                        <td><?php echo $items['id']; ?></td>
                        <td><?php echo $items['name']; ?></td>
                        <td><input type="button" value="Sửa"><input type="button" value="Xóa"></td>
                    </tr>
                <?php
                }
                ?>
               </tbody>
            </table>
        </div>
    </div>
    <div class="row mb10">
        <input type="button" value="Chọn Tất Cả">
        <input type="button" value="Bỏ Chọn Tất Cả">
        <input type="button" value="Xóa Các Mục Đã Chọn">
        <a href="admin.html"><input type="button" value="Nhập Thêm"></a>
    </div>
</div>