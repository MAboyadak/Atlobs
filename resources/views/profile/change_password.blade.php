@extends('layouts.app')
@section('content')
    <div class="orderBg1 p-4">
        <div style="max-width:500px" class="container card text-end p-4 " id="editProfile">
            <form action="" method="post">
                <p class="fs-3 fw-bold contact-txt-color-1">تغيير كلمةالمرور</p>
                <div class=" row flex-row-reverse g-3">
                    <div class="col-10">
                        <label for="currentPassword" class="form-label">كلمة المرور الحالية</label>
                        <input type="password" class="form-control bg-white shadow-none" id="currentPassword">
                    </div>
                    <div class="col-10">
                        <label for="newPasswd" class="form-label">كلمة المرور الجديدة</label>
                        <input type="password" class="form-control bg-white shadow-none" id="newPasswd">
                    </div>
                    <div class="col-10">
                        <label for="confirmNewPasswd" class="form-label">تأكيد كلمة المرور الجديدة</label>
                        <input type="password" class="form-control bg-white shadow-none" id="confirmNewPasswd">
                    </div>
                    <div class="text-center my-5">
                        <button class=" btn edit-profile-btn w-75 text-light " type="submit">
                            تغيير
                        </button>
                    </div>
            </form>
        </div>
    </div>
@endsection
