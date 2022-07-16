@extends('admin.layout.layout');

@section('content')
<div class="col-md-10 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="stretch-card my-3">
                <a href="{{url('admin/create-product')}}">
                    <button class="btn btn-primary mr-2">Tạo product Mới</button>
                </a>
            </div>
            <p class="card-title mb-0">Danh Sách San Pham</p>
            <div class="table-responsive">
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
                <table class="table table-striped table-borderless">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tiêu Đề</th>
                            <th>Price</th>
                            <th>Style ID</th>
                            <th>Type ID</th>
                            <th>Collection ID</th>
                            <th class="ml-5">Thao Tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $key => $product)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$product->title}}</td>
                            <td>{{number_format($product->price)}}</td>
                            <td>{{$product->styleID}}</td>
                            <td>{{$product->typeID}}</td>
                            <td>{{$product->collectionID}}</td>
                            <td style="display:flex;">
                                <a href="{{url('admin/edit-product', $product->productID)}}"
                                    style="margin-right: 5px;">
                                    <button class="btn btn-warning">Chỉnh Sửa</button>
                                </a>
                                <a href="{{url('admin/product-details', $product->productID)}}">
                                    <button class="btn btn-success" style="margin-right: 5px;">Details</button>
                                </a>
                                <form action="{{url('admin/delete-product', $product->productID)}}"
                                    method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Xóa</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection