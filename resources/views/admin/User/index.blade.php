@extends('admin.layout.layout');

@section('content')
<div class="col-md-10 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">        
            <p class="card-title mb-0">Danh Sách Khách Hàng</p>
            <div class="table-responsive">
<!--                 {{-- SUCCESS MESSAGE --}}
                @if(Session::has('success_message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{-- GET SUCCESS MESSAGE --}}
                    <strong> {{Session::get('success_message')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif -->
                <table class="table table-striped table-borderless">
                    <thead>
                        <tr>
                            <th>STT</th> <!-- id -->
                            <th>Họ Tên</th> <!-- name -->
                            <th>Email</th>  <!-- email -->
                            <th>Thời gian tạo</th> <!-- created at -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $key => $users)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$users->name}}</td>
                            <td>{{$users->email}}</td>
                            <td>{{ $users->created_at->format('d-m-Y')}}</td>                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection