<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/style.css"/>
</head>

<body>
<form class="container" enctype="multipart/form-data" method="post" action="{{route('submission.store')}}">
    @csrf
    <div class="logo">

        <img
            src="/assets/img/Screenshot 2023-04-22 013751_prev_ui 1.png"
            alt=""
        />
    </div>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

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
        <input type="checkbox" name="status" id="status" hidden>
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
            </div>
{{--don't change--}}
            <div class="tr-inps">

            </div>
{{--//////--}}
        </div>
        <div class="checkboxes">
            <div class="options">
                <div class="check">
                    <div class="box-item edit">
                        <input type="checkbox" id="edition" name="virastary"/>
                        <label for="edition">ویراستاری(10000ریال )</label>
                    </div>
                    <div class="box-item cover">
                        <input type="checkbox" id="cover-design" name="cover"/>
                        <p></p>
                        <label for="cover-design">طراحی جلد(10000ریال )</label>
                    </div>
                    <div class="box-item permit">
                        <input type="checkbox" id="permition" name="permission"/>
                        <label for="permition">کسب مجوز(10000ریال )</label>
                    </div>

                </div>
                <div class="txt2">
                    <p>یک نمونه از قالب های زیر را برای صفحه آرایی انتخاب کنید.</p>
                    <span class="question">?</span>
                </div>
                <div class="check1">
                    <div class="box-item">
                        <input type="radio" name="atlas"/>
                        <p>
                            <a href="">طرح اطلس</a> <span class="prc">(10000ریال )</span>
                        </p>
                    </div>
                    <div class="box-item">
                        <input type="radio" name="atlas"/>
                        <p>
                            <a href="">طرح اطلس</a> <span class="prc">(10000ریال )</span>
                        </p>
                    </div>
                    <div class="box-item atlas">
                        <input type="radio" name="atlas" />
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
                    <label for="">عنوان کتاب <span class="label-star">*</span></label>
                    <input type="text" name="bookTitle" required/>
                </div>
                <div class="fields-item">
                    <label for="">عنوان فرعی کتاب</label>

                    <input type="text" name="seconderyTitle"/>
                    <p class="small-txt">
                        عنوان فرعی کتاب، عنوانی است که به‌طور معمول زیر عنوان اصلی کتاب
                        قرار می‌گیرد و بیشتر جزئیات و موضوعات مربوط به کتاب را بیان
                        می‌کند. این عنوان می‌تواند خلاصه‌ای از محتوای کتاب یا تاکیدی بر
                        بخش خاصی از آن باشد.
                    </p>
                </div>
                <div class="fields-item">
                    <label for="">عنوان لاتین کتاب</label>
                    <input type="text" name="enTitle"/>
                </div>
            </div>

            <div class="book-input-container">
                <div class="book-type">
                    <label for="">نوع کتاب <span class="label-star">*</span></label>
                    <select name="type" class="type">
                        {{--get categories from databes--}}
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->label}}</option>
                        @endforeach
                    </select>
                    <label for="" class="age-label">رده سنی مخاطب <span class="label-star">*</span></label>
                    <select name="age" class="type age">
                        {{--get ageCategories from databes--}}
                        @foreach($ageCategories as $ageCategory)
                            <option value="{{$ageCategory->id}}">{{$ageCategory->label}}</option>
                        @endforeach
                    </select>
                    <div class="area">
                        <label for="">
                            لطفا چند ویژگی مورد نظر خود را برای طراحی جلد بنویسید. <span class="label-star">*</span>
                        </label>

                        <textarea name="coverDiscretion" id="" class="text-area"></textarea>
                    </div>
                </div>
                <div class="file-upload">
                    <label for="">بارگذاری فایل <span class="label-star">*</span></label>
                    <input type="file" class="file" name="file"/>
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
                    <label for="">نام و نام خانوادگی <span class="label-star">*</span></label>
                    <input type="text" name="fullName">
                </div>
                <div class="info-item meli-code">
                    <label for="">کد ملی <span class="label-star">*</span></label>
                    <input type="text" name="nationalCode">
                </div>
                <div class="info-item phone-number" name="phoneNumber">
                    <label for="">شماره همراه <span class="label-star">*</span></label>
                    <input type="text" name="phoneNumber">
                </div>
            </div>

            <div class="info-item living-info">
                <div class="province info-item">
                    <label for="">استان <span class="label-star">*</span></label>
                    <select name="ostan" id="ostan">
{{--getting ostan from database to send ajax--}}
                        @foreach($ostans as $ostan)
                            <option value="{{$ostan->id}}">{{$ostan->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="city info-item">
                    <label for="">شهر <span class="label-star">*</span></label>
                    <select name="shahr" id="shahr">
{{--if you are wondering why here is empty,it's becuse it works with ajax!--}}
                    </select>
                </div>
                <div class="postalcode info-item">
                    <label for="">کد پستی <span class="label-star">*</span></label>
                    <input type="text" name="zipCode">
                </div>
            </div>
            <div class="rules">
                <input type="checkbox" id="rule" name="rule" />
                <label for="rule"><span class="rule-link">قوانین و شرایط</span> را مطالعه کرده و می پذیرم.</label>
            </div>
        </div>
        <div class="steps-btns">
            <button type="button" class="exite">خروج</button>
            <button type="button" class="previous prev">مرحله قبلی</button>
            <button type="submit" class="agree">موافقم</button>
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
            writerName.setAttribute("type", "hidden");
            writerName.setAttribute("name", "writerName[]");
            writerName.setAttribute("value", name);
            // writerName.setAttribute("hidden", "");
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

            // if(nationalCodeVerify(national_code,"translator")){
            //     return window.alert(nationalCodeVerify(national_code,"translator"));
            // }

            if (name.trim() === "") {
                return window.alert("نام خالی است.");
            }

            let translatorName = document.createElement("input");
            translatorName.setAttribute("type", "hidden");
            translatorName.setAttribute("name", "translatorName[]");
            translatorName.setAttribute("value", name);
            let translatorId = document.createElement("input");
            translatorId.setAttribute("type", "hidden");
            translatorId.setAttribute("name", "translatorId[]");
            translatorId.setAttribute("value", national_code);
            translatorId.setAttribute("hidden", "");
            document.querySelector(".tr-inps").appendChild(translatorId);
            document.querySelector(".tr-inps").appendChild(translatorName);

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
