<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./main-assets/bootstrap-icon/bootstrap-icon.css" />
    <link rel="stylesheet" href="./main-assets/css/style.css" />
    <link rel="stylesheet" href="./main-assets/swiper/swiper.css" />
</head>
<body>
<div class="container">
    <section class="header">
        <div class="header-container">
            <svg
                class="svg-header"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 1126 693"
                fill="none"
            >
                <path
                    d="M1132 -21H22.8193C8.00806 -21 -2.57153 -6.66014 1.79883 7.49161L205.663 667.623C210.322 682.71 224.27 693 240.06 693H1132V-21Z"
                    fill="url(#paint0_linear_47_459)"
                />
                <defs>
                    <linearGradient
                        id="paint0_linear_47_459"
                        x1="1101.99"
                        y1="-21"
                        x2="377.075"
                        y2="818.925"
                        gradientUnits="userSpaceOnUse"
                    >
                        <stop stop-color="#3D3F95" />
                        <stop offset="1" stop-color="#9A1FFB" />
                    </linearGradient>
                </defs>
            </svg>
            <div class="off-supplemet"></div>
            <div class="offcanvas">
                <div class="off-container">
                    <div class="bars">
                        <i class="bi bi-x-lg" style="color: white; font-size: 2rem"></i>
                    </div>
                    <div class="off-items">
                        <ul>
                            <li>
                                <div class="item-off">
                                    <div class="icon">
                                        <i class="bi-house-door-fill"></i>
                                    </div>
                                    <a href="">صفحه اصلی</a>
                                </div>
                            </li>
                            <li>
                                <div class="item-off">
                                    <!-- <i class="bi bi-card-list"></i> -->
                                    <i
                                        class="bi bi-list"
                                        style="border: 1px solid white; border-radius: 2px"
                                    ></i>
                                    <a href=""> وبلاگ</a>
                                    <div class="icon"></div>
                                </div>
                            </li>
                            <li>
                                <div class="item-off">
                                    <i class="bi bi-basket2-fill"></i>
                                    <a href=""> فروشگاه</a>
                                    <div class="icon"></div>
                                </div>
                            </li>
                            <li>
                                <div class="item-off">
                                    <i class="bi bi-search"></i>
                                    <a href=""> درباره ما</a>
                                    <div class="icon"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="offcanvas-footer">
                        <div class="off-logo">
                            <img src="/main-assets/img/off-logo.png" alt="" />
                        </div>
                        <p>مرکز رشد دانشگاه منتظری مشهد -</p>
                        <p>9152222222</p>
                    </div>
                </div>
            </div>
            <!-- <div class="background-gradient"></div> -->
            <div class="header-links">
                <div class="logo">
                    <a href=""><img src="./main-assets/img/logo.png" alt="" /></a>
                    <div class="bars-parent">
                        <div class="bars">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="26"
                                height="4"
                                viewBox="0 0 26 4"
                                fill="none"
                            >
                                <path
                                    d="M2 2H24"
                                    stroke="white"
                                    stroke-width="3"
                                    stroke-linecap="round"
                                />
                            </svg>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="26"
                                height="4"
                                viewBox="0 0 26 4"
                                fill="none"
                            >
                                <path
                                    d="M2 2H24"
                                    stroke="white"
                                    stroke-width="3"
                                    stroke-linecap="round"
                                />
                            </svg>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="26"
                                height="4"
                                viewBox="0 0 26 4"
                                fill="none"
                            >
                                <path
                                    d="M2 2H24"
                                    stroke="white"
                                    stroke-width="3"
                                    stroke-linecap="round"
                                />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="ul-link">
                    <ul>
                        <li><a href="#" class="ul-item"  >صفحه اصلی</a></li>
                    </ul>
                    <ul>
                        <li><a href="#" class="ul-item" >وبلاگ</a></li>
                    </ul>
                    <ul>
                        <li><a href="#" class="ul-item" > فروشگاه</a></li>
                    </ul>
                    <ul>
                        <li><a href="#" class="ul-item" > درباره ما</a></li>
                    </ul>
                </div>
                <div class="signup-options">
                    @guest
                    <div class="entry">
                        <div><a href="{{route('register')}}"><button>ثبت نام</button></a></div>
                        <div><a href="{{route('login')}}">ورود</a></div>
                    </div>
                    @endguest
                    @auth
                    <div class="entry">
                        <div><a href="{{route('submission')}}"><button>پنل کاربری</button></a></div>
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                        <div><a href=""><button style="background: #ef233c">خروج</button></a></div>
                        </form>
                    </div>
                    @endauth
                    <div><img src="./main-assets/img/logo.png" alt="" /></div>
                </div>
            </div>
            <div class="header-container-second">
                <div class="header-text">
                    <div class="big-text">
                        <div class="p">
                            دست نوشته های خود را با تبدیل به کتاب،<br />
                            <span class="endless"
                            >جاودانه
                    <img class="curly-line" src="./main-assets/img/line.svg" alt="" />
                  </span>
                            سازید.
                        </div>
                    </div>
                    <div class="small-text">
                        <p class="p-2">ارائه خدمات نشر کتاب در کوتاه ترین زمان</p>
                    </div>
                    <div class="req">
                        <a href="{{route('submission')}}"><button class="request">ثبت درخواست</button></a>
                        <div class="arrow">
                            <img src="./main-assets/img/image 16.png" alt="" />
                        </div>
                    </div>
                </div>
                <div class="header-img">
                    <div class="svg-holder">
                        <svg
                            class="hexa-border"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 186 198"
                            fill="none"
                        >
                            <mask id="path-1-inside-1_164_169" fill="white">
                                <path
                                    d="M77.4811 4.01495C87.1345 -1.33832 98.8655 -1.33832 108.519 4.01496L169.519 37.8421C179.69 43.4824 186 54.197 186 65.8272V131.281C186 142.911 179.69 153.626 169.519 159.266L108.519 193.093C98.8654 198.447 87.1345 198.447 77.4811 193.093L16.4811 159.266C6.31006 153.626 0 142.911 0 131.281V65.8272C0 54.197 6.31007 43.4824 16.4811 37.8421L77.4811 4.01495Z"
                                />
                            </mask>
                            <path
                                d="M108.519 193.093L107.549 191.344L108.519 193.093ZM169.519 37.8421L168.549 39.5912L169.519 37.8421ZM107.549 5.76402L168.549 39.5912L170.489 36.0931L109.489 2.26589L107.549 5.76402ZM184 65.8272V131.281H188V65.8272H184ZM168.549 157.517L107.549 191.344L109.489 194.842L170.489 161.015L168.549 157.517ZM78.451 191.344L17.451 157.517L15.5111 161.015L76.5111 194.842L78.451 191.344ZM2 131.281V65.8272H-2V131.281H2ZM17.451 39.5912L78.451 5.76402L76.5111 2.26589L15.5111 36.0931L17.451 39.5912ZM2 65.8272C2 54.9239 7.91569 44.8789 17.451 39.5912L15.5111 36.0931C4.70445 42.0858 -2 53.4701 -2 65.8272H2ZM17.451 157.517C7.91569 152.229 2 142.184 2 131.281H-2C-2 143.638 4.70444 155.022 15.5111 161.015L17.451 157.517ZM107.549 191.344C98.4989 196.363 87.5011 196.363 78.451 191.344L76.5111 194.842C86.768 200.53 99.232 200.53 109.489 194.842L107.549 191.344ZM184 131.281C184 142.184 178.084 152.229 168.549 157.517L170.489 161.015C181.296 155.022 188 143.638 188 131.281H184ZM168.549 39.5912C178.084 44.8789 184 54.9238 184 65.8272H188C188 53.4701 181.296 42.0858 170.489 36.0931L168.549 39.5912ZM109.489 2.26589C99.232 -3.42196 86.768 -3.42196 76.5111 2.26589L78.451 5.76402C87.5011 0.745326 98.4989 0.745328 107.549 5.76402L109.489 2.26589Z"
                                fill="white"
                                mask="url(#path-1-inside-1_164_169)"
                            />
                        </svg>
                        <svg
                            class="hexagonal"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 490 539"
                            fill="none"
                        >
                            <path
                                d="M214.873 7.95881C233.556 -2.65295 256.444 -2.65293 275.127 7.95883L459.127 112.469C478.21 123.309 490 143.564 490 165.51V372.815C490 394.762 478.21 415.017 459.127 425.857L275.127 530.367C256.444 540.979 233.556 540.979 214.873 530.367L30.873 425.857C11.7896 415.017 0 394.762 0 372.815V165.51C0 143.564 11.7897 123.309 30.8731 112.469L214.873 7.95881Z"
                                fill="black"
                                fill-opacity="0.19"
                            />
                        </svg>
                    </div>
                    <img class="polygon p-1" src="./main-assets/img/yellow.svg" alt="" />
                    <img class="polygon p-2" src="./main-assets/img/bluesmall.svg" alt="" />
                    <img class="polygon p-3" src="./main-assets/img/green.svg" alt="" />
                    <img class="polygon p-4" src="./main-assets/img/yellow.svg" alt="" />
                    <img class="polygon p-5" src="./main-assets/img/bluebig.svg" alt="" />
                </div>
            </div>
        </div>
    </section>
    <section class="cards-swiper">
        <div class="heading">
            <h3 class="service">خدمات ما</h3>
            <p class="service-txt">ما بهترین ها را برای شما فراهم می کنیم</p>
        </div>
        <div id="swiper-first" class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card-contaiener">
                        <div class="card-img">
                            <img src="./main-assets/img/card--1.svg" alt="" />
                        </div>
                        <div class="card-title">
                            <div class="cover">طراحی جلد کتاب</div>
                            <div class="cover-text">
                                طراحی جلد کتاب با ما، هنری و شگفت‌انگیز خواهد بود!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card-contaiener">
                        <div class="card-img">
                            <img src="./main-assets/img/card--2.svg" alt="" />
                        </div>
                        <div class="card-title">
                            <div class="cover">صفحه آرایی</div>
                            <div class="cover-text">
                                صفحه‌آرایی ما، جادویی برای زیبایی است!!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card-contaiener">
                        <div class="card-img">
                            <img src="./main-assets/img/card--4.svg" alt="" />
                        </div>
                        <div class="card-title">
                            <div class="cover">ویراستاری</div>
                            <div class="cover-text">
                                صفحه‌آرایی ما، جادویی برای زیبایی است!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card-contaiener">
                        <div class="card-img">
                            <img src="./main-assets/img/card--3.svg" alt="" />
                        </div>
                        <div class="card-title">
                            <div class="cover">کسب مجوز نشر</div>
                            <div class="cover-text">
                                مجوز نشر، کلید موفقیت نویسندگان است!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card-contaiener">
                        <div class="card-img">
                            <img src="./main-assets/img/card--4.svg" alt="" />
                        </div>
                        <div class="card-title">
                            <div class="cover">ویراستاری</div>
                            <div class="cover-text">
                                متن‌هایتان به شکل حرفه‌ای و شفاف تر تبدیل می کنیم
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>
    <section class="book-swiper">
        <div class="polygon-holder">
            <div class="poly-item right-svgs">
                <div class="right-img">
                    <img src="./main-assets/img/snap2.png" alt="">
                </div>
            </div>
            <div class="poly-item your-books">
                <div class="book-header">کتاب شما</div>
                <div class="book-text">
                    فروشگاه کتاب، جهانی از دانش و خیال پردازی
                </div>
            </div>
            <div class="poly-item left-svgs">
                <div class="left-img">
                    <img src="./main-assets/img/snap.png" alt="">
                </div>
            </div>
        </div>
        <div class="swiper-container">
            <div id="swiper-second" class="swiper sw-second">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper swiper-wraper-second">
                    <!-- Slides -->
                    <div class="swiper-slide ">
                        <div class="sw-card-container">
                            <div class="pic">
                                <img class="background-card" src="./main-assets/img/book 1 (1).png" alt="">
                                <div class="heart">
                                    <div class="btn-holder">
                                        <button class="like">
                                            <img src="./main-assets/img/heart.svg" alt="" />
                                        </button>
                                    </div>
                                </div>
                                <div class="pic-footer">
                                    <div class="power">راز قدرت</div>
                                    <div class="stars"></div>
                                </div>
                            </div>
                            <div class="card-detail">
                                <div class="pdf">
                                    <div>پی دی اف</div>
                                    <div>200.000 تومان</div>
                                </div>
                                <div class="print">
                                    <div>چاپی</div>
                                    <div>200.000 تومان</div>
                                </div>
                            </div>
                            <div class="buttons">
                                <button class="more-info">مشاهده اطلاعات بیشتر</button>
                                <button class="buy">
                                    <i class="bi bi-basket2" style="color: white"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide ">
                        <div class="sw-card-container">
                            <div class="pic">
                                <img class="background-card" src="./main-assets/img/book 1 (1).png" alt="">
                                <div class="heart">
                                    <div class="btn-holder">
                                        <button class="like">
                                            <img src="./main-assets/img/heart.svg" alt="" />
                                        </button>
                                    </div>
                                </div>
                                <div class="pic-footer">
                                    <div class="power">راز قدرت</div>
                                    <div class="stars"></div>
                                </div>
                            </div>
                            <div class="card-detail">
                                <div class="pdf">
                                    <div>پی دی اف</div>
                                    <div>200.000 تومان</div>
                                </div>
                                <div class="print">
                                    <div>چاپی</div>
                                    <div>200.000 تومان</div>
                                </div>
                            </div>
                            <div class="buttons">
                                <button class="more-info">مشاهده اطلاعات بیشتر</button>
                                <button class="buy">
                                    <i class="bi bi-basket2" style="color: white"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sw-card-container">
                            <div class="pic">
                                <img class="background-card" src="./main-assets/img/book 1 (1).png" alt="">
                                <div class="heart">
                                    <button class="like">
                                        <img src="./main-assets/img/heart.svg" alt="" />
                                    </button>
                                </div>
                                <div class="pic-footer">
                                    <div class="power">راز قدرت</div>
                                    <div class="stars">
                                        <!-- <img src="./img/Star 5.svg" alt="" class="star">
                                        <img src="./img/Star 5.svg" alt="" class="star">
                                        <img src="./img/Star 5.svg" alt="" class="star"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="card-detail">
                                <div class="pdf">
                                    <div>پی دی اف</div>
                                    <div>200.000 تومان</div>
                                </div>
                                <div class="print">
                                    <div>چاپی</div>
                                    <div>200.000 تومان</div>
                                </div>
                            </div>
                            <div class="buttons">
                                <button class="more-info">مشاهده اطلاعات بیشتر</button>
                                <button class="buy">
                                    <i class="bi bi-basket2" style="color: white"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="sw-card-container">
                            <div class="pic">
                                <img class="background-card" src="./main-assets/img/book 1 (1).png" alt="">
                                <div class="heart">
                                    <button class="like">
                                        <img src="./main-assets/img/heart.svg" alt="" />
                                    </button>
                                </div>
                                <div class="pic-footer">
                                    <div class="power">راز قدرت</div>
                                    <div class="stars">
                                        <!-- <img src="./img/Star 5.svg" alt="" class="star">
                                        <img src="./img/Star 5.svg" alt="" class="star">
                                        <img src="./img/Star 5.svg" alt="" class="star"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="card-detail">
                                <div class="pdf">
                                    <div>پی دی اف</div>
                                    <div>200.000 تومان</div>
                                </div>
                                <div class="print">
                                    <div>چاپی</div>
                                    <div>200.000 تومان</div>
                                </div>
                            </div>
                            <div class="buttons">
                                <button class="more-info">مشاهده اطلاعات بیشتر</button>
                                <button class="buy">
                                    <i class="bi bi-basket2" style="color: white"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sw-card-container">
                            <div class="pic">
                                <img class="background-card" src="./main-assets/img/book 1 (1).png" alt="">

                                <div class="heart">
                                    <button class="like">
                                        <img src="./main-assets/img/heart.svg" alt="" />
                                    </button>
                                </div>
                                <div class="pic-footer">
                                    <div class="power">راز قدرت</div>
                                    <div class="stars">
                                        <!-- <img src="./img/Star 5.svg" alt="" class="star">
                                        <img src="./img/Star 5.svg" alt="" class="star">
                                        <img src="./img/Star 5.svg" alt="" class="star"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="card-detail">
                                <div class="pdf">
                                    <div>پی دی اف</div>
                                    <div>200.000 تومان</div>
                                </div>
                                <div class="print">
                                    <div>چاپی</div>
                                    <div>200.000 تومان</div>
                                </div>
                            </div>
                            <div class="buttons">
                                <button class="more-info">مشاهده اطلاعات بیشتر</button>
                                <button class="buy">
                                    <i class="bi bi-basket2" style="color: white"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sw-card-container">
                            <div class="pic">
                                <img class="background-card" src="./main-assets/img/book 1 (1).png" alt="">

                                <div class="heart">
                                    <button class="like">
                                        <img src="./main-assets/img/heart.svg" alt="" />
                                    </button>
                                </div>
                                <div class="pic-footer">
                                    <div class="power">راز قدرت</div>
                                    <div class="stars">
                                        <!-- <img src="./img/Star 5.svg" alt="" class="star">
                                        <img src="./img/Star 5.svg" alt="" class="star">
                                        <img src="./img/Star 5.svg" alt="" class="star"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="card-detail">
                                <div class="pdf">
                                    <div>پی دی اف</div>
                                    <div>200.000 تومان</div>
                                </div>
                                <div class="print">
                                    <div>چاپی</div>
                                    <div>200.000 تومان</div>
                                </div>
                            </div>
                            <div class="buttons">
                                <button class="more-info">مشاهده اطلاعات بیشتر</button>
                                <button class="buy">
                                    <i class="bi bi-basket2" style="color: white"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination pagin"></div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- <div class="swiper-scrollbar"></div> -->
            </div>
        </div>
    </section>
    <section class="recent-blogs">
        <div class="blogs-header">
            <div class="bh-text">
                <h3>وبلاگ های اخیر</h3>
                <p>جایی برای به اشتراک گذاشتن دانش، تجربیات و ایده‌های جدید</p>
            </div>
        </div>
        <div class="swiper-blogs">
            <div class="swiper swiper4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card-container">
                            <div class="card-img">
                                <img src="./main-assets/img/article13.png" alt="" />
                            </div>
                            <div class="card-context">
                                <div class="h3">
                                    <h3>
                                        فضای مجازی، جاده‌ای بی‌انتها از ارتباطات و امکانات
                                    </h3>
                                </div>
                                <div class="paragraph">
                                    <p>
                                        فضای مجازی، جایی است که مرزهای جغرافیایی را از بین
                                        می‌برد و افراد را به هم متصل می‌کند. در این فضا،
                                        می‌توانیم با افرادی از سراسر جهان در ارتباط باشیم و
                                        ایده‌ها، دانش و تجربیاتمان را به اشتراک بگذاریم<div class="span"><a href="">ادامه مطلب</a></div>
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="details">
                                    <span class="update">آخرین بروزرسانی 2 روز پیش</span>
                                    <span class="sort">اخبار و مقاله</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-container">
                            <div class="card-img">
                                <img src="./main-assets/img/article13.png" alt="" />
                            </div>
                            <div class="card-context">
                                <div class="h3">
                                    <h3>
                                        فضای مجازی، جاده‌ای بی‌انتها از ارتباطات و امکانات
                                    </h3>
                                </div>
                                <div class="paragraph">
                                    <p>
                                        فضای مجازی، جایی است که مرزهای جغرافیایی را از بین
                                        می‌برد و افراد را به هم متصل می‌کند. در این فضا،
                                        می‌توانیم با افرادی از سراسر جهان در ارتباط باشیم و
                                        ایده‌ها، دانش و تجربیاتمان را به اشتراک بگذاریم<div class="span"><a href="">ادامه مطلب</a></div>
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="details">
                                    <span class="update">آخرین بروزرسانی 2 روز پیش</span>
                                    <span class="sort">اخبار و مقاله</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<div class="article-cards">
    <div class="article-text-container">
        <div class="context">
            <h3>فضای مجازی، جاده‌ای بی‌انتها از ارتباطات و امکانات</h3>
            <p>
                فضای مجازی، جایی است که مرزهای جغرافیایی را از بین می‌برد و
                افراد را به هم متصل می‌کند. در این فضا، می‌توانیم با افرادی از
                سراسر جهان در ارتباط باشیم و ایده‌ها، دانش و تجربیاتمان را به
                اشتراک بگذاریم. اما در کنار مزایایش، باید همواره به مسائل امنیتی
                و حفظ حریم خصوصی دقت کنیم. به همین دلیل، مهم است که در استفاده
                از فضای مجازی هوشمندانه عمل کنیم و از منابع معتبر استفاده کنیم.
                <span class="more"><a href="">ادامه مطلب</a></span>
            </p>
        </div>
        <div class="details">
            <span class="update">آخرین بروزرسانی 2 روز پیش</span>
            <span class="sort">اخبار و مقاله</span>
        </div>
    </div>
    <div class="article-img">
        <img src="./main-assets/img/article13.png" alt="" />
    </div>
