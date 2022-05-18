<div class="row contents">
            <div class="row frmtitle">
                <h1>THÊM MỚI LOẠI HÀNG</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb10">
                        Mã Loại <br>
                        <input type="text" name="maLoai">
                        <br>
                    </div>
                    <div class="row mb10">
                        Tên Loại <br>
                        <input type="text" name="tenLoai">
                        <br>
                    </div>
                    <div class="row mb10">
                      <input type="submit" value="Thêm mới" name="themmoi"class="btn_input">
                      <br>
                      <input type="reset" value="Nhập lại" class="btn_input">
                      <a href="index.php?act=listdm"><input type="button" value="Danh Sách"></a>

                    </div>
                    <?php
                    if(isset($thongbao)){
                        echo $thongbao;
                    }else if(!empty($thongbao)){
                        echo "Vui lòng nhập";
                    }else{
                        echo "OK";
                    }
                       
                    ?>
                </form>
            </div>
        </div>
    </div>