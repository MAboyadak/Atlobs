<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="{{asset('css/registrationStyle.css')}}">
    <title>Atlob</title>
</head>
<body>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    @endif
    
    <section class="register py-5 forms">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 col-md-4 empty"></div>
                <div class="col-lg-6 col-md-8 card shadow">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="bg-white p-5 register-form form-body mb-5">
                        @csrf
                        
                        <h3 class="modal-title w-100 fw-bold mb-4"> إنشاء حساب جديد</h3>


                        <div class="d-flex justify-content-center align-items-center con-image mb-2">
                            <div class=" add-image d-flex justify-content-center align-items-center">
                                <img id="preview-image-before-upload" style="max-height: 120px; border-radius: 50%">
                                <i class="fa-solid fa-user text-white" style="font-size: 55px;"></i>
                                <div class="cam d-flex align-items-center justify-content-center ">
                                    <label for="upload-photo"><i class="fa-solid fa-camera fa-xl"></i></label>
                                    <input type="file" name="photo" id="image">
                                </div>
                            </div>
                        </div>

                        
                        <div class="row">
                            <div class="col-lg-6 mb-3 ">
                                <label class="mb-3 fw-bold"> الاسم الأول</label>
                                <input type="text" name="firstName" class="form-control @error('firstName') is-invalid @enderror" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-lg-6 mb-3 ">
                                <label class="mb-3 fw-bold"> الاسم الأخير</label>
                                <input type="text" name="lastName" class="form-control  @error('lastName') is-invalid @enderror" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-md-12 mb-3">
                                <label class="mb-3 fw-bold">البريد الالكتروني</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            
                            
                            <div class="col-md-12 mb-3 input-box">
                                <label class="mb-3 fw-bold">كلمة المرور </label>
                                <input type="password" name="password" id="password" class="form-control password id_password @error('password') is-invalid @enderror" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>


                            <div class="col-md-12 mb-3 input-box">
                                <label class="mb-3 fw-bold">تأكيد كلمة المرور </label>
                                <input type="password" id="password-confirm" class="form-control password id_password" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            
                            <label class="mb-3 fw-bold"> نوع المستخدم</label>
                            <div class="col-md-6 mb-3">
                                <input type="radio" name="type" value="0" class="me-3 form-check-input">
                                <label>مزود خدمه
                                </label>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="radio" name="type" value="1" class="me-3 form-check-input">
                                <label>طالب خدمه
                                </label>
                            </div>
                        </div>


                        <div class="text-center log m-auto mb-3 mt-4">
                            <button type="submit" class="btn py-2 text-light"> إنشاء حساب </button>
                        </div>
                        <p class="text-center"> هل لديك حساب؟
                            <a href="login" class="fw-bold"> تسجيل دخول</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <img src="{{asset ('images/teamwork-bro.png')}}" width="600px" height="600px" class="team-work">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function(e) {
            $('#image').change(function() {

                let reader = new FileReader();
                reader.onload = (e) => {

                    $('#preview-image-before-upload').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);

            });

        });
    </script>
</body>

</html>
