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
                <img src="{{url('product-details/images/shop/1.jpg')}}" alt="" class="img-fluid w-100 pb-1" id="main-img">
                <div class="small-img-group">
                    <div class="small-img-col">
                        <img src="{{url('product-details/images/shop/1.jpg')}}" alt="" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="{{url('product-details/images/shop/24.jpg')}}" alt="" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="{{url('product-details/images/shop/25.jpg')}}" alt="" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="{{url('product-details/images/shop/26.jpg')}}" alt="" width="100%" class="small-img">
                    </div>
                </div>
            </div>
    
            <div class="col-lg-6 col-md-12 col-12">
                <h6>Home / T-Shirt</h6>
                <h3 class="py-4">Men's Fashion T Shirt</h3>
                <h2>$139.00</h2>
                <select class="my-3">
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>L</option>
                    <option>M</option>
                </select>
                <p class="warning">Maximum 5 products</p>
                <input type="number" value="1" min="1" max="5">
                <button class="buy-btn">Add To Cart</button>
                <h4 class="mt-5 mb-5">Product Details</h4>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur nulla aperiam sapiente suscipit
                    tempora inventore quae eligendi quasi incidunt temporibus aliquam beatae, at numquam voluptates
                    corrupti esse vero? Expedita, molestiae.</span>
            </div>
        </div>
    </section>
    
    @include('footer.footer')
</body>

</html>