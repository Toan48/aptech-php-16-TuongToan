<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Toyota  2019</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
        integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- Font Awesome -->
   <!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/solid.css" integrity="sha384-r/k8YTFqmlOaqRkZuSiE9trsrDXkh07mRaoGBMoDcmA58OHILZPsk29i2BsFng1B" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/fontawesome.css" integrity="sha384-4aon80D8rXCGx9ayDt85LbyUHeMWd3UiBaWliBlJ53yzm9hqN21A+o1pqoyK04h+" crossorigin="anonymous">
		<link rel="stylesheet" href="{{asset('assets/js/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/js/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}">
    {{-- fotorama slide images --}}
    <!-- 1. Link to jQuery (1.8 or later), -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> <!-- 33 KB -->

    <!-- fotorama.css & fotorama.js. -->
    <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->

    <!-- 2. Add images to <div class="fotorama"></div>. -->
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
    <div class="container product">
        <div class="row">
            {{-- <div class="col-12 col-md-5 product-image">
                <div class="product-image__full"> <img id="product-zoom"
                        src="http://themesground.com/harrier-demo/V1/products-images/p45.jpg"
                        data-zoom-image="products-images/p35.jpg" alt="product-image"
                        style="height: auto; width: 100%;"> </div>
                <div class="product-image__slider">
                    <div class="owl-carousel owl-productSlide owl-theme">
                        <div class="item">
                            <a href="#"><img src="http://themesground.com/harrier-demo/V1/products-images/p36.jpg"
                                    alt="" class="img-fluid"></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="http://themesground.com/harrier-demo/V1/products-images/p45.jpg"
                                    alt="" class="img-fluid"></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="http://themesground.com/harrier-demo/V1/products-images/p42.jpg"
                                    alt="" class="img-fluid"></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="http://themesground.com/harrier-demo/V1/products-images/p33.jpg"
                                    alt="" class="img-fluid"></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="http://themesground.com/harrier-demo/V1/products-images/p38.jpg"
                                    alt="" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col-12 col-md-5 product-image">
                <div class="fotorama h-100 " data-nav="thumbs">
                    @foreach($images_product as $image_product)
                        @php $a = json_decode($image_product->photo,true); @endphp
                            @if(is_array($a) && !empty($a))
                                 @foreach ($a as $i)
                                    <img src="{{asset('img/'.$i)}}">
                                @endforeach
                             @endif
                    @endforeach
                    {{-- {{dd($image_product->photo)}} --}}
                </div>
            </div>
            <div class="col-12 col-md-7 product-detail">
                <div class="brand">
                    <strong>{{$category->name}}</strong>
                </div>
                <div class="name">
                    <h1>{{$car->name}}</h1>
                </div>
                <div class="ratings">
                    <div class="rating-box">
                        <div style="width:60%" class="rating"></div>
                    </div>
                    <p class="rating-links">
                        <a href="#">1 Review</a> <span class="separator">|</span>
                        <a href="#">Add Your Review</a> </p>
                </div>
                <hr>
                <div class="price-block">
                    <div class="price-box">
                        <p class="availability in-stock">
                            <span>In Stock</span>
                        </p>
                        <p class="special-price">
                            <span id="product-price-48" class="price">{{$car->price}}$ </span>
                        </p>
                    </div>
                </div>
                <div class="add-to-box mb-3">
                    <div class="add-to-cart">
                        <div class="float-left">
                            <div class="custom float-left">
                                <button
                                    onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 0 ) result.value--;return false;"
                                    class="reduced items-count" type="button"><i class="fa fa-minus">&nbsp;</i></button>
                                <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty"
                                    name="qty">
                                <button
                                    onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;"
                                    class="increase items-count" type="button"><i class="fa fa-plus">&nbsp;</i></button>
                            </div>
                        </div>
                        <button onclick="productAddToCartForm.submit(this)" class="button btn-cart" title="Add to Cart"
                            type="button">Add to Cart</button>
                    </div>
                </div>
                <div class="short-description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique
                        auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper.
                        Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. </p>
                </div>
                <hr>
                <div class="email-addto-box">
                    <ul class="add-to-links">
                        <li> <a class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a></li>
                        <li><a class="link-compare" href="compare.html"><span>Add to Compare</span></a></li>
                    </ul>
                    <p class="email-friend"><a href="#" class=""><span>Email to a Friend</span></a></p>
                </div>
                <div class="social ">
                    <ul class="link">
                        <li class="fb">
                            <a href="#"></a>
                        </li>
                        <li class="tw">
                            <a href="#"></a>
                        </li>
                        <li class="googleplus">
                            <a href="#"></a>
                        </li>
                        <li class="rss">
                            <a href="#"></a>
                        </li>
                        <li class="pintrest">
                            <a href="#"></a>
                        </li>
                        <li class="linkedin">
                            <a href="#"></a>
                        </li>
                        <li class="youtube">
                            <a href="#"></a>
                        </li>
                    </ul>
                </div>
                <ul class="shipping-pro">
                    <li>Free Wordwide Shipping</li>
                    <li>30 Days Return</li>
                    <li>Member Discount</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="product-collateral container mt-3">
        <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
            <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Product Description </a> </li>
            <li><a href="#product_tabs_tags" data-toggle="tab">Tags</a></li>
            <li> <a href="#reviews_tabs" data-toggle="tab">Reviews</a> </li>
            <li> <a href="#product_tabs_custom" data-toggle="tab">Custom Tab</a> </li>
            <li> <a href="#product_tabs_custom1" data-toggle="tab">Custom Tab1</a> </li>
        </ul>
        <div id="productTabContent" class="tab-content">
            <div class="tab-pane fade in active show" id="product_tabs_description">
                <div class="std">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id ab accusamus, mollitia reprehenderit
                        iusto, iure fugit. Consectetur, amet dolorem quas earum iusto ullam veritatis hic, doloribus
                        debitis facere id distinctio.</p>
                </div>
            </div>
            <div class="tab-pane fade" id="product_tabs_tags">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id ab accusamus, mollitia reprehenderit
                    iusto, iure fugit. Consectetur, amet dolorem quas earum iusto ullam veritatis hic, doloribus debitis
                    facere id distinctio.</p>
            </div>
            <div class="tab-pane fade" id="reviews_tabs">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id ab accusamus, mollitia reprehenderit
                    iusto, iure fugit. Consectetur, amet dolorem quas earum iusto ullam veritatis hic, doloribus debitis
                    facere id distinctio.</p>
            </div>
            <div class="tab-pane fade" id="product_tabs_custom">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id ab accusamus, mollitia reprehenderit
                    iusto, iure fugit. Consectetur, amet dolorem quas earum iusto ullam veritatis hic, doloribus debitis
                    facere id distinctio.</p>
            </div>
            <div class="tab-pane fade" id="product_tabs_custom1">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id ab accusamus, mollitia reprehenderit
                    iusto, iure fugit. Consectetur, amet dolorem quas earum iusto ullam veritatis hic, doloribus debitis
                    facere id distinctio.</p>
            </div>
        </div>
    </div>

    <div class="related-pro container my-3">
        <div class="slider-items-products">
            <div class="new_title center">
                <h2>Related Products</h2>
            </div>
            <div class="related-slider">
                <div class="owl-carousel owl-relatedSlide owl-theme">
                    <div class="item">
                        <div class="item-inner">
                            <div class="item-img">
                                <div class="item-img-info">
                                    <a href="product-detail.html" title="Retis lapen casen" class="product-image"><img
                                            src="http://themesground.com/harrier-demo/V1/products-images/p35.jpg"
                                            alt="Retis lapen casen"></a>
                                    <!-- <div class="item-box-hover">
					                        <div class="box-inner">
					                            <div class="add_cart">
					                                <button class="button btn-cart" type="button"></button>
					                            </div>
					                            <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
					                            <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
					                                </span>
					                            </div>
					                        </div>
					                    </div> -->
                                </div>
                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"><a href="product-detail.html"
                                            title="Retis lapen casen"> </a> </div>
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
                                                        class="price">$3adfsdf00sdfsad</span> </span>
                                            </div>
                                        </div>
                                        <div class="other-info">
                                            <div class="col-km"><i class="fas fa-certificate"></i> 847km</div>
                                            <div class="col-engine"><i class="fas fa-chess-board"></i> Manual</div>
                                            <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2018
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-inner">
                            <div class="item-img">
                                <div class="item-img-info">
                                    <a href="product-detail.html" title="Retis lapen casen" class="product-image"><img
                                            src="http://themesground.com/harrier-demo/V1/products-images/p35.jpg"
                                            alt="Retis lapen casen"></a>
                                    <!-- <div class="item-box-hover">
					                        <div class="box-inner">
					                            <div class="add_cart">
					                                <button class="button btn-cart" type="button"></button>
					                            </div>
					                            <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
					                            <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
					                                </span>
					                            </div>
					                        </div>
					                    </div> -->
                                </div>
                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"><a href="product-detail.html"
                                            title="Retis lapen casen">dsdfsdf</a> </div>
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
                                            <div class="col-km"><i class="fas fa-certificate"></i> 847km</div>
                                            <div class="col-engine"><i class="fas fa-chess-board"></i> Manual</div>
                                            <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2018
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-inner">
                            <div class="item-img">
                                <div class="item-img-info">
                                    <a href="product-detail.html" title="Retis lapen casen" class="product-image"><img
                                            src="http://themesground.com/harrier-demo/V1/products-images/p35.jpg"
                                            alt="Retis lapen casen"></a>
                                    <!-- <div class="item-box-hover">
					                        <div class="box-inner">
					                            <div class="add_cart">
					                                <button class="button btn-cart" type="button"></button>
					                            </div>
					                            <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
					                            <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
					                                </span>
					                            </div>
					                        </div>
					                    </div> -->
                                </div>
                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"><a href="product-detail.html"
                                            title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain
                                            Luxury</a> </div>
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
                                            <div class="col-km"><i class="fas fa-certificate"></i> 847km</div>
                                            <div class="col-engine"><i class="fas fa-chess-board"></i> Manual</div>
                                            <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2018
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-inner">
                            <div class="item-img">
                                <div class="item-img-info">
                                    <a href="product-detail.html" title="Retis lapen casen" class="product-image"><img
                                            src="http://themesground.com/harrier-demo/V1/products-images/p35.jpg"
                                            alt="Retis lapen casen"></a>
                                    <!-- <div class="item-box-hover">
					                        <div class="box-inner">
					                            <div class="add_cart">
					                                <button class="button btn-cart" type="button"></button>
					                            </div>
					                            <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
					                            <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
					                                </span>
					                            </div>
					                        </div>
					                    </div> -->
                                </div>
                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"><a href="product-detail.html"
                                            title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain
                                            Luxury</a> </div>
                                    <div class="item-content">
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <p class="rating-links"><a href="#">1 Review(s)</a> <span
                                                        class="separator">|Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                        <div class="item-price">
                                            <div class="price-box"><span class="regular-price"><span
                                                        class="price">$39000.00</span> </span>
                                            </div>
                                        </div>
                                        <div class="other-info">
                                            <div class="col-km"><i class="fas fa-certificate"></i> 847km</div>
                                            <div class="col-engine"><i class="fas fa-chess-board"></i> Manual</div>
                                            <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2018
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-inner">
                            <div class="item-img">
                                <div class="item-img-info">
                                    <a href="product-detail.html" title="Retis lapen casen" class="product-image"><img
                                            src="http://themesground.com/harrier-demo/V1/products-images/p35.jpg"
                                            alt="Retis lapen casen"></a>
                                    <!-- <div class="item-box-hover">
					                        <div class="box-inner">
					                            <div class="add_cart">
					                                <button class="button btn-cart" type="button"></button>
					                            </div>
					                            <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
					                            <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
					                                </span>
					                            </div>
					                        </div>
					                    </div> -->
                                </div>
                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"><a href="product-detail.html"
                                            title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain
                                            Luxury</a> </div>
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
                                            <div class="col-km"><i class="fas fa-certificate"></i> 847km</div>
                                            <div class="col-engine"><i class="fas fa-chess-board"></i> Manual</div>
                                            <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2018
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
              ')}}  </div>
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
                  <p>Stay updated pay less</p>"
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
    


    <!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<script src="{{asset('assets/js/OwlCarousel2-2.3.4/dist/owl.carousel.min.js')}}"></script>')}}
		<script src="{{asset('assets/js/custom.js')}}"></script>
</body>

</html>