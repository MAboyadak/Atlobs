@extends('auth.components.register_layout')

@section('content')
    @if ($errors->has())
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    @endif
    <div class="container d-none d-lg-block ">
        <img src="images/teamwork-bro.png" width="600px" height="600px" class="team-work">
    </div>
    <section class=" py-5 forms ">
        <div class="container">
            <h2 class="text-center mb-4 text-white fw-bold">مرحبـًا بك في أطلبس </h2>
            <div class="row ">
                <div class="col-lg-6 col-md-4 d-none d-md-block"></div>
                <div class="col-lg-6 col-md-8 card shadow">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data"
                        class="bg-white px-1 px-md-5 py-3 form-body ">
                        @csrf
                        <h5 class="text-center w-100 fw-bold mb-4">إنشاء حساب جديد</h5>
                        <div class="d-flex justify-content-start align-items-center  mb-2">
                            <div class="position-relative img-container">
                                <img id="avatar" src="images/user.png" class="avatar-circlye fill "
                                    style="width: 150px; hight:150px;" alt="Avatar" />
                                <div class="img-picker">
                                    <input class="form-control " type="file" style="display:none" id="formFile">
                                    <i class="fa-solid fa-camera"></i>
                                </div>
                            </div>
                            <div class="d-flex flex-column w-100 me-3">
                                <div class=" mb-3  ">
                                    <label class="mb-3 fw-bold"> الاسم الأول</label>
                                    <input type="text" name="firstName"
                                        class="form-control @error('firstName') is-invalid @enderror" required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class=" mb-3 ">
                                    <label class="mb-3 fw-bold"> الاسم الأخير</label>
                                    <input type="text" name="lastName"
                                        class="form-control  @error('lastName') is-invalid @enderror" required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label class="mb-3 fw-bold">البريد الالكتروني</label>
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                    required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="d-flex flex-column flex-md-column flex-lg-row ">
                                <div class="col-12 col-md-12 col-lg-7 mb-3 ms-1">
                                    <label class="mb-3 fw-bold"> رقم الجوال</label>
                                    <input type="number" name="phone" placeholder="يبدأ الرقم ب 05 وبتبعه 8 ارقام"
                                        class="form-control" required>
                                </div>
                                <div class="col-12 col-md-12 col-lg-5 mb-3">
                                    <label class="mb-3 fw-bold"> تاريخ الميلاد</label>
                                    <div class="input-group date" id="datepicker">
                                        <input type="date" class="form-control" name="date" id="date" required />
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column flex-md-column flex-lg-row ">
                                <div class="col-12 col-md-12 mb-3 col-lg-6 ms-1 input-box">
                                    <label class="mb-3 fw-bold">كلمة المرور </label>
                                    <input type="password" name="password" id="password"
                                        class="form-control password id_password @error('password') is-invalid @enderror"
                                        required autocomplete="new-password">
                                    <i class="eye-show fas fa-eye-slash togglePassword"></i>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-12 mb-3 col-lg-6 input-box">
                                    <label class="mb-3 fw-bold"> تأكيد كلمة المرور</label>
                                    <input type="password"id="password-confirm" class="form-control password id_password"
                                        name="password_confirmation" required autocomplete="new-password">
                                    <i class="eye-show fas fa-eye-slash togglePassword"></i>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3 input-box">
                                <label class="mb-3 fw-bold"> نبذة عن المستخدم </label>
                                <div class="form-floating">
                                    <textarea name="userDetails" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                </div>
                            </div>
                            <label class="mb-3 fw-bold"> نوع المستخدم</label>
                            <div class="d-flex">
                                <div class="col-md-6">
                                    <input type="radio" name="type" value="0" class="me-3  form-check-input"
                                        id="info_type0">
                                    <label for="info_type0">أفراد
                                    </label>
                                </div>
                                <div class="col-md-8 mb-3">
                                    <input type="radio" name="type" value="1" class="me-3  form-check-input"
                                        id="info_type1">
                                    <label for="info_type1">شركات ومؤسسات
                                    </label>
                                </div>
                            </div>
                            <label class="mb-3 fw-bold"> طريقة التواصل</label>
                            <div class="d-flex">
                                <div class="col-md-6">
                                    <input type="radio" name="communication" value="عن طريق الهاتف"
                                        class="me-3  form-check-input" id="info_contact0">
                                    <label for="info_contact0"> عن طريق الهاتف
                                    </label>
                                </div>
                                <div class="col-md-8">
                                    <input type="radio" name="communication" value="بواسطة الرسائل النصية"
                                        class="me-3  form-check-input" id="info_contact1">
                                    <label for="info_contact1">بواسطة الرسائل النصية
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn w-100 py-2 text-white text-center log  my-4"> إنشاء
                            حساب
                        </button>
                        <p class="text-center text-secondary"> هل لديك حساب؟
                            <a href="login" class="fw-bold"> تسجيل دخول</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('الاسم الأول') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
