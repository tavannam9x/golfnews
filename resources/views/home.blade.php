@extends('layout.header')
<link rel="stylesheet" type="text/css" href="{{asset ('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset ('bootstrap/js/bootstrap.min.js') }}">
    <link rel="stylesheet" type="text/css" href="{{asset ('style/style.css') }}">
    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css') }}">
    <script type="text/javascript" src="asset (resources/js/jquery-2.2.0.min.js')"></script>
    <link rel="stylesheet" type="text/css" href="{{asset ('js/slick-1.8.1/slick/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{asset ('js/slick-1.8.1/slick/slick-theme.css') }}"/>
    <link href="https://fonts.googleapis.com/css?family=Be+Vietnam&display=swap" rel="stylesheet">
<script>
    $(window).load(function(){
      $(".stiki").sticky({ });
    });
  </script>
  <style>
    .stiki
    {
        z-index: 99999 !important;
    }
</style>
<body>
    <div class="all">
        <header>
            <div class="container">
                <div class="row">
                    <div class="header-top">
                        <img width="100%" src="style/img/banner.png">
                    </div>
                </div>
            </div>
            <div class="stiki">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-menu row">
                            <div class="col-lg-2 col-sm-12">
                                <button id="menu-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="logo">
                                    <a href="#" title="">
                                        <img src="style/img/logo.png" class="img-fluid">
                                    </a>
                                </div>
                                <button id="search-form-btn">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </div>
                            <div class="col-lg-10 col-sm-12">
                                <ul style="position: relative;" class="nav">
                                    <span id="close-menu-btn">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </span>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"> Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"> Tin quốc tế <i class="fa fa-chevron-down"></i> </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"> Tin hội golf</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"> Câu lạc bộ <i class="fa fa-chevron-down"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Giải đấu</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"> GolfnewsTV</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Video <i class="fa fa-chevron-down"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"> Góc chuyên môn</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Du lịch golf</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"> Thời trang <i class="fa fa-chevron-down"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"> Bên lề</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="header-banner">
                        <form class="search-form-header" style="display: none;">
                            <input type="text" name="" placeholder="Tim kiem">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
                <div class="row">
                    <div class="header-banner">
                        <img src="style/img/banner1.png">
                        <form class="search-form-header">
                            <input id="sear" type="text" name="" placeholder="Tim kiem">
                        </form>
                    </div>
                </div>
        </div>
        </header>
        <div class="container">
            <div class="box">
                <div style="background-color: white" class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5 resonleft">
                        <div class="box-left">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5 class="box-left-title">Tin mới</h5>
                                    <div class="box-left-post">
                                        <div class="box-left-post-img">
                                            <a href="#"><img src="style/img/post.png"></a>
                                        </div>
                                        <div class="box-left-post-desc">
                                            <a href="#"><h6 class="post-title-left">Tin quốc tế</h6></a>
                                            <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                            <p>Chơi golf bao lâu để xuống được Single Handicap?</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="box-left-post">
                                        <div class="box-left-post-img">
                                            <a href="#"><img src="style/img/img3.png"></a>
                                        </div>
                                        <div class="box-left-post-desc">
                                            <a href="#"><h6 class="post-title-left">Tin hội golf</h6></a>
                                           <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                            <p>Nữ golfer bị phạt đến... 58 gậy vì để caddie đứng sau đọc line trên green</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="box-left-post">
                                        <div class="box-left-post-img">
                                            <a href="#"><img src="style/img/post.png"></a>
                                        </div>
                                        <div class="box-left-post-desc">
                                            <a href="#"><h6 class="post-title-left">Câu lạc bộ</h6></a>
                                            <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                            <p>Hội golf người Việt tại Úc (AVGA) kỷ niệm 10 năm thành lập.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="box-left-post">
                                        <div class="box-left-post-img">
                                            <a href="#"><img src="style/img/anh1.jpg"></a>
                                        </div>
                                        <div class="box-left-post-desc">
                                            <a href="#"><h6 class="post-title-left">Giải đấu</h6></a>
                                            <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                            <p>Bernd Wiesberger nhắm tới Ryder Cup lần đầu tiên với chiến thắng Italian Open 2019</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="box-left-post-img">
                                        <a href="#"><img style="width: 100%; margin-bottom: 10px;" src="style/img/qc.png"></a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="box-left-post">
                                        <div class="box-left-post-img">
                                            <a href="#"><img src="style/img/anh2.jpg"></a>
                                        </div>
                                        <div class="box-left-post-desc">
                                            <a href="#"><h6 class="post-title-left">Thời trang</h6></a>
                                            <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                            <p>CLB Golf G78 miền Nam gia nhập cộng đồng golf Việt</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="box-left-post">
                                        <div class="box-left-post-img">
                                            <a href="#"><img src="style/img/anh3.jpg"></a>
                                        </div>
                                        <div class="box-left-post-desc">
                                            <a href="#"><h6 class="post-title-left">Câu lạc bộ</h6></a>
                                            <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                            <p>Giải Golf CLB HIO Mở rộng - Lần 5 hấp dẫn với giải HIO lên đến 2,5 tỷ đồng</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="box-left-post">
                                        <div class="box-left-post-img">
                                            <a href="#"><img src="style/img/anh4.jpg"></a>
                                        </div>
                                        <div class="box-left-post-desc">
                                            <a href="#"><h6 class="post-title-left">Tin mới nhất</h6></a>
                                            <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                            <p>Nữ golfer bị phạt đến... 58 gậy vì để caddie đứng sau đọc line trên green</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="box-left-post">
                                        <div class="box-left-post-img">
                                            <a href="#"><img src="style/img/anh5.jpg"></a>
                                        </div>
                                        <div class="box-left-post-desc">
                                            <a href="#"><h6 class="post-title-left">Tin trong nước</h6></a>
                                            <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                            <p>Thế đứng hợp lý giúp bạn tự tin đánh từ bunker</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="box-left-post-img">
                                        <a href="#"><img style="width: 100%; margin-bottom: 10px;" src="style/img/qc.png">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="box-left-post">
                                        <div class="box-left-post-img">
                                            <a href="#"><img src="style/img/anh6.png"></a>
                                        </div>
                                        <div class="box-left-post-desc">
                                            <a href="#"><h6 class="post-title-left">Photo</h6></a>
                                            <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                            <p>Bài tập đơn giản giúp cải thiện nhịp điệu khi putt</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="box-left-post">
                                        <div class="box-left-post-img">
                                            <a href="#"><img src="style/img/anh7.jpg"></a>
                                        </div>
                                        <div class="box-left-post-desc">
                                            <a href="#"><h6 class="post-title-left">Tin quốc tế</h6></a>
                                            <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                            <p>10 ngày trải nghiệm các sân golf ở Châu Âu theo EVGA Tour</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="box-left-post">
                                        <div class="box-left-post-img">
                                            <a href="#"><img src="style/img/anh8.jpg"></a>
                                        </div>
                                        <div class="box-left-post-desc">
                                            <a href="#"><h6 class="post-title-left">Góc chuyên môn</h6></a>
                                            <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                            <p>Hon 200 golfer tranh giai Caballo Open Championship 2019,Ngay 20 thang 9 nam 2019</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="box-left-post">
                                        <div class="box-left-post-img">
                                            <a href="#"><img src="style/img/anh9.jpg"></a>
                                        </div>
                                        <div class="box-left-post-desc">
                                            <a href="#"><h6 class="post-title-left">Bên lề</h6></a>
                                            <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                            <p>Chơi golf bao lâu để xuống được Single Handicap?</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="box-left-post-img">
                                        <img style="width: 100%; margin-bottom: 10px;" src="style/img/qc.png">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="box-left-post">
                                        <div class="box-left-post-img">
                                            <a href="#"><img src="style/img/anh10.jpg"></a>
                                        </div>
                                        <div class="box-left-post-desc">
                                            <a href="#"><h6 class="post-title-left">Nổi bật</h6></a>
                                            <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                            <p>Matthew Fitzpatrick tiến gần hơn tới chức vô địch Italian Open 2019</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="box-left-post">
                                        <div class="box-left-post-img">
                                            <a href="#"><img src="style/img/anh11.png"></a>
                                        </div>
                                        <div class="box-left-post-desc">
                                            <a href="#"><h6 class="post-title-left">Tin trong nước</h6></a>
                                            <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                            <p>Matthew Fitzpatrick bứt phá trong ngày thi đấu thứ 2 giải Italian Open 2019</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="box-left-post">
                                        <div class="box-left-post-img">
                                            <a href="#"><img src="style/img/anh9.jpg"></a>
                                        </div>
                                        <div class="box-left-post-desc">
                                            <a href="#"><h6 class="post-title-left">Thời trang</h6></a>
                                             <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                            <p>Bộ gậy Ping giúp Nate Lashley vô địch Rocket Mortgage Classic 2019</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="box-left-post">
                                        <div class="box-left-post-img">
                                            <a href="#"><img src="style/img/anh2.jpg"></a>
                                        </div>
                                        <div class="box-left-post-desc">
                                            <a href="#"><h6 class="post-title-left">Tin quốc tế</h6></a>
                                            <span class="box-left-day">2 gio truoc</span>
                                            <p>Hon 200 golfer tranh giai Caballo Open Championship 2019,Ngay 20 thang 9 nam 2019</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 responright">
                        <div class="box-right">
                            <h5 class="box-right-title">Truyền hình</h5>
                            <div class="box-right-video">
                                <img style="width: 100%; height: 100%" src="style/img/video.png">
                            </div>
                            <div class="qc">
                                <a href="#"><img src="style/img/banner.png"></a>
                            </div>
                            <div class="box-right-post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="block-title-right">
                                            <ul>
                                                <li>
                                                    <a href="quoc-te">Tin trong nước</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="post-new-left">
                                            <div class="post-new-img">
                                                <a href="#"><img src="style/img/anh7.jpg"></a>
                                            </div>
                                            <div class="post-new-desc">
                                                <a href="#"><h6  class="post-title">Luật một bóng, điểm đáng lưu ý mới cho các golfer thi đấu tại FLC Vietnam Masters 2019 presented by Porsche</h6></a>
                                                 <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                <p> Hon 200 golfer tranh giai Caballo Open Championship 2019. Ngay 20 thang 9 nam 2019, giai dau dien ra rat thanh cong, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam,phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam</p>
                                            </div>
                                        </div>
                                       <div class="post-new-right">
                                           <div class="slim-scroll">
                                                <div class="scrollbar">
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">3 dạng chấn thương phổ biến trong golf và cách phòng tránh </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link active">
                                                        <a href="#"><h6 class="post-title">Golfer Nguyễn Thị Vân Anh lần thứ 3 đoạt cúp vô địch giải Tam Dao Club Open Championship</h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">Tiger Woods sẽ chốt đội hình President Cup 2019 tại Hero World Challenge 2019?</h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link active">
                                                        <a href="#"><h6 class="post-title">Vô địch Houston Open, Lanto Griffin có danh hiệu PGA Tour đầu tiên </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">Bernd Wiesberger nhắm tới Ryder Cup lần đầu tiên với chiến thắng Italian Open 2019 </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">3 dạng chấn thương phổ biến trong golf và cách phòng tránh </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link active">
                                                        <a href="#"><h6 class="post-title">Golfer Nguyễn Thị Vân Anh lần thứ 3 đoạt cúp vô địch giải Tam Dao Club Open Championship</h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">Tiger Woods sẽ chốt đội hình President Cup 2019 tại Hero World Challenge 2019?</h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link active">
                                                        <a href="#"><h6 class="post-title">Vô địch Houston Open, Lanto Griffin có danh hiệu PGA Tour đầu tiên </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">Bernd Wiesberger nhắm tới Ryder Cup lần đầu tiên với chiến thắng Italian Open 2019 </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-right-post">
                                <div class="row">
                                    <div class="col-lg-12">
                                         <div class="block-title-right">
                                            <ul>
                                                <li>
                                                    <a href="quoc-te">Tin hội golf</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="post-new-left">
                                            <div class="post-new-img">
                                                <a href="#"><img src="style/img/anh8.jpg"></a>
                                            </div>
                                            <div class="post-new-desc">
                                                <a href="#"><h6  class="post-title">Chơi golf bao lâu để xuống được single hadnicap</h6></a>
                                                 <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                <p> Hon 200 golfer tranh giai Caballo Open Championship 2019. Ngay 20 thang 9 nam 2019, giai dau dien ra rat thanh cong, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam,phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam</p>
                                            </div>
                                        </div>
                                        <div class="post-new-right">
                                            <div class="slim-scroll">
                                                <div class="scrollbar">
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">CLB golf Tân Sơn Nhất đóng góp xây dựng 2 cầu dân sinh tại tỉnh Tiền Giang </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link active">
                                                        <a href="#"><h6 class="post-title">Giải Team Cup Bình Định – Đà Nẵng 2019: Thúc đẩy phong trào golf miền Trung – Tây Nguyên </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">Giải Golf Hữu Nghị NEU – Quần Nghĩa 2019: Kết nối - Hợp tác - Sẻ chia - Thành công </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link active">
                                                        <a href="#"><h6 class="post-title">Giải vô địch 88 Golf Club lần thứ 7 thành công với nhiều cảm xúc đáng nhớ </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">FTU Golf Club ra mắt Ban Điều hành mới </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                             <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">CLB golf Tân Sơn Nhất đóng góp xây dựng 2 cầu dân sinh tại tỉnh Tiền Giang </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link active">
                                                        <a href="#"><h6 class="post-title">Giải Team Cup Bình Định – Đà Nẵng 2019: Thúc đẩy phong trào golf miền Trung – Tây Nguyên </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">Giải Golf Hữu Nghị NEU – Quần Nghĩa 2019: Kết nối - Hợp tác - Sẻ chia - Thành công </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link active">
                                                        <a href="#"><h6 class="post-title">Giải vô địch 88 Golf Club lần thứ 7 thành công với nhiều cảm xúc đáng nhớ </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">FTU Golf Club ra mắt Ban Điều hành mới </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-right-post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="block-title-right">
                                            <ul>
                                                <li>
                                                    <a href="quoc-te">Câu lạc bộ</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="post-new-left">
                                            <div class="post-new-img">
                                                <a href="#"><img src="style/img/anh5.jpg"></a>
                                            </div>
                                            <div class="post-new-desc">
                                                <a href="#"><h6 class="post-title">Laguna Lăng Cô trước ngày khởi tranh Lexus Challenge 2019.</h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                <p> Hon 200 golfer tranh giai Caballo Open Championship 2019. Ngay 20 thang 9 nam 2019, giai dau dien ra rat thanh cong, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam,phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam</p>
                                            </div>
                                        </div>
                                        <div class="post-new-right">
                                            <div class="slim-scroll">
                                                <div class="scrollbar">
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">Matthew Fitzpatrick tiến gần hơn tới chức vô địch Italian Open 2019</h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link active">
                                                        <a href="#"><h6 class="post-title">Lanto Griffin chiếm ngôi đầu Houston Open khi đánh tốt nhất vòng 3 </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">Matthew Fitzpatrick bứt phá trong ngày thi đấu thứ 2 giải Italian Open 2019</h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link active">
                                                        <a href="#"><h6 class="post-title">Rickie Fowler chính thức kết hôn với Allison Stokke</h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">Peter Malnati dẫn đầu khi vòng 2 Houston Open bị hoãn vì thời tiết xấu</h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                          <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">Matthew Fitzpatrick tiến gần hơn tới chức vô địch Italian Open 2019</h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link active">
                                                        <a href="#"><h6 class="post-title">Lanto Griffin chiếm ngôi đầu Houston Open khi đánh tốt nhất vòng 3 </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">Matthew Fitzpatrick bứt phá trong ngày thi đấu thứ 2 giải Italian Open 2019</h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link active">
                                                        <a href="#"><h6 class="post-title">Rickie Fowler chính thức kết hôn với Allison Stokke</h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">Peter Malnati dẫn đầu khi vòng 2 Houston Open bị hoãn vì thời tiết xấu</h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="qc">
                                <a href="#"><img src="style/img/banner.png"></a>
                            </div>
                            <div class="box-right-post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="block-title-right">
                                            <ul>
                                                <li>
                                                    <a href="quoc-te">Giải đấu</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="post-new-left">
                                            <div class="post-new-img">
                                                <a href="#"><img src="style/img/anh10.jpg"></a>
                                            </div>
                                            <div class="post-new-desc">
                                                <a href="#"><h6 class="post-title">Nữ golfer bị phạt đến... 58 gậy vì để caddie đứng sau đọc line trên green</h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                <p> Hon 200 golfer tranh giai Caballo Open Championship 2019. Ngay 20 thang 9 nam 2019, giai dau dien ra rat thanh cong, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam,phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam</p>
                                            </div>
                                        </div>
                                        <div class="post-new-right">
                                            <div class="slim-scroll">
                                                <div class="scrollbar">
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">Tapio Pulkkanen dẫn đầu BXH Italian Open vòng đầu tiên với 64 gậy </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link active">
                                                        <a href="#"><h6 class="post-title">Austin Cook, Talor Gooch chia sẻ ngôi đầu sau vòng 1 Houston Open </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">Dustin Johnson sẵn sàng bảo vệ chức vô địch Saudi International </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link active">
                                                        <a href="#"><h6 class="post-title">Nguyễn Bảo Long vô địch Tam Dao Club Open Championship 2019 - Cúp VPS Fujixerox </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">Tiger Woods sẽ chốt đội hình President Cup 2019 tại Hero World Challenge 2019?</h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                              <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">Tapio Pulkkanen dẫn đầu BXH Italian Open vòng đầu tiên với 64 gậy </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link active">
                                                        <a href="#"><h6 class="post-title">Austin Cook, Talor Gooch chia sẻ ngôi đầu sau vòng 1 Houston Open </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">Dustin Johnson sẵn sàng bảo vệ chức vô địch Saudi International </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link active">
                                                        <a href="#"><h6 class="post-title">Nguyễn Bảo Long vô địch Tam Dao Club Open Championship 2019 - Cúp VPS Fujixerox </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">Tiger Woods sẽ chốt đội hình President Cup 2019 tại Hero World Challenge 2019?</h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-right-post">
                                <div class="row">
                                    <div class="col-lg-12">
                                         <div class="block-title-right">
                                            <ul>
                                                <li>
                                                    <a href="quoc-te">Video</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="post-new-left">
                                            <div class="post-new-img">
                                                <a href="#"><img src="style/img/anh11.png"></a>
                                            </div>
                                            <div class="post-new-desc">
                                                <a href="#"><h6 class="post-title">Chơi golf bao lâu để xuống được Single Handicap?</h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                <p> Hon 200 golfer tranh giai Caballo Open Championship 2019. Ngay 20 thang 9 nam 2019, giai dau dien ra rat thanh cong, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam,phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam</p>
                                            </div>
                                        </div>
                                        <div class="post-new-right">
                                            <div class="slim-scroll">
                                                <div class="scrollbar">
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">Giải Golf CLB HIO Mở rộng - Lần 5 hấp dẫn với giải HIO lên đến 2,5 tỷ đồng</h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link active">
                                                        <a href="#"><h6 class="post-title">Vô địch golf cá nhân và đồng đội Nữ toàn quốc – TC Motor Cup: Ngày hội của các golfer Nữ</h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">Giải Golf Hữu Nghị NEU – Quần Nghĩa 2019: Kết nối - Hợp tác - Sẻ chia - Thành công </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link active">
                                                        <a href="#"><h6 class="post-title">CLB G78 mở rộng kết nối thành viên cả nước </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">Hội golf Tp Hồ Chí Minh tuyển chọn thành viên tham dự VietNamese Golf Alliance Team Cup 2019 </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                              <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">Giải Golf CLB HIO Mở rộng - Lần 5 hấp dẫn với giải HIO lên đến 2,5 tỷ đồng</h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link active">
                                                        <a href="#"><h6 class="post-title">Vô địch golf cá nhân và đồng đội Nữ toàn quốc – TC Motor Cup: Ngày hội của các golfer Nữ</h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">Giải Golf Hữu Nghị NEU – Quần Nghĩa 2019: Kết nối - Hợp tác - Sẻ chia - Thành công </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link active">
                                                        <a href="#"><h6 class="post-title">CLB G78 mở rộng kết nối thành viên cả nước </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">Hội golf Tp Hồ Chí Minh tuyển chọn thành viên tham dự VietNamese Golf Alliance Team Cup 2019 </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-right-post">
                                <div class="row">
                                    <div class="col-lg-12">
                                       <div class="block-title-right">
                                            <ul>
                                                <li>
                                                    <a href="quoc-te">Photo</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="post-new-left">
                                            <div class="post-new-img">
                                                <a href="#"><img src="style/img/anh7.jpg"></a>
                                            </div>
                                            <div class="post-new-desc">
                                               <a href="#"><h6 class="post-title">Những hình ảnh đầu tiên tại vòng mở màn Honda Classic</h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                <p> Hon 200 golfer tranh giai Caballo Open Championship 2019. Ngay 20 thang 9 nam 2019, giai dau dien ra rat thanh cong, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam,phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam</p>
                                            </div>
                                        </div>
                                        <div class="post-new-right">
                                           <div class="slim-scroll">
                                                <div class="scrollbar">
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">3 dạng chấn thương phổ biến trong golf và cách phòng tránh </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link active">
                                                        <a href="#"><h6 class="post-title">Golfer Nguyễn Thị Vân Anh lần thứ 3 đoạt cúp vô địch giải Tam Dao Club Open Championship</h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">Tiger Woods sẽ chốt đội hình President Cup 2019 tại Hero World Challenge 2019?</h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link active">
                                                        <a href="#"><h6 class="post-title">Vô địch Houston Open, Lanto Griffin có danh hiệu PGA Tour đầu tiên </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">Bernd Wiesberger nhắm tới Ryder Cup lần đầu tiên với chiến thắng Italian Open 2019 </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">3 dạng chấn thương phổ biến trong golf và cách phòng tránh </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link active">
                                                        <a href="#"><h6 class="post-title">Golfer Nguyễn Thị Vân Anh lần thứ 3 đoạt cúp vô địch giải Tam Dao Club Open Championship</h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">Tiger Woods sẽ chốt đội hình President Cup 2019 tại Hero World Challenge 2019?</h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link active">
                                                        <a href="#"><h6 class="post-title">Vô địch Houston Open, Lanto Griffin có danh hiệu PGA Tour đầu tiên </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">Bernd Wiesberger nhắm tới Ryder Cup lần đầu tiên với chiến thắng Italian Open 2019 </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="qc">
                                <a href="#"><img src="style/img/banner.png"></a>
                            </div>
                            <div class="box-right-post">
                                <div class="row">
                                    <div class="col-lg-12">
                                       <div class="block-title-right">
                                            <ul>
                                                <li>
                                                    <a href="quoc-te">Góc chuyên môn</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="post-new-left">
                                            <div class="post-new-img">
                                                <a href="#"><img src="style/img/anh1.jpg"></a>
                                            </div>
                                            <div class="post-new-desc">
                                                <a href="#"><h6 class="post-title">Nữ golfer bị phạt đến... 58 gậy vì để caddie đứng sau đọc line trên green</h6></a>
                                               <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                <p> Hon 200 golfer tranh giai Caballo Open Championship 2019. Ngay 20 thang 9 nam 2019, giai dau dien ra rat thanh cong, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam,phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam</p>
                                            </div>
                                        </div>
                                        <div class="post-new-right">
                                            <div class="slim-scroll">
                                                <div class="scrollbar">
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">3 dạng chấn thương phổ biến trong golf và cách phòng tránh </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link active">
                                                        <a href="#"><h6 class="post-title">Golfer Nguyễn Thị Vân Anh lần thứ 3 đoạt cúp vô địch giải Tam Dao Club Open Championship</h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">Tiger Woods sẽ chốt đội hình President Cup 2019 tại Hero World Challenge 2019?</h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link active">
                                                        <a href="#"><h6 class="post-title">Vô địch Houston Open, Lanto Griffin có danh hiệu PGA Tour đầu tiên </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">Bernd Wiesberger nhắm tới Ryder Cup lần đầu tiên với chiến thắng Italian Open 2019 </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">3 dạng chấn thương phổ biến trong golf và cách phòng tránh </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link active">
                                                        <a href="#"><h6 class="post-title">Golfer Nguyễn Thị Vân Anh lần thứ 3 đoạt cúp vô địch giải Tam Dao Club Open Championship</h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">Tiger Woods sẽ chốt đội hình President Cup 2019 tại Hero World Challenge 2019?</h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link active">
                                                        <a href="#"><h6 class="post-title">Vô địch Houston Open, Lanto Griffin có danh hiệu PGA Tour đầu tiên </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                    <div class="post-new-link">
                                                        <a href="#"><h6 class="post-title">Bernd Wiesberger nhắm tới Ryder Cup lần đầu tiên với chiến thắng Italian Open 2019 </h6></a>
                                                        <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                    </div>
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-right-post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="block-title-right">
                                            <ul>
                                                <li>
                                                    <a href="quoc-te">Bên lề</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="post-new-left">
                                            <div class="post-new-img">
                                                <a href="#"><img src="style/img/anh2.jpg"></a>
                                            </div>
                                            <div class="post-new-desc">
                                               <a href="#"><h6 class="post-title">Vì sao Tiger Woods đổi gậy wedge mới ở mỗi giải đấu?</h6></a>
                                                 <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                <p> Hon 200 golfer tranh giai Caballo Open Championship 2019. Ngay 20 thang 9 nam 2019, giai dau dien ra rat thanh cong, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam,phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam</p>
                                            </div>
                                        </div>
                                        <div class="post-new-right">
                                           <div class="slim-scroll">
                                             <div class="scrollbar">
                                                <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Thế đứng hợp lý giúp bạn tự tin đánh từ bunkerrrrrrrrrrrrr </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link active">
                                                <a href="#"><h6 class="post-title">Phương pháp giúp người chơi đo tốc độ green nhanh chóng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">4 điều ghi nhớ để có một cú phát bóng tốt </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link active">
                                                <a href="#"><h6 class="post-title">3 dạng chấn thương phổ biến trong golf và cách phòng tránh </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- //////////////////mobile//////////// -->
    <div style="background-color: #DADADA;" class="mobile">
        <div style="padding: 0px;" class="container">
            <p class="watch-all"><a href="#">Xem tat ca</a>
            </p>
            <h4 class="post-mobile-sologan">Quốc tế</h4>
            <section class="slide-post slider">
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="qc">
            <img src="style/img/banner.png">
        </div>
        <div style="padding: 0px;" class="container">
            <p class="watch-all"><a href="#">Xem tat ca</a>
            </p>
            <h4 class="post-mobile-sologan">Quốc tế</h4>
            <section class="slide-post slider">
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="qc">
            <img src="style/img/banner.png">
        </div>
        <div style="padding: 0px;" class="container">
            <p class="watch-all"><a href="#">Xem tat ca</a>
            </p>
            <h4 class="post-mobile-sologan">Quốc tế</h4>
            <section class="slide-post slider">
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="qc">
            <img src="style/img/banner.png">
        </div>
        <div style="padding: 0px;" class="container">
            <p class="watch-all"><a href="#">Xem tat ca</a>
            </p>
            <h4 class="post-mobile-sologan">Quốc tế</h4>
            <section class="slide-post slider">
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="qc">
            <img src="style/img/banner.png">
        </div>
        <div style="padding: 0px;" class="container">
            <p class="watch-all"><a href="#">Xem tat ca</a>
            </p>
            <h4 class="post-mobile-sologan">Quốc tế</h4>
            <section class="slide-post slider">
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="qc">
            <img src="style/img/banner.png">
        </div>
        <div style="padding: 0px;" class="container">
            <p class="watch-all"><a href="#">Xem tat ca</a>
            </p>
            <h4 class="post-mobile-sologan">Quốc tế</h4>
            <section class="slide-post slider">
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="qc">
            <img src="style/img/banner.png">
        </div>
        <div style="padding: 0px;" class="container">
            <p class="watch-all"><a href="#">Xem tat ca</a>
            </p>
            <h4 class="post-mobile-sologan">Quốc tế</h4>
            <section class="slide-post slider">
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="qc">
            <img src="style/img/banner.png">
        </div>
        <div style="padding: 0px;" class="container">
            <p class="watch-all"><a href="#">Xem tat ca</a>
            </p>
            <h4 class="post-mobile-sologan">Quốc tế</h4>
            <section class="slide-post slider">
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="qc">
            <img src="style/img/banner.png">
        </div>
        <div style="padding: 0px;" class="container">
            <p class="watch-all"><a href="#">Xem tat ca</a>
            </p>
            <h4 class="post-mobile-sologan">Quốc tế</h4>
            <section class="slide-post slider">
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="qc">
            <img src="style/img/banner.png">
        </div>
        <div style="padding: 0px;" class="container">
            <p class="watch-all"><a href="#">Xem tat ca</a>
            </p>
            <h4 class="post-mobile-sologan">Quốc tế</h4>
            <section class="slide-post slider">
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>
                <div class="slide slick">
                    <div class="post-mobile">
                        <div class="post-mobile-img">
                            <img src="style/img/post.png">
                        </div>
                        <div class="post-mobile-desc">
                            <a href="#"><h6 class="post-mobile-title">Theo Golfchanel</h6></a>
                            <span class="post-mobile-time">2 gio truoc</span>
                            <p>Hơn 200 golfer tranh giải Caballo Open Championship 2019. Ngày 20 tháng 9 năm 2019</p>
                        </div>
                    </div>
                </div>

            </section>
        </div>
        <div class="qc">
            <img src="style/img/banner.png">
        </div>
        <!-- <div style="padding: 0px;" class="container">
      <p class="watch-all"><a href="#">Xem tat ca</a></p>
      <h4 class="post-mobile-sologan">Quốc tế</h4>
         <section class="slide-link slider">
            <div class="slide slick">
                <div class="box-mobile">
                    <div class="box-mobile-left">
                        <div class="box-mobile-left-img">
                            <img src="style/img/img1.png">
                        </div>
                        <div class="box-mobile-left-desc">
                            <h6 class="title-mobile-left"><a href="#">Nhung hinh anh dau tien tai vong mo man honda classic 2019</a></h6>
                            <span class="mobile-day">1 ngay truoc</span>
                             <p style="font-size: 16px; margin-top: 5px;">Hon 200 golfer tranh giai Caballo Open Championship 2019. Ngay 20 thang 9 nam 2019, giai dau dien ra rat thanh cong, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam,phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam</p>
                        </div>
                    </div>
                    <div class="box-mobile-right">
                        <div  class="box-mobile-right-link">
                            <a href="#"><h6 class="box-mobile-title">Rory McIlroy ghép cặp thi đấu cùng bố tại Alfred Dunhill Links Championship</h6></a>
                            <span class="box-mobile-link-day">1 ngay truoc</span>
                         </div>
                          <div  class="box-mobile-right-link">
                            <a href="#"><h6 class="box-mobile-title">Rory McIlroy ghép cặp thi đấu cùng bố tại Alfred Dunhill Links Championship</h6></a>
                            <span class="box-mobile-link-day">1 ngay truoc</span>
                         </div>
                          <div  class="box-mobile-right-link">
                            <a href="#"><h6 class="box-mobile-title">Rory McIlroy ghép cặp thi đấu cùng bố tại Alfred Dunhill Links Championship</h6></a>
                            <span class="box-mobile-link-day">1 ngay truoc</span>
                         </div>
                          <div  class="box-mobile-right-link">
                            <a href="#"><h6 class="box-mobile-title">Rory McIlroy ghép cặp thi đấu cùng bố tại Alfred Dunhill Links Championship</h6></a>
                            <span class="box-mobile-link-day">1 ngay truoc</span>
                         </div>
                          <div  class="box-mobile-right-link">
                            <a href="#"><h6 class="box-mobile-title">Rory McIlroy ghép cặp thi đấu cùng bố tại Alfred Dunhill Links Championship</h6></a>
                            <span class="box-mobile-link-day">1 ngay truoc</span>
                         </div>
                    </div>
                </div>
            </div>
             <div class="slide slick">
                <div class="box-mobile">
                    <div class="box-mobile-left">
                        <div class="box-mobile-left-img">
                            <img src="style/img/img1.png">
                        </div>
                        <div class="box-mobile-left-desc">
                            <h6 class="title-mobile-left"><a href="#">Nhung hinh anh dau tien tai vong mo man honda classic 2019</a></h6>
                            <span class="mobile-day">1 ngay truoc</span>
                             <p style="font-size: 16px; margin-top: 5px;">Hon 200 golfer tranh giai Caballo Open Championship 2019. Ngay 20 thang 9 nam 2019, giai dau dien ra rat thanh cong, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam,phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam</p>
                        </div>
                    </div>
                    <div class="box-mobile-right">
                        <div  class="box-mobile-right-link">
                            <a href="#"><h6 class="box-mobile-title">Rory McIlroy ghép cặp thi đấu cùng bố tại Alfred Dunhill Links Championship</h6></a>
                            <span class="box-mobile-link-day">1 ngay truoc</span>
                         </div>
                          <div  class="box-mobile-right-link">
                            <a href="#"><h6 class="box-mobile-title">Rory McIlroy ghép cặp thi đấu cùng bố tại Alfred Dunhill Links Championship</h6></a>
                            <span class="box-mobile-link-day">1 ngay truoc</span>
                         </div>
                          <div  class="box-mobile-right-link">
                            <a href="#"><h6 class="box-mobile-title">Rory McIlroy ghép cặp thi đấu cùng bố tại Alfred Dunhill Links Championship</h6></a>
                            <span class="box-mobile-link-day">1 ngay truoc</span>
                         </div>
                          <div  class="box-mobile-right-link">
                            <a href="#"><h6 class="box-mobile-title">Rory McIlroy ghép cặp thi đấu cùng bố tại Alfred Dunhill Links Championship</h6></a>
                            <span class="box-mobile-link-day">1 ngay truoc</span>
                         </div>
                          <div  class="box-mobile-right-link">
                            <a href="#"><h6 class="box-mobile-title">Rory McIlroy ghép cặp thi đấu cùng bố tại Alfred Dunhill Links Championship</h6></a>
                            <span class="box-mobile-link-day">1 ngay truoc</span>
                         </div>
                    </div>
                </div>
            </div>
           <div class="slide slick">
                <div class="box-mobile">
                    <div class="box-mobile-left">
                        <div class="box-mobile-left-img">
                            <img src="style/img/img1.png">
                        </div>
                        <div class="box-mobile-left-desc">
                            <h6 class="title-mobile-left"><a href="#">Nhung hinh anh dau tien tai vong mo man honda classic 2019</a></h6>
                            <span class="mobile-day">1 ngay truoc</span>
                             <p style="font-size: 16px; margin-top: 5px;">Hon 200 golfer tranh giai Caballo Open Championship 2019. Ngay 20 thang 9 nam 2019, giai dau dien ra rat thanh cong, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam,phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam</p>
                        </div>
                    </div>
                    <div class="box-mobile-right">
                        <div  class="box-mobile-right-link">
                            <a href="#"><h6 class="box-mobile-title">Rory McIlroy ghép cặp thi đấu cùng bố tại Alfred Dunhill Links Championship</h6></a>
                            <span class="box-mobile-link-day">1 ngay truoc</span>
                         </div>
                          <div  class="box-mobile-right-link">
                            <a href="#"><h6 class="box-mobile-title">Rory McIlroy ghép cặp thi đấu cùng bố tại Alfred Dunhill Links Championship</h6></a>
                            <span class="box-mobile-link-day">1 ngay truoc</span>
                         </div>
                          <div  class="box-mobile-right-link">
                            <a href="#"><h6 class="box-mobile-title">Rory McIlroy ghép cặp thi đấu cùng bố tại Alfred Dunhill Links Championship</h6></a>
                            <span class="box-mobile-link-day">1 ngay truoc</span>
                         </div>
                          <div  class="box-mobile-right-link">
                            <a href="#"><h6 class="box-mobile-title">Rory McIlroy ghép cặp thi đấu cùng bố tại Alfred Dunhill Links Championship</h6></a>
                            <span class="box-mobile-link-day">1 ngay truoc</span>
                         </div>
                          <div  class="box-mobile-right-link">
                            <a href="#"><h6 class="box-mobile-title">Rory McIlroy ghép cặp thi đấu cùng bố tại Alfred Dunhill Links Championship</h6></a>
                            <span class="box-mobile-link-day">1 ngay truoc</span>
                         </div>
                    </div>
                </div>
            </div>
           <div class="slide slick">
                <div class="box-mobile">
                    <div class="box-mobile-left">
                        <div class="box-mobile-left-img">
                            <img src="style/img/img1.png">
                        </div>
                        <div class="box-mobile-left-desc">
                            <h6 class="title-mobile-left"><a href="#">Nhung hinh anh dau tien tai vong mo man honda classic 2019</a></h6>
                            <span class="mobile-day">1 ngay truoc</span>
                             <p style="font-size: 16px; margin-top: 5px;">Hon 200 golfer tranh giai Caballo Open Championship 2019. Ngay 20 thang 9 nam 2019, giai dau dien ra rat thanh cong, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam,phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam</p>
                        </div>
                    </div>
                    <div class="box-mobile-right">
                        <div  class="box-mobile-right-link">
                            <a href="#"><h6 class="box-mobile-title">Rory McIlroy ghép cặp thi đấu cùng bố tại Alfred Dunhill Links Championship</h6></a>
                            <span class="box-mobile-link-day">1 ngay truoc</span>
                         </div>
                          <div  class="box-mobile-right-link">
                            <a href="#"><h6 class="box-mobile-title">Rory McIlroy ghép cặp thi đấu cùng bố tại Alfred Dunhill Links Championship</h6></a>
                            <span class="box-mobile-link-day">1 ngay truoc</span>
                         </div>
                          <div  class="box-mobile-right-link">
                            <a href="#"><h6 class="box-mobile-title">Rory McIlroy ghép cặp thi đấu cùng bố tại Alfred Dunhill Links Championship</h6></a>
                            <span class="box-mobile-link-day">1 ngay truoc</span>
                         </div>
                          <div  class="box-mobile-right-link">
                            <a href="#"><h6 class="box-mobile-title">Rory McIlroy ghép cặp thi đấu cùng bố tại Alfred Dunhill Links Championship</h6></a>
                            <span class="box-mobile-link-day">1 ngay truoc</span>
                         </div>
                          <div  class="box-mobile-right-link">
                            <a href="#"><h6 class="box-mobile-title">Rory McIlroy ghép cặp thi đấu cùng bố tại Alfred Dunhill Links Championship</h6></a>
                            <span class="box-mobile-link-day">1 ngay truoc</span>
                         </div>
                    </div>
                </div>
            </div>
         </section>
      </div> -->
    </div>
    <Script>
//     $(document).ready(function() {
//         $('.slide-post').slick({
//             slidesToShow: 1,
//             slidesToScroll: 1,
//             arrows: false,
//             dots: false,
//             pauseOnHover: false,
//             responsive: [{
//                 breakpoint: 768,
//                 settings: {
//                     slidesToShow: 2
//                 }
//             }, {
//                 breakpoint: 480,
//                 settings: {
//                     slidesToShow: 1.5
//                 }
//             }]
//         });
//         $('.slide-link').slick({
//             slidesToShow: 4,
//             slidesToScroll: 1,
//             autoplay: true,
//             autoplaySpeed: 1500,
//             arrows: false,
//             dots: false,
//             pauseOnHover: false,
//             responsive: [{
//                 breakpoint: 768,
//                 settings: {
//                     slidesToShow: 1
//                 }
//             }, {
//                 breakpoint: 480,
//                 settings: {
//                     slidesToShow: 1
//                 }
//             }]
//         });
//     });
// </Script>
 <script type="text/javascript" src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('js/script.js') }}"></script>
    <script src="{{ asset('js/slick-1.8.1/slick/slick.min.js')}}"></script>
//   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
    @extends('layout.footer')
</body>