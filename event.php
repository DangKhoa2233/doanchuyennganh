<!DOCTYPE html>
<html lang="en">
<head>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="css1/bootstrap.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
      <link href="css1/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css1/flexslider.css" type="text/css" media="screen"/>
      <link href="css1/sequence-looptheme.css" rel="stylesheet" media="all"/>
      <link href="css1/style.css" rel="stylesheet">
      <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
   </head>
<head>
<?php include  "layouts/headerpage.php"  ?>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <?php include "layouts/menupage.php" ?>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/11111.jpg);">
        <div class="bradcumbContent">
            <p>Sưu tầm</p>
            <h3>Những Đĩa nhạc kỉ niệm</h3>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Events Area Start ##### -->
 

    <div class="clearfix"></div>
         <div class="container_fullwidth">
            <div class="container">
               <div class="hot-products">
                  <h3 class="title"><strong></strong></h3>
                  <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
                  <ul id="hot">
                     <li>
                        <div class="row">
                           <div class="col-md-3 col-sm-6">
                        <?php
                        define("TY_GIA",22000);
                        function chuyenUSD2VND ($gia) {
                            return  number_format ($gia * TY_GIA,0,",","."). "VNĐ";
                        }
                        $arrTen= array("Excalibur","Excite-Daichi Mura","Yuki no Hana");
                        $arrGia = array(9,9,10);
                        $arrThongtin = array("thongtin1.php","thongtin2.php","thongtin3.php");
                        $arrHinh = array("Hinhanh1.jpg","Dia12.jpg","Dia13.jpg");
                        for($i=0;$i< count($arrTen);$i++) {
                             echo '<div class="products">';
                             echo '<div class="thumbnail"><a href="'.$arrThongtin[$i].'"><img src="img/bg-img/'.$arrHinh[$i].'" alt="Product Name"></a></div>';
                             echo   '<div class="productname">'.$arrTen[$i].'</div>';
                             echo    '<h4 class="price">'.chuyenUSD2VND($arrGia[$i]).'</h4>';
                             echo   '<div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>';
                             echo '</div>';
                        }
                              ?>
                           </div>

                           <div class="col-md-3 col-sm-6">
                               <?php
                               
                                function chuyenUSD2VNDD ($gia) {
                                    return  number_format ($gia * TY_GIA,0,",","."). "VNĐ";
                                }

                               
                                $arrTen= array("Kataomoi - Aimer Cover by yurisa","Dragon ball soul-Tanimoto Takayoshi","Blizzard-Daichi Miura");
                                $arrGia = array(9,9,10);
                                $arrHinh = array("Dia1.jpg","Dia10.jpg","Dia11.png");
                                $arrThongtin = array("thongtin5.php","thongtin6.php","thongtin7.php");
                               for($i=0;$i< count($arrTen);$i++) {
                                echo '<div class="products">';
                                echo '<div class="thumbnail"><a href="'.$arrThongtin[$i].'"><img src="img/bg-img/'.$arrHinh[$i].'" alt="Product Name"></a></div>';
                                echo '<div class="productname">'.$arrTen[$i].'</div>';
                                echo '<h4 class="price">'.chuyenUSD2VNDD($arrGia[$i]).'</h4>';
                                echo '<div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>';
                                echo '</div>';
                               }
                              ?>
                           </div>
                           <div class="col-md-3 col-sm-6">
                               <?php
                               function chuyenUSD2VND1 ($gia) {
                                return  number_format ($gia * TY_GIA,0,",","."). "VNĐ";
                            }
                               $arrTen= array("DAN DAN 心魅かれてく","Hãy Trao cho anh-MTP","brave heart- Ayumi Miyazaki");
                               $arrGia = array(9,9,10);
                               $arrThongtin = array("thongtin9.php","thongtin10.php","thongtin11.php");
                               $arrHinh = array("Dia2.jpg","Dia14.jpg","Dia17.jpg");
                               for($i=0;$i< count($arrTen);$i++) {
                                echo '<div class="products">';
                                echo '<div class="thumbnail"><a href="'.$arrThongtin[$i].'"><img src="img/bg-img/'.$arrHinh[$i].'" alt="Product Name"></a></div>';
                                echo '<div class="productname">'.$arrTen[$i].'</div>';
                                echo '<h4 class="price">'.chuyenUSD2VND1($arrGia[$i]).'</h4>';
                                echo '<div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>';
                                echo '</div>';
                               }
                              ?>
                           </div>
                           <div class="col-md-3 col-sm-6">
                               <?php
                               function chuyenUSD2VND2 ($gia) {
                                return  number_format ($gia * TY_GIA,0,",","."). "VNĐ";

                            }
                               $arrTen= array("Muộn rồi mà sao còn-MTP","Một đêm-Vicky","Buông đôi tay nhau ra-MTP");
                               $arrGia = array(9,9,10);

                               $arrHinh = array("Dia3.jpg","Dia16.jpg","Dia15.jpg");
                               for($i=0;$i<count($arrTen);$i++) {
                               echo  '<div class="products">';
                               echo '<div class="thumbnail"><a href="#"><img src="img/bg-img/'.$arrHinh[$i].'" alt="Product Name"></a></div>';
                               echo '<div class="productname">'.$arrTen[$i].'</div>';
                               echo '<h4 class="price">'.chuyenUSD2VND2($arrGia[$i]).'</h4>';
                               echo  '<div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>';
                               echo  '</div>';
                               }
                              ?>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="row">
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 
                                 <div class="thumbnail"><a href="thongtin4.php"><img src="img/bg-img/Dia4.jpg" alt="Product Name"></a></div>
                                 <div class="productname">Truyền Thái Y- Ngô Kiến Huy</div>
                                 <h4 class="price">200.000VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="thongtin8.php"><img src="img/bg-img/Dia5.jpg" alt="Product Name"></a></div>
                                 <div class="productname">Không thể giữ lấy-Ngô Kiến Huy</div>
                                 <h4 class="price">150.000VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 
                                 <div class="thumbnail"><a href="thongtin12.php"><img src="img/bg-img/Dia6.jpg" alt="Product Name"></a></div>
                                 <div class="productname">Mlem Mlem-Min</div>
                                 <h4 class="price">250.000VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="#"><img src="img/bg-img/Dia7.jpg.png" alt="Product Name"></a></div>
                                 <div class="productname">Crossing Field-Lisa</div>
                                 <h4 class="price">200.000VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="clearfix"></div>
               <div class="featured-products">
                  
                  <div class="control"><a id="prev_featured" class="prev" href="#">&lt;</a><a id="next_featured" class="next" href="#">&gt;</a></div>
                  <ul id="featured">
                     <li>
                     
                        
                       
                       
                           
                        </div>
                     </li>
                  </ul>
               </div>
    <!-- ##### Events Area End ##### -->

    <!-- ##### Newsletter & Testimonials Area Start ##### -->
    <section class="events-area section-padding-100">
        <div class="container">
            <div class="row">


                <!-- Testimonials Area -->
                <div class="col-12 col-lg-12">
                    <div class="testimonials-area mb-100 bg-img bg-overlay" style="background-image: url(img/bg-img/thumb-1920-829699.png);">
                        <div class="section-heading white text-left mb-50">
                            <p></p>
                            <h2><center>Giới thiệu đĩa nhạc</center></h2>
                        </div>
                        <!-- Testimonial Slide -->
                        <div class="testimonials-slide owl-carousel">
                            <!-- Single Slide -->
                            <div class="single-slide">
                                <p>Những đĩa nhạc ở đây giúp ta sưu tầm lại những đĩa nhạc ngày xưa và có thể giúp ta hoài niệm.Ta có thể sưu tập để ôn lại những kĩ niệm lúc xưa và để xem lại </p>
                                <div class="testimonial-info d-flex align-items-center">
                                    
                                   
                                </div>
                            </div>
                            <!-- Single Slide -->
                            <div class="single-slide">
                                <p>Những đĩa nhạc ở đây luôn sẵn sàng để bạn có thể xem và lựa chọn</p>
                                <div class="testimonial-info d-flex align-items-center">
                                   
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Newsletter & Testimonials Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(img/bg-img/11111.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading white">
                        <p></p>
                        <h2>Gửi Ý kiến</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn oneMusic-btn mt-30" type="submit">Gửi <i class="fa fa-angle-double-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
    <?php include "layouts/footerpage.php" ?>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

    <!-- <script src="js/khac/bootstrap.min.js"></script>
    <script src="js/khac/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script src="js/khac/jquery.easing.1.3.js"></script>
    <script src="js/khac/jquery.elevatezoom.js"></script>
    
    <script src="js/khac/jquery.flexslider.js"></script>
    <script src="js/khac/jquery.sequence-min.js"></script>
    <script src="js/khac/script.min.js"></script>
    <script src="js/khac/jquery-1.10.2.min.js"></script> -->


</body>

</html>