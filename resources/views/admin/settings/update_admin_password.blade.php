@extends('admin.layout.layout');
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Cài đặt Admin</h3>
                        {{-- <h6 class="font-weight-normal mb-0">Update Admin Password</h6> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thay đổi mật khẩu Admin</h4>
                        {{-- ERROR MESSAGE --}}
                        @if(Session::has('error_message'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{-- GET ERROR MESSAGE --}}
                            <strong>Error: </strong> {{Session::get('error_message')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        {{-- SUCCESS MESSAGE --}}
                        @if(Session::has('success_message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{-- GET SUCCESS MESSAGE --}}
                            <strong>Success: </strong> {{Session::get('success_message')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        {{-- UPDATE PASSWORD FORM --}}
                        <form class="forms-sample" action="{{url('admin/update-admin-password')}}" method="post">@csrf
                            {{-- Username / Email --}}
                            <div class="form-group">
                                <label>Admin Username/Email</label>
                                <input type="text" class="form-control" value="{{ $adminDetails['email'] }}" readonly>
                            </div>
                            {{-- Admin Type --}}
                            <div class="form-group">
                                <label>Vai trò</label>
                                <input class="form-control" value="{{ $adminDetails['isSuperAdmin'] == 1 ? 'Admin Cao Cấp' : 'Admin Thành Viên' }}" readonly>
                            </div>
                            {{-- Current Password --}}
                            <div class="form-group">
                                <label for="current_password">Mật khẩu hiện tại</label>
                                <input id="current_password" name="current_password" type="password"
                                    class="form-control" placeholder="Current Password" required>
                                <span id="check_password"></span>
                            </div>
                            {{-- New Password --}}
                            <div class="form-group">
                                <label for="new_password">Mật khẩu mới</label>
                                <input type="password" class="form-control" id="new_password" name="new_password"
                                    placeholder="Enter New Password" required>
                            </div>
                            {{-- Confirm New Password --}}
                            <div class="form-group">
                                <label for="confirm_password">Xác nhận mật khẩu</label>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password"
                                    placeholder="Confirm Password" required>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Đổi mật khẩu</button>
                            <button class="btn btn-light">Hủy bỏ</button>
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