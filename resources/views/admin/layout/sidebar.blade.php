<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        {{-- Trang chu --}}
        <li class="nav-item">
            <a class="nav-link" href="{{url('admin/dashboard')}}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Trang chủ</span>
            </a>
        </li>
        {{-- Admin Management --}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Dành cho Admin</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu list-unstyled">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('admin/update-admin-password')}}">Đổi mật khẩu</a>
                    </li>
                    <<!-- li class="nav-item">
                        <a class="nav-link" href="{{url('admin/update-admin-details')}}">Đổi TT Cá nhân</a>
                    </li> -->
                </ul>
            </div>
        </li>
        {{-- Product Management --}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                aria-controls="form-elements">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Quản lý sản phẩm</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu list-unstyled">
                    <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Danh sách sản
                            phẩm</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('admin/create-product')}}">Thêm sản phẩm</a>
                    </li>
                </ul>
            </div>
        </li>
        {{-- Style Management --}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#styles" aria-expanded="false" aria-controls="charts">
                <i class="icon-bar-graph menu-icon"></i>
                <span class="menu-title">Quản Lý Style</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="styles">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{url('admin/style')}}">Danh Sách Style</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{url('admin/create-style')}}">Tạo Style Mới</a>
                    </li>
                </ul>
            </div>
        </li>
        {{-- Type Management --}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#types" aria-expanded="false" aria-controls="charts">
                <i class="icon-bar-graph menu-icon"></i>
                <span class="menu-title">Quản Lý Type</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="types">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{url('admin/type')}}">Danh Sách Type</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{url('admin/create-type')}}">Tạo Type Mới</a>
                    </li>
                </ul>
            </div>
        </li>
        {{-- Collection Management --}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collections" aria-expanded="false" aria-controls="charts">
                <i class="icon-bar-graph menu-icon"></i>
                <span class="menu-title">Quản Lý Collection</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="collections">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{url('admin/collection')}}">Danh Sách Collection</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{url('admin/create-collection')}}">Tạo Collection Mới</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="icon-grid-2 menu-icon"></i>
                <span class="menu-title">Tables</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic
                            table</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <i class="icon-contract menu-icon"></i>
                <span class="menu-title">Icons</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register
                        </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
                <i class="icon-ban menu-icon"></i>
                <span class="menu-title">Error pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/documentation/documentation.html">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Documentation</span>
            </a>
        </li>
    </ul>
</nav>