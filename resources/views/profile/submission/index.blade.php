<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/style.css" />
</head>

<body>
<form class="container">
    @csrf
    <div class="logo">
        <img
            src="/assets/img/Screenshot 2023-04-22 013751_prev_ui 1.png"
            alt=""
        />
    </div>
    <div class="writer">
        <div class="w-2 tab-page writer-details">مشخصات نویسنده</div>
        <img src="/assets/img/Line 224.png" alt="" />
        <div class="w-2 tab-page effect-details">مشخصات اثر</div>
        <!-- <img class="line-right" src="/assets/img/Line 27right.png" alt=""> -->
        <img src="/assets/img/Line 224.png" alt="" />

        <div class="w-2 tab-page costumer-details">مشخصات سفارش دهنده</div>
    </div>

    <div id="writer-details" class="panel-page" style="display: none">
        <div class="radio">
            <div class="radio1">
                <input
                    type="radio"
                    class="radio-inp"
                    name="book1"
                    id="book1"
                    checked
                />
                <label for="book1">کتاب تالیفی</label>
            </div>
            <div class="radio2">
                <input type="radio" class="radio-inp" id="book2" name="book1" />
                <label for="book2"> کتاب ترجمه شده </label>
            </div>
        </div>

        <div class="fields">
            <div class="field1">
                <div class="name inps">
                    <label for="name1" class="n-2">نام و نام خانوادگی نویسنده</label>

                    <input type="text" id="writer-name" name="writer-name" />
                </div>
                <div class="code inps">
                    <label for="name2"> کد ملی</label>
                    <input
                        type="text"
                        id="national-code-writer"
                        name="national-code-writer"
                    />
                </div>
                <div class="add-btn">
                    <button type="button" onclick="add()">افزودن</button>
                </div>
            </div>
            <div class="persons">
            </div>
            <div class="wr-inps">

            </div>
            <div class="field1" id="translate-fields">
                <div class="name inps">
                    <label for="name1" class="n-2">نام و نام خانوادگی مترجم</label>

                    <input type="text" id="translator-name" name="translator-name" />
                </div>
                <div class="code inps">
                    <label for="name2"> کد ملی</label>
                    <input
                        type="text"
                        name="national-code-translator"
                        id="national-code-translator"
                    />
                </div>
                <div class="add-btn">
                    <button>افزودن</button>
                </div>
            </div>
            <div class="persons" id="translator">
                <div class="person">
                    <span class="per-name">علی رحیمی</span>
                    <span class="number">092585856</span>
                    <img src="/assets/img/x.png" alt="" />
                </div>
            </div>
        </div>
        <div class="checkboxes">
            <div class="options">
                <div class="check">
                    <div class="box-item edit">
                        <input type="checkbox" />
                        <p>ویراستاری(10000ریال )</p>
                    </div>
                    <div class="box-item cover">
                        <input type="checkbox" />
                        <p>طراحی جلد(10000ریال )</p>
                    </div>
                    <div class="box-item permit">
                        <input type="checkbox" />
                        <p>کسب مجوز(10000ریال )</p>
                    </div>
                </div>
                <span class="txt2">
              یک نمونه از قالب های زیر را برای صفحه آرایی انتخاب کنید.
            </span>
                <div class="check1">
                    <div class="box-item">
                        <input type="checkbox" />
                        <p>
                            <a href="">طرح اطلس</a> <span class="prc">(10000ریال )</span>
                        </p>
                    </div>
                    <div class="box-item">
                        <input type="checkbox" />
                        <p>
                            <a href="">طرح اطلس</a> <span class="prc">(10000ریال )</span>
                        </p>
                    </div>
                    <div class="box-item atlas">
                        <input type="checkbox" />
                        <p>
                            <a href="">طرح اطلس</a> <span class="prc">(10000ریال )</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="btns">
            <button type="button" class="exite">خروج</button>
            <button type="button" class="next">مرحله بعدی</button>
        </div>
    </div>

    <div id="effect-details" class="panel-page" style="display: none">
        <div class="fields">
            <div class="title">
                <div class="fields-item">
                    <label for="">عنوان کتاب *</label>
                    <input type="text" />
                </div>
                <div class="fields-item">
                    <label for="">عنوان فرعی کتاب</label>

                    <input type="text" />
                    <p class="small-txt">
                        عنوان فرعی کتاب، عنوانی است که به‌طور معمول زیر عنوان اصلی کتاب
                        قرار می‌گیرد و بیشتر جزئیات و موضوعات مربوط به کتاب را بیان
                        می‌کند. این عنوان می‌تواند خلاصه‌ای از محتوای کتاب یا تاکیدی بر
                        بخش خاصی از آن باشد.
                    </p>
                </div>
                <div class="fields-item">
                    <label for="">عنوان لاتین کتاب</label>
                    <input type="text" />
                </div>
            </div>
            <div class="book-input-container">
                <div class="book-type">
                    <label for="">نوع کتاب *</label>
                    <select name="type" class="type">
                        <option value="سیاسی">سیاسی</option>
                        <option value="روان شناسی">روان شناسی</option>
                        <option value="تاریخی">تاریخی</option>
                        <option value="فلسفه">فلسفه</option>
                        <option value="علمی">علمی</option>
                    </select>
                    <label for="" class="age-label">رده سنی مخاطب *</label>
                    <select name="type" class="type age">
                        <option value="توجوان">نوجوان</option>
                        <option value="کودک">کودک</option>
                    </select>
                    <div class="area">
                        <label for="">
                            لطفا چند ویژگی مورد نظر خود را برای طراحی جلد بنویسید. *
                        </label>

                        <textarea name="" id="" class="text-area"></textarea>
                    </div>
                </div>
                <div class="file-upload">
                    <label for="">بارگذاری فایل *</label>
                    <input type="file" class="file" />
                    <img src="/assets/img/upload-igm.png" alt="" />
                </div>
            </div>
        </div>
        <div class="btns we-btns">
            <button type="button" class="exite">خروج</button>
            <button type="button" class="previus prev">مرحله قبلی</button>
            <button type="button" class="next">مرحله بعدی</button>
        </div>
    </div>

    <div id="costumer-details" class="panel-page" style="display: none">
        <div class="info-fields">
            <div class="identify-info">
                <div class="info-item fullname">
                    <label for="">نام و نام خانوادگی *</label>
                    <input type="text">
                </div>
                <div class="info-item meli-code">
                    <label for="">کد ملی *</label>
                    <input type="text">
                </div>
                <div class="info-item phone-number">
                    <label for="">شماره همراه *</label>
                    <input type="text">
                </div>
            </div>
            <div class="info-item living-info">
                <div class="province info-item">
                    <label for="">استان *</label>
                    <select name="" id="">
                        <option value="تهران">تهران</option>
                        <option value="خراسان زضوی">خراسان زضوی</option>
                        <option value="شیراز">شیراز</option>

                    </select>
                </div>
                <div class="city info-item">
                    <label for="">شهر *</label>
                    <select name="" id="">
                        <option value="مشهد">مشهد</option>
                        <option value="تهران">تهران</option>

                    </select>
                </div>
                <div class="postalcode info-item">
                    <label for="">کد پستی *</label>
                    <input type="text">
                </div>
            </div>
            <div class="rules">
                <input type="checkbox" id="rule"/>
                <label for="rule">قوانین و شرایط را مطالعه کرده و می پذیرم.</label>
            </div>
        </div>
        <div class="steps-btns">
            <button type="button" class="exite">خروج</button>
            <button type="button" type="button"class="previous prev">مرحله قبلی</button>
            <button type="button" class="agree">موافقم</button>
        </div>
    </div>
