
<?php
    $html_dssp_new=showsp($dssp_new);
    $html_dssp_best=showsp($dssp_best);
    $html_dssp_view=showsp($dssp_view);
?>



<section id="hero">
            <h4>Trao đổi và cung cấp</h4>   
            <h2>Uư đải siêu giá trị</h2>
            <h1>Trên tất cả các sản phẩm</h1>
            <p>Tiết kiệm nhiều hơn với phiếu giảm giá & lên tới 70%</p>
            <button>Mua ngay</button>
        </section>

        <section id="feature" class="section-p1">
            <div class="fe-box">
                <img src="LAYOUT/img/features/f1.png" alt="">
                <h6>Free shipping</h6>
            </div>
            <div class="fe-box">
                <img src="LAYOUT/img/features/f2.png" alt="">
                <h6> Online Order</h6>
            </div>
            <div class="fe-box">
                <img src="LAYOUT/img/features/f3.png" alt="">
                <h6>Save Money</h6>
            </div>
            <div class="fe-box">
                <img src="LAYOUT/img/features/f4.png" alt="">
                <h6>Promotions</h6>
            </div>
            <div class="fe-box">
                <img src="LAYOUT/img/features/f5.png" alt="">
                <h6>Happy Sell</h6>
            </div>
            <div class="fe-box">
                <img src="LAYOUT/img/features/f6.png" alt="">
                <h6>24/7 Support</h6>
            </div>
        </section>








    <section id="product1" class="section-p1">
                <h2>Sản phẩm hot</h2>
                <p>Mặt hàng mùa hè</p>
                <div class="pro-container">
                    <?=$html_dssp_best; ?>

                </div>
            </section>
        

        <section id="banner" class="section-m1">
            <h4>Hỗ trợ sản phẩm</h4>
            <h2>Lên đến<span>70%</span>- Tất cả áo phông & Phụ kiện-</h2>
            <button class="normal">Tìm hiểu thêm</button>
        </section>

        <section id="product1" class="section-p1">
            <h2>Các sản phẩm mới</h2>
            <p>Mùa hè sôi động</p>
            <div class="pro-container">
                <?=$html_dssp_new; ?>
                </div>
            </div>
        </section>

        <section id="product1" class="section-p1">
            <h2>Sản phẩm nhiều người xem</h2>
             <div class="pro-container">
                <?=$html_dssp_view; ?>
        </section>











        <section id="sm-banner" class="section-p1">
            <div class="banner-box">
                <h4>crazy deals</h4>
                <h2>Mua 1 tặng 1</h2>
                <span>The best clasic dress is on sale at cara</span>
                <button class="white">Learn More</button>
            </div>
            <div class="banner-box banner-box2">         <!--  banner-box2 có thể nối chuổi 2 class  -->
                <h4>Spring/summer</h4>
                <h2>upcoming season</h2>
                <span>The best clasic dress is on sale at cara</span>
                <button class="white">Collection</button>
            </div>
        </section>

        <section id="banner3">
            <div class="banner-box">
                <h2>SEASONAL SALE</h2>
                <h3>Winter Collection -50% OFF</h3>
            </div>
            <div class="banner-box banner-box2">
                <h2>New footwear collection</h2>
                <h3>spring 2023/ Summer 2023</h3>
            </div>
            <div class="banner-box banner-box3">
                <h2>T-SHIRTS</h2>
                <h3>NEW trendy Prints</h3>
            </div>
        </section>
        
        
