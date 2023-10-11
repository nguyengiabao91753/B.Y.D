<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from safecarzinsurancelimitied.000webhostapp.com/3t-car-insurance-form-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Sep 2023 11:03:36 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <style>
        /* /* CSS cho menu toggle (hamburger menu) */
        /* Thêm CSS cho nút menu */
        .menu-toggle {

            display: none !important;
            float: right;


        }

        #mobile-menu-button {
            background: none;
            border: none;
            font-size: 18px;
            color: white;
            cursor: pointer;
            float: right;
        }

        .menu {
            display: flex;
            align-items: center;
        }


        /* CSS cho menu di động khi hiển thị */
        @media (max-width: 768px) {
            .menu-toggle {
                display: flex !important;
                /* Hiển thị nút menu trên các thiết bị nhỏ hơn */
                /* margin-right: auto; */
                /* Đặt nút menu bên phải */
                margin-left: 8px;
            }

            .menu {
                display: none;
                /* Ẩn menu trên các thiết bị nhỏ hơn */
            }

            .menu.active,
            .item {
                display: block;
                flex-direction: column-reverse;

            }

            .icon {
                margin-left: auto !important;
            }
        }

        /* End menu */
    </style>
    <script>
        // JavaScript để bật/tắt menu di động
        function togglemenu() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const menu = document.querySelector('.menu');


            menu.classList.toggle('active');

        }
    </script>
    <link href="{{asset('client/fontawesome/css/all.css')}}" rel="stylesheet">
    <!--     -->

    @stack('css')

    @stack('js')

    <link rel="icon" href="{{asset('client/img/icon.html')}}">
    <title>@yield('title')</title>

</head>