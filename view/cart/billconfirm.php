<div class="row">
    <div class="row mb">
        <div class="bxz">
            <div class="row mb">
                <div class="boxtitle"><H1>CẢM ƠN</H1></div>
                <div class="row boxcontent" style="text-align: center;">
                        <h2>Cảm Ơn Quý Khách Đã Đặt Hàng !!!</h2>
                </div>
            </div>
            <?php
                if(isset($bill) && (is_array($bill))){
                    extract($bill);

                }
            ?>
            <div class="row mb">
                <div class="boxtitle"><h1>Mã Đơn Hàng</h1></div>
                <div class="row boxcontent" style="text-align: center;">
                        <!-- <li>Mã Đơn Hàng - <?php $bill['id']?></li>
                        <li>Ngày Đặt Hàng - <?=$bill['bill_ngaydathang']?></li>
                        <li>Tổng Đơn Hàng - <?=$bill['total']?></li>
                        <li>Phương Thức Thanh Toán - <?=$bill['bill_pttt']?></li> -->

                </div>
            </div>
            <div class="row mb">
                <div class="boxtitle"><H1>Thông Tin Đặt Hàng</H1></div>
                <div class="row boxcontent billform">
                    <table>
                        <tr>
                            <td>Người Đặt Hàng</td>
                            <td><?=$bill['bill_name']?></td>
                        </tr>
                        <tr>
                            <td>Địa Chỉ</td>
                            <td><?=$bill['bill_address']?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?=$bill['bill_email']?></td>
                        </tr>
                        <tr>
                            <td>Điện Thoại</td>
                            <td><?=$bill['bill_phone']?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row mb">
                <div class="boxtitle"><h1>Chi Tiết Giỏ Hàng</h1></div>
                <div class="row boxcontent cart">
                    <table>
                       
                        <?php
                            bill_ctiet($billctiet);
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>