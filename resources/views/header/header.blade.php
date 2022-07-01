<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Click Us - Giải pháp mua sắm thời trang tiện lợi</title>
    <link rel="stylesheet" href="{{url('header/css/styles.css')}}">
</head>

<body>
    <header class="site-header">
        <div class="top-bar">
            <a href="#">Chào mừng bạn đến với ClickUs</a>
        </div>
        <div class="header">
            <div class="header__inner">
                {{-- <div class="header__toggle"></div> --}}
                <div class="header__logo">
                    <a href="#">
                        <img src="{{url('header/images/clickUs_logo.png')}}" alt="Logo">
                    </a>
                </div>
                <div class="header__menu">
                    <div class="mobile--visible tablet--visible" style="display: none;"></div>
                    <div class="mobile--hidden tablet--hidden">
                        <ul class="nav">
                            <li class="nav__item">
                                <a href="#">Phong cách Gen Z</a>
                            </li>
                            <li class="nav__item has-child">
                                <a href="#">Sản phẩm</a>
                            </li>
                            <li class="nav__item has-child">
                                <a href="#">Nam</a>
                            </li>
                            <li class="nav__item has-child">
                                <a href="#">Nữ</a>
                            </li>
                            <li class="nav__item">
                                <a href="#">Về ClickUs</a>
                            </li>
                            <li class="nav__item">
                                <a href="#">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header__actions">
                    <div class="header-actions__button mobile--hidden">
                        <a href="#" class="header-search">
                            <img src="https://www.coolmate.me/images/header/icon-search.svg" alt="Icon Search">
                        </a>
                    </div>
                    <div class="header-actions__button">
                        <a href="#">
                            <img src="https://www.coolmate.me/images/header/icon-account.svg" alt="Icon Account">
                        </a>
                    </div>
                    <div class="header-actions__button">
                        <a href="#">
                            <img src="https://www.coolmate.me/images/header/icon-cart.svg" alt="Icon Cart">
                        </a>
                        <span class="counts">0</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>

</html>