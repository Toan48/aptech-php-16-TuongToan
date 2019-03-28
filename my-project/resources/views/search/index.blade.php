<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/css/GT.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="{{asset('assets/js/slick-1.8.1/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/slick-1.8.1/slick/slick-theme.css')}}">
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
        <div class="main">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-3 col-12 mt-5">
                      <div class="section-filter">
                        <div class="b-filter__inner bg-grey">
                          <h2>Find your right car</h2>
                          <form class="b-filter" action="{{route('name.search')}}" method="get">
                              <div class="my-3">
                                      <div class="form-group">
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
                      <div class="custum-slider">
                        <div class="inner">
                          <div class="item">
                            <img src="{{asset('assets/img/slide1.jpg')}}" alt="">
                            <div class="caption">
                              <h3><a title=" Sample Product" href="product-detail.html">50% OFF</a></h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                          </div>
                            <div class="item">
                              <img src="{{asset('assets/img/slide2.jpg')}}" alt="">
                              <div class="caption">
                                <h3><a title=" Sample Product" href="product-detail.html">50% OFF</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>
                            </div>
                              <div class="item">
                                <img src="{{asset('assets/img/slide3.jpg')}}" alt="">
                                <div class="caption">
                                  <h3><a title=" Sample Product" href="product-detail.html">50% OFF</a></h3>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                          </div>
                        </div>
                      </div>
                    </div>
             
                  
            
                    <div class="col-md-9 col-12 mt-5">
                      <div class="category-products">
                        <div class="products-grid">
                          @if($cars->count())
                          @foreach($cars as $car)
                          <div class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                            <div class="display-image">
                              <a href="#" class="product-image">
                                <img src="{{asset('img/'.$car->image)}}" alt="">
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
                                  <div class="item-title"><a href="#" title="Retis lapen casen">{{$car->name}}</a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a
                                            href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">{{$car->price}}$</span>
                                        </span> </div>
                                    </div>
                                    <div class="other-info">
                                      <div class="col-km">
                                        <i class="fa fa-tachometer"></i>{{$car->engine}}</div>
                                      <div class="col-engine">
                                        <i class="fa fa-gear"></i>{{$car->transmission}}</div>
                                      <div class="col-date">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>{{$car->year}}</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
            
                            </div>
            
                          </div>
                          @endforeach
                          @else
                          <div>
                            <h1>no cars be found</h1>
                          </div>
                          @endif                                          
                        </div>         
                      </div>
                      <div class="d-flex justify-content-center">
                        {{-- {{$cars->links()}} --}}
                      </div>
                    </div>
                  </div>
                </div>
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
                <img src="{{asset('assets/img/payment-4.png')}}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
                <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
                <script src="{{asset('assets/js/slick-1.8.1/slick/slick.js')}}"></script>
                <script>
                        $(document).ready(function () {
                           $('.inner').slick({
                               dots: true,
                               infinite: true,
                               speed: 500,
                               fade: true,
                               cssEase: 'linear'
                           });
                       });
                     </script>
               
            
</body>
</html>