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
</head>

<body>
    @include('header.header')
    <!-- Newest Product -->
    <section id="newest" class="product-listings">
        <div class="container text-center mt-3 py-5">
            <h3>Sản phẩm của click Us</h3>
            <hr class="mx-auto">
            <p>Click Us luôn mong muốn mang lại những sản phẩm chất lượng nhất đến tay khách hàng</p>
        </div>
        <div class="row mx-auto container-fluid">
            @foreach ($products as $item => $product)

            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img src={{url('images/'. $product->img)}}
                alt="featured_1" class="mb-3" style="width: 100%; height: auto;">

                <h5 class="product-name">{{$product->title}}</h5>
                <h4 class="product-price">{{number_format($product->price)}}/cái</h4>
                <a href="{{url('product_details', $product->productID)}}">
                    <button class="view_detail-btn btn">Chi Tiết</button>
                </a>
                <button class="add_to_cart-btn btn">
                    <i class="fa-solid fa-cart-shopping"></i>
                </button>
            </div>
            @endforeach
        </div>
    </section>
    @include('footer.footer')
</body>

</html>