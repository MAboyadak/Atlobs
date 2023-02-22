@extends('layouts.app')
@section('content')
    <div style="max-width: 800px" class="container card text-end p-4 mt-4" id="editProfile">
        <form action="" method="post">
            <p class="fs-3 fw-bold contact-txt-color-1">تعديل البيانات الشخصية</p>
            <p class="fw-bold">الصورة الشخصية</p>
            <div class="img-dash">
                <span class="fw-bold me-5">تغيير الصورة الشخصية</span>
                <input class="form-control " type="file" style="display:none" id="formFile">
                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-4 img-profile"
                    style="width: 80px; height: 80px; object-fit:cover " alt="Avatar" />
            </div>

            <div class="mt-4 row flex-row-reverse g-3">
                <div class="col-md-6">
                    <label for="fname" class="form-label">اسم المستخدم الأول</label>
                    <input type="text" class="form-control bg-white shadow-none" id="fname">
                </div>
                <div class="col-md-6">
                    <label for="lname" class="form-label">اسم المستخدم الثاني</label>
                    <input type="text" class="form-control bg-white shadow-none" id="lname">
                </div>
                <div class="col-12">
                    <label for="email" class="form-label">البريد الالكتروني</label>
                    <input type="email" class="form-control bg-white shadow-none" id="email">
                </div>
                <div class="col-12">
                    <label for="number" class="form-label">رقم الجوال</label>
                    <input type="number" class="form-control bg-white shadow-none" id="number">
                </div>
                <div class="col-12">
                    <label for="bio" class="form-label">نبذة عن المستخدم</label>
                    <textarea class="form-control bg-white shadow-none" id="bio" rows="3"></textarea>
                </div>
                <label class="form-label">طريقة التواصل</label>
                <div class="d-flex d-flex flex-row-reverse">
                    <div class="form-check form-check-reverse ms-5">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1">
                        <label class="form-check-label" for="inlineRadio1">رقم الجوال</label>
                    </div>
                    <div class="form-check form-check-reverse  me-5">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">رسائل الموقع الالكتروني</label>
                    </div>
                </div>
                <label for="password" class="form-label mb-0">كلمة المرور</label>
                <div class="d-flex align-items-center justify-content-end">
                    <div class="col-md-6">
                        <a href="{{ route('profile.change_password') }}">
                            <h6 class="me-3 contact-txt-color-1 fw-bold m-0">تغيير كلمة المرور</h6>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <input type="password" class="form-control bg-white shadow-none" id="password">
                    </div>
                </div>
                <div class="text-center mt-5">
                    <button class=" btn edit-profile-btn w-100 text-light " type="submit">
                        حفظ
                    </button>
                </div>
        </form>
    </div>
@endsection
@section('script')
    <script>
        addEventListener("load", function() {
            // start of profile page image picker
            let imgSelector = document.querySelector(".img-dash");
            let imgInputFile = document.querySelector("#formFile");
            let avatar = document.querySelector(".img-profile");
            imgSelector.addEventListener("click", function() {
                imgInputFile.click();
            });
            document
                .querySelector('input[type="file"]')
                .addEventListener("change", function() {
                    if (this.files && this.files[0]) {
                        avatar.src = URL.createObjectURL(this.files[0]); // set src to file url
                    }
                }); // end of profile page image picker
        }); //load
    </script>
@endsection
