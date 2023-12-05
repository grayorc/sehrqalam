<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/style.css"/>
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
        <img src="/assets/img/Line 224.png" alt=""/>
        <div class="w-2 tab-page effect-details">مشخصات اثر</div>
        <!-- <img class="line-right" src="/assets/img/Line 27right.png" alt=""> -->
        <img src="/assets/img/Line 224.png" alt=""/>

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
                <input type="radio" class="radio-inp" id="book2" name="book1"/>
                <label for="book2"> کتاب ترجمه شده </label>
            </div>
        </div>

        <div class="fields">
            <div class="field1">
                <div class="name inps">
                    <label for="name1" class="n-2">نام و نام خانوادگی نویسنده</label>

                    <input type="text" id="writer-name" name="writer-name"/>
                </div>
                <div class="code inps">
                    <label for="name2" id="national_writer_label"> کد ملی</label>
                    <input
                        type="text"
                        id="national-code-writer"
                        name="national-code-writer"
                    />
                </div>
                <div class="add-btn">
                    <button type="button" onclick="add('writer')">
                        افزودن
                    </button>
                </div>
            </div>
            <div class="persons">
            </div>
            <div class="wr-inps">

            </div>
            <div class="field1" id="translate-fields">
                <div class="name inps">
                    <label for="name1" class="n-2">نام و نام خانوادگی مترجم</label>

                    <input type="text" id="translator-name" name="translator-name"/>
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
                    <button type="button" onclick="add('translator')">افزودن</button>
                </div>
            </div>
            <div class="persons persons_tr" id="translator">
                <div class="person">
                    <span class="per-name">علی رحیمی</span>
                    <span class="number">092585856</span>
                    <img src="/assets/img/x.png" alt=""/>
                </div>
            </div>

            <div class="tr-inps">

            </div>
        </div>
        <div class="checkboxes">
            <div class="options">
                <div class="check">
                    <div class="box-item edit">
                        <input type="checkbox"/>
                        <p>ویراستاری(10000ریال )</p>
                    </div>
                    <div class="box-item cover">
                        <input type="checkbox"/>
                        <p>طراحی جلد(10000ریال )</p>
                    </div>
                    <div class="box-item permit">
                        <input type="checkbox"/>
                        <p>کسب مجوز(10000ریال )</p>
                    </div>
                </div>
                <span class="txt2">
              یک نمونه از قالب های زیر را برای صفحه آرایی انتخاب کنید.
            </span>
                <div class="check1">
                    <div class="box-item">
                        <input type="checkbox"/>
                        <p>
                            <a href="">طرح اطلس</a> <span class="prc">(10000ریال )</span>
                        </p>
                    </div>
                    <div class="box-item">
                        <input type="checkbox"/>
                        <p>
                            <a href="">طرح اطلس</a> <span class="prc">(10000ریال )</span>
                        </p>
                    </div>
                    <div class="box-item atlas">
                        <input type="checkbox"/>
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
                    <input type="text"/>
                </div>
                <div class="fields-item">
                    <label for="">عنوان فرعی کتاب</label>

                    <input type="text"/>
                    <p class="small-txt">
                        عنوان فرعی کتاب، عنوانی است که به‌طور معمول زیر عنوان اصلی کتاب
                        قرار می‌گیرد و بیشتر جزئیات و موضوعات مربوط به کتاب را بیان
                        می‌کند. این عنوان می‌تواند خلاصه‌ای از محتوای کتاب یا تاکیدی بر
                        بخش خاصی از آن باشد.
                    </p>
                </div>
                <div class="fields-item">
                    <label for="">عنوان لاتین کتاب</label>
                    <input type="text"/>
                </div>
            </div>
            <div class="book-input-container">
                <div class="book-type">
                    <label for="">نوع کتاب *</label>
                    <select name="type" class="type">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->label}}</option>
                        @endforeach
                    </select>
                    <label for="" class="age-label">رده سنی مخاطب *</label>
                    <select name="type" class="type age">
                        @foreach($ageCategories as $ageCategory)
                            <option value="{{$ageCategory->id}}">{{$ageCategory->label}}</option>
                        @endforeach
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
                    <input type="file" class="file"/>
                    <img src="/assets/img/upload-igm.png" alt=""/>
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
                    <select name="ostan" id="ostan">
                        @foreach($ostans as $ostan)
                            <option value="{{$ostan->id}}">{{$ostan->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="city info-item">
                    <label for="">شهر *</label>
                    <select name="shahr" id="shahr">

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
            <button type="button" type="button" class="previous prev">مرحله قبلی</button>
            <button type="button" class="agree">موافقم</button>
        </div>
    </div>
</form>

<script src="/assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    let addedIds = [];
    let addedIds_tr = [];

    function add(role) {
        console.log(role);
        if(role === "writer") {
            let name = document.getElementById("writer-name").value;
            if(status === false) {
                let national_code = document.getElementById("national-code-writer").value;
                if(nationalCodeVerify(national_code, "writer")){
                    return window.alert(nationalCodeVerify(national_code, "writer"));
                }
                let writerId = document.createElement("input");
                writerId.setAttribute("type", "text");
                writerId.setAttribute("name", "writerId[]");
                writerId.setAttribute("value", national_code);
                writerId.setAttribute("hidden", "");
                document.querySelector(".wr-inps").appendChild(writerId);

                addedIds.push(national_code);
                console.log(addedIds);

            }
            if (name.trim() === "") {
                return window.alert("نام خالی است.");
            }
            let writerName = document.createElement("input");
            writerName.setAttribute("type", "text");
            writerName.setAttribute("name", "writerName[]");
            writerName.setAttribute("value", name);
            writerName.setAttribute("hidden", ""); // Hide the input element
            document.querySelector(".wr-inps").appendChild(writerName);
            let personContainer = document.createElement("div");
            personContainer.className = "person";

            let perNameSpan = document.createElement("span");
            perNameSpan.className = "per-name";
            perNameSpan.textContent = name;

            if(status === false){
                let numberSpan = document.createElement("span");
                numberSpan.className = "number";
                numberSpan.textContent = document.getElementById("national-code-writer").value;
                personContainer.appendChild(numberSpan);
            }
            let deleteIcon = document.createElement("img");
            deleteIcon.src = "/assets/img/x.png";
            deleteIcon.alt = "";
            deleteIcon.addEventListener("click", function () {
                personContainer.remove();
            });

            personContainer.appendChild(perNameSpan);
            personContainer.appendChild(deleteIcon);

            document.querySelector(".persons").appendChild(personContainer);
        }else if(status === true && role === "translator"){
            let name = document.getElementById("translator-name").value;
            let national_code = document.getElementById("national-code-translator").value;

            if(nationalCodeVerify(national_code,"translator")){
                return window.alert(nationalCodeVerify(national_code,"translator"));
            }

            if (name.trim() === "") {
                return window.alert("نام خالی است.");
            }

            let translatorName = document.createElement("input");
            translatorName.setAttribute("type", "text");
            translatorName.setAttribute("name", "translatorName[]");
            translatorName.setAttribute("value", name);
            translatorName.setAttribute("hidden", ""); // Hide the input element
            let translatorId = document.createElement("input");
            translatorId.setAttribute("type", "text");
            translatorId.setAttribute("name", "writerId[]");
            translatorId.setAttribute("value", national_code);
            translatorId.setAttribute("hidden", "");
            document.querySelector(".tr-inps").appendChild(translatorId);

            addedIds_tr.push(national_code);
            let personContainer = document.createElement("div");
            personContainer.className = "person";

            let perNameSpan = document.createElement("span");
            perNameSpan.className = "per-name";
            perNameSpan.textContent = name;

            let numberSpan = document.createElement("span");
            numberSpan.className = "number";
            numberSpan.textContent = document.getElementById("national-code-translator").value;
            personContainer.appendChild(numberSpan);

            let deleteIcon = document.createElement("img");
            deleteIcon.src = "/assets/img/x.png";
            deleteIcon.alt = "";
            deleteIcon.addEventListener("click", function () {
                personContainer.remove();
                remove("translator",name,national_code);
            });

            personContainer.appendChild(perNameSpan);
            personContainer.appendChild(deleteIcon);

            document.querySelector(".persons_tr").appendChild(personContainer);
        }
    }

    function remove(role, Name, id) {
        if (role === "writer") {
            let r_name = document.getElementById(Name);
            let r_national_code = document.getElementById(id);

            if (r_name) {
                r_name.remove();
                removeFromArray(addedIds, r_name.value);
                document.querySelector('input[name="writerName[]"][value="' + r_name.value + '"]').remove();
            }

            if (r_national_code) {
                r_national_code.remove();
                removeFromArray(addedIds, r_national_code.value);
                document.querySelector('input[name="writerId[]"][value="' + r_national_code.value + '"]').remove();
            }
            console.log(addedIds);

        } else if (role === "translator") {
            let t_name = document.getElementById(Name);
            let t_national_code = document.getElementById(id);

            if (t_name) {
                t_name.remove();
                removeFromArray(addedIds_tr, t_name.value);
                document.querySelector('input[name="translatorName[]"][value="' + t_name.value + '"]').remove();
            }

            if (t_national_code) {
                t_national_code.remove();
                removeFromArray(addedIds_tr, t_national_code.value);
                document.querySelector('input[name="translatorId[]"][value="' + t_national_code.value + '"]').remove();
            }
            console.log(addedIds);

        }
    }

    // Function to remove an item from an array
    function removeFromArray(arr, value) {
        const index = arr.indexOf(value);
        if (index !== -1) {
            arr.splice(index, 1);
        }
    }

    function isValidIranianNationalId(input) {
        var pattern = /^[0-9]{10}$/;

        if (!pattern.test(input)) {
            return false;
        }

        if (input[9] === '0') {
            return false;
        }

        var sum = 0;
        for (var i = 0; i < 9; i++) {
            sum += parseInt(input[i]) * (10 - i);
        }

        var remainder = sum % 11;

        if ((remainder < 2 && input[9] == remainder) || (remainder >= 2 && input[9] == 11 - remainder)) {
            return true;
        } else {
            return false;
        }

        let translator = document.getElementById("book2");
        translator.addEventListener("change", function () {
            document.getElementById("national-code-writer").hidden = !translator.checked;
        });
    }
    function nationalCodeVerify(ID,role) {
        console.log(role);
        if (ID.trim() === "") {
            return ("کد ملی خالی است.");
        }

        if (!isValidIranianNationalId(ID)) {
            return ("کد ملی اشتباه است.");
        }
        if (role === "translator") {
            if (addedIds_tr.includes(ID)) {
                return ("این کد ملی قبلا وارد شده است.");
            }
        }else if(role === "writer"){
            if (addedIds.includes(ID)) {
                return ("این کد ملی قبلا وارد شده است.");
            }
        }
        return false;
    }
</script>

<script>
    $(document).ready(function () {
        $('#ostan').on('change', function () {
            var ostanId = $(this).val();

            // Make an AJAX request
            $.ajax({
                type: 'GET',
                url: '/get-cities/' + ostanId,
                success: function (data) {
                    // Clear existing options
                    $('#shahr').empty();

                    // Populate the city dropdown
                    $.each(data, function (key, value) {
                        $('#shahr').append('<option value="' + value.id + '">' + value.name + '</option>');
                    });
                },
                error: function (error) {
                    console.log('Error:', error);
                }
            });
        });
    });
</script>
</body>
</html>
