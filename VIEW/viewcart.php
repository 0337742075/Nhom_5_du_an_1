<?php
    $html_cart=viewcart();
?>
<style>
    .viewcart table{
    width: 95%;
    border-collapse: collapse;
}
.viewcart table tr th{
    background-color:#088178;
    color: #fff;
    
}
th,td{
    padding: 10px;
    border: 1px #666666 solid;
    text-align: center;
}

.bgbanner{
    float:left;
    width: 100%;
    padding: 80px 0px;
    text-align: center;
    background-image: url('../images/bgpage.jpg');
    font-size: 14pt;
    color: #FFFFFF;
}
.col9{
    float: left;
    width: 70%;
}
.col3{
    float: left;
    width: 30%;
}
.bam {
    color: #088178;
    font-size: 13pt;
    font-weight: bold;
    width: 100%;
    border: 1px #088178 dotted;
    border-radius: 5px;
    padding: 10px 0px;
    background-color: #FFFFFF;
    
}
</style>
<h2 style="text-align: center;">Giỏ Hàng</h2>
<div class="containerfull">
    
        <div class="bgbanner">SẢN PHẨM</div>
    </div>

    <section class="containerfull">
        <div class="container">
            <div class="col9 viewcart">
                <h2>ĐƠN HÀNG</h2>
            <table>
                <tr>
                    <th>STT</th>
                    <th>Hình</th>
                    <th>Tên sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Thao tác</th>
                </tr>
                <?=$html_cart?>
            </table>
                <a href="index.php?pg=viewcart&del=1" style="color: #088178; text-decoration: none; font-size: 14pt;">Xóa giỏ hàng</a>
        </div>
        <div class="col3">
            <h2>ĐƠN HÀNG</h2>
            <div class="total">
                <h3>Tổng:<?=$tongdonhang?></h3>
            </div>
            <div class="coupon">
                <form action="index.php?pg=viewcart&voucher=1" method="post">
                    <input type="hidden" name="tongdonhang" value="<?=$tongdonhang?>">
                <input type="text" name="mavoucher" placeholder="Nhập voucher">
                <button type="submit">Áp mã </button>
                </form>
                
            </div>
            <div class="total">
                <h3>Tổng thanh toán: <?=$thanhtoan?> </h3>
            </div>
            <button class="bam">Thanh toán</button>
        </div>


        </div>
    </section>