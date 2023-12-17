<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/styles/order-description.css">
</head>

<body>
@if($submission->status == "در انتظار پرداخت")
<div class="container">
    <div class="logo"><a href=""><img src="/svg/logo.png" alt=""></a></div>
    <div class="describe">
        <h3>شرح سفارش</h3>
        <div class="items-parent">
            <div class="item">
                <div class="page">کلمات تقریبی</div>
                <div class="num">{{$submission->word_number}}</div>
            </div>
            <div class="item">
                <div class="price">هزینه به ازای کلمات</div>
                <div class="prc">{{number_format($submission->word_number * $prices['word_fee'],)}}</div>
            </div>
            @if($submission->licence)
            <div class="item">
                <div class="permi">کسب مجوز</div>
                <div class="num2">
                    {{number_format($prices['licence'])}}
                </div>
            </div>
            @endif
            @if($submission->editing)
            <div class="item">
                <div class="edition">ویراستاری</div>
                <div class="num3">{{number_format($prices['editing'])}}</div>
            </div>
            @endif
            @if($submission->cover_design)
            <div class="item">
                <div class="design">طراحی جلد</div>
                <div class="num4">{{number_format($prices['cover_design'])}}</div>
            </div>

            <div class="item">
                <div class="design-name">طرح اطلس</div>
                <div class="num5">{{number_format($prices['atlas'])}}</div>
            </div>
            @endif
            <div class="total">
                <p class="txt">مبلغ قابل پرداخت:</p>
                <p class="total-price">{{number_format($submission->price)}}</p>
            </div>
        </div>
        <div class="pay-btn">
            <button id="btn" type="#">
                تایید و پرداخت
            </button>
        </div>
    </div>
</div>
@else
    <div class="container">
        <div class="logo"><a href=""><img src="/svg/logo.png" alt=""></a></div>
            <div class="describe">
                <h3>{{$submission->status}}</h3>
            </div>
        </div>
    </div>
@endif
</body>

</html>
