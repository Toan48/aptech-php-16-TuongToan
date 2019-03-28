<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CÔ GIÁO THẢO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('assets/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slide.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/js/slick-1.8.1/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/slick-1.8.1/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    
   

</head>
   
</head>

<body>
    <!-- header -->
    <div class="header">
        <div class="logo">
            <img src="{{asset('assets/img/logo.png')}}" alt="">
        </div>
        <input type="checkbox" id="chk">
        <label for="chk" class="show-menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul class="menu">
            <li>
                <a href="#">Trang chủ</a>
            </li>
            <li>
                <a href="#">Giới thiệu</a>
                <!-- <ul class="sub-menu">
                            <li><a href="#">Item1</a></li>
                            <li><a href="#">Item2</a></li>
                            <li><a href="#">Item3</a></li>
                            <li><a href="#">Item4</a></li>
                            <li><a href="#">Item5</a></li>
                        </ul> -->
            </li>
            <li>
                <a href="#">Sản phẩm</a>
                <!-- <ul class="sub-menu">
                                <li><a href="#">Item1</a></li>
                                <li><a href="#">Item2</a></li>
                                <li><a href="#">Item3</a></li>
                                <li><a href="#">Item4</a></li>
                                <li><a href="#">Item5</a></li>
                            </ul> -->
            </li>
            <li>
                <a href="#">Liên hệ</a>
            </li>
            <li>
                <a href="#">Khuyến mãi</a>
            </li>
            <label for="chk" class="hide-menu-btn">
                <i class="fas fa-times"></i>
            </label>
        </ul>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="section-filter">
                <div class="b-filter__inner bg-grey">
                    <h2>Find your right car</h2>
                    <form class="b-filter" action="{{route('name.search')}}" method="get">
                        <div class="my-3">
                                <div class="form-group">
                                    {{-- {!! Form::text('search_text', null, array('placeholder' => 'Search Text','class' => 'form-control','id'=>'search_text')) !!} --}}
                                    <input type="text" name="search" placeholder="type something" class="form-control" id="search_text" value="{{ old('search') }}">
                                </div>
                        </div>
                        <div>
                            <div class="b-filter__btns">
                                <button class="btn btn-lg btn-primary">search vehicle</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="container-fluid">
                <div class="row">
                    <div class="w-100 slick">
                        <a href="#" class="slide-2">
                            <img src="{{asset('assets/img/slide-img1.jpg')}}" alt=""></a>
                        <a href="#" class="slide-3">
                            <img src="{{asset('assets/img/slide-img2.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="image-effect">
                        <a href="#"><img src="{{asset('assets/img/speakers.png')}}" alt="" style="width:100%;"></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="image-effect">
                        <a href="#"><img src="{{asset('assets/img/schedule.png')}}" alt="" style="width:100%;"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hot_deals -->
    <div class="hot_deals">
        <div class="new-title">
            <h2>Deals of the Week</h2>
        </div>
        <div class="display">
            <div class="container-fluid">
                <div class="row">
                    <div class="w-100 display-slick">
                        <div class="display-image">
                            <a href="#" class="product-image">
                                <img src="{{asset('assets/img/p1.jpg')}}" alt=""></a>
                            <div class="button"><a href="#"> <i class="fas fa-shopping-cart"></i> </a>
                                <a href="#">
                                    <i class="fas fa-search"></i>
                                </a>
                                <a href="#">
                                    <i class="fas fa-heart"></i>
                                </a>
                            </div>
                            <div class="new-label new-top-left">Used</div>
                            <div class="sale-label sale-top-left">-15%</div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"><a href="#" title="Retis lapen casen">Gorgeous Mercedes-Benz
                                            E-Class
                                            All-Terrain Luxury</a> </div>
                                    <div class="item-content">
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <p class="rating-links"><a href="#">1 Review(s)</a> <span
                                                        class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                        <div class="item-price">
                                            <div class="price-box"><span class="regular-price"><span
                                                        class="price">$49000.00</span> </span>
                                            </div>
                                        </div>
                                        <div class="other-info">
                                            <div class="col-km">
                                                <i class="fas fa-tachometer"></i>4875km</div>
                                            <div class="col-engine">
                                                <i class="fa fa-gear"></i> Automatic</div>
                                            <div class="col-date">
                                                <i class="fa fa-calendar" aria-hidden="true">

                                                </i> 2018</div>
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
    <!-- brand-logo -->
    <div class="brand-logo">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 d-md-block d-none"></div>
                <div class="col-12 col-md-8">
                    <div class="testimonials-section">
                        <div class="section">
                            <div class="offer-slider parallax parallax-2">
                                <div class="avatar">
                                    <img src="{{asset('assets/img/member1.png')}}" alt="">

                                </div>
                                <div class="testimonials">Our support and response has been amazing, helping me with
                                    several issues I
                                    came across and got them solved almost the same day. A pleasure to work with them!
                                </div>
                                <div class="clients_author">Stephen Smith <span>Happy Customer</span> </div>
                            </div>
                            <div class="offer-slider parallax parallax-2">
                                <div class="avatar">
                                    <img src="{{asset('assets/img/member2.png')}}" alt="">

                                </div>
                                <div class="testimonials">Our support and response has been amazing, helping me with
                                    several issues I
                                    came across and got them solved almost the same day. A pleasure to work with them!
                                </div>
                                <div class="clients_author">Stephen Smith <span>Happy Customer</span> </div>
                            </div>
                            <div class="offer-slider parallax parallax-2">
                                <div class="avatar">
                                    <img src="{{asset('assets/img/member3.png')}}" alt="">

                                </div>
                                <div class="testimonials">Our support and response has been amazing, helping me with
                                    several issues I
                                    came across and got them solved almost the same day. A pleasure to work with them!
                                </div>
                                <div class="clients_author">Stephen Smith <span>Happy Customer</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hot_deals-->
    <div class="hot_deals">
        <div class="title">
            <h2>Best Seller Cars</h2>
        </div>
        <div class="display">
            <div class="container-fluid">
                <div class="row">
                    <div class="w-100 display-slick">
                        <div class="display-image">
                            <a href="#" class="product-image">
                                <img src="{{asset('assets/img/p3.jpg')}}" alt=""></a>
                            <div class="button"><a href="#"> <i class="fas fa-shopping-cart"></i> </a>
                                <a href="#">
                                    <i class="fas fa-search"></i>
                                </a>
                                <a href="#">
                                    <i class="fas fa-heart"></i>
                                </a>
                            </div>
                            <div class="new-label new-top-left">Used</div>
                            <div class="sale-label sale-top-left">-15%</div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"><a href="#" title="Retis lapen casen">Gorgeous Mercedes-Benz
                                            E-Class
                                            All-Terrain Luxury</a> </div>
                                    <div class="item-content">
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <p class="rating-links"><a href="#">1 Review(s)</a> <span
                                                        class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                        <div class="item-price">
                                            <div class="price-box"><span class="regular-price"><span
                                                        class="price">$49000.00</span> </span>
                                            </div>
                                        </div>
                                        <div class="other-info">
                                            <div class="col-km">
                                                <i class="fas fa-tachometer"></i>4875km</div>
                                            <div class="col-engine">
                                                <i class="fa fa-gear"></i> Automatic</div>
                                            <div class="col-date">
                                                <i class="fa fa-calendar" aria-hidden="true">

                                                </i> 2018</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="display-image">
                            <a href="#" class="product-image">
                                <img src="{{asset('assets/img/p6.jpg')}}" alt="">
                            </a>
                            <div class="button"><a href="#"> <i class="fas fa-shopping-cart"></i> </a>
                                <a href="#">
                                    <i class="fas fa-search"></i>
                                </a>
                                <a href="#">
                                    <i class="fas fa-heart"></i>
                                </a>
                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"><a href="#" title="Retis lapen casen">Gorgeous Mercedes-Benz
                                            E-Class
                                            All-Terrain Luxury</a> </div>
                                    <div class="item-content">
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <p class="rating-links"><a href="#">1 Review(s)</a> <span
                                                        class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                        <div class="item-price">
                                            <div class="price-box"><span class="regular-price"><span
                                                        class="price">$39000.00</span> </span>
                                            </div>
                                        </div>
                                        <div class="other-info">
                                            <div class="col-km"><i class="fa fa-tachometer"></i> 4875km</div>
                                            <div class="col-engine"><i class="fa fa-gear"></i> Automatic</div>
                                            <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2018
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="display-image">
                            <a href="#" class="product-image">
                                <img src="{{asset('assets/img/p8.jpg')}}" alt="">
                            </a>
                            <div class="button"><a href="#"> <i class="fas fa-shopping-cart"></i> </a>
                                <a href="#">
                                    <i class="fas fa-search"></i>
                                </a>
                                <a href="#">
                                    <i class="fas fa-heart"></i>
                                </a>
                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"><a href="#" title="Retis lapen casen">Gorgeous Mercedes-Benz
                                            E-Class
                                            All-Terrain Luxury</a> </div>
                                    <div class="item-content">
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <p class="rating-links"><a href="#">1 Review(s)</a> <span
                                                        class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                        <div class="item-price">
                                            <div class="price-box"><span class="regular-price"><span
                                                        class="price">$99000.00</span> </span>
                                            </div>
                                        </div>
                                        <div class="other-info">
                                            <div class="col-km">
                                                <i class="fa fa-tachometer"></i> 4875km</div>
                                            <div class="col-engine">
                                                <i class="fa fa-gear"></i> Automatic</div>
                                            <div class="col-date">
                                                <i class="fa fa-calendar" aria-hidden="true"></i> 2018</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="display-image">
                            <a href="#" class="product-image">
                                <img src="{{asset('assets/img/p16.jpg')}}" alt="">
                            </a>
                            <div class="button"><a href="#"> <i class="fas fa-shopping-cart"></i> </a>
                                <a href="#">
                                    <i class="fas fa-search"></i>
                                </a>
                                <a href="#">
                                    <i class="fas fa-heart"></i>
                                </a>
                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"><a href="#" title="Retis lapen casen">Gorgeous Mercedes-Benz
                                            E-Class
                                            All-Terrain Luxury</a> </div>
                                    <div class="item-content">
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <p class="rating-links"><a href="#">1 Review(s)</a> <span
                                                        class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                        <div class="item-price">
                                            <div class="price-box"><span class="regular-price"><span
                                                        class="price">$67000.00</span> </span>
                                            </div>
                                        </div>
                                        <div class="other-info">
                                            <div class="col-km">
                                                <i class="fa fa-tachometer"></i> 4875km</div>
                                            <div class="col-engine">
                                                <i class="fa fa-gear"></i> Automatic</div>
                                            <div class="col-date">
                                                <i class="fa fa-calendar" aria-hidden="true">

                                                </i> 2018</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="display-image">
                            <a href="#" class="product-image">
                                <img src="{{asset('assets/img/p17.jpg')}}" alt="">
                            </a>
                            <div class="button"><a href="#"> <i class="fas fa-shopping-cart"></i> </a>
                                <a href="#">
                                    <i class="fas fa-search"></i>
                                </a>
                                <a href="#">
                                    <i class="fas fa-heart"></i>
                                </a>
                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"><a href="#" title="Retis lapen casen">Gorgeous Mercedes-Benz
                                            E-Class
                                            All-Terrain Luxury</a> </div>
                                    <div class="item-content">
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <p class="rating-links"><a href="#">1 Review(s)</a> <span
                                                        class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                        <div class="item-price">
                                            <div class="price-box"><span class="regular-price"><span
                                                        class="price">$47000.00</span> </span>
                                            </div>
                                        </div>
                                        <div class="other-info">
                                            <div class="col-km">
                                                <i class="fa fa-tachometer"></i> 4875km</div>
                                            <div class="col-engine">
                                                <i class="fa fa-gear"></i> Automatic</div>
                                            <div class="col-date">
                                                <i class="fa fa-calendar" aria-hidden="true"></i> 2018</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="display-image">
                            <a href="#" class="product-image">
                                <img src="{{asset('assets/img/p18.jpg')}}" alt="">
                            </a>
                            <div class="button"><a href="#"> <i class="fas fa-shopping-cart"></i> </a>
                                <a href="#">
                                    <i class="fas fa-search"></i>
                                </a>
                                <a href="#">
                                    <i class="fas fa-heart"></i>
                                </a>
                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"><a href="#" title="Retis lapen casen">Gorgeous Mercedes-Benz
                                            E-Class
                                            All-Terrain Luxury</a> </div>
                                    <div class="item-content">
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <p class="rating-links"><a href="#">1 Review(s)</a> <span
                                                        class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                        <div class="item-price">
                                            <div class="price-box"><span class="regular-price"><span
                                                        class="price">$59000.00</span> </span>
                                            </div>
                                        </div>
                                        <div class="other-info">
                                            <div class="col-km">
                                                <i class="fa fa-tachometer"></i> 4875km</div>
                                            <div class="col-engine">
                                                <i class="fa fa-gear"></i> Automatic</div>
                                            <div class="col-date">
                                                <i class="fa fa-calendar" aria-hidden="true"></i> 2018
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
    <!--  blog -->
  <div class="blog-home-inner">
        <div class="blog-title">
          <h2>Latest Blog post</h2>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">
              <div class="blog_inner">
                <div class="blog-img"> <a href="#"> <img src="{{asset('assets/img/blog-img1.jpg')}}" alt="blog image"> </a> </div>
    
                <div class="blog-info">
                  <div class="post-date"> <span class="entry-date">14 Jan, 2019</span> </div>
                  <ul class="post-meta">
                    <li><i class="fa fa-user"></i>Posted by <a href="#">admin</a> </li>
                    <li><i class="fa fa-comments"></i><a href="#">4 comments</a> </li>
                  </ul>
                  <h3><a href="#">Powerful and flexible premium Ecommerce themes</a></h3>
                  <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi metus,
                    semper eu dictum nec...</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="blog_inner">
                <div class="blog-img"> <a href="#"> <img src="{{asset('assets/img/blog-img2.jpg')}}" alt="blog image"> </a> </div>
    
                <div class="blog-info">
                  <div class="post-date"> <span class="entry-date">14 Jan, 2019</span> </div>
                  <ul class="post-meta">
                    <li><i class="fa fa-user"></i>Posted by <a href="#">admin</a> </li>
                    <li><i class="fa fa-comments"></i><a href="#">4 comments</a> </li>
                  </ul>
                  <h3><a href="#">Powerful and flexible premium Ecommerce themes</a></h3>
                  <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi metus,
                    semper eu dictum nec...</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="blog_inner">
                <div class="blog-img"> <a href="#"> <img src="{{asset('assets/img/blog-img3.jpg')}}" alt="blog image"> </a> </div>
    
                <div class="blog-info">
                  <div class="post-date"> <span class="entry-date">14 Jan, 2019</span> </div>
                  <ul class="post-meta">
                    <li><i class="fa fa-user"></i>Posted by <a href="#">admin</a> </li>
                    <li><i class="fa fa-comments"></i><a href="#">4 comments</a> </li>
                  </ul>
                  <h3><a href="#">Powerful and flexible premium Ecommerce themes</a></h3>
                  <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi metus,
                    semper eu dictum nec...</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- logo-brand -->
  <div class="logo-brand">
        <div class="brand-title">
          <h2>Popular Brands</h2>
        </div>
        <div class="brand-slider">
          <div class="logo-item">
            <a href="#">
              <img src="{{asset('assets/img/brand1.png')}}" alt="">
            </a>
          </div>
          <div class="logo-item">
            <a href="#">
              <img src="{{asset('assets/img/brand2.png')}}" alt="">
            </a>
          </div>
          <div class="logo-item">
            <a href="#">
              <img src="{{asset('assets/img/brand3.png')}}" alt="">
            </a>
          </div>
          <div class="logo-item">
            <a href="#">
              <img src="{{asset('assets/img/brand4.png')}}" alt="">
            </a>
          </div>
          <div class="logo-item">
            <a href="#">
              <img src="{{asset('assets/img/brand5.png')}}" alt="">
            </a>
          </div>
          <div class="logo-item">
            <a href="#">
              <img src="{{asset('assets/img/brand6.png')}}" alt="">
            </a>
          </div>
          <div class="logo-item">
                <a href="#">
                  <img src="{{asset('assets/img/brand1.png')}}" alt="">
                </a>
              </div>
              <div class="logo-item">
                <a href="#">
                  <img src="{{asset('assets/img/brand2.png')}}" alt="">
                </a>
              </div>
              <div class="logo-item">
                <a href="#">
                  <img src="{{asset('assets/img/brand3.png')}}" alt="">
                </a>
              </div>
              <div class="logo-item">
                <a href="#">
                  <img src="{{asset('assets/img/brand4.png')}}" alt="">
                </a>
              </div>
              <div class="logo-item">
                <a href="#">
                  <img src="{{asset('assets/img/brand5.png')}}" alt="">
                </a>
              </div>
              <div class="logo-item">
                <a href="#">
                  <img src="{{asset('assets/img/brand6.png')}}" alt="">
                </a>
              </div>
        </div>
      </div>
       <!-- footer -->
  <footer>
        <div class="our-features-box">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3 d-flex feature-box">
                <div class="icon-truck">
                  <img src="{{asset('assets/img/world-icon.png')}}" alt="">
                </div>
                <div class="content">
                  <h6>World's #1</h6>
                  <p>Largest Auto portal</p>
                </div>
              </div>
              <div class="col-md-3 d-flex feature-box">
                <div class="icon-truck">
                  <img src="{{asset('assets/img/car-sold-icon.png')}}" alt="">
                </div>
                <div class="content">
                  <h6>Car Sold</h6>
                  <p>Every 4 minute</p>
                </div>
              </div>
              <div class="col-md-3 d-flex feature-box">
                <div class="icon-truck">
                  <img src="{{asset('assets/img/tag-icon.png')}}" alt="">
                </div>
                <div class="content">
                  <h6>Offers</h6>
                  <p>Stay updated pay less</p>
                </div>
              </div>
              <div class="col-md-3 d-flex feature-box">
                <div class="icon-truck">
                  <img src="{{asset('assets/img/compare-icon.png')}}" alt="">
                </div>
                <div class="content">
                  <h6>Compare</h6>
                  <p>Decode the right car</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="newsletter d-flex align-items-center">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <h5>Newsletter</h5>
                <h4>Get Notified Of any Updates!</h4>
                <form class="newsletter-form">
                  <input type="text" name="email" id="newsletter1" title="Sign up for our newsletter"
                    class="input-text required-entry validate-email" placeholder="Enter your email address">
                  <button type="submit" title="Subscribe" class="button subscribe"><span>Subscribe</span></button>
                </form>
              </div>
            </div>
          </div>
    
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 col-md-4">
              <div class="co-info">
                <h4>SHOWROOM</h4>
                <address>
                  <div><span>ThemesGround, 789 Main rd, Anytown, <br>
                      CA 12345 USA</span></div>
                  <div> <span> +1 800 789 0000</span></div>
                  <div> <span><a href="#">Harrier@themesground.com</a></span></div>
                  <div> <span>Mon - Fri : 09am to 06pm</span></div>
                </address>
              </div>
            </div>
            <div class="col-12 col-md-8 ">
              <div class="footer-column">
                <h4>Quick Links</h4>
                <ul class="links">
                  <li class="first"><a title="How to buy" href="/blog/">Blog</a></li>
                  <li><a title="FAQs" href="#">FAQs</a></li>
                  <li><a title="Payment" href="#">Payment</a></li>
                  <li><a title="Shipment" href="#">Shipment</a></li>
                  <li><a title="Where is my order?" href="#">Where is my order?</a></li>
                  <li class="last"><a title="Return policy" href="#">Return policy</a></li>
                </ul>
              </div>
              <div class="footer-column">
                <h4>Style Advisor</h4>
                <ul class="links">
                  <li class="first"><a title="Your Account" href="#">Your Account</a></li>
                  <li><a title="Information" href="#">Information</a></li>
                  <li><a title="Addresses" href="#">Addresses</a></li>
                  <li><a title="Addresses" href="#">Discount</a></li>
                  <li><a title="Orders History" href="#">Orders History</a></li>
                  <li class="last"><a title=" Additional Information" href="#"> Additional Information</a>
                  </li>
                </ul>
              </div>
              <div class="footer-column">
                <h4>Information</h4>
                <ul class="links">
                  <li class="first"><a title="Site Map" href="#">Site Map</a></li>
                  <li><a title="Search Terms" href="#">Search Terms</a></li>
                  <li><a title="Advanced Search" href="#">Advanced Search</a></li>
                  <li><a title="History" href="#">About Us</a></li>
                  <li><a title="History" href="#">Contact Us</a></li>
                  <li><a title="Suppliers" href="#">Suppliers</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 col-md-4">
                <div class="social">
                  <ul>
                    <li class="fb"><a href="#"></a></li>
                    <li class="tw"><a href="#"></a></li>
                    <li class="googleplus"><a href="#"></a></li>
                    <li class="rss"><a href="#"></a></li>
                    <li class="pintrest"><a href="#"></a></li>
                    <li class="linkedin"><a href="#"></a></li>
                    <li class="youtube"><a href="#"></a></li>
                  </ul>
                </div>
    
              </div>
              <div class="col-sm-4 col-xs-12 coppyright">© 2019 ThemesGround. All Rights Reserved. </div>
              <div class="col-12 col-md-4">
                <div class="payment-accept">
                  <img src="{{asset('assets/img/payment-1.png')}}" alt="">
                  <img src="{{asset('assets/img/payment-2.png')}}" alt="">
                  <img src="{{asset('assets/img/payment-3.png')}}" alt="">
                  <img src="{{asset('assets/img/payment-4.png')}}" alt=""> </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    
    
    




    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="{{asset('assets/js/slick-1.8.1/slick/slick.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.js"></script>
    <script type="text/javascript" src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    {{-- <script src="{{asset('js/typeahead.js')}}" ></script> --}}
    {{-- update --}}
      
  
    <script>
        $(document).ready(function () {
            $('.slick').slick({
                dots: true,
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear'
            });
        });
        $('.display-slick').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
        $('.section ').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true
        });
        $('.brand-slider').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

    </script>
    {{-- typeahead --}}
    <script type="text/javascript">
         // jQuery wait till the page is fullt loaded
            $(document).ready(function () {
                // keyup function looks at the keys typed on the search box
                $('#search_text').on('keyup',function() {
                    // the text typed in the input field is assigned to a variable 
                    var query = $(this).val();
                    // call to an ajax function
                    $.ajax({
                        // assign a controller function to perform search action - route name is search
                        url:"{{ route('name.search') }}",
                        // since we are getting data methos is assigned as GET
                        type:"GET",
                        // data are sent the server
                        data:{'car':query},
                        // if search is succcessfully done, this callback function is called
                        success:function (data) {
                            // print the search results in the div called country_list(id)
                            $('#country_list').html(data);
                        }
                    })
                    // end of ajax call
                });

                // initiate a click function on each search result
                $(document).on('click', 'li', function(){
                    // declare the value in the input field to a variable
                    var value = $(this).text();
                    // assign the value to the search box
                    $('#search_text').val(value);
                    // after click is done, search results segment is made empty
                    $('#country_list').html("");
                });
            });
    </script>

</body>

</html>