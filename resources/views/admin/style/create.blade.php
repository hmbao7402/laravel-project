@extends('admin.layout.layout');

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Tạo Thêm Style Mới</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tạo Thêm Style Mới</h4>
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
                        <form class="forms-sample" action="{{url('admin/insert-style')}}" method="get">@csrf
                            <div class="form-group">
                                <label for="title">Tiêu đề</label>
                                <input type="text" name="title" class="form-control"
                                    placeholder="Năng động, cá tính, nổi loạn,...">
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Tạo</button>
                            <button class="btn btn-light" type="reset">Hủy bỏ</button>
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