<?php 
    include('head.php');           
?>
    <div class="rightCol right content">
        <div id="productList clearfix">
            <h1>Product <span>สินค้า</span></h1>
            <div class="productBox">
                <div class="productDetail">
                    <h2>ดีเพย์รุ่น DP3-01</h2>
                    <p>ตู้กะปุกท็อปอัพรุ่น KP3-01
                        <br> รับได้เฉพาะเหรียญ
                        <br> หน้าจอสัมผัส 7"</p>
                    <p class="price">ราคา <span>32,000 บาท</span></p>
                    <a class="moreDetails" href="">ดูคุณสมบัติตู้</a>
                </div>
                <!--productDetail-->
                <img src="images/box.png" alt="ดีเพย์รุ่น DP3-01" class="productImg" />
            </div>
            <!--productBox-->

            <div class="productBox">
                <div class="productDetail">
                    <h2>ดีเพย์รุ่น DP3-01</h2>
                    <p>ตู้กะปุกท็อปอัพรุ่น KP3-01
                        <br> รับได้เฉพาะเหรียญ
                        <br> หน้าจอสัมผัส 7"</p>
                    <p class="price">ราคา <span>32,000 บาท</span></p>
                    <a class="moreDetails" href="">ดูคุณสมบัติตู้</a>
                </div>
                <!--productDetail-->
                <img src="images/box.png" alt="ดีเพย์รุ่น DP3-01" class="productImg" />
            </div>
            <!--productBox-->
            <a href="#" class="moreProduct clear">
                        ดูทั้งหมด
                    </a>
        </div>
        <!--productList-->
        <div class="yellowList clearfix">
            <div class="yellowBox">
                <a href="#"></a>
                <div class="yellowDetail">
                    <h2>Service</h2>
                    <p>สินค้าและบริการ</p>
                    <span>รายละเอียด</span>
                </div>
                <img src="images/serviceGirl.png" class="girls" />
            </div>
            <!--yellowBox-->

            <div class="yellowBox">
                <a href="#"></a>
                <div class="yellowDetail">
                    <h2>How to order</h2>
                    <p>ขั้นตอนการสั่งซื้อตู้ดีเพย์</p>
                    <span>รายละเอียด</span>
                </div>
                <img src="images/howtoGirl.png" class="girls" />
            </div>
            <!--yellowBox-->
        </div>
        <!--yellowList-->
        <div class="gallerySection">
            <h1>Gallery <span>รูปบรรยากาศ</span></h1>
            <div class="galletSlider">
                <div>
                    <img src="images/img.gif" />
                </div>
                <div>
                    <img src="images/img.gif" />
                </div>
                <div>
                    <img src="images/img.gif" />
                </div>
                <div>
                    <img src="images/img.gif" />
                </div>
                <div>
                    <img src="images/img.gif" />
                </div>
                <div>
                    <img src="images/img.gif" />
                </div>
            </div>
        </div>
    </div>
    <!--rightCol-->
<?php 
    include('foot.php');
?>
    <script>
        $(document).ready(function () {
            $('.galletSlider').slick({
                dots: true,
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3
            });
        });
    </script>

</html>