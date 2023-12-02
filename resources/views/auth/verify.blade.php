<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>تایید کد</title>
    <link rel="stylesheet" href="{{ asset('verifyCodePage/verify-code.css') }}" />
</head>

<body>
    <div class="container">
        <form action="{{ route('verify.account') }}" method="POST" class="back">
            @csrf
            @method('POST')
            <div class="logo">
                <a href=""><img src="{{ asset('verifyCodePage/svg/logo.png') }}" alt="" /></a>
            </div>
            <img class="right-poly" src="{{ asset('verifyCodePage/svg/polygon.png') }}" alt="" />
            <img class="left-poly" src="{{ asset('verifyCodePage/svg/Polygon 65.png') }}" alt="" />
            <div class="head">
                <h3 class="signup">تایید کد</h3>
                <p class="txt">کد ارسال شده به شماره تلفن را وارد کنید.</p>
            </div>
            <div class="inp">
                <div class="inp-2">
                    <input class="input" id="code" name="code" type="number" />
                </div>
                <div class="ques">
                    <span>1:55</span>
                </div>
            </div>
            <div class="codebtn">
                <button type="submit" class="btn1">تایید کد</button>
                <button class="btn2">ارسال مجدد</button>
            </div>
        </form>
    </div>
</body>

</html>
