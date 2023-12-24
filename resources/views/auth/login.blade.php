<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود</title>
    <link rel="stylesheet" href="{{ asset('loginPage/style/login.css') }}">
    <style>
        .capcha-span img{
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="back">
            <div class="logo"><a href=""><img src="{{ asset('loginPage/svg/logo.png') }}" alt=""></a>
            </div>
            <img class="right-poly" src="{{ asset('loginPage/svg/polygon.png') }}" alt="">
            <img class="left-poly" src="{{ asset('loginPage/svg/Polygon 65.png') }}" alt="">
            <div class="head">
                <h3>ورود</h3>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                <p>لطفا نام کاربری و رمز عبور خود را وارد کنید.</p>
            </div>
            <form class="form" action="{{ route('login') }}" method="POST">
                @method('POST')
                @csrf
                <div class="inps">
                    <input type="text" id="phone_number" name="phone_number" placeholder="نام کاربری" pattern="09(0[1-2]|1[0-9]|3[0-9]|2[0-1])-?[0-9]{3}-?[0-9]{4}">
                    <div class="fill">
                        <input class="pass" id="password" name="password" type="password" placeholder="رمز عبور">
                        <svg class="eye  closeeye " xmlns="http://www.w3.org/2000/svg" width="15" height="14"
                            viewBox="0 0 15 14" fill="none">
                            <path
                                d="M13.8907 0.232356C13.7501 0.0835786 13.5594 0 13.3605 0C13.1616 0 12.9709 0.0835786 12.8302 0.232356L1.11 12.6356C1.03837 12.7088 0.981231 12.7963 0.941924 12.8932C0.902617 12.99 0.881927 13.0941 0.881062 13.1995C0.880197 13.3049 0.899173 13.4094 0.936884 13.5069C0.974594 13.6044 1.03028 13.693 1.1007 13.7676C1.17112 13.8421 1.25486 13.901 1.34703 13.9409C1.43921 13.9808 1.53797 14.0009 1.63755 14C1.73714 13.9991 1.83555 13.9772 1.92705 13.9356C2.01856 13.894 2.10132 13.8335 2.1705 13.7577L13.89 1.35451C14.0306 1.20569 14.1096 1.00387 14.1096 0.793433C14.1096 0.582998 14.0314 0.381179 13.8907 0.232356ZM2.331 9.77146L4.251 7.73984C4.19625 7.49589 4.16782 7.24616 4.16625 6.99544C4.16625 5.10746 5.65875 3.5758 7.5 3.5758C7.7145 3.5758 7.923 3.6012 8.12625 3.64088L9.0285 2.68697C8.52328 2.5984 8.01211 2.55329 7.5 2.55206C2.58 2.55126 0 6.38516 0 6.99544C0 7.33113 0.79275 8.65486 2.331 9.77146ZM12.6713 4.2218L10.7498 6.25342C10.8015 6.49309 10.833 6.7399 10.833 6.99544C10.833 8.88342 9.34125 10.4135 7.5 10.4135C7.287 10.4135 7.08 10.3881 6.87825 10.3492L5.97525 11.3039C6.45675 11.3864 6.96225 11.4388 7.5 11.4388C12.42 11.4388 15 7.60334 15 6.99544C15 6.65895 14.208 5.33681 12.6713 4.2218Z"
                                fill="#8857FF" />
                        </svg>
                        <svg class="eye openeye hide" xmlns="http://www.w3.org/2000/svg" width="17" height="18"
                            viewBox="0 0 17 18" fill="none">
                            <path
                                d="M16.3135 8.82692C14.7442 6.16154 11.7365 4.5 8.50001 4.5C5.26347 4.5 2.25577 6.16154 0.719235 8.82692C0.65385 8.93077 0.65385 9.06923 0.719235 9.20769C2.25577 11.8385 5.26347 13.5 8.50001 13.5C11.7365 13.5 14.7442 11.8385 16.3135 9.17308C16.3462 9.06923 16.3462 8.93077 16.3135 8.82692ZM8.50001 11.7692C7.06154 11.7692 5.88462 10.5231 5.88462 9C5.88462 7.47692 7.06154 6.23077 8.50001 6.23077C9.93847 6.23077 11.1154 7.47692 11.1154 9C11.1154 10.5231 9.93847 11.7692 8.50001 11.7692Z"
                                fill="#8857FF" />
                        </svg>
                    </div>
                    <a>ایا رمز عبور خود را فراموش کردید؟</a>
                        <div class="capcha">
                            <input name="captcha" type="text" placeholder="کد امنیتی">
                            <div class="captcha-box" id="d-refresh">
                                <span class="capcha-span">{!! captcha_img('math') !!}</span>
                            </div>
                        </div>

                </div>
                <div class="btn-parent">
                    <button id="btn-login">ورود</button>
                </div>
            </form>

        </div>

    </div>



    </div>
    <script src="{{ asset('loginPage/js/script.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $ ('#d-refresh') .click (function () {
            $.ajax({
                type: 'GET',
                url: '{{ url ('/refresh_captcha') }}',
                success: function (data) {
                    $('.capcha-span').html(data);
                }
            });
        });
    </script>
</body>

</html>