</form>

<script src="/assets/js/main.js"></script>
<script>
    let addedIds = [];
    function add() {
        let name = document.getElementById("writer-name").value;
        let national_code = document.getElementById("national-code-writer").value;

        if (name.trim() === "" || national_code.trim() === "") {
            return window.alert("نام یا کد ملی خالی است.");
        }

        if(!isValidIranianNationalId(national_code)){
            return window.alert("کد ملی اشتباه است.")
        }

        // Check if the ID is already added
        if (addedIds.includes(national_code)) {
            alert("این کد ملی قبلا وارد شده است.");
            return;
        }

        // Create input elements
        let writerName = document.createElement("input");
        writerName.setAttribute("type", "text");
        writerName.setAttribute("name", "writerName[]");
        writerName.setAttribute("value", name);
        writerName.setAttribute("hidden", ""); // Hide the input element

        let writerId = document.createElement("input");
        writerId.setAttribute("type", "text");
        writerId.setAttribute("name", "writerId[]");
        writerId.setAttribute("value", national_code);
        writerId.setAttribute("hidden", "");
        document.querySelector(".wr-inps").appendChild(writerName);
        document.querySelector(".wr-inps").appendChild(writerId);

        addedIds.push(national_code);

        let personContainer = document.createElement("div");
        personContainer.className = "person";

        let perNameSpan = document.createElement("span");
        perNameSpan.className = "per-name";
        perNameSpan.textContent = name;

        let numberSpan = document.createElement("span");
        numberSpan.className = "number";
        numberSpan.textContent = national_code;

        let deleteIcon = document.createElement("img");
        deleteIcon.src = "/assets/img/x.png";
        deleteIcon.alt = "";
        deleteIcon.addEventListener("click", function () {
            personContainer.remove();
        });

        personContainer.appendChild(perNameSpan);
        personContainer.appendChild(numberSpan);
        personContainer.appendChild(deleteIcon);

        document.querySelector(".persons").appendChild(personContainer);
    }

    function remove(writerName, writerId) {
        let r_name = document.getElementById(writerName);
        let r_national_code = document.getElementById(writerId);

        if (r_name) {
            r_name.remove();
            document.querySelector('input[name="writerName[]"][value="' + r_name.value + '"]').remove();
        }

        if (r_national_code) {
            r_national_code.remove();
            document.querySelector('input[name="writerId[]"][value="' + r_national_code.value + '"]').remove();
        }
    }

    function isValidIranianNationalId(input) {
        const pattern = /^[0-9]{10}$/;

        if (!pattern.test(input)) {
            return false;
        }

        if (input[9] === '0') {
            return false;
        }

        let sum = 0;
        for (let i = 0; i < 9; i++) {
            sum += parseInt(input[i]) * (10 - i);
        }

        const remainder = sum % 11;

        return (remainder < 2 && input[9] == remainder) || (remainder >= 2 && input[9] == 11 - remainder);
    }
</script>
</body>
</html>
