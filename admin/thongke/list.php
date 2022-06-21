<head>
    <style>
        .thongke{
            padding:50px 300px;
            width: 100%;
            margin-left: 100px;
        }
    </style>
</head>
<div class=" thongke">
<h3 class="alert alert-success">
    Thống Kê Hàng Hóa Từng loại
</h3>
<table class="table">
    <thead class="alert-success">
        <tr>
            <th>MÃ DANH MỤC</th>
            <th>TÊN DANH MỤC</th>
            <th>SỐ LƯỢNG</th>
            <th>GIÁ CAO NHẤT</th>
            <th>GIÁ THẤP NHẤT</th>
            <th>GIÁ TRUNG BÌNH</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($listthongke as $tk) {
            extract($tk);
            echo '
                <tr>
                    <td>'.$madm.'</td>
                    <td>'.$tendm.'</td>
                    <td>'.$COUNTSP.'</td>
                    <td>'.$MINPRICE.'</td>
                    <td>'.$MAXPRICE.'</td>
                    <td>'.$AVGPRICE.'</td>
                </tr>
            ';
        }
        ?>
       
    </tbody>
</table>
<div class="form-group">
    <a href="index.php?act=bieudo" class="btn btn-default"><input type="button" value="Xem Biểu Đồ"></a>
</div>
</div>