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

                            <div class="col-12 d-flex mb-3 p-3" style="border: 2px dashed #c6c6c6">
                                <div class="cam d-flex align-items-center justify-content-center ">
                                    {{-- <label><i class="fa-solid fa-camera fa-xl" style="font-size:32px"></i></label> --}}
                                    <input type="file" class="me-2" name="photo" id="image">
                                </div>
                            </div>

                            <div class="col-12 mb-3 ">
                                <label class="mb-3 fw-bold">اسم الطلب</label>
                                <input type="text" name="firstName" class="form-control @error('firstName') is-invalid @enderror" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    
                            <div class="col-12 col-lg-6 mb-3 ">
                                <label class="mb-3 fw-bold"> القسم الرئيسي</label>
                                <input type="text" name="lastName" class="form-control  @error('lastName') is-invalid @enderror" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-12 col-lg-6 mb-3 ">
                                <label class="mb-3 fw-bold"> القسم الفرعي</label>
                                <input type="text" name="lastName" class="form-control  @error('lastName') is-invalid @enderror" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    
                    
                            <div class="col-12 mb-3">
                                <label class="fw-bold">خدمات اضافية</label>
                                <select type="email" name="email" class="form-select @error('email') is-invalid @enderror">
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
                                <input type="text" name="lastName" class="form-control  @error('lastName') is-invalid @enderror" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-12 col-lg-6 mb-3 ">
                                <label class="mb-3 fw-bold">نهاية السعر المتوقع</label>
                                <input type="text" name="lastName" class="form-control  @error('lastName') is-invalid @enderror" required>
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

                            <div class="col-12 col-lg-6 mb-3 ">
                                <label class="mb-3 fw-bold">المدينة</label>
                                <input type="text" name="lastName" class="form-control  @error('lastName') is-invalid @enderror" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-12 col-lg-6 mb-3 ">
                                <label class="mb-3 fw-bold">الدولة</label>
                                <input type="text" name="lastName" class="form-control  @error('lastName') is-invalid @enderror" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-12 col-lg-6 mb-3 ">
                                <label class="mb-3 fw-bold">رقم الجوال</label>
                                <input type="text" name="lastName" class="form-control  @error('lastName') is-invalid @enderror" required>
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
        nextStepBtn.onclick = function(){
            allSteps[0].classList.remove('active');
            allSteps[1].classList.add('active');
            progressBar.classList.remove('w-50')
        }
        
    </script>
@endsection
