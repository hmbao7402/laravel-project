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
                        <form class="forms-sample" action="{{url('admin/update-product')}}" method="post"
                            enctype="multipart/form-data">@csrf
                            <div class="form-group">
                                <label for="title">Tiêu đề</label>
                                <input type="text" name="title" class="form-control"
                                    placeholder="Ao Thun Mua He Nang Dong,...">
                            </div>
                            <div class="form-group">
                                <label for="desc">Description</label>
                                <input type="text" name="desc" class="form-control"
                                    placeholder="Ao Thun Mua He cho ngay dai nong buc,...">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" name="price" class="form-control"
                                    placeholder="Ao Thun Mua He cho ngay dai nong buc,...">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <input type="text" name="status" class="form-control"
                                    placeholder="Ao Thun Mua He cho ngay dai nong buc,...">
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="style">Style</label>
                                <input type="text" value="{{$product->styleID}}">
                            </div>
                            <div class="form-group">
                                <label for="type">type</label>
                                <select name="type" class="form-control">
                                    <option>Choose type</option>
                                    @foreach ($types as $item => $type)
                                    <option value="{{$type->typeID}}" style="text-transform: capitalize">
                                        {{$type->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="collection">collection</label>
                                <select name="collection" class="form-control">
                                    <option>Choose collection</option>
                                    @foreach ($collections as $item => $collection)
                                    <option value="{{$collection->collectionID}}" style="text-transform: capitalize">
                                        {{$collection->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select name="gender" class="form-control">
                                    <option value="">Choose Gender</option>
                                    <option value="male">Nam</option>
                                    <option value="female">Nu</option>
                                    <option value="unisex">Unisex</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Tạo</button>
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