</div>
<div class="article-cards">
    <div class="article-img">
        <img src="./main-assets/img/article-img2.png" alt="" />
    </div>
    <div class="article-text-container">
        <div class="context urban">
            <h3>تحولات شهری در عصر مدرن و تاثیر آن بر زندگی انسان ها</h3>
            <p>
                شهر، جایی است که تنوع فرهنگی، هیجان و زیبایی‌های خاص خود را در
                بر دارد. همیشه می‌توان در آن جا چیز جدیدی برای کشف کرد و
                تجربه‌های جذابی را پیدا کرد. شهر، محلی است که انسان‌ها با هم در
                آن زندگی می‌کنند و از تعاملات اجتماعی و فرصت‌های شغلی بهره‌مند
                می‌شوند. این مکان‌ها پر از انرژی و روحیه هستند و همیشه به ما
                یادآور می‌شوند که زندگی ما بی‌کران و پر از امکانات است.
                <span class="more"><a href="">ادامه مطلب</a></span>
            </p>
        </div>
        <div class="details">
            <span class="update">آخرین بروزرسانی 2 روز پیش</span>
            <span class="sort-technology">تکنولوژی</span>
        </div>
    </div>
</div>
</section>
<section class="footer">
    <img class="sehreqalam" src="./main-assets/img/shreqalam.png" alt="" />
    <div class="footer-columns">
        <div class="column-two">
            <div class="serivce">
                <ul>
                    <li><a href="" class="column-title">خدمات</a></li>
                    <li><a href="">صفحه آرایی</a></li>
                    <li><a href="">ویراستاری</a></li>
                    <li><a href="">طراحی جلد کتاب</a></li>
                    <li><a href="">کسب مجوز نشر</a></li>
                </ul>
            </div>
            <div class="category">
                <ul>
                    <li><a href="" class="column-title">دسته بندی</a></li>
                    <li><a href="">صفحه آرایی</a></li>
                    <li><a href="">ویراستاری</a></li>
                    <li><a href="">طراحی جلد کتاب</a></li>
                    <li><a href="">کسب مجوز نشر</a></li>
                </ul>
            </div>
        </div>
        <div class="about">
            <ul>
                <li><a href="" class="column-title">درباره ما</a></li>
                <li><a href="">مرکز رشد دانشگاه منتظری مشهد</a></li>
                <li><a href="">9152222222</a></li>
                <li><a href="">serqalam@gmail.com</a></li>
            </ul>
        </div>
    </div>
</section>
</div>

<script defer src="./main-assets/js/main.js"></script>
<script src="./main-assets/swiper/swiper.js"></script>
</body>
</html>
