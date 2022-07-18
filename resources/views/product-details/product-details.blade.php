<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Click Us - Giải pháp mua sắm thời trang tiện lợi</title>
    <script src="https://kit.fontawesome.com/4b2db38072.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <link rel="stylesheet" href="{{url('product-list/css/styles.css')}}">
    <link rel="stylesheet" href="{{url('header/css/styles.css')}}">
    <link rel="stylesheet" href="{{url('footer/css/styles.css')}}">
    <link rel="stylesheet" href="{{url('product-details/css/styles.css')}}">
</head>

<body>
    @include('header.header')
    
    <section class="container single-product my-3 py-5">
        <div class="row mt-5">
            <div class="col-lg-5 col-md-12 col-12">
                <img src="{{url('images/'.$product->img)}}" alt="" class="img-fluid w-100 pb-1" id="main-img">
            </div>
    
            <div class="col-lg-6 col-md-12 col-12">
                {{-- <h6>Home / T-Shirt</h6> --}}
                <h3 class="py-4">{{$product->title}}</h3>
                <h2>{{number_format($product->price)}}/cái</h2>
                <p class="warning">Maximum 5 products</p>
                <input type="number" value="1" min="1" max="5">
                <button class="buy-btn">Add To Cart</button>
                <h4 class="mt-5 mb-4">Mô tả sản phẩm</h4>
                <span>{{$product->desc}}</span>
            </div>
        </div>
    </section>
    
    @include('footer.footer')
</body>

</html>