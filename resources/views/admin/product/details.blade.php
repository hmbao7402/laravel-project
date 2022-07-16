@extends('admin.layout.layout');

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Product Details</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Product Details</h4>
                        <form class="forms-sample">
                            @csrf
                            <div class="form-group">
                                <label>ID</label>
                                <input class="form-control" value="{{$product->productID}}" readonly>
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" value="{{$product->title}}" readonly>
                            </div>
                            <div class="form-group">
                                <label>desc</label>
                                <textarea value="{{$product->desc}}" style="height: 100px" readonly class="form-control">{{$product->desc}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" value="{{$product->price}}" readonly>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <input class="form-control" value="{{$product->status}}" readonly>
                            </div>
                            <div class="form-group">
                                <label>Style ID</label>
                                <input class="form-control" value="{{$product->styleID}}" readonly>
                            </div>
                            <div class="form-group">
                                <label>Type ID</label>
                                <input class="form-control" value="{{$product->typeID}}" readonly>
                            </div>
                            <div class="form-group">
                                <label>Collection ID</label>
                                <input class="form-control" value="{{$product->collectionID}}" readonly>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    @include('admin.layout.footer')
    <!-- partial -->
</div>

@endsection