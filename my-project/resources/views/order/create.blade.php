<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
    
  </head>
  <body>
       <!-- header -->
        <div class="page-heading">
             
        </div>
    <div class="form-oder">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <img src="./assets/img/slide1.jpg" alt="">
                </div>
                <div class="col-md-7">
                    <div class="form">
                            <h2>Đặt hàng</h2>
                            <form action="{{route('order.store')}}" method="post">
                                <input type="hidden" name="_method" value="post" /> {{csrf_field()}}
                                <label for="fname">Họ Và Tên</label>
                                <input type="text" id="customer_name" name="customer_name" placeholder="Nhập họ và tên...">
                                <label for="lname">Email</label>
                                <input type="text" id="email" name="email" placeholder="Nhập email...">
                
                                <label for="country">Số Điện Thoại</label>
                                <input type="text" id="phone" name="phone" placeholder="Nhập số điện thoại...">
                
                                <label for="address">Địa Chỉ</label>
                                <input type="text" id="address" name="address" placeholder="Nhập địa chỉ...">
                                <input type="hidden" name="car_id"  value="{{$car->id}}">     
                               <button class="btn btn-success" type="submit">Mua hàng</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>