@extends('admin.layout.layout');

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Edit Product</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Product</h4>
                        {{-- ERROR MESSAGE --}}
                        @if(Session::has('error_message'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{-- GET ERROR MESSAGE --}}
                            <strong>{{Session::get('error_message')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        {{-- SUCCESS MESSAGE --}}
                        @if(Session::has('success_message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{-- GET SUCCESS MESSAGE --}}
                            <strong> {{Session::get('success_message')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        {{-- ERROR MESSAGE --}}
                        @if($errors->any())
                        <ul class="alert alert-danger alert-dismissible fade show list-unstyled" role="alert">
                            @foreach ($errors->all() as $error)
                            <li><strong>{{$error}}</strong></li>
                            @endforeach
                        </ul>
                        @endif
                        <form class="forms-sample" action="{{url('admin/update-product', $product->productID)}}" method="post"
                            enctype="multipart/form-data">@csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="id">Product ID</label>
                                <input type="text" name="id" class="form-control"
                                    placeholder="Ao Thun Mua He Nang Dong,..." value="{{$product->productID}}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="title">Tiêu đề</label>
                                <input type="text" name="title" class="form-control"
                                    placeholder="Ao Thun Mua He Nang Dong,..." value="{{$product->title}}">
                            </div>
                            <div class="form-group">
                                <label for="desc">Description</label>
                                <input type="text" name="desc" class="form-control"
                                    placeholder="Ao Thun Mua He cho ngay dai nong buc,..." value="{{$product->desc}}">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" name="price" class="form-control"
                                    placeholder="Ao Thun Mua He cho ngay dai nong buc,..." value="{{$product->price}}">
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <img src={{url('images/'.$product->img)}} alt="" style="width: 100%; height: auto;">
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Chinh Sua</button>
                            <button class="btn btn-light" type="reset">Hủy bỏ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Lorem ipsum dolor sit amet. --}}
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    @include('admin.layout.footer')
    <!-- partial -->
</div>

@endsection