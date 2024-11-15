

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>READ_DREAM</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <style>
    #totalProduct {
      color: #fff;
      background-color: red;
      font-size: 12px;
      padding: 4px;
      border-radius: 50%;
      float: right;
      position: absolute;
      top: 13px;
      left: 120px;
    }
  </style>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">



    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
   


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Danh mục sách</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown dropright">
                           
                            
                        <!-- <a href="" class="nav-item nav-link">Văn Học</a>
                        <a href="" class="nav-item nav-link">Kinh Tế</a>
                        <a href="" class="nav-item nav-link">Tâm lí - Kĩ năng sống</a>
                        <a href="" class="nav-item nav-link">Nuôi dạy con</a>
                        <a href="" class="nav-item nav-link">Sách thiếu nhi</a>
                        <a href="" class="nav-item nav-link">Giáo khoa - Tham khảo</a>
                        <a href="" class="nav-item nav-link">Sách học ngoại ngữ</a> -->
                        <?php
                       
         
                        $dsdm = loadall_danhmuc();
                        
                                foreach ($dsdm as $dm){
                                    extract($dm);
                                    $linkdm="index.php?act=sanpham&iddm=".$id;
                                    echo '<li>
                                            <a class="nav-item nav-link" href="'.$linkdm.'">'.$ten.'</a>
                                            </li>';
                                }
                            ?>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                    </a>
                    
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link active">Trang chủ</a>
                            <!-- <a href="shop.html" class="nav-item nav-link">Cửa hàng</a> -->
                            <!-- <a href="detail.html" class="nav-item nav-link">Thông tin</a> -->
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Giỏ hàng<i class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="index.php?act=listCart" class="dropdown-item">Xem giỏ</a>
                                    <span id="totalProduct"><?= !empty($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?></span>
                                    <a href="index.php?act=order" class="dropdown-item">Thanh toán</a>
                                </div>
                            </div>

                            
                            <a href="contact.html" class="nav-item nav-link">Liên hệ</a>

                    
                            <a href="index.php?act=dangnhap" class="nav-item nav-link">Đăng nhập</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/z4894421116871_105ff72b8f287ef3c1a037a0f183b454.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Đám trẻ ở đại dương đen</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">“nỗi buồn không rõ hình thù

ta cho nó dáng, ta thu vào lòng

ta ôm mà chẳng đề phòng

một ngày nó lớn chất chồng tâm can”

“kẻ sống muốn đời cạn

người chết muốn hồi sinh

trần gian bi hài nhỉ?

ta còn muốn bỏ mình?”</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/z4894447933793_1031208dfb4127dc670e201b4f41393e.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Thuật Thao Túng - Góc Tối Ẩn Sau Mỗi Câu Nói
</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Bạn có muốn giành phần thắng cuối cùng trong các cuộc tranh luận?

Bạn có muốn dẹp đi bộ mặt kiêu ngạo của các đồng nghiệp xung quanh mình?

Bạn có muốn chứng minh rằng bạn đã đúng về mọi thứ?</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/z4894453789438_435ae2594ec3b3237397ec2df30dfe9f.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Hồ Sơ Tâm Lý Học Tâm Thần Hay Kẻ Điên
</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">“Có lúc, chúng ta gọi bệnh tâm thần là bệnh cố chấp, các bệnh nhân đều cố chấp sống trong thế giới kì thú của mình, không chịu hòa nhập với người xung quanh, không thể giống với đám đông, họ cố chấp dằn vặt chính mình.”
</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/_giao_ti_p_th_ng_minh_b_a_tr_c.png" alt=""  style="object-fit: cover;">
                    <div class="offer-text">
                        
                        <a href="" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/anh-bia-1-cang-cam-tinh-cang-that-bai.png" alt="" style= "object-fit: cover;">
                    <div class="offer-text">
                      
                        <a href="" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">SẢN PHẨM CHẤT LƯỢNG</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">VẬN CHUYỂN NHANH CHÓNG</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">14 NGÀY HOÀN HÀNG</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">HỖ TRỢ 24/7</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->

