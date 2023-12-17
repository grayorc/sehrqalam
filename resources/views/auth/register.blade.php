<!DOCTYPE html>
<html lang="en" dir="rtl">
{{--{{Auth::loginUsingId(1)}}--}}

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ثبت نام</title>
    <link rel="stylesheet" href="{{ asset('registerPage/style/register.css') }}" />
</head>

<body>
    <div class="container">
        <form action="{{ route('regitser-user') }}" method="POST" class="back">
            @csrf
            @method('POST')
            <div class="logo">
                <a href=""><img src="{{ asset('registerPage/svg/logo.png') }}" alt="" /></a>
            </div>
            <img class="right-poly" src="{{ asset('registerPage/svg/polygon.png') }}" alt="" />
            <img class="left-poly" src="{{ asset('registerPage/svg/Polygon 65.png') }}" alt="" />
            <div class="head">
                <h3 class="signup">ثبت نام</h3>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                <p class="txt">
                    برای ثبت نام در سایت، اطلاعات لازم را وارد کنید و با یک کلیک ثبت نام
                    کنید.
                </p>
            </div>
            <div class="inp">
                <div class="inp-2">
                    <svg class="phone" xmlns="http://www.w3.org/2000/svg" width="20" height="21"
                        viewBox="0 0 20 21" fill="none">
                        <path
                            d="M18.0404 14.3206L15.2125 13.9816C14.5333 13.8997 13.8653 14.1452 13.3866 14.6479L11.338 16.7989C8.18723 15.1155 5.60425 12.4151 4.00102 9.09502L6.06073 6.93232C6.53947 6.42964 6.77327 5.72823 6.69534 5.01512L6.37246 2.06918C6.23886 0.88846 5.29251 0 4.15689 0H2.23079C0.972707 0 -0.0738448 1.09888 0.00408987 2.41988C0.594166 12.4034 8.19836 20.3761 17.6953 20.9957C18.9533 21.0775 19.9999 19.9787 19.9999 18.6577V16.6352C20.011 15.4545 19.1649 14.4609 18.0404 14.3206Z"
                            fill="#8857FF" />
                    </svg>
                    <input class="input" type="text" id="phone_number" name="phone_number" placeholder="09123456789" />
                </div>
            </div>
            <div class="inp">
                <div class="inp-2">
                    <svg class="phone" xmlns="http://www.w3.org/2000/svg" width="20" height="21"
                        viewBox="0 0 20 21" fill="none">
                        <path
                            d="M18.0404 14.3206L15.2125 13.9816C14.5333 13.8997 13.8653 14.1452 13.3866 14.6479L11.338 16.7989C8.18723 15.1155 5.60425 12.4151 4.00102 9.09502L6.06073 6.93232C6.53947 6.42964 6.77327 5.72823 6.69534 5.01512L6.37246 2.06918C6.23886 0.88846 5.29251 0 4.15689 0H2.23079C0.972707 0 -0.0738448 1.09888 0.00408987 2.41988C0.594166 12.4034 8.19836 20.3761 17.6953 20.9957C18.9533 21.0775 19.9999 19.9787 19.9999 18.6577V16.6352C20.011 15.4545 19.1649 14.4609 18.0404 14.3206Z"
                            fill="#8857FF" />
                    </svg>
                    <input class="input" id="password" name="password" type="password" placeholder="رمز عبور" />
                    <div class="ques-parent">
                        <a href="" class="ques"> آیا حساب کاربری دارید؟ </a>
                    </div>
                </div>
            </div>
            <div class="codebtn">
                <button id="btn">دریافت کد</button>
            </div>
        </form>
    </div>
</body>

</html>
