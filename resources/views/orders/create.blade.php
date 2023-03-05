@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">

            <div class="col-6">

                <div class="card mb-4">

                    <div class="card-body">

                        <div class="card-title p-4">
                            <h3 class="w-100 fw-bold text-end">انشاء طلب</h3>
                            <p>قم بمليء تفاصيل طلبك ليتمكن الاخرين من رؤيته</p>
                            <div class="w-50" id="progress-bar" style="height: 8px;background:#25178f"></div>
                        </div>

                        <form method="post" action="{{ route('register') }}" enctype="multipart/form-data" class="p-3">
                            @csrf

                            <div class="row" data-step>

                                <div class="img-dash mb-4">
                                    <input class="form-control " type="file" style="display:none" id="formFile">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-4 img-profile"
                                        style="width: 80px; height: 80px; object-fit:cover " alt="Avatar" />
                                    <span class="fw-bold me-5">اضافة صورة</span>

                                </div>


                                <div class="col-12 mb-3 ">
                                    <label class="mb-3 fw-bold">اسم الطلب</label>
                                    <input type="text" name="firstName"
                                        class="form-control @error('firstName') is-invalid @enderror" required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-12 col-lg-6 mb-3 ">
                                    <label class="mb-3 fw-bold"> القسم الرئيسي</label>
                                    <input type="text" name="lastName"
                                        class="form-control  @error('lastName') is-invalid @enderror" required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-12 col-lg-6 mb-3 ">
                                    <label class="mb-3 fw-bold"> القسم الفرعي</label>
                                    <input type="text" name="lastName"
                                        class="form-control  @error('lastName') is-invalid @enderror" required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="col-12 mb-3">
                                    <label class="fw-bold">خدمات اضافية</label>
                                    <select type="email" name="email"
                                        class="form-select @error('email') is-invalid @enderror">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="col-12 mb-3 input-box">
                                    <label class="mb-3 fw-bold">وصف الطلب</label>
                                    <textarea name="order" id="order" class="form-control" placeholder="description" rows="6">
                                </textarea>
                                </div>

                                <div class="col-12 col-lg-6 mb-3 ">
                                    <label class="mb-3 fw-bold">بداية السعر المتوقع</label>
                                    <input type="text" name="lastName"
                                        class="form-control  @error('lastName') is-invalid @enderror" required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-12 col-lg-6 mb-3 ">
                                    <label class="mb-3 fw-bold">نهاية السعر المتوقع</label>
                                    <input type="text" name="lastName"
                                        class="form-control  @error('lastName') is-invalid @enderror" required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-12 mx-lg-auto col-lg-6 text-center">
                                    <button type="button" class="btn btn-block btn-primary w-100" id="order-next-step">
                                        التالي
                                    </button>
                                </div>
                            </div>


                            <div class="row" data-step>
                                <div class="form-group  col-12 col-lg-6 mb-3">
                                    <label class="mb-3 fw-bold">الدولة</label>
                                    <select id="country-dd" class="form-control">
                                        <option value="" disabled selected>اختر الدولة</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">
                                                {{ $country->name }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group col-12 col-lg-6 mb-3">
                                    <label class="mb-3 fw-bold">المدينة</label>
                                    <select id="city-dd" class="form-control">
                                    </select>
                                </div>

                                <div class="col-12 col-lg-6 mb-3 ">
                                    <label class="mb-3 fw-bold">رقم الجوال</label>
                                    <input type="text" name="lastName"
                                        class="form-control  @error('lastName') is-invalid @enderror" required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="col-12 mb-3">
                                    <label class="fw-bold">طريقه التواصل</label>
                                    <br>
                                    <div role="group" aria-label="Basic checkbox toggle button group">
                                        <input type="radio" name="contact_method">
                                        <label>رقم الجوال</label>
                                        <br>
                                        <input type="radio" name="contact_method">
                                        <label>رسائل الموقع</label>
                                    </div>
                                </div>


                                <div class="col-12 mx-lg-auto col-lg-6 text-center">
                                    <button type="submit" class="btn btn-block btn-primary w-100">
                                        ارسال الطلب
                                    </button>
                                </div>

                            </div>


                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
@section('script')
    <script>
        let nextStepBtn = document.querySelector('#order-next-step');
        let allSteps = document.querySelectorAll('div[data-step]');
        allSteps[0].classList.add('active');

        let progressBar = document.querySelector('#progress-bar');
        nextStepBtn.onclick = function() {
            allSteps[0].classList.remove('active');
            allSteps[1].classList.add('active');
            progressBar.classList.remove('w-50')
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#country-dd').on('change', function() {
                var idCountry = this.value;
                $("#city-dd").html('');
                $.ajax({
                    url: "{{ url('api/fetch-cities') }}",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#city-dd').html('<option value="" disabled>اختر المدينة</option>');
                        $.each(result.cities, function(key, value) {
                            $("#city-dd").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });

        });
    </script>
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
