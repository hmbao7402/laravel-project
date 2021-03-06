@extends('admin.layout.layout');

@section('content')

<div class="col-md-7 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <p class="card-title mb-0">Danh Sách Style</p>
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
                            <th>Slug</th>
                            <th class="ml-5">Thao Tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($styles as $key => $style)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$style->title}}</td>
                            <td>{{$style->slug}}</td>
                            <td style="display: flex;">
                                <a href="{{url('admin/edit-style', $style->styleID)}}" style="margin-right: 5px;">
                                    <button class="btn btn-warning">Chỉnh Sửa</button>
                                </a>
                                <form action="{{url('admin/delete-style', $style->styleID)}}" method="post">
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

<div class="col-md-5 grid-margin stretch-card mt-5">
    <a href="{{url('admin/create-style')}}">
        <button class="btn btn-primary mr-2">Tạo Style Mới</button>
    </a>
</div>

@endsection